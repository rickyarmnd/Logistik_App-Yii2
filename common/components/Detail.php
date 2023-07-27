<?php

namespace common\components;

use common\models\Barang;
use common\models\Gudang;
use common\models\Supplier;
use Yii;
use yii\base\Component;


class Detail extends Component{

    public function getCountSupplier(){
        return Supplier::find()->count();
    }
    public function getCountGudang(){
        return Gudang::find()->count();
    }
    public function getCountAllBarang(){
        return Barang::find()->count();
    }
}
