<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('icon', ChoiceType::class, array(
            'choices'  => array(
                'home' => 'Home',
                'gift' => 'Events',
                'plane' => 'Travel',
                'futbol-o' => 'Sport',
                'laptop' => 'IT',
                'money' => 'Bank',
                'shopping-cart' => 'Shopping',
                'exchange' => 'Exchange',
                'eye' => 'Eye',
                'car' => 'Car',
                'briefcase' => 'Work',
                'lock' => 'Safety',
                'users' => 'Groups',
                'user' => 'User',
                'phone' => 'Phone',
                'area-chart' => "Chart",
            ),
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }


}
