<?php require_once("Db/Db.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Виготовлення, продажа та встановлення жалюзі</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 logotype">
                    <img src="img/logo_type.png" alt="логотип" class="img-responsive logo">
                </div>
                <div class="col-sm-6 descript text-center">
                    <h4>Виготовлення, продажа та встановлення жалюзі</h4>
                    <p>в Тернополі та Тернопільській обл.</p>
                </div>
                <div class="col-sm-3 phone_number">
                    <h3><a href="tel:+380971111111"> <span class="glyphicon glyphicon-phone"></span>380971111111</a></h3>
                    <p>Режим роботи з 9<sup>00</sup> до 18<sup>00</sup></p>
                </div>
            </div>
        </div>
    </header>

    <nav id="top_nav">
        <div class="container">
            <div class="row">
                <ul class="main_menu">
                    <li><a href="#main">Головна</a></li>
                    <li><a href="#types">Види жалюзі</a></li>
                    <li><a href="#portfolio">Наші роботи</a></li>
                    <li><a href="#offer">Акція</a></li>
                    <li><a href="#feedback">Відгуки</a></li>
                    <li><a href="#contacts">Контакти</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="main">
        <div class="container">
            <div class="row main_header">
                <h1><span>Встановим жалюзі у вашій квартирі</span> <br><span>за 2 год з повною гарантією</span> <br><span>і безсплатною доставкою</span></h1>
            </div>
            <div class="row main_get">
                <h3>Закажіть виїзд замірника додому <span>це безсплатно!</span></h3>
            </div>
            <div class="row main_buttons">
                <button data-toggle="modal" id="get_mesurer" href="#get_mesurer_modal">Визвати замірника</button>
                <a href="#types"><button id="get_types">Вибрати жалюзі</button></a>
            </div>

        </div>
    </section>

    <section id="types">
        <div class="container">
            <div class="row">
                <div class="section_header text-center">
                    <h2>Види жалюзі</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/type/type-1.jpg" alt="Горизонтальние жалюзі" class="img-responsive center-block">
                        <h4>Горизонтальні жалюзі</h4>
                        <br>
                        <button class="more_btn" data-toggle="modal" href="#more_gorizontal">Додатково</button>
                        <button class="offer_btn" data-toggle="modal" href="#get_horizontal">Заказати</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/type/type-2.jpg" alt="вертикальні жалюзі" class="img-responsive center-block">
                        <h4>Вертикальні жалюзі</h4>
                        <br>
                        <button class="more_btn" data-toggle="modal" href="#more_vertical">Додатково</button>
                        <button class="offer_btn" data-toggle="modal" href="#get_vertical">Заказати</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/type/type-3.jpg" alt="рулонні жалюзі" class="img-responsive center-block">
                        <h4>Рулонні жалюзі</h4>
                        <br>
                        <button class="more_btn" data-toggle="modal" href="#more_roll">Додатково</button>
                        <button class="offer_btn" data-toggle="modal" href="#get_roll">Заказати</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/type/type-4.jpg" alt="жалюзі плісе" class="img-responsive center-block">
                        <h4>Жалюзі плісе</h4>
                        <br>
                        <button class="more_btn" data-toggle="modal" href="#more_pleated">Додатково</button>
                        <button class="offer_btn" data-toggle="modal" href="#get_pleated">Заказати</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="help">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <h3>Не знаєте які жалюзі вибрати?</h3>
                    <br>
                    <p>Залишіть заявку на консультацію і наш спеціаліст додатково відповість <br> на всі ваші питання. Це безсплатно.</p>
                    <br>
                    <button id="free_consult" data-toggle="modal" href="#get_consult">безсплатна консультація</button>
                </div>
                <div class="col-md-2">
                    <img src="img/help_1.jpg" alt="безсплатна консулььація" class="img-responsive help_img center-block">
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section_header text-center">
                    <h2>Наші роботи</h2>
                </div>
            </div>
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="slider">
                    <div class="fotorama" data-nav="thumbs" data-ratio="4/3" data-fit="cover" data-width="100%">
                        <img src="img/portfolio/1.jpg" alt="">
                        <img src="img/portfolio/2.jpg" alt="">
                        <img src="img/portfolio/3.jpg" alt="">
                        <img src="img/portfolio/4.jpg" alt="">
                        <img src="img/portfolio/5.jpg" alt="">
                        <img src="img/portfolio/6.jpg" alt="">
                        <img src="img/portfolio/7.jpg" alt="">
                        <img src="img/portfolio/8.jpg" alt="">
                        <img src="img/portfolio/9.jpg" alt="">
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <section id="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/gift-1.jpg" alt="подарок" class="img-responsive center-block gift">
                </div>
                <div class="col-md-9">
                    <h2>Акція</h2>
                    <br>
                    <h4>закажіть установку жалюзи до 17.08.2017</h4>
                    <p>І получіть в подарок москітну сітку для вікна</p>
                    <div class="row">
                       <form action="index.php" method="post">
                           <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'offer') {
                                $name_o = trim($_POST['name_o']);
                                $phone_o = trim($_POST['phone_o']);


                                    $db = Db::getConnection();
                                    $query = $db->prepare("INSERT INTO offer (name_o, phone_o) VALUES (:name_o, :phone_o)");
                                    $values = ['name_o' => $name_o, 'phone_o' => $phone_o];
                                    $query->execute($values);

                            }

                       ?>
                            <div class="col-md-4">
                                <input name="name_o" type="text" class="form-control input_val" required placeholder="І'мя...">
                            </div>
                            <div class="col-md-4">
                                <input name="phone_o" id="phone-1" type="text" class="form-control input_val" required placeholder="Телефон...">
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="action" value="offer" />
                                <button type="submit">Заказати жалюзі</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feedback">
        <div class="container">
            <div class="row">
                <div class="section_header text-center">
                    <h2>Відгуки про наші роботи</h2>
                </div>
            </div>
            <div class="row">
                <div class="feedback_slider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                         <div class="row">
                             <div class="col-md-4">
                              <div class="fotorama">
                                  <img src="img/feedback/1/1.jpg" alt="">
                                  <img src="img/feedback/1/2.jpg" alt="">
                                  <img src="img/feedback/1/3.jpg" alt="">
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="row">
                                  <div class="col-md-2">
                                      <img src="img/avatar-1.jpg" alt="" class="img-circle cente-block">
                                  </div>
                                  <div class="col-md-10">
                                      <h5>Марія Кравченко</h5>
                                      <a href="">vk.com/id2334543</a>
                                  </div>
                              </div>
                              <div class="row">
                                  <p>Ну ви знаєте я зробила разом з дизайнером проект кімнат. Нам треба було незвичайні жалюзі. Я обдзвонила декілька компаній шоб подивилися шо можна зробити. В результаті тільки в "DECO" мені змогли внятно пояснити, шо можна придумати з моїм рішенням. Приїхав замірник всьо порахував, вийшло недорого. Зробил до речі всьо за один день. Дякую ваш хлопці всьо дуже акуратно і швидко зробили!</p>
                              </div>
                          </div>
                         </div>

                        </div>
                        <div class="item">
                           <div class="row">
                             <div class="col-md-4">
                                 <div class="fotorama">
                                      <img src="img/feedback/2/1.jpg" alt="">
                                      <img src="img/feedback/2/2.jpg" alt="">
                                      <img src="img/feedback/2/3.jpg" alt="">
                                 </div>
                             </div>
                             <div class="col-md-8">
                              <div class="row">
                                  <div class="col-md-2">
                                      <img src="img/avatar-2.jpg" alt="" class="img-circle cente-block">
                                  </div>
                                  <div class="col-md-10">
                                      <h5>Іван Стрижко</h5>
                                      <a href="">vk.com/id2334543</a>
                                  </div>
                              </div>
                              <div class="row">
                                  <p>Шукали довго підрядника для установки жалюзей в квартирі. Потрібно було в короткі срок встановити жалюзі у 3-х кімнатній квартирі. Найшли в Яндексі компанію "DECO", зпрацювали на відміно. Робоу виконали якісно і встигли в найкоротший срок. В загальному ми залишились задоволенні.</p>
                              </div>
                          </div>
                          </div>

                        </div>
                        <div class="item">
                          <div class="row">
                              <div class="col-md-4">
                              <div class="fotorama">
                                  <img src="img/feedback/3/1.jpg" alt="">
                                  <img src="img/feedback/3/2.jpg" alt="">
                                  <img src="img/feedback/3/3.jpg" alt="">
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="row">
                                  <div class="col-md-2">
                                      <img src="img/avatar-3.jpg" alt="" class="img-circle cente-block">
                                  </div>
                                  <div class="col-md-10">
                                      <h5>Ілона Кривецька</h5>
                                      <a href="">vk.com/id2334543</a>
                                  </div>
                              </div>
                              <div class="row">
                                  <p>Ну ви знаєте я довго шукала підприємство яке встановить швидко і якісно жалюзі. І в інтернеті найшла сайт компанії "Deco" прочитавши відгуки і переглянувши контент сайту подумала що все буде якісно і недорого. Так і сталося! я дуже рада що скористалася послугами даного підприємства.</p>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2588.539939568957!2d25.62534751540159!3d49.54983457936127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473033f9344ff4bd%3A0xa28d4bb6e9d4c938!2z0L_RgNC-0YHQv9C10LrRgiDQodGC0LXQv9Cw0L3QsCDQkdCw0L3QtNC10YDQuCwgODMsINCi0LXRgNC90L7Qv9GW0LvRjCwg0KLQtdGA0L3QvtC_0ZbQu9GM0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ2MDAw!5e0!3m2!1suk!2sua!4v1497631514539" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Контакти</h2>
                    <div class="row">
                        <address>
                            <p id="addres">
                                Адрес:
                            </p>
                            <p id="ternop">
                                Тернопіль, просп Степана Бандери, 83
                            </p>
                    </address>
                    </div>
                    <div class="row">
                        <div class="phone_footer">
                            <p id="phone_footer1">
                                Телефон:
                            </p>
                            <p id="number">
                                380971111111
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <a href="" title="vk"><i class="fa fa-vk social_icon" aria-hidden="true"></i></a>
                        <a href="" title="instagram"><i class="fa fa-instagram social_icon" aria-hidden="true"></i></a>
                        <button id="get_answer" data-toggle="modal" href="#get_questions">Задати питання</button>
                    </div>
                </div>
            </div>
            <div class="row details_row">
                <div class="col-md-4 details">
                    <h5>000 "DECO"</h5>
                </div>
                <div class="col-md-4 policy">
                    <a href="#get_policy" data-toggle="modal">Політика конфіденціальності</a>
                    <br>
                    <p>Тернопіль 2016-2017</p>
                </div>
                <div class="col-md-4 developer">
                    <h4>Сайт розробив:</h4>
                    <p>Андрущак Микола</p>
                </div>
            </div>
        </div>
    </footer>

    <?php include_once("modals.php"); ?>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>


    <script src="js/scroll.js"></script>

    <script src="js/main.js"></script>


    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

  </body>
</html>
