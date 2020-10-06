<?php

namespace App\Form;

use App\Entity\Bien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class BienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('photo',TextType::class,['label'=>'photo','attr'=>['placeholder'=>'photo']])
            ->add('description',TextareaType::class,['label'=>'description','attr'=>['placeholder'=>'...ici votre description..']])
            ->add('prix',IntegerType::class)
           
            ->add('categorie',ChoiceType::class,['placeholder'=>                          'Choisir une catégorie',
                'choices'=>['Location'=>'Location','Vente'=>'Vente',],])
            //->add('created_at',DateType::class,['widget'=>'single_text'])
            //->add('updated_at',DateType::class,['widget'=>'single_text'])
            ->add('titre',TextType::class,['label'=>'Titre'])
            ->add('type',ChoiceType::class,['placeholder'=>'Choisir un type','choices'=>['Maison'=>'Maison','Appartement'=>'Appartement',],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bien::class,
        ]);
    }
}
