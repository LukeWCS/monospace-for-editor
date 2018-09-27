<?php
/**
 *
 * Monospace font for Posting Editor (c) 2018 LukeWCS - https://www.wcsaga.org
 *
 */

namespace lukewcs\monospaceforeditor\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'add_language',
		);
	}
	
	public function add_language($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
        	$lang_set_ext[] = array(
			'ext_name' => 'lukewcs/monospaceforeditor',
			'lang_set' => 'posting',
        	);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}