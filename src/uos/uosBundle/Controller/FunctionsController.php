<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Functions;
use uos\uosBundle\Form\FunctionsType;

/**
 * Functions controller.
 *
 */
class FunctionsController extends Controller
{

    /**
     * Lists all Functions entities.
     *
     */
    public function indexAction()
    {
        
        return $this->render('uosuosBundle:Functions:index.html.twig');
    }
    /**
     * Creates a new Functions entity.
     *
     */
    public function checkinAction(Request $request)
    {
                return $this->render('uosuosBundle:Functions:checkin.html.twig');
                        
    }

    /**
    * Creates a form to create a Functions entity.
    *
    * @param Functions $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Functions $entity)
    {
        $form = $this->createForm(new FunctionsType(), $entity, array(
            'action' => $this->generateUrl('hall_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Functions entity.
     *
     */
    public function checkoutAction()
    {
        
        return $this->render('uosuosBundle:Functions:checkout.html.twig');
    }

    /**
     * Finds and displays a Functions entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Functions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Functions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Functions:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Functions entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Functions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Functions entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Functions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Functions entity.
    *
    * @param Functions $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Functions $entity)
    {
        $form = $this->createForm(new FunctionsType(), $entity, array(
            'action' => $this->generateUrl('hall_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Functions entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Functions')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Functions entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hall_edit', array('id' => $id)));
        }

        return $this->render('uosuosBundle:Functions:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Functions entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uosuosBundle:Functions')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Functions entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hall'));
    }

    /**
     * Creates a form to delete a Functions entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hall_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
