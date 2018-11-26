<?php
use app\assets\ToursAsset;
ToursAsset::register($this);
 ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Обучение в институтах Австрии">
    <meta name="keywords" content="Австрия, Обучение, Туры в Австрию">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--<!-- Load Facebook SDK for JavaScript -->-->
<!--<div id="fb-root"></div>-->
<!--<script>window.fbAsyncInit = function() {-->
<!--        FB.init({-->
<!--            appId            : '',-->
<!--            autoLogAppEvents : true,-->
<!--            xfbml            : true,-->
<!--            version          : 'v3.2'-->
<!--        });-->
<!--    };-->
<!---->
<!--    (function(d, s, id){-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) {return;}-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = "https://connect.facebook.net/en_US/sdk.js";-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));</script>-->
<!---->
<!--<!-- Your customer chat code -->-->
<!--<div class="fb-customerchat"-->
<!--     attribution=setup_tool-->
<!--     page_id="2189703904617897"-->
<!--     logged_in_greeting="Здравствуйте!  Что Вас интересует? "-->
<!--     logged_out_greeting="Здравствуйте!  Что Вас интересует? ">-->
<!--</div>-->
<?= $content ?>
<!-- Footer Section -->
<div class="footer" >
    <div class="container">
        <div class="col-md-5 contact">
            <h1>О нас</h1>
            <p> Мы - эксперты в сфере образования, туризма, страхования, визовых вопросов и работаем в команде уже более 15 лет.
                Специализируемся на помощи студентам, которые хотят обучаться в в ближних странах Евросоюза - Польше, Чехии, Германии как в государственных, так и в приватных учебных заведениях</p>

        </div>
        <div class="col-md-2 contact footer-menu">
            <h1>Social</h1>
            <ul>
                <li><a href="https://www.facebook.com/studentway.ukraina/">Facebook</a></li>
                <li><a href="https://twitter.com/StudentwayU">Twitter</a></li>
                <li><a href="https://www.instagram.com/studentway_ukraina/">Instagram</a></li>
                <li><a href="https://web.telegram.org/#/im?p=@studentwaypl">Telegram</a></li>
            </ul>
        </div>
        <div class="col-md-5 contact">
            <h1>Контакты</h1>
            <p> 49050, г. Днепр, пр-т Гагарина, 115, офис 44 </p>
            <p> Telephone: +38 097 113 76 29, +38 096 814 11 32</p>
            <p> Fax: +38 056 732 40 55</p>
            <a href="mailto:support@gmail.com">studentway@ua.fm</a> </div>
    </div>
</div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
