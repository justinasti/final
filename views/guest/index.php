<?php
use yii\helpers\Html;

$this->title = "Guests";
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Create Guest', ['guest/create'], ['class'=>'btn btn-primary btn-lg pull-right']); ?>
<h1><?= Html::encode($this->title) ?></h1>

<table class="table table-bordered table-hovered">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone No.</th>
        <th>Address</th>
        <th>Email</th>
    </tr>
    <?php foreach($guest as $guest) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($guest->id, [
                '/guest/view',
                'id'=>$guest->id]); ?>
        </td>     
        <td><?= $guest->fname ?></td>
        <td><?= $guest->lname ?></td>  
        <td><?= $guest->phone ?></td> 
        <td><?= $guest->address ?></td> 
        <td><?= $guest->email ?></td>
    </tr>
    <?php endforeach; ?>
</table>