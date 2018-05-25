<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use dosamigos\datetimepicker\DateTimePicker;
use app\models\Guest;
use app\models\Room;


$this->title = "Update Booking";
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<div>
	<?= $form->errorSummary($bookings); ?>
</div>

<div class="form-group">
<label for="end_date">Start Date</label>
<?= DateTimePicker::widget([
    'model' => $bookings,
    'attribute' => 'start_date',
    'template' => '{addon}{input}',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd hh:ii'
    ]
]);?>
</div>

<div class="form-group">
<label for="end_date">End Date</label>
<?= DateTimePicker::widget([
    'model' => $bookings,
    'attribute' => 'end_date',
    'template' => '{addon}{input}',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd hh:ii'
    ]
]);?>
</div>

<?php 
	$guest = Guest::find()->all();

	$listData = ArrayHelper::map($guest, 'id', 'fname', 'lname');
?>

<?= $form->field($bookings, 'guest_id')->dropDownList($listData, ['prompt' => ' ']); ?>

<?php 
	$room = Room::find()->all();

	$listData = ArrayHelper::map($room, 'id', 'id');
?>

<?= $form->field($bookings, 'room_id')->dropDownList($listData, ['prompt' => ' ']); ?>

<?= $form->field($bookings, 'total_price')->textInput(); ?>

<div class="form-group">
    <?= Html::submitButton("Update Booking", ['class'=>'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>