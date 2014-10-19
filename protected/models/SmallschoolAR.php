<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class SmallschoolAR extends CActiveRecord{
    
    public function behaviors() {
            return array(
              'CTimeStampBehavior'=>array(
                  'class'=>'zii.behaviors.CTimeStampBehavior',
                  'createAttribute'=>'create_time',
                  'updateAttribute'=>'update_time',
                  'setUpdateOnCreate'=>true,
              ),  
            );
        }
        
        protected function beforeSave() {
            if(NULL !==  Yii::app()->user)
                $id = Yii::app()->user->id;
            else
                $id = 1;
            
            if($this->isNewRecord)
                $this->create_user_id = $id;
            
            $this->update_user_id = $id;
            
            return parent::beforeSave();
        }
        
}
