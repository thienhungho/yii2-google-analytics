Yii2 Google Analytics
====================
Yii2 Google Analytics for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-google-analytics "*"
```

or add

```
"thienhungho/yii2-google-analytics": "*"
```

to the require section of your `composer.json` file.

Config
------------

Add module Configuration to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Google Analytics Configuration
     */
     'google-analytics-configuration' => [
        'class' => 'thienhungho\GoogleAnalytics\modules\Configuration\ConfigurationModules',
     ],
    ...
],
...
```

### Migration

Modules
------------

[ScriptConfigurations](https://github.com/thienhungho/yii2-google-analytics/tree/master/src/modules/Configuration)

Functions
------------

[Core](https://github.com/thienhungho/yii2-google-analytics/tree/master/src/functions/core.php)

Constant
------------

[Core](https://github.com/thienhungho/yii2-google-analytics/tree/master/src/const/core.php)

Models
------------

[GoogleAnalytics](https://github.com/thienhungho/yii2-google-analytics/tree/master/src/models/GoogleAnalytics.php)