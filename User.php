<?php

include_once './DB.php';

class User
{
    //liet ke toan bo du lieu trong bang users
    static public function all()
    {
        $sql = "select * from users";
        $users = DB::execute($sql);
        return $users;
    }
}
