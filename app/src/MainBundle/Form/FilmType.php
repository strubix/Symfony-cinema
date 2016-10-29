<?php

namespace MainBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('anneeProd', IntegerType::class, array(
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('genre', EntityType::class, array(
                'class' => 'MainBundle:Genre',
                'choice_label' => 'nom',
                'placeholder' => 'Tous',
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('valider', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-primary')
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Film'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_film';
    }


}
