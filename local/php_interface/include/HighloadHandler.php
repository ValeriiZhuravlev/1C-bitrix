<?
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventHandler = array("HighloadHandler", "clearCacheByTableName");

$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', $eventHandler);
$eventManager->addEventHandler('', 'AgentsOnAfterAdd', $eventHandler);
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', $eventHandler);

class HighloadHandler
{
    public static function clearCacheByTableName(\Bitrix\Main\Entity\Event &$event)
    {

        $entity = $event->getEntity();
        $tableName = $entity->getDBTableName(); // Получаем имя таблицы highload-блока

        $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
    }
}
?>