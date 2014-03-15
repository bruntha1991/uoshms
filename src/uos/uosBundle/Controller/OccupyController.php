<?php

namespace uos\uosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uos\uosBundle\Entity\Occupy;
use uos\uosBundle\Form\OccupyType;

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
            $em1 = $this->getDoctrine()->getEntityManager();

            $repository = $em1->getRepository('uosuosBundle:Occupy');
            $occupy = $repository->findOneBy(array('student' => $entity->getStudent(), 'hall' => $entity->getHall(), 'room' => $entity->getRoom()));

            if ($occupy) {
                return $this->render('uosuosBundle:Occupy:new.html.twig', array('entity' => $entity, 'form' => $form->createView(), 'error' => 'Occupy already exist.'));
            } else {
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('occupy_show', array('id' => $entity->getId())));
            }
        }
        return $this->render('uosuosBundle:Occupy:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => 'Invalid Entry'));
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

        $form->add('submit', 'submit', array('label' => 'Create'));

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
    public function updateAction(Request $request, $id) {
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
    public function deleteAction(Request $request, $id) {
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

}
