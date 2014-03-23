<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Work;
use uos\uosBundle\Form\WorkType;

/**
 * Work controller.
 *
 */
class WorkController extends Controller {

    /**
     * Lists all Work entities.
     *
     */
    public function indexAction() {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Work')->findAll();

        return $this->render('uosuosBundle:Work:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Work entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Work();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em1 = $this->getDoctrine()->getEntityManager();

            $repository = $em1->getRepository('uosuosBundle:Work');

            $work = $repository->findOneBy(array('employee' => $entity->getEmployee(), 'date' => $entity->getDate()));

            if ($work) {
                return $this->render('uosuosBundle:Work:new.html.twig', array('entity' => $entity,
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'),
                            'form' => $form->createView(), 'error' => 'Employee already has been selected.'));
            } else {
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('work_show', array('id' => $entity->getId(),
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
     * Creates a form to create a Work entity.
     *
     * @param Work $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Work $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new WorkType(), $entity, array(
            'action' => $this->generateUrl('work_create'),
            'method' => 'POST',
            'name' => $session->get('name'),
            'u_id' => $session->get('id'),
            'role' => $session->get('role'),
            'stud_emp_id' => $session->get('stud_emp_id'),
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Work entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Work();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Work:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Work entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Work')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Work entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Work:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Work entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Work')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Work entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Work:edit.html.twig', array(
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
     * Creates a form to edit a Work entity.
     *
     * @param Work $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Work $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new WorkType(), $entity, array(
            'action' => $this->generateUrl('work_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            'name' => $session->get('name'),
            'u_id' => $session->get('id'),
            'role' => $session->get('role'),
            'stud_emp_id' => $session->get('stud_emp_id'),
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Work entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Work')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Work entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('work_edit', array('id' => $id,
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Work:edit.html.twig', array(
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
     * Deletes a Work entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $session = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Work')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Work entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('work', array(
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'))));
    }

    /**
     * Creates a form to delete a Work entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $session = $this->get("session");
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('work_delete', array('id' => $id,
                                    'name' => $session->get('name'),
                                    'u_id' => $session->get('id'),
                                    'role' => $session->get('role'),
                                    'stud_emp_id' => $session->get('stud_emp_id'),)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
