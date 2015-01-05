<?php
use \AcceptanceTester;

class HomeCest
{
    // test
    public function test(AcceptanceTester $I)
    {
        $I->am('a guest');
        $I->wantTo('ensure that the home page works');
        $I->amOnPage('/');
        $I->see('Congratulations!');
    }
}
