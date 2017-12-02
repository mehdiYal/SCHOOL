<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('devoir', FileType::class, array(
<<<<<<< HEAD
                'attr'=> ['id'=> 'labelinputForm'],
                'data_class' => null,
=======
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
                'required' => false, 
                'label' => "Uploader un fichier (devoir maison)"))
            
            ->add('support', FileType::class, array(
                'required' => false, 
<<<<<<< HEAD
                'data_class' => null,
                'label' => "Uploader un fichier (support de cours)"))
            ->add('annexe', FileType::class, array(
                'required' => false, 
                'data_class' => null,
=======
                'label' => "Uploader un fichier (support de cours)"))
            ->add('annexe', FileType::class, array(
                'required' => false, 
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
                'label' => "Uploader un fichier (annexe)"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\Cours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_cours';
    }


}
