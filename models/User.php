<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public function rules()
    {
        return [
            ['username' , 'string', 'max' => 255],
            ['password' , 'string' , 'min' => 6, 'max' => 255],
            ['email', 'email'],
        ];
    }


    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }


    public function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }


    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function signup()
    {
        $model = new User();
        $model->username = $this->username;
        $model->email = $this->email;
        $model->setPassword($this->password);
        if ($model->save()){
            return $model;
        }
    }

}
