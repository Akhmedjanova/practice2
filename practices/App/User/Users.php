<?php
declare(strict_types=1);

namespace MyApp\User;
class Users
{
    private array|false $users;
    private mixed $file;


    public function __construct($file)

    {
        $this->users = file($this->file = $file,FILE_IGNORE_NEW_LINES);
    }
    public function checkCredentials($username,$password)
    {
     foreach ($this->users as $user) {
            list($userLogin, $userPassword) = explode(':', $user);
                    if (($username === $userLogin) && ($password === $userPassword)) {
                return true;
            }
        }
        return false;
    }
}