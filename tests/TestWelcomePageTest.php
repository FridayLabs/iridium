<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestWelcomePage extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTitleIsCorrect()
    {
        $this->visit('/')->see('Iridium');
    }
}
