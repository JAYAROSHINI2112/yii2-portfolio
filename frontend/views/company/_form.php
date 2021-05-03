<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="clear"></div>

<div class="content">

    <div class="row"></div>
    <?php $form = ActiveForm::begin(['id' => 'company-form']); ?>

    <div class="formFieldWrap homeinout">
        <fieldset>
            <?= $form->field($model, 'company_name')->textInput([
                'autofocus' => true,
                'class' => 'contactField',
                'placeholder' => 'Enter Company Name',
            ]) ?>
        </fieldset>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'tagline')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'Company Tag Line',
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'about')->textarea([
            'rows' => 10,
            'cols' => 50,
            'class' => 'contactField heightunset',
            'placeholder' => 'About Company'
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'ytlink')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'YouTube link',
        ]) ?>
    </div>

    <div class="formFieldWrap homeinout">
        <?= $form->field($model, 'maplink')->textInput([
            'autofocus' => true,
            'class' => 'contactField',
            'placeholder' => 'Enter Google Map Link',
        ]) ?>
    </div>

    <div class="formSubmitButtonErrorsWrap contactFormButton">
        <?= Html::submitButton('Submit', [
            'class' => 'buttonWrap button button-green contactSubmitButton',
            'name' => 'aboutme-button'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

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