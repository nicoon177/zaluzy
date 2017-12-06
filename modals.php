<?php require_once("Db/Db.php"); ?>


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
                            $name_app = trim($_POST['name_app']);
                            $phone_app = trim($_POST['phone_app']);


                            $db = Db::getConnection();
                            $query = $db->prepare("INSERT INTO apps (name_app, phone_app) VALUES (:name_app, :phone_app)");
                            $values = ['name_app' => $name_app, 'phone_app' => $phone_app];
                            $query->execute($values);

                        }

                        ?>
                        <div class="col-xs-12">
                            <input name="name_app" type="text" class="form-control input_val" required placeholder="І'мя...">
                        </div>
                        <div class="col-xs-12">
                            <input name="phone_app" type="text" class="form-control input_val form_padding" required placeholder="Телефон...">
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


                            $db = Db::getConnection();
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

                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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

                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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

                            
                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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


                            $db = Db::getConnection();
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