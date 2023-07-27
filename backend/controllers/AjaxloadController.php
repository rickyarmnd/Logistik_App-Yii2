<?php

namespace backend\controllers;

use common\models\RefKecamatan;
use common\models\RefKecamatanKota;
use Yii;
use yii\web\Controller;

class AjaxLoadController extends Controller{

    public function actionGetIdKab()
    {
        $keys = Yii::$app->request->post('keys');
        $keys = explode("|", $keys);

        if (!$keys[0]) {
            return false;
        }

        $kabkota = RefKecamatanKota::find()->where([
            'id_provinsi' => (int)$keys[0],
        ])->all();

        // echo "<option value='0'>-Pilih Kabupaten/Kota-</option>";
        foreach ($kabkota as $d) {
            echo "<option value='$d[id]'>$d[nama_kab_kota]</option>";
        }
    }
    public function actionGetIdKec()
    {
        $keys = Yii::$app->request->post('keys');
        $keys = explode("|", $keys);

        if (!$keys[0]) {
            return false;
        }

        $kabkota = RefKecamatan::find()->where([
            'id_kab_kota' => (int)$keys[0],
        ])->all();

        // echo "<option value='0'>-Pilih Kabupaten/Kota-</option>";
        foreach ($kabkota as $d) {
            echo "<option value='$d[id]'>$d[nama_kecamatan]</option>";
        }
    }



}

