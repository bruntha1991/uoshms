<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Student;
use uos\uosBundle\Entity\Users;
use uos\uosBundle\Form\StudentType;

/**
 * Student controller.
 *
 */
class StudentController extends Controller {

    /**
     * Lists all Student entities.
     *
     */
    public function indexAction() {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Student')->findAll();

        return $this->render('uosuosBundle:Student:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Student entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Student();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $user = new Users();
        $user->setUser($entity->getStudentid());
        $user->setRole('Student');
        $user->setPassword('uoshms');
        $user->setFirstName($entity->getFirstname());
        $user->setStudent($entity);



        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            $em->persist($user);
            $em->flush();


            return $this->redirect($this->generateUrl('student_show', array('id' => $entity->getId(),
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Student:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a form to create a Student entity.
     *
     * @param Student $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Student $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new StudentType(), $entity, array(
            'action' => $this->generateUrl('student_create'),
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
     * Displays a form to create a new Student entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Student();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Student:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Student entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Student')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Student entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Student:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Student entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Student')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Student entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Student:edit.html.twig', array(
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
     * Creates a form to edit a Student entity.
     *
     * @param Student $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Student $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new StudentType(), $entity, array(
            'action' => $this->generateUrl('student_update', array('id' => $entity->getId())),
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
     * Edits an existing Student entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Student')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Student entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('student_edit', array('id' => $id,
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Student:edit.html.twig', array(
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
     * Deletes a Student entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $session = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Student')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Student entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('student', array(
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'))));
    }

    /**
     * Creates a form to delete a Student entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $session = $this->get("session");
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('student_delete', array('id' => $id,
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
