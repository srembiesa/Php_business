<?php

use app\helpers\Translate;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataAdditionalAttribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-additional-attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <?= Yii::$app->controller->renderPartial(
            '@app/themes/adminlte2/views/site/_modalWindow',
            [
                'modal' => [
                    'name' => 'cancelFormActionModal',
                    'header' => Translate::_('business', 'Cancel edit your data'),
                    'body' => Translate::_(
                        'business',
                        'You have chosen to cancel the edit your data task, your changes will not be saved'
                    ),
                    'question' => Translate::_(
                        'business',
                        'If this is not your intention, please click on \'Continue\'.'
                    ),
                    'button' => [
                        'label' => Translate::_(
                            'business',
                            'Cancel'
                        ),
                        'class' => 'btn btn-back'
                    ],
                    'leftButton' => [
                        'label' => Translate::_('business', 'Cancel'),
                        'action' => Yii::$app->session->get('urlRedirect'),
                        'style' => 'btn btn-back',
                    ],
                    'rightButton' => [
                        'label' => Translate::_('business', 'Continue'),
                        'style' => 'btn btn-primary',
                        'action' => 'data-dismiss'
                    ],
                ]
            ]
        ); ?>
        <?= Html::submitButton(Translate::_('business', 'Save'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'daid')->textInput() ?>

    <?= $form->field($model, 'oid')->textInput() ?>

    <?= $form->field($model, 'object_type')->dropDownList(
        ['type' => 'Type', 'set' => 'Set', 'object' => 'Object',],
        ['prompt' => '']
    ) ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
