<?php 

$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('I want to post statuses to my profile.');

$I->signIn();

$I->amOnPage('statuses');

$I->postAStatus('My first post!');

$I->seeInCurrentUrl('/statuses');

$I->seeRecord('statuses', ['body' => 'My first post!']);
$I->see('My first post!');