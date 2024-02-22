<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MyApp\User\Users;

class UsersTest extends TestCase
{
    private Users $users;

    protected function setUp(): void
    {
        // Подготовка объекта Users для каждого теста
        $file = __DIR__ . '/practices/users.txt';
        $this->users = new Users($file);
    }

    public function testCheckCredentialsReturnsTrueForValidCredentials()
    {
        $this->assertTrue($this->users->checkCredentials('$username', '$password'));
    }

    public function testCheckCredentialsReturnsFalseForInvalidCredentials()
    {
        $this->assertFalse($this->users->checkCredentials('$username', '$password'));
    }

    public function testCheckCredentialsReturnsFalseForNonexistentUser()
    {
        $this->assertFalse($this->users->checkCredentials('nonexistent_user', 'password'));
    }

}
