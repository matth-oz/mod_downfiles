<?php
defined('_JEXEC') or die;

require_once __DIR__.'/helper.php';

$componentIsEnabled = JComponentHelper::isEnabled('com_downfiles');
if($componentIsEnabled != false){
    $list = mod_downfilesHelper::getList($params);
    $moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
    $text_before = $params->get('textbefore');
    require JModuleHelper::getLayoutPath('mod_downfiles', $params->get('layout', 'default'));
}
else{
    JText::_('MOD_DOWNFILES_NEED_COMPONENT');
}




