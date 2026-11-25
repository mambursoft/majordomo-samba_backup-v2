<?php
$dictionary=array(
'SAMBA_BACKUP_ENDPOINT'=>'API endpoint',
'SAMBA_BACKUP_METHOD'=>'HTTP method',
'SAMBA_BACKUP_TOKEN'=>'Access token',
'SAMBA_BACKUP_REGION'=>'Region / route',
'SAMBA_BACKUP_TRACKING'=>'Tracking number',
'SAMBA_BACKUP_PAYLOAD'=>'POST payload template',
'SAMBA_BACKUP_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SAMBA_BACKUP_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}