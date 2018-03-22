<?php
use app\components\MenuWidget;
?>  

<?=$name ?>

<?php

echo MenuWidget::widget(compact('message', 'name', 'hooby'));
?>


