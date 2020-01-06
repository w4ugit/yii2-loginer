Встановлення
------------------
* Встановлення за допомогою Composer.
```
composer require taruktataruk/yii2-loginer
```
* Виконайте міграцію для створення потрібної таблиці в базі даних (консоль):
```
php yii migrate --migrationPath=vendor/taruktataruk/yii2-loginer/src/migrations --interactive=0
```

* Додайте 2 параметра
```
'adminEmail' => 'admin@web4u.in.ua',
'chatId' => 135821175
```

* В файл 
```
frontend/config/main.php
```
додайте виклик
```
'telegram' => [
    'class' => 'aki\telegram\Telegram',
    'botToken' => '1042070336:AAH8tQzPnyjkmHGyUTvPROMI5ctMqVvxu4w',
]
```
* налаштуйте логування слідуючим чином
```
'log' => [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'taruktataruk\loginer\models\LoginerTarget',
            'levels' => ['error', 'warning']
        ],
    ],
]
```
