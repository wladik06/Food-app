<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Collection');
        });
    }

    public function testLogin()
    {
        $user = User::factory()->create([
            'email' => 'test1@test.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user -> email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/');
        });
    }
}
