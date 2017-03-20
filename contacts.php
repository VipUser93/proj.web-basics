<?php
include 'header.php';
?>

<div class="contacts-wrap">
    <div class="contacts-wrap-content">
        <div class="cwc-left">
            <div class="cwc-info">
                <h1>Свържи се с нас</h1>
                <p>Ще се радваме да отговорим на всякакви въпроси, които имате свързани с нашата дейност или конкретно с нещо публикувано на сайта ни.</p>
            </div>
            <form>
                <div class="cwc-f-item col-sm-12">
                    <label for="contact-name">Име: <span style="color: red;">*</span></label>
                    <input type="text" id="contact-name">
                </div>
                <div class="cwc-f-item col-sm-12">
                    <label for="contact-mail">E-mail: <span style="color: red;">*</span></label>
                    <input type="email" id="contact-mail">
                </div>
                <div class="cwc-f-item col-sm-12">
                    <label for="contact-message">Съобщение: <span style="color: red;">*</span></label>
                    <textarea id="contact-message"></textarea>
                </div>
                <div class="cwc-f-item col-sm-12">
                    <input type="submit" value="ИЗПРАТИ" class="btn-submit">
                </div>
            </form>
        </div>
        <div class="cwc-right">
            <div class="cwc-cont-i">
                <h2>E-mail</h2>
                <p>infoportal@test.com</p>
            </div>
            <div class="cwc-cont-i">
                <h2>Телефон</h2>
                <p>0888 00 00 00</p>
            </div>
            <div class="cwc-cont-i">
                <h2>Адрес</h2>
                <p>Ул. Горно Нанадолнище 22, <br>1500 София, България</p>
            </div>
            <div class="cwc-cont-i">
                <h2>Social</h2>
                <p>
                    <img src="">
                    <img src="">
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>