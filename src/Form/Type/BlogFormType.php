<?php

namespace App\Form\Type;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, ['attr' => ['class' => 'form-control']]);
        $builder->add('shortDescription', TextType::class, ['attr' => ['class' => 'form-control']]);
        $builder->add('body', TextType::class, ['attr' => ['class' => 'form-control']]);
        $builder->add('imageFile', FileType::class, [
            'attr'     => ['class' => 'form-control',],
            'mapped' => false,
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Blog::class,
            ]
        );
    }
}
