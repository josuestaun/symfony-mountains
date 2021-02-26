<?php

namespace App\Form;

use App\Entity\Zonas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\ZonasRepository;

class ZonasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
         * Lo quito para evitar fallos y tener todas las funcionalidades
        $builder
            ->add('pais', TextType::class, array(
                            'label' => 'pais',
                            'attr' => array('class'=>'form-control  ')))
            ->add('provincia',  TextType::class, array(
                            'label' => 'provincia',
                            'attr' => array('class'=>'form-control  ')))
            ->add('save', SubmitType::class, array('label' => 'Guardar',  'attr' => array('class'=>'btn btn-primary')))
        ;
         */
                $builder
            ->add('pais')
            ->add('provincia')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Zonas::class,
        ]);
    }
}
