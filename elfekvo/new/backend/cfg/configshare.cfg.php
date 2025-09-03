<?php
/** Share Configuration **/
$config['configShare'] =
	array(
        'serverName'		=> strtolower($_SERVER['SERVER_NAME']),
	'whichSystem'		=> 'elfekvo',
        'serverAddress'		=> strtolower($_SERVER['SERVER_ADDR']),                                               
        'serverHost'		=> strtolower($_SERVER['REMOTE_NAME']),                                               
        'remoteAddress'		=> strtolower($_SERVER['REMOTE_ADDR']),                                               
        'remoteHost'		=> strtolower($_SERVER['REMOTE_HOST']),                                               
	'baseModul'		=> 'index.php?modulSelect=products&modulAction=list&productscmd=resetall',
	'homeModul'		=> 'products',
	'registrationModul'	=> 'index.php?modulSelect=core_users&modulAction=registration',
	'whichSystemMode'	=> 'backend',
	'adminPath'		=> 'backend/',
	'adminModulsPath'	=> 'backend/inc/',
	'tplPath'		=> 'tpl/',
	'cfgPath'		=> 'cfg/',
	'incPath'		=> 'inc/',
	'normalImgPath'		=> '/backend/img/',
	'imagePath'		=> 'img/',
	'cssFileName'		=> 'css/admin.css',
	'cssFileNameIE'		=> 'css/adminie.css',
	'imageButton'		=> 'img/button/',
	'themeStart'		=> 'olive',
	'textWraplen'		=> '100',
	'adminMail'		=> 'rodnas@uw.hu',
	'registrationUserLevel'	=> '5',
	'onlyView'		=> '0',
	'adminLogo'		=> 'adminlogo.png',
	'guestUser'		=> 'Guest',
	'developerHome'		=> 'http://rodnas.fw.hu',
	'docrootPath'		=> '../docroot/',
	'docrootPathHide'	=> '../docroot/',
	'sharePath'		=> 'share/',
	'shareModulsPath'	=> 'share/inc/',
	'modulFramePath'	=> 'share/modul/',
	'modulFrameFile'	=> 'frame.inc.php',
	'modulFrameName'	=> 'modulFrame',
	'shareLibPath'		=> 'share/lib/',
	'developerHome'		=> 'rodnas.fw.hu',
	'textWrwpLen'		=> '110',
	'adminMail'		=> 'rodnas@uw.hu',
	'siteLogo'		=> '',
	'developLogo'		=> 'developby.png',
	'registrationUserLevel'	=> '4',
	'onlyView'		=> '0',
	'guestUser'		=> 'Guest',
	'descriptionSign'	=> '/#/',
	'displayRecs'		=> '10',
	'recRange'		=> '10',
	'noView'		=> '0',
	'nocopy'		=> '0',
	'noEdit'		=> '0',
	'noAdd'			=> '0',
	'noDelete'		=> '0',
	'addButton'		=> 'plus.png',
	'copyButton'		=> 'copy.png',
	'editButton'		=> 'edit.png',
	'deleteButton'		=> 'delete.png',
	'adminButton'		=> 'admin.png',
	'viewButton'		=> 'view.png',
	'viewButtonNew'		=> 'viewnew.png',
	'firstButton'		=> 'first.png',
	'prevButton'		=> 'backward.png',
	'prevItemButton'	=> 'backwardplay.png',
	'nextButton'		=> 'forward.png',
	'nextItemButton'	=> 'forwardplay.png',
	'lastButton'		=> 'last.png',
	'backButton'		=> 'back.png',
	'openButton'		=> 'open.png',
	'closeButton'		=> 'close.png',
	'activeButton'		=> 'active.png',
	'configsButton'		=> 'config.png',
	'downloadURLButton'	=> 'download.png',
	'noButton'		=> 'nobutton.png',
	'treeBgColor'		=> '#e1e0cc',
	'logoWidth'		=> '150',
	'logoHeight'		=> '150',
	'pictSmallWidth'	=> '120',
	'pictSmallHeight'	=> '120',
	'pictSmallNamePlus'	=> '_small',
	'pictNormalWidth'	=> '600',
	'pictNormalHeight'	=> '600',
	'pictNormalNamePlus'	=> '_normal',
	'pictLargeWidth'	=> '1280',
	'pictLargeHeight'	=> '1024',
	'pictLargeNamePlus'	=> '_large',
	'leftWidthAdmin'	=> '260',
	'leftWidthUser'		=> '200',
	'listType'		=> 'normal',
	'debugPrintValue'	=> '0',
	'noNavigationDefault'	=> '0',
	'awayButton'		=> 'away.png',
	'bottomMenuSeparator'	=> ' - ',
	'adminEmail'		=> 'rodnas@uw.hu',
	'virBoxRefresh'		=> '30',
	'layoutMainHTML'	=> 'layoutsetup',
	'iniCFG'		=> 
'##topMenuCFG##
products<subMenu><#>
products_status<subMenu><#>
products_images<subMenu><#>
core_users<subMenu><#>
core_support<subMenu>core_support<=>core_support_action<=>core_support_topic<=>core_support_type<=>core_support_status<#>
core_groups<subMenu>core_users_rights<=>core_userstitle<=>core_groups<=>core_groups_rights<#>
core_messagewall<subMenu><#>
core_configs<subMenu>core_configs<=>core_config<=>core_language<=>core_themes<#>
##/topMenuCFG##
##serviceMenuCFG##
##/serviceMenuCFG##
##javascriptCFG##
wysiwyg<#>
##/javascriptCFG##
##cssCFG##
css/wysiwyg.css<#>
css/jquery.ui.all.css<#>
css/demos.css<#>
##/cssCFG##
##inputCFG##
##/inputCFG##
##listFilterCFG##
optionSelectShare<=>core_users<=>s_insertUserID<=>id<=>nickname<=><=>150<#>
##/listFilterCFG##
##relatedTablesCFG##
##/relatedTablesCFG##',
	'cssCFG' => array(
		'css/wysiwyg.css',
		'css/jquery.ui.all.css',
		'css/demos.css'),
);
?>