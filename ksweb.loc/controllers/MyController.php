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
        
//        $storagePath = Yii::getAlias('@app/web/files/');
//       
//        // check filename for allowed chars (do not allow ../ to avoid security issue: downloading arbitrary files)
//        if (!preg_match('/^[a-z0-9]+\.[a-z0-9]+$/i', '9.docx') || !is_file($storagePath.'9.docx')) {
//            throw new \yii\web\NotFoundHttpException('The file does not exists.');
//        }
//        $files = Yii::$app->response->sendFile($storagePath.'9.docx');
//        return $this->render('download', compact('files'));
        //return Yii::$app->response->sendFile('C:\OSPanel\domains\ksweb.loc\files\88.jpg'); 
//        return Yii::$app->response->sendFile($storagePath.'7.jpg', '7.jpg'); 
//        return $this->render('download');
        
        $storagePath = Yii::getAlias('@app/web/files/'); 
        return Yii::$app->response->sendFile($storagePath);
    }

}    

?>

