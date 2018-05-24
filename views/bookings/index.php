<?php
use yii\helpers\Html;

$this->title = "Bookings";
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create Booking', ['bookings/create'], ['class'=>'btn btn-primary btn-lg pull-right']); ?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Booking ID</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Room No.</th>
        <th>Guest ID</th>
    </tr>
    <?php foreach($bookings as $booking) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($booking->id, [
                '/bookings/view',
                'id'=>$booking->id]); ?>
        </td>     
        <td><?= $booking->start_date ?></td>
        <td><?= $booking->end_date ?></td>  
        <td><?= $booking->room_id ?></td> 
        <td><?= $booking->guest_id ?></td> 
    </tr>
    <?php endforeach; ?>
</table>