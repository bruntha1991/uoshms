<?php

namespace uos\uosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Event\DataEvent;

class FinanceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('student')
                ->add('Balance')//, 'text', array('mapped' => false))
                ->add('transferred')//, 'text', array('mapped' => false))
                
        ;
        $builder
                //->add('balance', 'text', array('read_only' => true, 'data' => 'finance->getBalance()'))
                
                //->add('balance', 'number', array('read_only' => true, 'data' => !empty($defaultvalue) ? 20 : $options['data']->getBalance()))

                //->add('balance', 'hidden', array('data' => 'abcdef',))
                //->addEventListener($eventName, $listener)
                //->add('transferred', 'text', array('mapped' => false))

        ;
        
         $builder
                //->add('balance', 'text', array('read_only' => true, 'data' => 'finance->getBalance()'))
                
                //->add('balance', 'number', array('read_only' => true, 'data' => !empty($defaultvalue) ? 20 : $options['data']->getBalance()))

                //->add('balance', 'hidden', array('data' => 'abcdef',))
                //->addEventListener($eventName, $listener)
                //->add('payment', 'text', array('mapped' => false))

        ;
        //$defaultvalue = $options['data']->getBalance();
        //$em = $this->getDoctrine()->getManager();
        
        //$fin = $em->getDoctrine()->getRepository('uos\uosBundle\Entity\Finance')->find($id);
        //$fi=$repository->find($id);
        /*$builder            
            ->addEventListener(FormEvents::PRE_SET_DATA, function(DataEvent $event) use ($builder){
                $form = $event->getForm();
                $data = $event->getData();
                
                if ($data instanceof \uos\uosBundle\Entity\Finance) {
                    //$form->add('$data');
                      $form->add($builder->getFormFactory()->createNamed('text','propertyHere',null,array('label' => $data->getFinance()->getName())));
                }
            })
            ;
         */
        
        /*
        ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
            $product = $event->getData();
            $form = $event->getForm();
            if((!$product || null === $product->getId()))
                $form->add('balance','text');    
          
         *     //  $form->add('balance', 'number', array('read_only' => true, 'data' => !empty($product) ?  $product->getId() :20));
         */

            // check if the Product object is "new"
            // If no data is passed to the form, the data is "null".
            // This should be considered a new "Product"
            //if (!$product || null === $product->getId()) {
              //  $form->add('name', 'text');
                //
           //     })
        //;
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'uos\uosBundle\Entity\Finance'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uos_uosbundle_finance';
    }

}
