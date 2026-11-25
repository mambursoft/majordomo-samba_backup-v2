<?php
$dictionary=array(
'SAMBA_BACKUP_ENDPOINT'=>'Адрес API',
'SAMBA_BACKUP_METHOD'=>'HTTP-метод',
'SAMBA_BACKUP_TOKEN'=>'Токен доступа',
'SAMBA_BACKUP_REGION'=>'Регион / маршрут',
'SAMBA_BACKUP_TRACKING'=>'Номер отправления',
'SAMBA_BACKUP_PAYLOAD'=>'Шаблон POST-запроса',
'SAMBA_BACKUP_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'SAMBA_BACKUP_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}