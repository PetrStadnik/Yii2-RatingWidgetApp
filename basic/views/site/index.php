<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\rating\StarRating;
use app\models\Rating;
use yii\db\ActiveRecord;
use yii\helpers\Url;
 
//zobrazení obrázku
 echo Html::img('@web/imgJa.jpg', ['height'=>'400px', 'width'=>'800px']);
 
$form = ActiveForm::begin(); 
//zobrazení hodnocení a jeho parametry
echo $form->field($model, 'rating')->widget(StarRating::classname(), [
    'pluginOptions' => ['size'=>'lg',
        'min' => 0,
        'max' => 5,
        'step' => 1,
        'size' => 'lg',
        'starCaptions' => [
            0 => 'Hnusný',
            1 => 'Nic moc',
            2 => 'No nevím no',
            3 => 'Jde to',
            4 => 'Dobrý',
            5 => 'Moooc hezký',
            
        ],
        'starCaptionClasses' => [
            0 => 'text-danger',
            1 => 'text-danger',
            2 => 'text-warning',
            3 => 'text-info',
            4 => 'text-primary',
            5 => 'text-success',
            
        ]]
]);
 
?>
<div class="form-group">
    <?= Html::submitButton('Odeslat hodnocení', ['class' => 'btn btn-primary']) ?>
</div>

                <?php ActiveForm::end(); ?>


<?php //Zobrazení widgetu s průměrným hodnocením ?>
Průměrné hodnocení
<?= StarRating::widget([
    'name' => 'rating_21',
    'value' => $model->prumer,
    'pluginOptions' => [
        'readonly' => true,
        'showClear' => false,
        'showCaption' => false,
    ],
]);