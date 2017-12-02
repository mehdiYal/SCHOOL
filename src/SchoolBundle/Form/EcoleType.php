<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EcoleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('logo', FileType::class, array('label' => 'Logo',
                                                      'required' => false,
                                                       'data_class' => null))
        ->add('nom')
        ->add('code')
        ->add('adresse')
        ->add('ville')
        ->add('pays')
        ->add('telephone')
        ->add('email',EmailType::class)
<<<<<<< HEAD
        ->add('dateCreation')
=======
        ->add('dateCreation',null,array('label' => 'form.dateN',
                                            'widget' => 'single_text',
                                            'html5' => false,))
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
        ->add('informations');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\Ecole'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_ecole';
    }


}
