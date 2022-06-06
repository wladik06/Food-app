<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_duplication()
    {
        $user1 = User::make([
            'name' => 'User1',
            'email' => 'user1@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'User2',
            'email' => 'user2@gmail.com'
        ]);

        $this->assertTrue($user1 -> name != $user2 -> name);
    }

//    public function test_delete()
//    {
//        $user = User::factory() -> count(1) -> make();
//
//        if($user) {
//            $user -> delete();
//        }
//
//        $this -> assertTrue(true);
//    }
//
//    public function test_store_user()
//    {
//        $response = $this -> post('/register', [
//            'name' => 'User1',
//            'email' => 'user1@gmail.com',
//            'password' => 'user1234'
//        ]);
//
//        $response -> assertRedirect('/login');
//    }


}
