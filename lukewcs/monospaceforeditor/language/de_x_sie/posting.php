<?php
/*
 *
 * Monospace font for Posting Editor (c) 2018 LukeWCS - https://www.wcsaga.org
 *
 * Lang_iso     : de_x_sie
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
	'MFPE_BUTTON_TAB_TOOLTIP'	=> 'Fügt im Text einen Tabulator ein',
	'MFPE_CHECKBOX_LABEL'		=> 'Monospace Schriftart',
	'MFPE_CHECKBOX_TOOLTIP'		=> 'Stellt den Text im Editor in einer nicht-proportionalen Schriftart dar',
));