<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:direct_mail_subscription/locallang_db.xlf:pi_dmail_subscr',
        '21'
    )
);
