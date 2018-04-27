<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->view->title = 'Главная';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    /**
     * Download action.
     *
     * @return Response
     */
    
    public function actionDownload()
    {
        $this->view->title = 'Download';
        return $this->render('download');
    }
    
    /**
     * BusnessOffers action.
     *
     * @return Response
     */
    
    public function actionBusnessOffers()
    {
        $this->view->title = 'Busness Offers';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('busness-offers', [
            'model' => $model,
        ]);
    }
    
    /**
     * BuyASerialKey action.
     *
     * @return Response
     */
    
    public function actionBuyASerialKey()
    {
        $this->view->title = 'Buy A Serial Key';
        
        return $this->render('buy-a-serial-key');
    }
    
    /**
     * BuyASerialKey action.
     *
     * @return Response
     */
    public function actionFeaturesInfo() {
        $this->view->title = 'Features Info';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
//            return $this->render('login');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('features-info', [
            'model' => $model,
        ]);
        
    }
    
    /**
     * PhpModulesList action.
     *
     * @return Response
     */
    public function actionPhpModulesList() {
        
        $this->view->title = 'Php Modules List';
        return $this->render('php-modules-list');
        
    }
    
    /**
     * PhpModulesList action.
     *
     * @return Response
     */
    public function actionServerModulesList() {
        
        $this->view->title = 'Server Modules List';
        return $this->render('server-modules-list');
        
    }
    
    /**
     * Scheduler action.
     *
     * @return Response
     */
    public function actionScheduler() {
        
        $this->view->title = 'Scheduler';
        return $this->render('scheduler');
        
    }
    
    /**
     * Scheduler action.
     *
     * @return Response
     */
    public function actionKswebControl() {
        
        $this->view->title = 'Ksweb Control';
        return $this->render('ksweb-control');
        
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $this->view->title = 'Contact';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
