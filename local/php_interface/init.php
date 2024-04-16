<?
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler("main", "OnAfterUserRegister", Array("MyClass", "AfterLogin"), false, 100);
class MyClass
{
	static function AfterLogin(&$arFields)
	{	
		if($arFields["USER_ID"]>0){
			$rsUser = CUser::GetByID($arFields["USER_ID"]);
			$arUser = $rsUser->Fetch();
			$asd = $arUser['UF_USER']; 
			$ar=[];
			if($asd==5){
				$ar[0] = 6;
			}else{
				$ar[0] = 7;
			}
			CUser::SetUserGroup($arFields["USER_ID"], $ar);
		}
	}
}?>