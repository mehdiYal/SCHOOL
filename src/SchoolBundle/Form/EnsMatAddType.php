<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use SchoolBundle\Repository\MatiereRepository;
use SchoolBundle\Repository\EnsMatRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EnsMatAddType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $classe= $options['c'];
        $builder
            ->add('enseignant')
            ->add('matiere', EntityType::class, array(
                'class' => 'SchoolBundle:Matiere',
                'choice_label' => 'nom',
                'query_builder' => function(MatiereRepository $er) use ($classe){
                    return $er->findByEnsMat($classe);
                },
                'required' => TRUE,
            ))
            ;
    }
    
    /**
     *  @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\EnsMat',
            'c'=>''
        ));

        $resolver->setRequired(['c']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_ensmat';
    }


}
