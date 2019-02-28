<?require($_SERVER['DOCUMENT_ROOT'].'/header.php');?> 
<!-- <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
<div class="preview_image" style="background-image: url(/img/img/KBV_7599.jpg);">
    <div class="preview_image__mask content-centered-box">
        <h2>Бронирование</h2>
    </div>
</div>
<div class="container_content">
    <div class="container_content__wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <div class="container_form_all mb-4">
                        <h2 class="mb-5">Заполните заявку</h2>
                        <form action="" id="form_booking_all">
                            <input class="input_type" type="text" placeholder="Имя">
                            <input class="input_type" type="tel" placeholder="+7(">
                            <input class="input_type" type="mail" placeholder="mail@mail.ru">

                            <input type='text' name="checkin" class='datepicker-here form-input input_type' id="checkin" autocomplete="off" placeholder="Дата заезда" required="" />

                            <input type='text' name="checkout" class='datepicker-here form-input input_type' id="checkout" autocomplete="off" placeholder="Дата отъезда" required="" />

                            <select name="sleep" class="input_type">
                                <option selected disabled>Спальных мест</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <input type="submit" value="Бронировать">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?require($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>