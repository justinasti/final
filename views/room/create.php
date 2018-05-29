<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = "Create Room";
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
	<?= $form->errorSummary($model); ?>
</div>

<?= $form->field($model, 'price_per_night')->textInput(); ?>

<?= $form->field($model, 'floor')->textInput(); ?>

<?= $form->field($model, 'max_persons')->textInput(); ?>

<?= $form->field($model, 'has_baby_bed')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($model, 'has_shower')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($model, 'has_bath')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($model, 'has_seeview')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<div class="form-group">
    <?= Html::submitButton("Create Room", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>