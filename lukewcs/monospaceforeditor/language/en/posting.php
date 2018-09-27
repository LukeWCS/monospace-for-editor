<?php
/*
 *
 * Monospace font for Posting Editor (c) 2018 LukeWCS - https://www.wcsaga.org
 *
 * Lang_iso     : en
 * Lang_ver     : 0.2.2
 * Lang_author  : LukeWCS (wcsaga.org)
 * Lang_tab_size: 4
 *
 */
 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Some characters you may want to copy&paste:
// ’ » „ “ — …
$lang = array_merge($lang, array(
	'MFPE_BUTTON_TAB_LABEL'		=> 'TAB',	
	'MFPE_BUTTON_TAB_TOOLTIP'	=> 'Inserts a tab in the text',
	'MFPE_CHECKBOX_LABEL'		=> 'Monospace font',
	'MFPE_CHECKBOX_TOOLTIP'		=> 'Represents the text in the editor in a non-proportional font',
));