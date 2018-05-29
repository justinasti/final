<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = "Create Guest";
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
	<?= $form->errorSummary($guest); ?>
</div>

<?= $form->field($guest, 'fname')->textInput(); ?>

<?= $form->field($guest, 'lname')->textInput(); ?>

<?= $form->field($guest, 'phone')->textInput(); ?>

<?= $form->field($guest, 'address')->textInput(); ?>

<?= $form->field($guest, 'email')->textInput(); ?>

<div class="form-group">
    <?= Html::submitButton("Create Guest", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>