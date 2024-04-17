<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/include/myclass.php");
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler("main", "OnAfterUserRegister",  Array("MyClass", "AfterLogin"));
$eventManager->addEventHandler('', 'REAOnAfterAdd', array("MyClass",'HL_ResetCache'));
$eventManager->addEventHandler('', 'REAOnAfterUpdate', array("MyClass",'HL_ResetCache'));
$eventManager->addEventHandler('', 'REAOnAfterDelete', array("MyClass",'HL_ResetCache'));