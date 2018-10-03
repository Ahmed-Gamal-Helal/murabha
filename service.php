<?php
    include 'controllers/pages-header.php';
?>

    <div class="solid-menu pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h3>اطلب الخدمه</h3>
                    <?php
                        include 'controllers/side-menu.php';
                    ?>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="forms-tabs">
                        <h2>يرجى تعبئة الحقول التاليه وسيتم التواصل معك فى أقرب وقت</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="order-name">الاسم</label>
                                <input type="text" name='order-name' id='order-name'>
                            </div>
                            <div class="form-group">
                                <label for="order-identity">رقم الهويه</label>
                                <input type="number" name='order-identity' id='order-identity'>
                            </div>
                            <div class="form-group">
                                <label for="order-phone">الجوال</label>
                                <input type="number" name='order-phone' id='order-phone'>
                            </div>
                            <div class="form-group">
                                <label for="order-email">البريد الالكترونى</label>
                                <input type="email" name='order-email' id='order-email'>
                            </div>
                            <div class="form-group">
                                <label for="order-service">نوع الخدمه</label>
                                <select name="order-service" id="order-service">
                                    <option value="1">001</option>
                                    <option value="2">002</option>
                                    <option value="3">003</option>
                                </select>
                            </div>
                            <button class='send-form hvr-round-corners'>ارسال</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'controllers/footer.php'
?>