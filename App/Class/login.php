<?php
session_start();
class Login
{

    public function handler($parms)
    {
        $user = self::getUser();
        var_dump($user);
        if (($parms['email'] == $user->email) && password_verify($parms['password'], $user->password)) {
            echo "Succeed";
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
        }
    }
    private static function getUser()
    {
        $user = file_get_contents('database/user.json');
        return json_decode($user);
    }
}
