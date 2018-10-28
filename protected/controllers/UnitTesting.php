<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnitTesting
 *
 * @author yulisa rosliana
 */

use PHPUnit\Framework\TestCase;

class UnitTesting extends TestCase
{

    public function getUser()
    {
        $user = User::model()->findAll();
        return $user;
    }


}
