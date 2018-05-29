<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = "Update Room";
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
	<?= $form->errorSummary($room); ?>
</div>


<?= $form->field($room, 'price_per_night')->textInput(); ?>

<?= $form->field($room, 'floor')->textInput(); ?>

<?= $form->field($room, 'max_persons')->textInput(); ?>

<?= $form->field($room, 'has_baby_bed')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($room, 'has_shower')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($room, 'has_bath')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<?= $form->field($room, 'has_seeview')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>' ']); ?>

<div class="form-group">
    <?= Html::submitButton("Update Room", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>