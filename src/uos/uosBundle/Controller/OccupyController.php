<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Occupy;
use uos\uosBundle\Form\OccupyType;
use Doctrine\ORM\Query\ResultSetMapping;

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
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Occupy')->findAll();

        return $this->render('uosuosBundle:Occupy:index.html.twig', array(
                    'entities' => $entities,
                ));
    }

    /**
     * Creates a new Occupy entity.
     *
     */
   public function createAction(Request $request) {
        $entity = new Occupy();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();          
           
            $hall = $em->getRepository('uosuosBundle:Hall')->find($entity->getHall());
            $genderH =$hall->getGender();
            $hname = $entity->getHall();
            $student = $em->getRepository('uosuosBundle:Student')->find($entity->getStudent());
            $genderS =$student->getGender();
            
            if($genderH == $genderS)
            {
 
             if(($form->get('type')->getData())=='Single'){
                 $typeN='1';
             }
             else
             {
                 $typeN='2';
             }
             
 //           $isEmpty = $em->getRepository('uosuosBundle:Occupy')->findOneBy(array('hall' => $username, 'room' => $password));
            $rsm = new ResultSetMapping;
            $rsm->addEntityResult('uos\uosBundle\Entity\Room', 'r');
            $rsm->addFieldResult('r', 'id', 'id');
            $rsm->addFieldResult('r', 'roomNo', 'roomno');
            $rsm->addFieldResult('r', 'type', 'type');
            $rsm->addFieldResult('r', 'monthlyCost', 'monthlycost');
  //          $rsm->addFieldResult('r', 'hall', 'hallname');
            
            $query = $em->createNativeQuery('select id,roomNo,type,monthlyCost,hallname
                from hall inner join((select roomNo,type,monthlyCost,room.hall_id
                from room inner join ( (
                select hall_id,room_id, count(student_id) as count
                from occupy 
                group by hall_id,room_id) as J) on (room.hall_id,room.id)=(J.hall_id,J.room_id)
                where J.count <type) as F) on hall.id=F.hall_id
                union 
                select id,roomNo,type,monthlyCost,hallname
                from hall inner join(select roomNo,type,monthlyCost,A.hall_id
                from room as A
                WHERE (NOT EXISTS
                (select hall_id,room_id
                from occupy
                where (A.hall_id,A.id)=(hall_id,room_id)))) as F on F.hall_id = hall.id WHERE type = ? and hallname = ?', $rsm);
            $query->setParameter(1,$typeN );
            $query->setParameter(2,$hname );
            $users = $query->getResult();
            
 //           $users = $em->getRepository('uosuosBundle:Room')->findBy(array('hall' => $entity->getHall(), 'type' => $form->get('type')->getData()));
            return $this->render('uosuosBundle:Occupy:roomsearch.html.twig', array(
                        'entities' => $users
            ));
            
        }
        return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
        }
    }

    /**
     * Creates a form to create a Occupy entity.
     *
     * @param Occupy $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Occupy $entity) {
        $form = $this->createForm(new OccupyType(), $entity, array(
            'action' => $this->generateUrl('occupy_create'),
            'method' => 'POST',
                ));

        $form->add('submit', 'submit', array('label' => 'Search'));

        return $form;
    }

    /**
     * Displays a form to create a new Occupy entity.
     *
     */
    public function newAction() {
        $entity = new Occupy();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Finds and displays a Occupy entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Occupy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupy entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Occupy:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Occupy entity.
     *
     */
    public function editAction($id) {
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

            return $this->redirect($this->generateUrl('occupy_edit', array('id' => $id)));
        }

        return $this->render('uosuosBundle:Occupy:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Occupy entity.
     *
     */
    public function deleteAction($id) {
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

        return $this->redirect($this->generateUrl('occupy'));
    }

    /**
     * Creates a form to delete a Occupy entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('occupy_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public

    function saveEntry() {
        
    }

}
