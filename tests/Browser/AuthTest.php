<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    public function test_a_user_can_register_correctly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'User')
                ->type('email', 'user@user.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('REGISTER')
                ->assertSee("You're logged in");
        });
    }
}
