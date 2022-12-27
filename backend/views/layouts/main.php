<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$this->beginContent( viewFile: '@backend/views/layouts/base.php');
?>
<?php echo $this->render(view: '_header') ?>

<main role="main" class="d-flex">
    
    <?php echo $this->render(view: '_sidebar') ?>

    <div class="content-wrapper p-4">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php /** echo $this->render(view: '_footer') */ ?>

<?php $this->endContent() ?>