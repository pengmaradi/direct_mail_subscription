<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "direct_mail_subscription".
 *
 * Auto generated 30-10-2014 16:15
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Direct Mail Subscription',
    'description' => 'Adds a plugin for subscription to direct mail newsletters (collecting subscriptions in the tt_address table)',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '3.0.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Ivan Kartolo',
    'author_email' => 'ivan.kartolo@gmail.com',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.9.99',
            'tt_address' => '4.0.0',
            'direct_mail' => '5.0.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
 );
