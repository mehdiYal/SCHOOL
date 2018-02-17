<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use UserBundle\Repository\EleveRepository;
use SchoolBundle\Repository\ClasseRepository;


class ProgrammeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     //   $idClasse= $options['idClasse'];
        
        $builder
        ->add('enseignant', EntityType::class, array(
                'class' => 'UserBundle:Enseignant',
            'required' => TRUE

            ))
        ->add('matiere', EntityType::class, array(
                'class' => 'SchoolBundle:Matiere',
            'required' => TRUE

            ))
       /*EntityType::class, array(
                'class' => 'UserBundle:Eleve',
                'choice_label' => 'nom',
                'query_builder' => function(EleveRepository $er) use ($idClasse){
                   return $er->findById($idClasse);
                },
                'required' => TRUE,
            )*/
        ->add('salle', EntityType::class, array(
                'class' => 'SchoolBundle:Salle',
            'required' => TRUE

            ))
        ->add('classe',EntityType::class, array(
                'class' => 'SchoolBundle:Classe',
            'required' => TRUE

            ))
        ->add('horraire',EntityType::class, array(
                'class' => 'SchoolBundle:Horraire',
            'required' => TRUE,
            

            ))
        ->add('jour',EntityType::class, array(
                'class' => 'SchoolBundle:Jour',
            'required' => TRUE

            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\Programme',
            
        ));
;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'SchoolBundle_programme';
    }

}
