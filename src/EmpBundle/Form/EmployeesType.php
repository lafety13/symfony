<?php

namespace EmpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EmployeesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
$builder->add('name')->add('department', ChoiceType::class, array(
    'choices' => array(
        'm' => 'Male',
        'f' => 'Female'
    ),
    'required'    => false,
    'placeholder' => 'Choose your gender',
    'empty_data'  => null
));



    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmpBundle\Entity\Employees'
        ));
    }
}
