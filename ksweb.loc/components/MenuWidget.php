<?php

namespace app\components;
use yii\base\Widget;

class MenuWidget extends Widget{
    //put your code here
    public $message;
    public $name;
    public $hobby;
    
    public function run() {
        
//        return 'KSWEB SETTINGS';
//        return  $this->message;
          return ['message' => $this->message, 
            'message' => $this->message, 
            'hobby' => $this->hobby
                ];
    }
}
