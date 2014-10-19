<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DbTest extends CTestCase{
    Public function testConnection(){
        $this->assertNotNull(Yii::app()->db->connectionString);
    }
}