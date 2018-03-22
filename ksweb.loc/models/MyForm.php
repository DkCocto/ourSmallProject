<?php

namespace app\models;

use Yii;
use yii\base\Model;
?>

<?php
class MyForm extends Model{ 
    public $name;
    public $email;
    public $file;
    
    public function rules() {
//        parent::rules();
        return [
            [['name', 'email'], 'required', 'message' => 'Не заполнено поле'],
            ['email', 'email', 'message' => 'Некорректный e-mail адресс'],
            [['file'], 'file', 'extensions' => 'jpg, jpeg, png']
            ];
    }
    
}

?>
