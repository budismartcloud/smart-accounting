<?php

Route::get('accounting-rules', function(){
	echo 'Hello from the accounting-rules package!';
});

Route::get('say-hello', 'Smartcloud\AccountingRules\AccountingRulesController@sayHello');