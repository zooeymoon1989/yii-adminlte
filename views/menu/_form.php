<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_show')->checkbox(['class'=>'minimal']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

    $js = <<<js
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue'
    });

js;

$this->registerCssFile('/src/admin_lte/plugins/iCheck/all.css');//引入icheck的CSS文件
//引入icheck的JS文件
$this->registerJsFile('/src/admin_lte/plugins/iCheck/icheck.min.js',
    ['depends'=>
        [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset'
        ],'position'=>\yii\web\View::POS_END
    ]);
$this->registerJs($js);
?>
