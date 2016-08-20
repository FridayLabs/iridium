<?php


class FirstTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function welcomeTitle(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeInTitle('Iridium');
        $I->fillField('email', 'asdads@qweqwe.ru');
        $I->click('button[type=submit]');
        $I->waitForText('Go ahead and check that email!');
    }
}
