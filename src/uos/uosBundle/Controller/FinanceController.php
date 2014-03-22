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
class FinanceController extends Controller
{

    /**
     * Lists all Finance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uosuosBundle:Finance')->findAll();

        return $this->render('uosuosBundle:Finance:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Finance entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Finance();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);  
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $student = $em->getRepository('uosuosBundle:Student')->findOneBy(array('studentid'=>$entity->getStudent()));
            $id = $student->getId();
            $finance= $em->getRepository('uosuosBundle:Finance')->findOneBy(array('student'=>$id));
            if($finance!=null)              
                return $this->render('uosuosBundle:Finance:makePay.html.twig',array('finance'=>$finance,'student'=>$student->getId()));
            //return $this->redirect($this->generateUrl('finance_show', array('finance'=>$finance)));
            //return $this->redirect($this->generateUrl('finance_show', array('id' => $entity->getId())));
        }
        return $this->render('uosuosBundle:Finance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    
    public function saveFinanceAction(Request $entity) {
               
        $em = $this->getDoctrine()->getManager();
        $student = $em->getRepository('uosuosBundle:Student')->find($entity->get('student'));
        
        $em = $this->getDoctrine()->getManager();
        $finance = new Finance();
        $finance->setBalance('balance');
        $finance->setTransferred('transferred');
        $finance->setStudent($student);
        
       // $finance->setPaydate($finance->getPaydate());
        
        $em->persist($finance);
        $em->flush();

        return $this->render('uosuosBundle:Finance:new.html.twig');
    }
    
    
    /**
    * Creates a form to create a Finance entity.
    *
    * @param Finance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Finance $entity)
    {
        $form = $this->createForm(new FinanceType(), $entity, array(
            'action' => $this->generateUrl('finance_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Pay'));

        return $form;
    }

    /**
     * Displays a form to create a new Finance entity.
     *
     */
    public function newAction()
    {
        $entity = new Finance();
        $form   = $this->createCreateForm($entity);

        return $this->render('uosuosBundle:Finance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Finance entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Finance:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Finance entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uosuosBundle:Finance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Finance entity.
    *
    * @param Finance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Finance $entity)
    {
        $form = $this->createForm(new FinanceType(), $entity, array(
            'action' => $this->generateUrl('finance_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Finance entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uosuosBundle:Finance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('finance_edit', array('id' => $id)));
        }

        return $this->render('uosuosBundle:Finance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Finance entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
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
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('finance_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
