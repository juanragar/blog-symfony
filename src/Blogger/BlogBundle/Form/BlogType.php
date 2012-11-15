<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('autor');
        $builder->add('blog', 'textarea');
		$builder->add('image');
		$builder->add('tags');

    }

    public function getName()
    {
        return 'blog';
    }
}