<?php

namespace App\Form;

use App\Entity\Traobject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class TraobjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label' => 'Titre'))
            ->add('pictureFile', VichImageType::class, array('label' => 'Photo'))
            ->add('description', TextareaType::class, array('label' => 'Description'))
            ->add('eventAt', DateType::class, array('label' => 'Date'))
            ->add('city', null, array('label' => 'Ville'))
            ->add('address', TextType::class, array('label' => 'Adresse'))
            ->add('category', null, array('label' => 'Catégorie'))
            ->add('county', null, array('label' => 'Département'))
            ->add('state', null, array('label' => 'Status'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Traobject::class,
        ]);
    }
}
