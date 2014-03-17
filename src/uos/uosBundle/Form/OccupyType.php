<?php

namespace uos\uosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class OccupyType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('student');
        $builder->add('hall');
        $builder->add('type', 'choice', array('mapped' => false, 'choices' => array('Single'=>'Single','Double'=> 'Double'), 'required' => false));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'uos\uosBundle\Entity\Occupy'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uos_uosbundle_occupy';
    }

}
