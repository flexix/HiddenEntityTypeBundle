<?php
namespace Flexix\HiddenEntityTypeBundle\Subscriber;

use Lexik\Bundle\FormFilterBundle\Event\Subscriber\DoctrineORMSubscriber;


class Subscriber extends DoctrineORMSubscriber {
    
    
    public static function getSubscribedEvents()
    {
        return array(
            // if a Doctrine\ORM\QueryBuilder is passed to the lexik_form_filter.query_builder_updater service
            'lexik_form_filter.apply.orm.hidden_entity' => array('filterEntity'),

            // if a Doctrine\DBAL\Query\QueryBuilder is passed to the lexik_form_filter.query_builder_updater service
            'lexik_form_filter.apply.dbal.hidden_entity' => array('filterEntity'),
        );
    }
    
}
