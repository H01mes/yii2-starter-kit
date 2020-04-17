<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('frontend', 'Articles')
?>
<div class="container">
    <h1 class="mt-4">
        <?php echo Yii::t('frontend', 'Articles') ?>
    </h1>
    <span class="fas fa-search" data-toggle="collapse" data-target="#search-form"></span>
    <div class="collapse" id="search-form">
        <?php $form = ActiveForm::begin([
                'method' => 'GET',
                'options' => ['class' => 'form-inline']
        ]) ?>
            <div>
                <?php echo $form->field($searchModel, 'title')->label(false)->error(false) ?>
                <?php echo Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-secondary']) ?>
            </div>
        <?php ActiveForm::end() ?>
    </div>
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'hideOnSinglePage' => true,
        ],
        'itemView' => '_item'
    ])?>
</div>
