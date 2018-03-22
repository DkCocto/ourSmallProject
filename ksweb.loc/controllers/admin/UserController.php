<?php

namespace app\controllers\admin;

use Yii;
use yii\web\Controller;
use \yii\web\UploadedFile;
use yii\web\Cookie;
use app\models\MyForm;
use app\models\LoginForm;
use yii\helpers\Html;

class UserController extends Controller {
    
    public $layout = 'test';
    
    public function actionIndex() {
//        $this->layout = 'test';
        
        $this->view->title = 'Главная страница администратора';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевые слова']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы']);
        return $this->render('index', compact('girl'));
//        return 'ADMIN';
    }
    
    public function actionMy() {
        
        $this->view->title = 'страница для формы';
        
        $form = new MyForm();
        
        if($form->load(Yii::$app->request->post()) && $form->validate()) {
            $name = Html::encode($form->name);
            $email = Html::encode($form->email);
            $form->file = UploadedFile::getInstance($form, 'file');
            $form->file->saveAs('img/portfolio/' .$form->file->baseName.'.'.$form->file->extension);
        } 

        return $this->render('my', [
            'form' => $form
                ]);
    }
    
    public function actionLogin() {
        
        $this->view->title = 'страница для формы 2';
        
        $login = new LoginForm();
        return $this->render('login',
                ['login' => $login
                ]);
    }
    
    public function actionUser() {
        $name = Yii::$app->request->get('name');
        
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'name',
            'value' => $name,
        ]));
        return $this->render('user', [
                'name' => $name,
                ]);
    }
   
}

