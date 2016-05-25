<?php

namespace BDE\BackSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PagesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('url')
            ->add('background')
        ;
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'bde_backsitebundle_pages';
    }
}
