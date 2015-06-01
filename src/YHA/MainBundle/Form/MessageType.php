<?php

namespace YHA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array ( 
            		'required' 	  => true,
            		'empty_data'  => null)
            )
            ->add('email', 'email', array (
            		'required' 	  => true,
            		'empty_data'  => null)
            	)
            ->add('subject', 'text', array (
            		'required' 	  => true,
            		'empty_data'  => null)
            	)
            ->add('message', 'textarea', array (
            		'required' 	  => true,
            		'empty_data'  => null)
            	)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'YHA\MainBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'yha_mainbundle_message';
    }
}
