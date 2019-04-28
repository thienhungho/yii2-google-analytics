<?php

namespace thienhungho\GoogleAnalytics\modules\Configuration;

use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Login form
 */
class GoogleAnalyticsForm extends Model
{
    public $tracking_code;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'tracking_code',
                ],
                'required',
            ],
            [
                [
                    'tracking_code',
                ],
                'string',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tracking_code' => Yii::t('app', 'Tracking Code'),
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function config()
    {
        if ($this->validate()) {
            $this->configGoogleAnalytics();

            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configGoogleAnalytics()
    {
        $settings = Yii::$app->settings;
        $settings->set('site_configuration', 'google_analytics_tracking_code', $this->tracking_code);
    }

}
