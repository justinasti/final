<?php
use yii\widgets\DetailView;
use yii\helpers\Html;


$this->title = "View Booking: $bookings->id";
$this->params['breadcrumbs'][] = ['label'=>'Bookings', 'url'=>['/bookings/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span class="pull-right">
    <?= Html::a('Update Booking',
            ['/bookings/update','id'=>$bookings->id],
            ['class'=>'btn btn-primary btn-lg']);?>
        <?= Html::a('Delete Booking', 
            ['/bookings/delete', 'id' => $bookings->id], [
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
    'model' => $bookings,
    'attributes' => [
        'id',
        'start_date',
        'end_date',
        'guest_id',
        'room_id',
        'total_price'
    ]
]);