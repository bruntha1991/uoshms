<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Employee;
use uos\uosBundle\Form\EmployeeType;
use uos\uosBundle\Entity\Users;

/**
 * Employee controller.
 *
 */
class EmployeeController extends Controller {

    /**
     * Lists all Employee entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get("session");
        $entities = $em->getRepository('uosuosBundle:Employee')->findAll();

        return $this->render('uosuosBundle:Employee:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Employee entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Employee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $user = new Users();
        $user->setUser($entity->getEmployeeid());
        $user->setRole('Employee');
        $user->setPassword('uoshms');
        $user->setFirstName($entity->getName());
        $user->setEmployee($entity);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('employee_show', array('id' => $entity->getId(),
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Employee:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a form to create a Employee entity.
     *
     * @param Employee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Employee $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new EmployeeType(), $entity, array(
            'action' => $this->generateUrl('employee_create'),
            'method' => 'POST',
            
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Employee entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Employee();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Employee:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Employee entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Employee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Employee:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Employee entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Employee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Employee:edit.html.twig', array(
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
     * Creates a form to edit a Employee entity.
     *
     * @param Employee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Employee $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new EmployeeType(), $entity, array(
            'action' => $this->generateUrl('employee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Employee entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Employee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('employee_edit', array('id' => $id,
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Employee:edit.html.twig', array(
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
     * Deletes a Employee entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $session = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Employee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Employee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('employee', array(
                            'name' => $session->get('name'),
                            'u_id' => $session->get('id'),
                            'role' => $session->get('role'),
                            'stud_emp_id' => $session->get('stud_emp_id'))
        ));
    }

    /**
     * Creates a form to delete a Employee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $session = $this->get("session");
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('employee_delete', array('id' => $id,
                                    )))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
