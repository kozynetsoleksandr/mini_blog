<?php
/**
 * User: TheCodeholic
 * Date: 8/11/2019
 * Time: 2:01 PM
 */
/** @var $model \app\models\Article */
?>

<div class="">
    <a href="<?php echo \yii\helpers\Url::to(['article/view', 'slug' => $model->slug]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->body), 40) ?>
    </div>
    <p class="text-muted text-right">
        <small>
            Created at: <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
            By: <?php echo $model->createdBy->username ?>
        </small>
    </p>
    <hr>
</div>