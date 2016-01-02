<?php
/**
 * @var $this  \yii\web\View
 */

use yii\helpers\Html;
use yii\easyii\modules\feedback\api\Feedback;


$this->registerMetaTag([
    'name'=>'description',
    'content'=>'Автосервис Автодело22 в Барнауле предоставляет ряд услуг по ремонту автомобилей: Геометрия, Подготовка А/М к техосмотру, Регулировка фар под ЕВРО стандарт, СО СН, ремонт стекол, Промывка топливных систем, Чистка форсунок, Шиномонтаж, КАП ремонт ДВС, Ремонт ходовой части, Помощь в купле-продаже АМ, Отогрев автомобилей, Автоэлектрик'
]);

$this->registerMetaTag([
    'name'=>'keywords',
    'content'=>'Автосервис, Автодело22,Автосервис в Барнауле,Автосервис барнаул, ремонт автомобилей, Геометрия, Подготовка А/М к техосмотру, Регулировка фар под ЕВРО стандарт,регулировка фар, СО СН, ремонт стекол, Промывка топливных систем, Чистка форсунок, Шиномонтаж, КАП ремонт ДВС, Ремонт ходовой части, Помощь в купле-продаже АМ, Отогрев автомобилей, Автоэлектрик'
]);

$asset = \app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <!-- Banner -->
    <div id="banner" class="bg-blur">
        <!-- Start Header -->
        <div id="header">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Start Logo / Text -->
                        <a class="navbar-brand text-logo" href="#"><i class="fa fa-car"></i>АВТОСЕРВИС «Авто Дело 22»</a>
                        <!-- End Logo / Text -->

                        <!-- Start Logo / Text -->
                        <span class="text-contacts" href="#">
                            <i class="fa fa-phone"></i> 390-390, 8 (923) 725-01-01, 8 (960) 958-65-17<br>
                            <i class="fa fa-map-marker"></i> 40 лет Октября, 11а
                        </span>
                        <!-- End Logo / Text -->
                    </div>
                    <!-- Start Navigation -->
                    <div class="navigation navbar-collapse collapse">
                        <ul class="nav navbar-nav menu-right">
                            <li><a href="#banner">Главная</a></li>
                            <li><a href="#features">Наши услуги</a></li>
                            <li><a href="#testimonials">Отзывы</a></li>
                            <li><a href="#contact">Контакты</a></li>
                        </ul>
                    </div>
                    <!-- End Navigation  -->
                </div>
            </nav>
        </div>
        <!-- End Header -->
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <!-- Start Header Text -->
                    <div class="col-md-7 col-sm-7">
                        <h1>Услуги <strong>автосервиса</strong></h1>
                        <ul class="banner-list">
                            <li><i class="fa fa-check"></i>Геометрия</li>
                            <li><i class="fa fa-check"></i>Подготовка А/М к техосмотру <br><small>Регулировка фар под ЕВРО стандарт, СО СН, ремонт стекол</small></li>
                            <li><i class="fa fa-check"></i>Промывка топливных систем <br><small>Чистка форсунок</small></li>
                            <li><i class="fa fa-check"></i>Шиномонтаж</li>
                            <li><i class="fa fa-check"></i>КАП ремонт ДВС</li>
                            <li><i class="fa fa-check"></i>Ремонт ходовой части</li>
                            <li><i class="fa fa-check"></i>Помощь в купле-продаже АМ</li>
                            <li><i class="fa fa-check"></i>Отогрев автомобилей</li>
                            <li><i class="fa fa-check"></i>Автоэлектрик</li>
                        </ul>
                    </div>
                    <!-- End Header Text -->
                    <!-- Start Banner Optin Form-->
                    <div class="col-lg-4 col-md-4 col-md-offset-1 col-sm-5">
                        <div class="banner-form">
                            <div class="form-title">
                                <h2>Запишитесь на диагностику</h2>
                            </div>
                            <div class="form-body">
                                <p>Отправьте запрос на диагностику, и мы перезвоним Вам в ближайшее время</p>
                                    <?=Html::beginForm('/','post',['id'=>"banner-form", 'class'=>"form"])?>
                                    <div class="form-group">
                                        <input name="ContactForm[name]" id="banner-name" type="text" class="form-control" required placeholder="Ваше имя">
                                    </div>
                                    <div class="form-group">
                                        <input name="ContactForm[phone]" id="banner-email" type="text" class="form-control" required placeholder="Ваш телефон">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-submit">Отправить запрос</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner Optin Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

<?=$content?>

    <!-- Footer Bottom -->
    <footer class="footer footer-sub">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <p>&copy; avtodel22.ru. All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <p class="copyright">Создание сайта <i class="icon-heart"></i> <a href="http://www.awebsite.ru">AWEBSite.ru</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>