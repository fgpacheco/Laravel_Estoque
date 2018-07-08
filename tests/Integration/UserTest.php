<?php

namespace Tests\Integration;

use estoque\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testItShouldCreateUser()
    {
        $user = User::create([
          'name' => 'Francesco',
          'email' => 'hey@hellofrancesco.com',
          'password' => 'such-security'
        ]);

        $this->assertDatabaseHas('users', [
          'name' => 'Francesco',
          'email' => 'hey@hellofrancesco.com'
        ]);
    }
}