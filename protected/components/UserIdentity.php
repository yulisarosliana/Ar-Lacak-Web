<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=WebUser::model()->findByAttributes(array('username'=>$this->username));
		//$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($user->password!==$this->password)
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->username=$user->username;
			$this->setState('username', $user->username);
			$this->setState('id_kategori', $user->id_kategori);
			$this->setState('id', $user->id_web_user);

			//$this->setState('status', $user->level=='1');
			Yii::app()->session->add('username', $user->username);
			Yii::app()->session->add('id_kategori', $user->id_kategori);
			Yii::app()->session->add('id', $user->id_web_user);

			$user->save();
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}