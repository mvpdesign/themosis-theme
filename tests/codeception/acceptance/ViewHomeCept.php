<?php

$I = new WebGuy($scenario);

$I->amOnPage('/');

$I->wantTo('make sure the page renders');

$I->see('Themosis');
