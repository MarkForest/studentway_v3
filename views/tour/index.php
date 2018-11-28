
<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tours | Austria';
 ?>
<div class="wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#00aeda; margin-top: -10px ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll" style="padding-top: 10px">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a  href="#main" style="color: white; text-decoration: none;" >
                            <p style=" font-family: 'Open Sans', sans-serif ">Агентство StudentWay</p>
                        <p style="font-size: 12px; margin-top: 5px "> т. 067 636 72 47</p>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="page-scroll " style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';" href="#main">Главная</a></li>
                        <li><a class="page-scroll" style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';"href="#classes">Инфо</a></li>
                        <li><a class="page-scroll" style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';"href="#features">Про университеты</a></li>
                        <li><a class="page-scroll" style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';"href="#review">Отзывы</a></li>
                        <li><a class="page-scroll" style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';"href="#pricing">Цены</a></li>
                        <li><a class="page-scroll" style="font-weight: 800; font-size: 20px; color: #5f5f5f;" onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='#5f5f5f';"href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->

    <div class="main app form" id="main" ><!-- Main Section-->
        <div class="cta-sub2 no-color">
            <div class="container nopadding" >
                <div class="col-md-12">
                    <div class="hero-content text-center">
                        <h1 class="wow fadeInUp newcll" data-wow-delay="0.1s" style="color: white">Обучение в Университетах Австрии</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"style="color: white;font-size: larger; font-weight:bold  "> Университеты Австрии открывают большие возможности и перспективы для студентов любых специальностей </p>

                        <a href="https://m.me/studentway.ukraina?ref=w3726749" class="btn btn-action wow fadeInUp"

                           style="visibility: visible; animation-name: fadeInUp;">Получить консультацию через Messenger</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classes Section -->
        <div class="pitch text-center" id="classes">
            <div class="container">
                <div class="pitch-intro">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s">Австрия – оптимальная страна для получения высшего образования</h1>
                    <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Комфорт и безопасность</h1>
                                <p>  Австрия считается одной из самых комфортных, благополучных и безопасных стран для жизни. В подтверждении этого, Вена является лучшим городом для жизни в мире в 2018 году по версии многих мировых агентств. </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-mic-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Признанный Диплом</h1>
                                <p> Диплом ведущих австрийских ВУЗов признается университетами и работодателями не только во всех странах Европейского союза, но и почти в каждой стране мира. Это, в свою очередь, открывает обширные возможности трудоустройства в будущем.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Сразу после школы</h1>
                                <p> Как одна из немногих стран, Австрия предлагает возможность подачи документов и зачисления в университет сразу после школы. Для таких студентов, предусмотрены подготовительные курсы, после которых студент начинает свое обучение. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Без знания немецкого языка</h1>
                                <p> В Австрию можно поступить с нулевым уровнем немецкого языка – главные университеты страны направляют студентов на языковые курсы уже после зачисления. Сложно найти другую страну в мире, которая предлагала бы такую возможность. </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Поступление с легкостью</h1>
                                <p> Большинство специальностей в Австрии не предусматривают вступительных экзаменов, что открывает возможность многим студентам обучаться в этой стране. Основное требование для поступления – это правильная и своевременная подача документов. </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Низкая стоимость обучения</h1>
                                <p> Несмотря на высокий уровень образования, обучение в государственных университетах Австрии является одним из самых доступных в мире – всего 745 евро в семестр. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section -->
        <div class="app-features text-center" id="features">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s">Про университеты</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s" style="color: #4a4a4a">
                    Университеты Австрии открывают большие возможности и перспективы<br class="hidden-xs">
                    для студентов любых специальностей</p>




                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/univer1.jpg" alt="App" style="margin-bottom: 30px"/>
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"> <i class="ion-ios-list-outline"></i> </div>
                                <h1 style="font-weight: 800">Венский университет</h1>
                                <p style="color: #4a4a4a">
                                    Входит в список Топ 100 университетов Европы и воспитанник более 10 нобелевских лауреатов.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"> <i class="ion-ios-americanfootball-outline"></i> </div>
                                <h1 style="font-weight: 800">Венский технический университет</h1>
                                <p style="color: #4a4a4a">
                                    Лучший технический университет в Австрии. Неоднократно входил в список 100 лучших технических университетов мира.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/wien.jpg" alt="App" style="margin-bottom: 15px"/>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/wu.jpg" alt="App" />
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
                                <h1 style="font-weight: 800">Венский университет экономики и бизнеса</h1>
                                <p style="color: #4a4a4a">
                                    Входит в список 50 лучших университетов экономики и бизнеса в Европе. Предлагает специальности, которые входят в список Топ 20 лучших в мире.
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"> <i class="ion-ios-heart-outline"></i> </div>
                                <h1 style="font-weight: 800">Другие университеты</h1>
                                <p style="color: #4a4a4a">
                                    Не нашли интересующий Вас университет? Свяжитесь с нами для получения детальной информации по выбранному Вами университету (+ кнопка «Связаться»)
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Split Feature1 Section -->
        <div class="split-features">
            <div class="col-md-5 col-md-offset-1 nopadding">
                <div class="split-image"> <img class="img-responsive wow fadeIn" src="/tours/images/picture1.jpg" alt="Image" /> </div>
            </div>
            <div class="col-md-5 nopadding">
                <div class="split-content">
                    <h1 class="wow fadeInUp">Наши услуги:</h1>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Бесплатная 30-ти минутная консультация</h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">Выбор специальностей.</li>
                        <li style="color: #4a4a4a">Сроки подачи документов.</li>
                        <li style="color: #4a4a4a">Требуемые документы.</li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Поступление в Австрию:</h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">Поступление в вуз.</li>
                        <li style="color: #4a4a4a">Бронирование жилья.</li>
                        <li style="color: #4a4a4a">Виза / Страховка / Прописка и тд.</li>
                        <li style="color: #4a4a4a">Сопровождение по приезду.</li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Опекунство для несовершеннолетних </h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">Составление документов</li>
                        <li style="color: #4a4a4a">Предоставление «Опекуна».</li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Ознакомительные поездки по вузам</h3>
                </div>
            </div>
        </div>
        <!-- Split Feature2 Section -->
        <div class="split-features2">
            <div class="col-md-6 nopadding">
                <div class="split-content second">
                    <h1 class="wow fadeInUp">О нас</h1>
                    <p class="wow fadeInUp" style="color: #4a4a4a; font-weight: 500"> Как для любой другой семьи, для нас было критически важным предоставить возможность лучшего образования и реализации для наших детей. Но, к сожалению, наша страна проживания не могла предоставить эти возможности. Поэтому, мы решили искать другие варианты образования для наших детей за границей, чтобы обеспечить им лучшее будущее.
                        Позже мы осознали, что другие семьи сталкиваются с такими же проблемами, поэтому в 2010 году мы создали Агентство образовательных программ StudentWay с целью предоставления лучшего будущего и возможностей для других семей.
                        В первые годы работы агентства, мы были сосредоточены преимущественно на программах поступления украинских абитуриентов в университеты и высшие школы Польши. На сегодняшний день, мы обеспечили успешное и комфортное поступление более 700 наших клиентов в такие страны как Польша, Чехия, Австрия, Словакия, Германия и Великобритания.
                    </p>
                    <!--<ul class="wow fadeInUp">-->
                    <!--<li>Nulla ornare purus non consequat ultricies.</li>-->
                    <!--<li>Etiam est nisl, molestie sed egestas bibendum</li>-->
                    <!--<li>Aliquam vel euismod elit, sed suscipit est.</li>-->
                    <!--<li>Curabitur egestas justo neque viverra vel. </li>-->
                    <!--</ul>-->
                </div>
            </div>
            <div class="col-md-5 nopadding">
                <div class="split-image"> <img class="img-responsive wow fadeIn" src="/tours/images/Screenshot_1.jpg" alt="Image" /> </div>
            </div>
        </div>
        <!-- Split Feature3 Section -->
        <div class="split-features">
            <div class="col-md-5 col-md-offset-1 nopadding">
                <div class="split-image"> <img class="img-responsive wow fadeIn" src="/tours/images/Screenshot_2.jpg" alt="Image" /> </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="split-content">
                    <h1 class="wow fadeInUp">5 причины почему семьи доверяют нам <br>
                        поступление в Австрию:</h1>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Качество работы</h3>
                    <ul class="wow fadeInUp" style="list-style: none">
                        <li style="color: #4a4a4a">Многолетний опыт с сфере образования и тесное сотрудничество с университетами позволяет нам предоставлять высокое качество работы для наших клиентов.</li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">Мы понимаем потребности родителей и детей</h3>
                    <ul class="wow fadeInUp" style="list-style: none">
                        <li style="color: #4a4a4a">Наша команда состоит как из опытных специалистов, чьи дети обучаются в Европе, так из специалистов и студентов, которые много лет назад закончили обучение в Австрии и живут сейчас там. Мы понимаем трудности родителей и детей, так как лично многократно через это прошли.</li>
                    </ul>
                    <h3 class="wow fadeInUp"style="font-weight: 700">Мы ориентированы на результаты</h3>
                    <ul class="wow fadeInUp" style="list-style: none">
                        <li style="color: #4a4a4a">Для множества специальностей и университетов, мы гарантируем 100% поступление. В случае специальностей с большим конкурсом, размер оплаты за наши услуги зависит от успешности Вашего поступления.</li>
                    </ul>
                    <h3 class="wow fadeInUp"style="font-weight: 700">Мы работаем в удобное для Вас время</h3>
                    <ul class="wow fadeInUp" style="list-style: none">
                        <li style="color: #4a4a4a">Мы понимаем, что многие семьи имеют очень загруженные рабочие дни. Поэтому, мы подстраиваемся под Ваш график и работаем не только по вечерам, но и на выходных.</li>
                    </ul>
                    <h3 class="wow fadeInUp"style="font-weight: 700">Работаем в Австрии и Украине</h3>
                    <ul class="wow fadeInUp" style="list-style: none">
                        <li style="color: #4a4a4a">По сравнению со многими другими агентствами, мы имеем сотрудников как и в Украине, так и в Австрии. С одной стороны, это позволяет быстро решать все вопросы с документами на Украине и университетом / жильем / визой в Австрии. </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Часто задаваемые вопросы -->
        <div class="pitch text-center" id="classes2">
            <div class="container">
                <div class="pitch-intro">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s">Часто задаваемые вопросы</h1>
                    <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Какие документы требуются для поступления?</h1>
                                <p>
                                    Для поступления, нужен аттестат / сертификат об окончании среднего образования, справка из университета (что абитуриент имеет право обучатся на смежной специальности в своей стране) и сертификат о знании иностранного языка (минимум A2 в случае поступления на немецкоязычное обучение)
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-mic-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Какие сроки подачи документов?</h1>
                                <p> Обычно, подача документов начинается в Апреле-Мае и заканчивается в Августе-Сентябре. Однако, точные сроки подачи документов зависит от выбранного университета, специальности и уровня образования.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Можно ли поступить без знания немецкого языка?</h1>
                                <p> Нет. Начиная с 2019 года, нужно иметь немецкий на уровне минимум А2 для поступления в Австрию. С уровнем А2, абитуриента направляют на подготовительные курсы для получения немецкого на уровне C1. </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Сколько в среднем нужно денег на проживание в месяц в Австрии?</h1>
                                <p> В среднем, проживание в месяц будет обходиться в 800 евро. Более точная цифра зависит от цены жилья, стиля питания и жизни абитуриента.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Имеет ли студент право на работу?</h1>
                                <p>Каждый студент имеет право работать 10 часов в неделю на бакалавриате и 20 часов в неделю на магистратуре. Для этого нужно получить специальное разрешение от рынка труда Австрии.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
                            <div class="pitch-content">
                                <h1>Когда я получу визу в Австрии?</h1>
                                <p>С осени 2018 года, консульство рассматривает документы в течении 2- 16 недель. Более точный срок зависит от правильности подачи документов и индивидуальной ситуации абитуриента. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bold call to action Section -->
        <div class="feature-sub cta-sub3" >
            <div class="container">
                <div class="sub-inner"style="margin-left: 110px">
                    <h1 class="wow fadeInUp">Есть вопросы? Ответим максимально быстро и полно.</h1>
                    <a href="https://m.me/studentway.ukraina?ref=w3726749" class="btn btn-action wow fadeInUp">Свяжитесь с нами</a> </div>
            </div>
        </div>
        <!-- Client Section -->
        <div class="review-section" id="review">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="reviews owl-carousel owl-theme">
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer1.png" alt="Client Testimonoal" />
                            <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                                <p>Со StudentWay мой сын поступил!!!! Это было очень приятное сотрудничество, никаких проблем и нареканий у нас нет. Мы благодарны агентству за их заботу, профессионализм и оперативность.
                                    Сейчас мой сын проходит практику от ВУЗа на острове Майорка Испания, а также в этом году он был участником программы Erasmus  и на 10 дней ездил по обмену опытом на обучение.
                                    Спасибо коллективу и преподавателям агентства!!!</p>
                                <h3>Александр П.</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer2.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>С Командой StudentWay работать очень приятно, мы в данный момент только готовимся к поступлению,
                                    и такой глобальный вопрос,
                                    как выбор обучающего учреждения, можно сказать ключевой.
                                    Специалисты в кратчайшие сроки сделали подборку по интересующему направлению,
                                    проконсультировали по всем аспектам и отличиям. Благодарность вам за помощь, и процветания!</p>
                                <h3>Наталья П.</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer3.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>С Командой StudentWay работать очень приятно, мы в данный момент только готовимся к поступлению, и такой глобальный вопрос, как выбор обучающего учреждения, можно сказать ключевой. Специалисты в кратчайшие сроки сделали подборку по интересующему направлению, проконсультировали по всем аспектам и отличиям. Благодарность вам за помощь, и процветания!
                                </p>
                                <h3>- Артем А.</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer4.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>"StudentWay" - команда высоко квалифицированных професcионалов, которая знает свое дело.StudentWay - отличное агенство, которое помогает абитуриентам поступить в европейские вузы, а школьникам подготовится к этому.</p>
                                <h3>- Zering</h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer5.png" alt="Client Testimonoal" />
                            <div class="review-text">
                                <p>-Вы очень крутая компания "StudentWay". В общем СПАСИБО Вам большое за Вашу работу, помощь и поддержку. С вами у нас получилось МНОГОЕ.
                                    </p>
                                <h3>- Надежда Н.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Package Section -->
        <div id="pricing" class="pricing-section text-center">
            <div class="container">
                <div class="col-md-12 col-sm-12 nopadding">
                    <div class="pricing-intro">
                        <h1 class="wow fadeInUp" data-wow-delay="0s">Цены</h1>
<!--                        <p class="wow fadeInUp" data-wow-delay="0.2s"> Lorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur officiis <br class="hidden-xs">-->
<!--                            tempore consequuntur officia ducimus unde doloribus quod unt repell </p>-->
                    </div>
                    <div class="col-sm-6">
                        <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pricing-details">
                                <h2>Базовый пакет *</h2>
                                <span>€ 1550</span>
<!--                                <ul>-->
<!--                                    <li>Consectetur adipiscing</li>-->
<!--                                    <li>Nunc luctus nulla et tellus</li>-->
<!--                                    <li>Suspendisse quis metus</li>-->
<!--                                    <li>Vestibul varius fermentum erat</li>-->
<!--                                </ul>-->
                                <br>
                                <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
                            </div>
                            <div><p style="font-size: x-small; color: white">* Все расчеты осуществляются в национальной валюте Украины по курсу Национального банка Украины на дату оплаты.</p></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
                            <div class="pricing-details">
                                <h2>Все включенно *</h2>
                                <span>€ 2050</span>
<!--                                <ul>-->
<!--                                    <li>Consectetur adipiscing</li>-->
<!--                                    <li>Nunc luctus nulla et tellus</li>-->
<!--                                    <li>Suspendisse quis metus</li>-->
<!--                                    <li>Vestibul varius fermentum erat</li>-->
<!--                                </ul>-->
                                <br>
                                <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
                            </div>
                            <div><p style="font-size: x-small; color: white">* Все расчеты осуществляются в национальной валюте Украины по курсу Национального банка Украины на дату оплаты.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Form -->
        <div class="cta-sub no-color">
            <div class="container">

                <div class="cta-inner">
                    <h1 id="contact" class="wow fadeInUp" data-wow-delay="0s">Контакты</h1>
                    <br>
                    <br>
                    <br>
                    <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">Связаться с нашими консультантами, Вы можете любым удобным для Вас способом</h3>
                    <br>

                    <hr>
                    <br>
                    <br>
                    <div class="row" style="margin-left: 5px">
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="viber://chat?number=+380676367247" class="thumbnail ">
                                <img src="/tours/images/viber-logo.png" class="img-circle" alt="...">
                            </a>
                            <p>Viber</p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://t.me/StudentWay_Ukraina" class="thumbnail">
                                <img src="/tours/images/telegram_PNG27.png" alt="...">
                            </a>
                            <p>Telegram</p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://m.me/studentway.ukraina?ref=w3726749" class="thumbnail">
                                <img src="/tours/images/facebook-messenger-chat-logo.png" alt="...">
                            </a>
                            <p>Messenger</p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="whatsapp://send?phone=+380968141132" class="thumbnail">
                                <img src="/tours/images/whatsapp.png" alt="...">
                            </a>
                            <p>Whatsapp</p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://www.instagram.com/studentway_ukraina/" class="thumbnail">
                                <img src="/tours/images/instagram-icon.png" alt="...">
                            </a>
                            <p>Instagram</p>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>

                    <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">Вы также можете позвонить по номерам:</h3>
                    <br>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-md-6"><h1><a style="color: white" title="Позвонить" href="tel:+38 067 636 72 47">+38 067 636 72 47</a></h1></div>
                        <div class="col-md-6"><h1><a style="color: white" title="Позвонить" href="tel:+38 050 270 88 32">+38 050 270 88 32</a></h1></div>

                    </div>
                </div>

            </div>
        </div>
