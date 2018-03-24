<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\MyForm;
use yii\web\Response;

class MyController extends Controller {
    
    public function actionIndex() {
        $girl = 'cool siski and zadnici';
        return $this->render('index', ['girls' => $girl]);
    }
    
    public function actionMy() {
        
        $this->view->title = 'страница для формы';
        $var = 'many vodkies';
        
        $form = new MyForm();
        return $this->render('my', [
            'form' => $form,
            'var' => $var
                ]);
    }
    
    public function actionDownload() {
        
        $this->view->title = 'Загрузка';
        
        $storagePath = Yii::getAlias('@app/files/');
       
        // check filename for allowed chars (do not allow ../ to avoid security issue: downloading arbitrary files)
        if (!preg_match('/^[a-z0-9]+\.[a-z0-9]+$/i', '7.jpg') || !is_file($storagePath.'7.jpg')) {
            throw new \yii\web\NotFoundHttpException('The file does not exists.');
        }
        $files = Yii::$app->response->sendFile($storagePath.'7.jpg', '7.jpg')->send();
        return $this->render('download');
        //return Yii::$app->response->sendFile('C:\OSPanel\domains\ksweb.loc\files\88.jpg'); 
//        return Yii::$app->response->sendFile($storagePath.'7.jpg', '7.jpg'); 
//        return $this->render('download');
    }

}    

?>

