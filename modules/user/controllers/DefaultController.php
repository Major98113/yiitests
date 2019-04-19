<?php
namespace app\modules\user\controllers;
use Faker\Factory;
use app\models\User;
use yii\web\Controller;
use yii\db\ActiveRecord;
use Yii;

class DefaultController extends Controller{
    public function actionIndex(){
        $users = User::find()->asArray()->all();
        return $this->render('index' , compact('users'));
    }


    public function actionGenerate(){
        $faker = Factory::create();
        for ($i = 0 ; $i < 10 ; $i++){
            $model = new User();
            $model->username = $faker->userName();
            $model->email = $faker->email();
            $model->setPassword($faker->password(6,30));
            $model->save();

        }
    }

    public function actionSignup()
    {
        if (!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $model = new User();

        if($model->load(Yii::$app->request->post()))
        {
            if ($model->signup() && Yii::$app->user->login($model)){
                return $this->goBack();
            }
        }
        else
        {
            return $this->render('signup', compact('model'));
        }
    }




}