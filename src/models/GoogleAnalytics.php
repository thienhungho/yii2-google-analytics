<?php
/**
 * Created by PhpStorm.
 * User: hohung
 * Date: 2019-04-28
 * Time: 16:18
 */

namespace thienhungho\GoogleAnalytics\models;


class GoogleAnalytics
{
    public static function getTrackingCode() {
        $settings = Yii::$app->settings;
        return $settings->get('site_configuration', 'google_analytics_tracking_code', '');
    }
}