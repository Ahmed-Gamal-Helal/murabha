<?php
    include 'controllers/pages-header.php';
?>

    <div class="solid-menu pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h3>اتصل بنا</h3>
                    <?php
                        include 'controllers/side-menu.php';
                    ?>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="forms-tabs">
                        <h2>يرجى تعبئة الحقول التاليه وسيتم التواصل معك فى أقرب وقت</h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <form action="" class='contact-us'>
                                    <div class="form-group">
                                        <label for="contact-name">الاسم</label>
                                        <input type="text" name='contact-name' id='contact-name'>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-phone">الجوال</label>
                                        <input type="number" name='contact-phone' id='contact-phone'>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-email">البريد الالكترونى</label>
                                        <input type="email" name='contact-email' id='contact-email'>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-email">الرساله</label>
                                        <textarea name="contact-textarea" id="" cols="30" rows="5"></textarea>
                                    </div>
                                    <button class='send-form hvr-round-corners'>ارسال</button>
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <div class="location">
                                    <h4>الموقع الجغرافى</h4>
                                    <div class="google-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463876.93971471715!2d46.542344118761015!3d24.725555344345064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh+Saudi+Arabia!5e0!3m2!1sen!2seg!4v1538049579559" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4>معلومات التواصل</h4>
                                    <ul>
                                        <li class='located'>01125646464</li>
                                        <li class='numbers'>hfkdh@yahoo.com</li>
                                        <li class='mails'><a href="#">info@website.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'controllers/footer.php'
?>