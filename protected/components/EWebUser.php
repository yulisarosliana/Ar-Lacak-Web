<?php
class EWebUser extends CWebUser{
    protected $_model;
    
    public function getIsAdmin(){
        return Yii::app()->user->role == UserLevel::ADMIN;
       }
        
    protected function loadUser(){
        if ($this->_model === null){
            $this->_model = WebUser::model()->findByPk($this->id);
        }
        return $this->_model;
    }
    public function getRole(){
        return $this->getState('id_kategori');
    }
}
?>