<?php
/**
 * @author Zarif Safiullin <zaph.work@gmail.com>
 * @package ow.ow_plugins.mailbox
 * @since 1.7.2
 */
Updater::getLanguageService()->importPrefixFromZip(dirname(dirname(dirname(__FILE__))) . DS . 'langs.zip', 'mailbox');

//$sql = "ALTER TABLE `".OW_DB_PREFIX."mailbox_user_last_data` ADD UNIQUE `userId` (`userId`)";
//Updater::getDbo()->query($sql);