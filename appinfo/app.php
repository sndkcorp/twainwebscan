<?php
\OC::$server->getNavigationManager()->add(array(
	'id'    => 'twainwebscan',
	'order' => 6,
	'href' 	=> "javascript:void(0)",
	'icon' => \OC::$server->getURLGenerator()->imagePath('twainwebscan', 'scan.svg'),
	'name'  => 'Scan'
));

\OCP\Util::addStyle('twainwebscan', 'tws_style');
\OCP\Util::addScript('twainwebscan', 'tws_script');