<?php

use yii\bootstrap5\Html;


/* @var $this yii\web\View */
/* @var $model common\models\JumlahBarang */

?>
<div class="jumlah-barang-create">
    <?= $this->render('_form', [
        'model' => $model,
        'total' => $total
    
    ]) ?>
</div>
