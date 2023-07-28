<?php

/** @var yii\web\View $this */

$this->title = 'Aplikasi Logistik';
?>
<div class="site-index">
    <div class="body-content">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h2 class="card-title text-primary">Welcome Back, Unch! 🎉</h2>
                        <p class="mb-4">Check your new badge in your profile.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                        </div>
                        <span>Total Supplier</span>
                        <h3 class="card-title text-nowrap mb-1"><?= Yii::$app->detail->getCountSupplier() ?></h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                        </div>
                        <span>Total Warehouse</span>
                        <h3 class="card-title text-nowrap mb-1"><?= Yii::$app->detail->getCountGudang() ?></h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                        </div>
                        <span> Total Items</span>
                        <h3 class="card-title text-nowrap mb-1"><?= Yii::$app->detail->getCountAllBarang() ?></h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>