<?php

$I = new WebGuy($scenario);

$I->wantTo('view the 404 page');

$I->amOnPage('/jdsflfkdsjtpeiorjglkdfhgslkv');

/* Place any custom content that you want to see here */
$I->see('Page not found');