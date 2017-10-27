<?php
namespace Flexix\HiddenEntityTypeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class HiddenEntityType extends AbstractType
{
 
    public function getParent()
    {
        return EntityType::class;
    }
    public function getName()
    {
        return 'hidden_entity';
    }
}