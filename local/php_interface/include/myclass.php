<? 
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
	static function HL_ResetCache(\Bitrix\Main\Entity\Event $event){
		$id = $event->getParameter("id");
		$id = $id["ID"];
		$entity = $event->getEntity();
		$entityDataClass = $entity->GetDataClass();
		$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
		$taggedCache->clearByTag('hlblock_table_name_agents');
	}
}