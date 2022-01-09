<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour</title>

    <link
        href="https://fonts.googleapis.com/css?family=Dancing+Script:700|PT+Serif:400,700|Roboto:400,500,700,900&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,500i&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css" />
    <lik rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icomoon.css">


</head>

<body>
    <header class="header">

        <div class="header_content">
            <div class="header_container">
                <div class="header_content-inner">
                    <div class="header_logo">
                        <div id="logo1"><a href="index.php">TourL'Oran</a></div>
                        <div id="logo2"><a href="index.php"> туристическое агентство</a></div>
                    </div>

                    <nav class="menu">
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О нас</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="partners.php">Партнеры</a></li>
                            <li class="active"><a href="contacts.php">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="slider">

        <div class="slider_inner">

            <div class="slider_item" style="background-image: url(images/cont.jpg);">
                <div class="slider_text">
                    <h3> Наши контакты</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="form">

        <div class="form_inner">
            <div class="form_content">
                <div class="form_content">
                    <div class="form_text">
                        <h3>Если у вас есть вопросы, напишите нам и наш cпециалист незамедлительно ответит.</h3>
                    </div>
                    <div class="form_box">
                        <form action="./mail.php" id="ajax_form" method="POST">
                            
                            <div class="form_box-inner">
                                <div class="form_left">

                                    <label>
                                        ФИО
                                        <input type="text" name="fio" placeholder="Укажите ФИО">
                                    </label>
                                    <label>
                                        E-mail
                                        <input type="text" name="email" placeholder="Укажите e-mail">
                                    </label>
                                    <label>
                                        Контактный телефон
                                        <input type="text" name="cont" placeholder="Укажите К/т">
                                    </label>

                                </div>


                                <div class="form_right">
                                    <label>
                                        Сообщение
                                        <textarea name="message"></textarea>
                                    </label>
                                    <button id="send_mess" class="default-btn" type="submit">Отправить сообщение</button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="cont">
            <div class="cont_title">
                <h2>Контактная информация</h2>
            </div>
            <div class="cont_info">
                <p>Наш офис находится по адресу:Беларусь, г.Могилев, ул.Островского 18,офис 4.</p>
                <p>Телефон: +(12)8888888</p>
                <p>E-mail: info@gmail.com</p>
            </div>
        </div>

    </section>



    <footer class="footer">
        <div class="footer_content">

            <table class="first">
                <tr>
                    <th>
                        <h2>Наш офис</h2>
                    </th>
                    <th>
                        <h2>Социальные сети </h2>
                    </th>
                </tr>
                <tr>
                    <td><i class="icon-location"></i>Беларусь, г.Могилев <br> ул.Островского 18,офис 4</td>
                    <td><a href="#"><i class="icon-vk1"></i></a></td>
                </tr>
                <tr>
                    <td><i class="icon-phone"></i> +(12)8888888</td>
                    <td><a href="#"><i class="icon-facebook"></i></a></td>
                </tr>
                <tr>
                    <td><i class="icon-send-o"></i> info@gmail.com</td>
                    <td><a href="#"><i class="icon-instagram1"></i></a></td>
                </tr>

        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js"></script>
</body>

</html>