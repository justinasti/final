<?php
use yii\widgets\DetailView;
use yii\helpers\Html;


$this->title = "View Guest: $guest->fname" . " " . "$guest->lname";
$this->params['breadcrumbs'][] = ['label'=>'Guests', 'url'=>['/guest/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span class="pull-right">
    <?= Html::a('Update Guest',
            ['/guest/update','id'=>$guest->id],
            ['class'=>'btn btn-primary btn-lg']);?>
        <?= Html::a('Delete Guest', 
            ['/guest/delete', 'id' => $guest->id], [
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
    'model' => $guest,
    'attributes' => [
        'id',
        'fname',
        'lname',
        'phone',
        'address',
        'email'
    ]
]);