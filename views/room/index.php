<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = "Rooms";
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('Create Room',['/room/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>
    
<h1><?= Html::encode($this->title) ?></h1>




    <table class="table table-bordered table-hovered">
    <tr>
        <th>Room #</th>
        <th>Price</th>
        <th>Floor</th>
        <th>Max Persons</th>
        <th>Has Baby Bed</th>
        <th>Has Shower</th>
        <th>Has Bath</th>
        <th>Has Seeview</th>
    </tr>
    <?php foreach($room as $room) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($room->id, [
                '/room/view',
                'id'=>$room->id]); ?>
        </td>    
        <td><?= $room->price_per_night ?></td>  
        <td><?= $room->floor ?></td>
        <td><?= $room->max_persons ?></td>  
        <td><?= $room->has_baby_bed ?></td> 
        <td><?= $room->has_shower ?></td> 
        <td><?= $room->has_bath ?></td>
        <td><?= $room->has_seeview ?></td>  
    </tr>
    <?php endforeach; ?>
</table>
    