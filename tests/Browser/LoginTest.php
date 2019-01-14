<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase {

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin() {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('LOGIN')
                ->clickLink('Login')
                ->assertSee('Sign in to start your session')
                ->type('email', 'pmrvic@123.com')
                ->type('password', '123456')
                ->press('submit_btn')
                ->assertSee('You are logged in!')
            ->clickLink('Log Out')
            ->assertSee('Dobrodošli na aplikaciju Fakultet');
        });
    }

}
