<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Google Analytics');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Google Analytics');

$settings = Yii::$app->settings;

if (empty($model->tracking_code)) {
    $model->tracking_code = $settings->get('site_configuration', 'google_analytics_tracking_code', '');
}

?>

<?php $form = ActiveForm::begin(['id' => 'google-analytics-form']); ?>

<?=
$form->field($model, 'tracking_code')->widget(
    'trntv\aceeditor\AceEditor',
    [
        'mode' => 'javascript',
        'theme' => 'monokai',
        'readOnly' => 'false',
    ]
)
?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>