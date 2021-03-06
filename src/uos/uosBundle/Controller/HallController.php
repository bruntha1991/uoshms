<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Hall;
use uos\uosBundle\Form\HallType;

/**
 * Hall controller.
 *
 */
class HallController extends Controller
{

    /**
     * Lists all Hall entities.
     *
     */
    public function indexAction()
    {
        $session  = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Hall')->findAll();

        return $this->render('uosuosBundle:Hall:index.html.twig', array(
            'entities' => $entities,
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
        ));
    }
    /**
     * Creates a new Hall entity.
     *
     */
    public function createAction(Request $request)
    {
        $session  = $this->get("session");
        $entity = new Hall();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            
            $em1 = $this->getDoctrine()->getEntityManager();
            $repository = $em1->getRepository('uosuosBundle:Hall');

        
            $hall = $repository->findOneBy(array('hallname' => $entity->getHallname()));
            
            if($hall)
            {
                return $this->render('uosuosBundle:Hall:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
                    'error'=>'Hall already exist',
                    'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
        ));
            }
            else
            {
                $em->persist($entity);
            $em->flush();
                return $this->redirect($this->generateUrl('hall_show', array('id' => $entity->getId(),
                    'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),)));
            }
        }
    }

    /**
    * Creates a form to create a Hall entity.
    *
    * @param Hall $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Hall $entity)
    {
        $session  = $this->get("session");
        $form = $this->createForm(new HallType(), $entity, array(
            'action' => $this->generateUrl('hall_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hall entity.
     *
     */
    public function newAction()
    {
        $session  = $this->get("session");
        $entity = new Hall();
        $form   = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Hall:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
        ));
    }

    /**
     * Finds and displays a Hall entity.
     *
     */
    public function showAction($id)
    {
        $session  = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Hall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hall entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Hall:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),  
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),));
    }

    /**
     * Displays a form to edit an existing Hall entity.
     *
     */
    public function editAction($id)
    {
        $session  = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Hall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hall entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Hall:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
        ));
    }

    /**
    * Creates a form to edit a Hall entity.
    *
    * @param Hall $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hall $entity)
    {
        $session  = $this->get("session");
        $form = $this->createForm(new HallType(), $entity, array(
            'action' => $this->generateUrl('hall_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hall entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $session  = $this->get("session");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Hall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hall entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hall_edit', array('id' => $id,
                'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),)));
        }

        return $this->render('uosuosBundle:Hall:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'),
        ));
    }
    /**
     * Deletes a Hall entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $session  = $this->get("session");
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Hall')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hall entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hall',array(
            'name' => $session->get('name'),
            'u_id'=>$session->get('id'),
            'role'=>$session->get('role'),
            'stud_emp_id'=>$session->get('stud_emp_id'))));
    }

    /**
     * Creates a form to delete a Hall entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        $session  = $this->get("session");
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hall_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
