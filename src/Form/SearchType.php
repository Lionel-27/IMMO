<?php

namespace App\Form;

//use App\Entity\Bien;
use App\Entity\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('searchTitre',TextType::class,['label'=>'Recherche :'])
            ->add('categorie',ChoiceType::class,['placeholder'=>                          'Choisir une catégorie',
                'choices'=>['Location'=>'Location','Vente'=>'Vente',],])
             ->add('type',ChoiceType::class,['placeholder'=>'Choisir un type','choices'=>['Maison'=>'Maison','Appartement'=>'Appartement',],])
             ->add('prixMax',IntegerType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => search::class,
            'method'=> 'get',
            'crsf_protection'=>false
        ]);
    }

    public function getBlockPrefix(){
        return '';
    }
}
