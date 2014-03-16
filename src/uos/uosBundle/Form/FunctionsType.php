<?php

namespace uos\uosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HallType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hallname')
            ->add('capacity')
            ->add('gender','choice', array(
    'choices' => array('Male' => 'Male', 'Female' => 'Female')));
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uos\uosBundle\Entity\Hall'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uos_uosbundle_functions';
    }
}
