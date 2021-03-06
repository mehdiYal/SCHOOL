<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use SchoolBundle\Repository\MatiereRepository;
use SchoolBundle\Repository\ClasseRepository;
use SchoolBundle\Repository\TravailaFaireRepository;


class TravailaFaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idEnseignant= $options['idEnseignant'];
        $idMatiere= $options['idMatiere'];
        $builder
         ->add('matiere', EntityType::class, array(
                'class' => 'SchoolBundle:Matiere',
                'choice_label' => 'nom',
                'query_builder' => function(MatiereRepository $er) use ($idMatiere){
                    return $er->findByArrayId($idMatiere);
                },
                'required' => TRUE,
            ))
         ->add('classe', EntityType::class, array(
                'class' => 'SchoolBundle:Classe',
                'choice_label' => 'nom',
                'query_builder' => function(ClasseRepository $er) use ($idEnseignant){
                   return $er->findByEnseignant($idEnseignant);
                },
                'required' => TRUE,
            ))
         ->add('datelimite', DateType::class,[
            'attr' => ['class' => 'dp-3 form-control'],
            'widget' => 'single_text',
            'html5' => false
            ]
            )
         ->add('timelimite', TimeType::class,[
            'attr' => ['class' => 'timeForm form-control  input-small'],
            'widget' => 'single_text',
            'html5' => false
            ]
            )
          ->add('travail', FileType::class, array(
                'data_class' => null,
                'required' => true, 
            ))
          ->add('commentaire', TextareaType::class, array(
                'attr'=> ['class' => 'form-control'],
                'required' => false
            ))
         ;
    }
    
    /**
     *  @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\TravailaFaire',
            'idEnseignant' => '',
            'idMatiere' => ''
        ));

         $resolver->setRequired(['idEnseignant','idMatiere']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_travafaire';

    }

}
