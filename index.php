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


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
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

<!--   Викликати замірника  -->
    <div class="modal fade" id="get_mesurer_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для виклика замірника <br> залишти свої дані</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                          <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'apps') {
                                $name_m = trim($_POST['name_m']);
                                $phone_m = trim($_POST['phone_m']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO apps (name_m, phone_m) VALUES (:name_m, :phone_m)");
                                    $values = ['name_m' => $name_m, 'phone_m' => $phone_m];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_m" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_m" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="apps" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

<!--    Горизонтальні жалюзі додатково    -->
  <div class="modal fade" id="more_gorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="header_modal_info">
                           <h4>Горизонтальні жалюзі</h4>
                       </div>
                   </div>
                   <div class="row horizont_mar">
                       <div class="col-xs-5">
                           <img src="img/type/type-1.jpg" alt="Горизонтальні жалюзі" class="img-responsive">
                       </div>
                       <div class="col-xs-7">
                           <p>Є популярним видом жалюзі із-за своєї універсальності і простої кострукції</p>
                           <p>Різнця від штор в тому шо дозволяють регулвати поток світла у кімнату</p>
                           <p id="price_horizontal">від <span>349грн</span></p>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'gorizontal') {
                                $name_h = trim($_POST['name_h']);
                                $phone_h = trim($_POST['phone_h']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO gorizontal (name_h, phone_h) VALUES (:name_h, :phone_h)");
                                    $values = ['name_h' => $name_h, 'phone_h' => $phone_h];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-4">
                              <input name="name_h" type="text" class="form-control input_val form_position" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-4">
                              <input name="phone_h" id="phone-3" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-4">
                              <input type="hidden" name="action" value="gorizontal1" />
                              <button type="submit" class="btn_horizont">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

<!--    Вертикальні жалюзі додатково    -->
  <div class="modal fade" id="more_vertical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="header_modal_info">
                           <h4>Вертикальні жалюзі</h4>
                       </div>
                   </div>
                   <div class="row horizont_mar">
                       <div class="col-xs-5">
                           <img src="img/type/type-2.jpg" alt="Вертикальні жалюзі" class="img-responsive">
                       </div>
                       <div class="col-xs-7">
                           <p>Є популярним видом жалюзі із-за своєї універсальності і простої кострукції</p>
                           <p>Різнця від штор в тому шо дозволяють регулвати поток світла у кімнату</p>
                           <p id="price_horizontal">від <span>349грн</span></p>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php
                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'vertical1') {
                                $name_v = trim($_POST['name_v']);
                                $phone_v = trim($_POST['phone_v']);

                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO vertical (name_v, phone_v) VALUES (:name_v, :phone_v)");
                                    $values = ['name_v' => $name_v, 'phone_v' => $phone_v];
                                    $query->execute($values);
                            }

                       ?>
                          <div class="col-xs-4">
                              <input name="name_v" type="text" class="form-control input_val form_position" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-4">
                              <input name="phone_v" id="phone-4" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-4">
                              <input type="hidden" name="action" value="vertical1" />
                              <button type="submit" class="btn_horizont">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

<!--    Рулоні жалюзі додатково    -->
  <div class="modal fade" id="more_roll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="header_modal_info">
                           <h4>Рулонні жалюзі</h4>
                       </div>
                   </div>
                   <div class="row horizont_mar">
                       <div class="col-xs-5">
                           <img src="img/type/type-3.jpg" alt="Рулонні жалюзі" class="img-responsive">
                       </div>
                       <div class="col-xs-7">
                           <p>Є популярним видом жалюзі із-за своєї універсальності і простої кострукції</p>
                           <p>Різнця від штор в тому шо дозволяють регулвати поток світла у кімнату</p>
                           <p id="price_horizontal">від <span>349грн</span></p>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'roll1') {
                                $name_r = trim($_POST['name_r']);
                                $phone_r = trim($_POST['phone_r']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO roll (name_r, phone_r) VALUES (:name_r, :phone_r)");
                                    $values = ['name_r' => $name_r, 'phone_r' => $phone_r];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-4">
                             <input type="hidden" name="what" value="Рулонні жалюзі">
                              <input name="name_r" type="text" class="form-control input_val form_position" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-4">
                              <input name="phone_r" id="phone-5" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-4">
                              <input type="hidden" name="action" value="roll1" />
                              <button type="submit" class="btn_horizont">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

   <!--    Жалюзі плісе додатково    -->
  <div class="modal fade" id="more_pleated" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="header_modal_info">
                           <h4>Жалюзі плісе</h4>
                       </div>
                   </div>
                   <div class="row horizont_mar">
                       <div class="col-xs-5">
                           <img src="img/type/type-4.jpg" alt="Рулонні жалюзі" class="img-responsive">
                       </div>
                       <div class="col-xs-7">
                           <p>Є популярним видом жалюзі із-за своєї універсальності і простої кострукції</p>
                           <p>Різнця від штор в тому шо дозволяють регулвати поток світла у кімнату і дуже зручні у використанні</p>
                           <p id="price_horizontal">від <span>420грн</span></p>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'pleated1') {
                                $name_p = trim($_POST['name_p']);
                                $phone_p = trim($_POST['phone_p']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO pleated (name_p, phone_p) VALUES (:name_p, :phone_p)");
                                    $values = ['name_p' => $name_p, 'phone_p' => $phone_p];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-4">
                              <input name="name_p" type="text" class="form-control input_val form_position" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-4">
                              <input name="phone_p" id="phone-6" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-4">
                              <input type="hidden" name="action" value="pleated1" />
                              <button type="submit" class="btn_horizont">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>


    <!--    Заказати горизонтальні жалюзі    -->
     <div class="modal fade" id="get_horizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для заказу горизонтальних жалюзі залишти свої дані</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                          <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'gorizontal') {
                                $name_h = trim($_POST['name_h']);
                                $phone_h = trim($_POST['phone_h']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO gorizontal (name_h, phone_h) VALUES (:name_h, :phone_h)");
                                    $values = ['name_h' => $name_h, 'phone_h' => $phone_h];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_h" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_h" id="phone-7" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="gorizontal" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

     <!--    Заказати вертикаьлні жалюзі    -->
     <div class="modal fade" id="get_vertical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для заказу вертикальних жалюзі залишти свої дані</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'vertical') {
                                $name_v = trim($_POST['name_v']);
                                $phone_v = trim($_POST['phone_v']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO vertical (name_v, phone_v) VALUES (:name_v, :phone_v)");
                                    $values = ['name_v' => $name_v, 'phone_v' => $phone_v];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_v" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_v" id="phone-8" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="vertical" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

     <!--    Заказати рулонні жалюзі    -->
     <div class="modal fade" id="get_roll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для заказу рулонних жалюзі залишти свої дані</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'roll') {
                                $name_r = trim($_POST['name_r']);
                                $phone_r = trim($_POST['phone_r']);


                                $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                $query = $db->prepare("INSERT INTO roll (name_r, phone_r) VALUES (:name_r, :phone_r)");
                                $values = ['name_r' => $name_r, 'phone_r' => $phone_r];
                                $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_r" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_r" id="phone-9" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="roll" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

     <!--    Заказати жалюзі плісе    -->
     <div class="modal fade" id="get_pleated" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для заказу жалюзі плісе залишти свої дані</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'pleated') {
                                $name_p = trim($_POST['name_p']);
                                $phone_p = trim($_POST['phone_p']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO pleated (name_p, phone_p) VALUES (:name_p, :phone_p)");
                                    $values = ['name_p' => $name_p, 'phone_p' => $phone_p];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_p" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_p" id="phone-10" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="pleated" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>


    <!--   Безсплатно консультація  -->
    <div class="modal fade" id="get_consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Для консультації залишти свої дані і ми звяжимось з вами</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'consult') {
                                $name_c = trim($_POST['name_c']);
                                $phone_c = trim($_POST['phone_c']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO consult (name_c, phone_c) VALUES (:name_c, :phone_c)");
                                    $values = ['name_c' => $name_c, 'phone_c' => $phone_c];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_c" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_c" id="phone-11" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="consult" />
                              <button type="submit">Безплатна консультація</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

   <!--   Задати питання  -->
    <div class="modal fade" id="get_questions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-sm">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body text-center">
                   <div class="row">
                       <div class="header_modal">
                           <h4>Залиште ваше питання і наш менеджер відповість на нього</h4>
                       </div>
                   </div>
                   <div class="row">
                       <form action="index.php" method="post">
                         <?php

                            if (count($_POST) > 0 and isset($_POST['action']) and isset($_POST['action']) == 'questions') {
                                $name_q = trim($_POST['name_q']);
                                $phone_q = trim($_POST['phone_q']);
                                $questions_q = trim($_POST['questions_q']);


                                    $db = new PDO('mysql:host=localhost;dbname=site','new', '1234');
                                    $query = $db->prepare("INSERT INTO questions (name_q, phone_q, questions_q) VALUES (:name_q, :phone_q, :questions_q)");
                                    $values = ['name_q' => $name_q, 'phone_q' => $phone_q, 'questions_q' => $questions_q];
                                    $query->execute($values);

                            }

                       ?>
                          <div class="col-xs-12">
                              <input name="name_q" type="text" class="form-control input_val" required placeholder="І'мя...">
                          </div>
                          <div class="col-xs-12">
                              <input name="phone_q" id="phone-12" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
                          </div>
                          <div class="col-xs-12 question">
                              <textarea name="questions_q" id="" cols="30" rows="3" placeholder="Ваше запитання..."></textarea>
                          </div>
                          <div class="col-xs-12">
                              <input type="hidden" name="action" value="questions" />
                              <button type="submit">Заказати жалюзі</button>
                          </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>

     <!--   Політика конфідеціальності  -->
    <div class="modal fade" id="get_policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header modal_title">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Політика конфіденціальності</h4>
               </div>
               <div class="modal-body text-center">
                   <p>У цьому Положенні про конфіденційність для відвідувачів сайту вказано, яким чином Amway GmbH та його афілійовані особи, у тому числі Товариство з обмеженою відповідальністю «Емвей Україна»: вул. Казимира Малевича, 87 (колишня назва: вул. Боженка, 87), Київ, 03150 Україна (надалі – «Amway») використовують персональні дані, зібрані або отримані від відвідувачів (надалі – «Відвідувачі») цього сайту (надалі – «Сайт»).  У ньому вказується, яким чином ми можемо збирати або отримувати ваші персональні дані, види персональних даних, які ми можемо збирати, яким чином ми використовуємо, обмінюємось та захищаємо ці дані, як довго ми утримуємо ці дані, ваші права, та яким чином ви можете зв’язатися з нами стосовно нашої практики щодо захисту персональних даних і конфіденційної інформації.</p>
                   <p>Щоб отримати докладнішу інформацію про те, яким чином ми можемо збирати та використовувати персональні дані осіб, які не є Відвідувачами сайту, будь ласка, прочитайте наші Правила використання особистої інформації НПА/Учасників, якщо ви є Незалежним підприємцем Amway (надалі – «НПА») або Учасником/Привілейованим учасником (що включає інформацію про те, яким чином ми можемо використовувати ваші персональні дані, коли ви зареєстровані на сайті як НПА або Учасник/Привілейований учасник).</p>
                   <p>Як ми можемо збирати або отримувати від вас персональні дані
                        Компанія Amway може у різні способи збирати або отримувати від вас персональні дані під час вашого користування сайтом компанії.
                        Ви можете надавати свої персональні дані або іншу інформацію, використовуючи різні канали зв’язку, які розміщуються на сторінці «Контактна інформація» сайту, наприклад, електронні адреси Amway, телефонні номери або діалогові форми.</p>
               </div>
               <div class="modal_footer">
                   <button type="button" class="btn btn-default btn-right" data-dismiss="modal">Закрити</button>
               </div>
           </div>
       </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>


    <script>
        $(document).ready(
            function(){
                $('html').niceScroll({cursorcolor:"#000"});
            }
        );
    </script>

    <script>
        var h_hght = 110; // высота шапки
        var h_mrg = 0;    // отступ когда шапка уже не видна

        $(function(){

            var elem = $('#top_nav');
            var top = $(this).scrollTop();

            if(top > h_hght){
                elem.css('top', h_mrg);
            }

            $(window).scroll(function(){
                top = $(this).scrollTop();

                if (top+h_mrg < h_hght) {
                    elem.css('top', (h_hght-top));
                } else {
                    elem.css('top', h_mrg);
                }
            });

        });
    </script>


    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

  </body>
</html>
