<?php

class Register
{

    public function handler($parms)
    {
        try {
            //Hash the password and store the file
            $data = [
                'name' => $parms['name'],
                'email' => $parms['email'],
                'password' => self::hash($parms['password'])
            ];
            $data = json_encode($data);

            self::store($data);

            return "Succeed";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    private static function hash($password)
    {
        //Hash the password and rturn an string
        return password_hash($password, PASSWORD_DEFAULT);
    }
    private static function store($data)
    {
        $file = fopen('database/user.json', 'w');
        fwrite($file, $data);
        fclose($file);
    }
}
