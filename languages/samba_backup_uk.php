<?php
$dictionary=array(
'SAMBA_BACKUP_ENDPOINT'=>'Адреса API',
'SAMBA_BACKUP_METHOD'=>'HTTP-метод',
'SAMBA_BACKUP_TOKEN'=>'Токен доступу',
'SAMBA_BACKUP_REGION'=>'Регіон / маршрут',
'SAMBA_BACKUP_TRACKING'=>'Номер відправлення',
'SAMBA_BACKUP_PAYLOAD'=>'Шаблон POST-запиту',
'SAMBA_BACKUP_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'SAMBA_BACKUP_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}