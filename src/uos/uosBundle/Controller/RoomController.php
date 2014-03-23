<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Room;
use uos\uosBundle\Form\RoomType;

/**
 * Room controller.
 *
 */
class RoomController extends Controller {

    /**
     * Lists all Room entities.
     *
     */
    public function indexAction() {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Room')->findAll();

        return $this->render('uosuosBundle:Room:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Room entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Room();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em1 = $this->getDoctrine()->getEntityManager();

            $repository = $em1->getRepository('uosuosBundle:Room');

            $room = $repository->findOneBy(array('hall' => $entity->getHall(), 'roomno' => $entity->getRoomno()));

            if ($room) {
                return $this->render('uosuosBundle:Room:new.html.twig', array('entity' => $entity,
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'),
                            'form' => $form->createView(), 'error' => 'Room already exist.'));
            } else {
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('room_show', array('id' => $entity->getId(),
                                    'name' => $session->get('name'),
                                    'u_id' => $session->get('id'),
                                    'role' => $session->get('role'),
                                    'stud_emp_id' => $session->get('stud_emp_id'),)));
            }
        }

        return $this->render('uosuosBundle:Room:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a form to create a Room entity.
     *
     * @param Room $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Room $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new RoomType(), $entity, array(
            'action' => $this->generateUrl('room_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Room entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Room();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Room:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Room entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Room')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Room entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Room:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Room entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Room')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Room entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Room:edit.html.twig', array(
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
     * Creates a form to edit a Room entity.
     *
     * @param Room $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Room $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new RoomType(), $entity, array(
            'action' => $this->generateUrl('room_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Room entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Room')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Room entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('room_edit', array('id' => $id,
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Room:edit.html.twig', array(
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
     * Deletes a Room entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $session = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Room')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Room entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('room', array(
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'))));
    }

    /**
     * Creates a form to delete a Room entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $session = $this->get("session");
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('room_delete', array('id' => $id, )))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
