<?php

$I = new AcceptanceTester($scenario);
$I->am('a guest');
$I->wantTo('ensure that the home page works');
$I->amOnPage('/');
$I->see('Congratulations!');
