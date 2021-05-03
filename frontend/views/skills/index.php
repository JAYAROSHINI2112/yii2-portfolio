<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Skills';
?>
<div class="content">
    <h3 class="center-text">Skills</h3>

    <?php $k = 0;
    if ($k) { ?>
        <div class="alert alert-green bg-green-dark center-text ">
            <i class="fa fa-check-square"></i> skill records has been created successfully.
        </div>

        <div class="alert alert-danger bg-red-light center-text ">
            <i class="fa fa-check-square"></i> Skill record has been deleted successfully.
        </div>
    <?php } ?>
    <p>
        <?= Html::a(
            'Add Skills',
            ['skills/create'],
            ['class' => 'button button-fullscreen button-center button-green']
        ) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'id' => 'example',
            'class' => 'table-responsive'
        ],
        'columns' => [
            [
                'header' => 'S. No.',
                'class' => 'yii\grid\SerialColumn'
            ],
            [
                'attribute' => 'skillname',
                'header' => 'Skill Name'
                // 'content' => function ($model) {
                //     return $model->getEventLabels()[$model->r_event];
                // }
            ],
            [
                'attribute' => 'skillvalue',
                'header' => 'Skill Value',
                'content' => function ($model) {
                    if ($model->skillvalue)
                        return $model->skillvalue;
                    else
                        return '';
                }
            ],
            [
                'header' => 'Edit',
                'content' => function ($model) {
                    return $this->render('_edit', ['model' => $model]);
                }
            ],
        ],
    ]); ?>

    <div class="vjliti"></div>

    <div class="center-text">
        <!-- <?= Html::a(
                    'Preview Card',
                    ['#'],
                    [
                        'class' => 'button-vjNichenuBhuru button',
                        'target' => '_blank',
                    ],
                )
                ?> -->

        <?= Html::a(
            'Dashboard',
            ['/site/dashboard'],
            [
                'class' => 'button-vjNichenuBhuru button',
                // 'target' => '_blank',
            ],
        )
        ?>

    </div>
</div>