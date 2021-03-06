<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Occupy;
use uos\uosBundle\Form\OccupyType;
use Doctrine\ORM\Query\ResultSetMapping;
use uos\uosBundle\Entity\Finance;

/**
 * Occupy controller.
 *
 */
class OccupyController extends Controller {

    /**
     * Lists all Occupy entities.
     *
     */
    public function indexAction() {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Occupy')->findAll();

        return $this->render('uosuosBundle:Occupy:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Occupy entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Occupy();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $isStudentOccupied = $em->getRepository('uosuosBundle:Occupy')->findOneBy(array('student' => $entity->getStudent()));

            if ($isStudentOccupied) {
                
                return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
                    'error'=>'Already Occupied',
        ));
                
            } else {
                $hall = $em->getRepository('uosuosBundle:Hall')->find($entity->getHall());
                $hallname = $hall->getHallname();
                if (($form->get('type')->getData()) == 'Single') {
                    $typeN = '1';
                } else {
                    $typeN = '2';
                }
                $stmt = $em->getConnection()->prepare('select id,roomNo,type,monthlyCost,hallname,hall_id,room_id
            from hall inner join((select roomNo,type,monthlyCost,room.hall_id,room.id as room_id
            from room inner join ( (
            select hall_id,room_id, count(student_id) as count
            from occupy 
            group by hall_id,room_id) as J) on (room.hall_id,room.id)=(J.hall_id,J.room_id)
            where J.count <type) as F) on hall.id=F.hall_id where (type= :type and hallname= :hall)
            union 
            select id,roomNo,type,monthlyCost,hallname,hall_id,room_id
            from hall inner join(select roomNo,type,monthlyCost,A.hall_id,A.id as room_id
            from room as A
            WHERE (NOT EXISTS
            (select hall_id,room_id
            from occupy
            where (A.hall_id,A.id)=(hall_id,room_id)))) as F on F.hall_id = hall.id where (type= :type and hallname= :hall) ');
                $stmt->bindValue(':type', $typeN);
                $stmt->bindValue(':hall', $hallname);
                //         $stmt->bindValue(':hallname',$hallname);
                $stmt->execute();
                $users = $stmt->fetchAll();
                //           $users = $userss->findBy(array('hall' => $entity->getHall(), 'type' => $form->get('type')->getData()));

                $student = $em->getRepository('uosuosBundle:Student')->find($entity->getStudent());


                return $this->render('uosuosBundle:Occupy:roomsearch.html.twig', array(
                            'entities' => $users, 'student' => $student->getId(),
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'),
                ));
            }
        }
        return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    private function createCreateForm(Occupy $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new OccupyType(), $entity, array(
            'action' => $this->generateUrl('occupy_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Search'));

        return $form;
    }

    public function saveOccupyAction(Request $entity) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
        //$hall = new Hall();
        $hall = $em->getRepository('uosuosBundle:Hall')->find($entity->get('hall_id'));
        //$room = new Room();
        $room = $em->getRepository('uosuosBundle:Room')->find($entity->get('room_id'));
        //$student = new Student();
        $student = $em->getRepository('uosuosBundle:Student')->find($entity->get('student'));
        ;
//            $hall=$entity->getHall();
//            $room=$entity->getRoom();
//            $student=$entity->getStudent();

        $occupy = new Occupy();
        $occupy->setHall($hall);
        $occupy->setRoom($room);
        $occupy->setStudent($student);

        $occupychk = $em->getRepository('uosuosBundle:Occupy')->findOneBy(array('hall' => $hall, 'roomn' => $room, 'student' => $student));

        if ($occupychk) {
            return $this->render('uosuosBundle:Occupy:new.html.twig', array('entity' => $entity,
                        'name' => $session->get('name'),
                        'u_id' => $session->get('id'),
                        'role' => $session->get('role'),
                        'stud_emp_id' => $session->get('stud_emp_id'),
                        'form' => $form->createView(), 'error' => 'Already checked in'));
        } else {
            $em->persist($occupy);


            $bal = $room->getMonthlycost() * 12;
            $finance = new Finance();
            $finance->setStudent($student);
            $finance->setBalance($bal);
            $finance->setTransferred('0');
            $em->persist($finance);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('occupy'));
    }

    /**
     * Displays a form to create a new Occupy entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Occupy();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Occupy entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Occupy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupy entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Occupy:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Occupy entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Occupy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupy entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Occupy:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a form to edit a Occupy entity.
     *
     * @param Occupy $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Occupy $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new OccupyType(), $entity, array(
            'action' => $this->generateUrl('occupy_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Occupy entity.
     *
     */
    public function updateAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Occupy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupy entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('occupy_edit', array('id' => $id,
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Occupy:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Deletes a Occupy entity.
     *
     */
    public function deleteAction($id) {
        $session = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Occupy')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Occupy entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('occupy', array(
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'))));
    }

    public function checkOutAction(Request $request) {
        $session = $this->get("session");
        if ($request->getMethod() == 'POST') {
//            $form = $this->createDeleteForm($id);
//            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
            //$studentid = $request->get('studentid');

            $student = $em->getRepository('uosuosBundle:Student')->findOneBy(array('studentid' => $request->get('studentid')));
            if (!$student) {
                throw $this->createNotFoundException('Unable to find STube entity.');
            }
            $id = $student->getId();
            $entity = $em->getRepository('uosuosBundle:Occupy')->findOneBy(array('student' => $id));
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Occupy entity.');
            }

            $em->remove($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('occupy', array(
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'))));
        }
        return $this->render('uosuosBundle:Occupy:checkOutStudent.html.twig', array(
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id')));
    }

    /**
     * Creates a form to delete a Occupy entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $session = $this->get("session");
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('occupy_delete', array('id' => $id,
                        )))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public
            function saveEntry() {
        
    }

}
