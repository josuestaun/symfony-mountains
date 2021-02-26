<?php

namespace App\Form;

use App\Entity\Mountains;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\ZonasRepository;

class MountainsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $builder
            ->add('nombre', TextType::class, array(
                            'label' => 'nombre',
                            'attr' => array('class'=>'form-control  ')))
            ->add('descripcion', TextType::class, array(
                            'label' => 'descripcion',
                            'attr' => array('class'=>'form-control  ')))
            ->add('altura', TextType::class, array(
                            'label' => 'altura',
                            'attr' => array('class'=>'form-control  ')))
            ->add('desnivel', TextType::class, array(
                            'label' => 'desnivel',
                            'attr' => array('class'=>'form-control  ')))
            ->add('imagen', TextType::class, array(
                            'label' => 'imagen',
                            'attr' => array('class'=>'form-control  ')))
            ->add('zona', TextType::class, array(
                            'label' => 'zona',
                            'attr' => array('class'=>'form-control  '))) 
             // NO ME FUNCIONA: An exception occurred while executing 'SELECT z.pais FROM App:Zonas'
            ->add('zona',   EntityType::class, array(
            'label' => 'zona',
            'attr' => array('class'=>'form-control '),
            'class' => \App\Entity\Zonas::class,
            'query_builder' => function(ZonasRepository  $r)  {
              return $r->getZonas();}
          )) 
            ->add('save', SubmitType::class, array('label' => 'Guardar',  'attr' => array('class'=>'btn btn-primary')))
        ;
        */
                $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('altura')
            ->add('desnivel')
            ->add('imagen')
            ->add('zona')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mountains::class,
        ]);
    }
}
