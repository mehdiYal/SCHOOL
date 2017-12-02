<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EcoleEditType extends AbstractType
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
        ->add('fraisDeScolarite')
        ->add('fraisDeRestauration')
        ->add('fraisDeTransport')
        ->add('adresse')
        ->add('ville')
        ->add('pays')
        ->add('telephone')
        ->add('email',EmailType::class)
        ->add('dateCreation',null,array('label' => 'form.dateN',
                                            'widget' => 'single_text',
                                            'html5' => false,))
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
