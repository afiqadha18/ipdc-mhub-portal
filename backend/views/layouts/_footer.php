<?php
/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
?>

<footer class="footer mt-auto py-2 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> | <?= date('M Y') ?></p>
        <!-- <p class="float-end"><?= Yii::powered() ?></p> -->
        <p class="float-end">version 1.1 - <?= date('d M Y') ?></p>
    </div>
</footer>