<?php

putenv("PARAGLIDE_ENVIRONMENT=live");
    
require dirname(__FILE__).'/../../server/php/paraglide.php';

/* $advertiser = User::create('dev@advertiser.com', 'heyyoimadvertiser', 'UnitTestAdvertiser', 'UnitTestChartboost', 'UnitTest Company'); */
/*

User::login('zhichen@chartboost.com', 'YYyqh2240');

$user = User::current();
var_dump($user);
*/

echo "xxx";


		
		$device1 = Device::find_by_('uuid', 'ao1');
		var_dump($device1->l);
		var_dump($device1);