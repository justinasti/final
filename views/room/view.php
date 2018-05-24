<?php
use yii\widgets\DetailView;
use yii\helpers\Html;


$this->title = "View Room: $room->id";
$this->params['breadcrumbs'][] = ['label'=>'Rooms', 'url'=>['/room/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span class="pull-right">
    <?= Html::a('Update Room',
            ['/room/update','id'=>$room->id],
            ['class'=>'btn btn-primary btn-lg']);?>
        <?= Html::a('Delete Room', 
            ['/room/delete', 'id' => $room->id], [
            'class' => 'btn btn-danger btn-lg',
            'data' => [
                'method' => 'post',                
                'confirm' => 'Are you sure you want to delete this record?',
                
            ],
        ]) ?>
</span>

<h1><?= $this->title; ?></h1>


<br>

<?= DetailView::widget([
    'model' => $room,
    'attributes' => [
        'id',
        'price_per_night',
        'floor',
        'max_persons',
        'has_baby_bed',
        'has_shower',
        'has_bath',
        'has_seeview'
    ]
]);