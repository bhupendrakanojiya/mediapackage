<?php

namespace ChannelBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use ChannelBundle\Entity\Channels;

class ChannelsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('title')
            ->add('active','choice', array(
    'choices' => array('0'=>'Active','1'=>'Unactive')))
			->add('packages', 'choice', array(
    'choices' => array('S' => 'Small', 'M' => 'Medium', 'L' => 'Large'),'multiple'=>true,'mapped'=>false
));
					
        
    }
	
	    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ChannelBundle\Entity\Channels'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'channelbundle_channels';
    }
}
