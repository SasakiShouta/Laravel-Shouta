<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User(['name' => 'Sasaki Shouta']);
        $this->assertEquals('Sasaki Shouta', $user->name);
    }
    
}
