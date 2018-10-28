<?php
class UserLevel {
    const ADMIN = 1;
    
    public static function getLabel ($user){
        if ($user == self::ADMIN)
            return ADMIN;                             
    }
    public static function getList(){
        return array (
        self::ADMIN => self::getLabel(self::ADMIN),
        );
    }
}
?>