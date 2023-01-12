<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aa $model */

$this->title = 'mHub . AA - Create';
$this->params['breadcrumbs'][] = ['label' => 'Aas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
