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

<aside class="shadow">
    <?php echo \yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'User Management',
                'url' => ['/usermanagement/index']
            ],
            [
                'label' => 'User Group',
                'url' => ['/user/group']
            ],
            [
                'label' => 'User Provisioning',
                'url' => ['/user/provisioning']
            ],
            [
                'label' => 'Equipment Management',
                'url' => ['/equipment/management']
            ],
            [
                'label' => 'Equipment Group',
                'url' => ['/equipment/group']
            ],
            [
                'label' => 'Portal Admin',
                'url' => ['/user/admin']
            ]
        ]
    ])
    ?>


    <div class="footer-custom">
        <p class="footer-main">&copy; <?= Html::encode(Yii::$app->name) ?> | <?= date('M Y') ?></p>
        <!-- <p class="float-end"><?= Yii::powered() ?></p> -->
        <p class="footer-text">version 1.1 - <?= date('d M Y') ?></p>
        <i class="fa-solid fa-user-gear"></i>
    </div>

</aside>

