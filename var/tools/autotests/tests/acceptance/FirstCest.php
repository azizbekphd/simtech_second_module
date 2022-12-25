<?php

class FirstCest
{
    public function test(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->click(['xpath' => '//*[@id="account_info_links_14"]/li[1]/a']);
        $I->fillField(['id' => 'login_main_login'], "johndoe@gmail.com");
        $I->fillField(['id' => 'psw_main_login'], "HardPassword");
        $I->click(['xpath' => '//*[@id="tygh_main_container"]/div[3]/div/div[2]/div[1]/div/div/div/form/div[3]/div[1]/button']);

        $I->amOnPage('/index.php?dispatch=departments.view');
        $I->seeElement(['xpath' => '/html/body/div[1]/div[4]/div[3]/div/div[2]/div/div/div/div/div/div[1]/div/div[1]/a/img']);
        $I->see('Department 1');
        $I->see('Admin Admin');

        $I->click('Department 1');

        $I->see('Customer Customer');
        $I->see('Customer2 Customer2');

        $I->makeHtmlSnapshot("success");
        
        $I->click('My Account');
        $I->click('Sign out');

        $I->see('Sign in');
    }
}
