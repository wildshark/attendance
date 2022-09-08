<?php

class user{

    public static function login($conn,$request){

        $sql="SELECT user_account.* FROM user_account WHERE user_account.username =? AND user_account.`password` =?";
        $stmt = $conn->prepare($sql);
        $stmt->execute($request);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>