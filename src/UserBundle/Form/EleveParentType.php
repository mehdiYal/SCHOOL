<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use UserBundle\Form\ParentalType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EleveParentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('photo', FileType::class, array('label' => 'form.photo',
                                                      'required' => false,
                                                       'data_class' => null))
        ->add('nom',null,array('label' => 'form.name'))
        ->add('prenom',null,array('label' => 'form.lastName'))
        ->add('annee')
        ->add('parent',ParentalType::class)
        ->add('dateDeNaissance',null,array('label' => 'form.dateN',
                                            'widget' => 'single_text',
                                            'html5' => false,))
        ->add('lieuDeNaissance')
         ->add('genre',ChoiceType::class,array('label' => 'form.genre','choices'  => array(
                                                                        'HOMME'=>'HOMME',
                                                                        'FEMME'=>'FEMME',
                                                                    ),))
        // ->add('email',EmailType::class, array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
        ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'form.password'),
            'second_options' => array('label' => 'form.password_confirmation'),
            'invalid_message' => 'fos_user.password.mismatch',
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Eleve'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'UserBundle_eleve';
    }


}
