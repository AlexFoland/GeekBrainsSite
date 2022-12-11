<!DOCTYPE html>
<html lang="en">

<?php
require("./config.php");
include(ROOT . "components/head.php");
?>

<body>
    <div class="contact__block">
        <div class="__block container">
            <div class="top__menu">
                <ul class="menu">
                    <li><a href="<?php echo HOST; ?>index.php"><img src="img/logo.svg" alt="logo"></a></li>
                    <li><a href="<?php echo HOST; ?>contacts.php"><img src="img/Vector.svg" alt="contact"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="img__block ">
        <div class="img__miniblock">
            <h2 class="title__img">
                Contact Us
            </h2>
            <p class="paragraph__img">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
        </div>
        <div class="img__div">
            <img class="img__contact" src="./img/ContactUs.png" alt="">
        </div>
    </div>

    <div class="top-form">
        <div class="container">
            <div class="form-cont">
                <div class="contacts-info">
                    <img class="girlswithtelefon" src="./img/GirlwithTelephon.png" alt="img">
                    <h4 class="heading-minicontacts">ADDRESS</h4>
                    <p class="textcontacts">Id convallis placerat sit sed duis id amet volutpat quam a, pharetra.</p>
                    <h4 class="heading-minicontacts">PHONE</h4>
                    <ul>
                        <li class="listli"><img src=" ./img/Telephon.svg" alt=""> +7-812-7313-4321</li>
                        <li class="listli"><img src=" ./img/Telephon.svg" alt=""> +7-817-0000-1234</li>
                    </ul>
                    <h4 class="heading-minicontacts">ONLINE SERVICE</h4>
                    <ul>
                        <li class="listli"><img src="./img/Global.svg" alt=""> www.site.com</li>
                        <li class="listli"><img src=" ./img/Message.svg" alt=""> hello.site@gmail.com</li>
                    </ul>
                </div>
                <div class="form">
                    <form action="#" class="cont__form"></form>
                    <h4 class="headerinput">SEND US MESSAGE</h4>
                    <p class="labelinput">
                        Full Name
                    </p>
                    <input type="text" placeholder="Your Name" class="input-text nameinput">
                    <p class="labelinput">
                        Email
                    </p>
                    <input type="text" placeholder="Your Email" class="input-text emailinput">
                    <p class="labelinput">
                        Message
                    </p>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" class="input-text areainput"></textarea>
                    <button type="submit" class="button-submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="top__map">
        <a class="dg-widget-link" href="http://2gis.kg/bishkek/firm/70000001039842673/center/74.58789825439455,42.88793894304583/zoom/12?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
            на карте Бишкека</a>
        <div class="dg-widget-link"><a href="http://2gis.kg/bishkek/firm/70000001039842673/photos/70000001039842673/center/74.58789825439455,42.88793894304583/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                компании</a></div>
        <div class="dg-widget-link"><a href="http://2gis.kg/bishkek/center/74.614903,42.876608/zoom/12/routeTab/rsType/bus/to/74.614903,42.876608╎ЦУМ Айчурек, торгово-развлекательный комплекс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                проезд до ЦУМ Айчурек, торгово-развлекательный комплекс</a></div>
        <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
        <script charset="utf-8">
            new DGWidgetLoader({
                "width": 940,
                "height": 480,
                "borderColor": "#a3a3a3",
                "pos": {
                    "lat": 42.88793894304583,
                    "lon": 74.58789825439455,
                    "zoom": 12
                },
                "opt": {
                    "city": "bishkek"
                },
                "org": [{
                    "id": "70000001039842673"
                }]
            });
        </script>
        <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в
            настройках вашего браузера.</noscript>
    </div>
    <?php
    include(ROOT . "components/footer.php");
    ?>
</body>

</html>