<?php

class admin
{
    // static public function insert()
    // {
    //     $stmt = $con->prepare("INSERT INTO 

    //     items(admin_name, email, password)

    //     VALUES(:zname, :zemail, :zpass)");

    //     $stmt->execute(
    //         array(
    //             'zname' => $name,
    //             'zemail' => $email,
    //             'zpass' => $pass


    //         )
    //     );
    // }
    // static public function delete()
    // {
    // }
    // static public function update()
    // {
    // }
    static public function select()
    {
        $stmt = database::connect()->prepare("SELECT * FRPM admin");

        $stmt->execute();

        $admins = $stmt->fetchALL();

        return $admins;
    }
}
