<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Finance;
use uos\uosBundle\Form\FinanceType;

/**
 * Finance controller.
 *
 */
class FinanceController extends Controller {

    /**
     * Lists all Finance entities.
     *
     */
    public function indexAction() {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Finance')->findAll();

        return $this->render('uosuosBundle:Finance:index.html.twig', array(
                    'entities' => $entities,
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Creates a new Finance entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->get("session");
        $entity = new Finance();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $finance = $em->getRepository('uosuosBundle:Finance')->findOneBy(array('student' => $entity->getStudent()));
            if (!$finance) {
                throw $this->createNotFoundException('Empty finance entity');
            }

            return $this->render('uosuosBundle:Finance:makePay.html.twig', array('finance' => $finance,
                        'name' => $session->get('name'),
                        'u_id' => $session->get('id'),
                        'role' => $session->get('role'),
                        'stud_emp_id' => $session->get('stud_emp_id'),));
            return $this->redirect($this->generateUrl('finance_show', array('id' => $entity->getId(),
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Finance:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    public function makePayAction(Request $entity) {
        $session = $this->get("session");
        if ($entity->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $finance = $em->getRepository('uosuosBundle:Finance')->find($entity->get('id'));
            if (!$finance) {
                throw $this->createNotFoundException('Unable to find Stud entity.');
            }
            $bal = $entity->get('balance');
            $trans = $entity->get('transferred');
            if (!$trans) {
                throw $this->createNotFoundException('Unable to find Stud entity.');
            }
            $finance->setBalance($bal - $trans);
            $finance->setTransferred($trans);


            $em->persist($finance);
            $em->flush();
            echo $app->getSession()->get('whatever');
            //$this->get('session')->setFlash('notice', 'You have successfully added '.$bal.' '.$trans().' to the database!');

            return $this->redirect($this->generateUrl('finance', array(
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'))
            ));
        }
    }

    /**
     * Creates a form to create a Finance entity.
     *
     * @param Finance $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Finance $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new FinanceType(), $entity, array(
            'action' => $this->generateUrl('finance_create'),
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
     * Displays a form to create a new Finance entity.
     *
     */
    public function newAction() {
        $session = $this->get("session");
        $entity = new Finance();
        $form = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Finance:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Finance entity.
     *
     */
    public function showAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Finance:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Finance entity.
     *
     */
    public function editAction($id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Finance:edit.html.twig', array(
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
     * Creates a form to edit a Finance entity.
     *
     * @param Finance $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Finance $entity) {
        $session = $this->get("session");
        $form = $this->createForm(new FinanceType(), $entity, array(
            'action' => $this->generateUrl('finance_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            'name' => $session->get('name'),
            'u_id' => $session->get('id'),
            'role' => $session->get('role'),
            'stud_emp_id' => $session->get('stud_emp_id'),
        ));

        $form->add('submit', 'submit', array('label' => 'Change'));

        return $form;
    }

    /**
     * Edits an existing Finance entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $session = $this->get("session");
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $finance = $em->getRepository('uosuosBundle:Finance')->findOneBy(array('student' => $entity->getStudent()));
            if (!$finance) {
                throw $this->createNotFoundException('Empty finance entity');
            }

            return $this->render('uosuosBundle:Finance:editPay.html.twig', array('finance' => $finance,
                        'name' => $session->get('name'),
                        'u_id' => $session->get('id'),
                        'role' => $session->get('role'),
                        'stud_emp_id' => $session->get('stud_emp_id'),));
            return $this->redirect($this->generateUrl('finance_show', array('id' => $entity->getId(),
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'),)));
        }
        return $this->render('uosuosBundle:Finance:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'name' => $session->get('name'),
                    'u_id' => $session->get('id'),
                    'role' => $session->get('role'),
                    'stud_emp_id' => $session->get('stud_emp_id'),
        ));
    }

    public function editPayAction(Request $entity) {
        $session = $this->get("session");
        if ($entity->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $finance = $em->getRepository('uosuosBundle:Finance')->find($entity->get('id'));
            if (!$finance) {
                throw $this->createNotFoundException('Unable to find finance entity.');
            }
            $bal = $entity->get('balance');
            $trans = $entity->get('transferred');
            if (!$trans) {
                throw $this->createNotFoundException('transferred amount field is empty');
            }
            $finance->setBalance($bal + $trans);
            $finance->setTransferred($trans);


            $em->persist($finance);
            $em->flush();

            return $this->redirect($this->generateUrl('finance', array(
                                'name' => $session->get('name'),
                                'u_id' => $session->get('id'),
                                'role' => $session->get('role'),
                                'stud_emp_id' => $session->get('stud_emp_id'))));
        }
    }

    /**
     * Deletes a Finance entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Finance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('finance'));
    }

    /**
     * Creates a form to delete a Finance entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('finance_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
