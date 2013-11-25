<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'FunctionName1', 'custom/modules/Contacts/custom_code/customscripts.php','JQuery', 'FunctionName1');

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'FunctionName2', 'custom/modules/Contacts/custom_code/customPHP.php','customPHP', 'FunctionName2');

?>