<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmGenre */

$this->title = 'Update Film Genre: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Film Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="film-genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
