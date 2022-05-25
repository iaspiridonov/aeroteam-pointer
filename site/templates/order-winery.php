<style>
.navbar, footer, .section  {
display: none;
}
.section-display {
display: block;
}
.form-calculate {
    display: flex;
    justify-content: space-between;
}
.calculate-link__back {
    display: flex;
    align-items: center;
    flex-direction: row;
    font-weight: 400;
    font-size: 16px;
    line-height: 120%;
    color: #395CB8;
    margin-bottom: 23px;
}

.form-calculate__wrapper-one h1 {
    margin: 0;
    font-weight: 400;
    font-size: 36px;
    line-height: 120%;
    color: #292323;
    text-transform: unset;
    margin-bottom: 44px;
}
.form-calculate__wrapper-one {
    max-width: 665px;
    width: 100%;
}
.form_radio_btn {
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 120%;
    color: #292323;
    display: flex;
    align-items: baseline;
    margin-bottom: 32px;
    width: 100%;
    border-bottom: 1px solid #CBD1DC;
    padding-bottom: 10px;
    position: relative;
}

.form_radio_btn div {
display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 400;
    font-size: 24px;
    line-height: 120%;
    color: #CAD1DC;
    position: absolute;
    right: 0;
    top: 0;
}
.form_radio_btn input{
margin-right: 13px;
}
.raio-ul-one {
    width: 645px;
}

.raio-ul-two {
    display: flex;
    justify-content: space-between;
}
.raio-ul-two-title {
width:100%;
    font-weight: 600;
    font-size: 25px;
    line-height: 100%;
    color: #292323;
    margin-bottom: 30px;
    margin-top: 60px;

}


.form_radio_btn-two {
	display: inline-block;
	margin-right: 10px;
}
.form_radio_btn-two input[type=radio] {
	display: none;
}
.form_radio_btn-two label {
    display: inline-block;
    cursor: pointer;
        padding: 12px 10px 18px 41px;
    line-height: 34px;
    border: 1px solid #999;
    border-radius: 6px;
    user-select: none;
    font-weight: 400;
    font-size: 22px;
    color: #292323;
    text-align: right;
}

.form_radio_btn-two label span {
    font-weight: 400;
    font-size: 16px;
    line-height: 100%;
    color: inherit;
}
 
/* Checked */
.form_radio_btn-two input[type=radio]:checked + label {
	background: #395CB8;
        color: #fff;
}
 
/* Hover */
.form_radio_btn-two label:hover {
	color: #666;
}

.form-calculate__copiright {
width: 580px;
    margin: 0 auto;
    font-weight: 400;
    font-size: 18px;
    line-height: 140%;
    color: #797D85;
    padding: 31px 24px;
    background: #F3F5F9;
}
</style>
<section class="section section-display">
    <div class="container container__calculate-go">

        <div style="padding-bottom:200px;" class="calculate-wrapper__one">
            <div class="calculate-link__back"><span style="margin-right: 30px;">
            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41 5.59L7 0L8.41 1.41L2.82 7L8.41 12.59L7 14L1.41 8.41L0 7L1.41 5.59Z" fill="#395CB8"></path>
            </svg></span><a>Вернуться к выбору услуг</a>
            </div>

            <form class="form-calculate">
                <div class="form-calculate__wrapper-one">

                    <h1>Заказ сертификата на полет на винодельню</h1>

                    <div style="font-weight: 400;font-size: 20px;line-height: 120%;color: #CAD1DC;margin-bottom:32px;">Колличество пасажиров:</div>

                    <div class="raio-ul-one">
                        <div class="form_radio_btn">
                            <input id="radio" type="radio" name="radio1" value="2" checked>
                            <label for="radio">2 пассажира</label>
                            
                        </div>

                        <div class="form_radio_btn">
                            <input id="radio-2" type="radio" name="radio1" value="3">
                            <label for="radio-2">3 пассажира</label>
                            
                        </div>

                    
                    </div>

                </div>

                

            </form>


        </div>

       

    </div>
</section>

<section class="section section--secondary section-display">
    <div class="container">
        <div class="row text-center text-sm-start call-form align-items-sm-center">
            <div class="col-md-8 col-sm-7 col-12 pb-4 pb-sm-0 mb-4 mb-sm-0 u-border-right-sm-white u-border-bottom-m-white pe-sm-4">
                <div class="call-form__title">
                    Итого: 430 евро
                </div>
                <div class="call-form__desc mb-4">
                  
                </div>
                <form class="call-form__form" action="/ajax.php" method="POST">
                    
                </form>
            </div>
            <div class="col-md-4 col-sm-5 col-12 ps-sm-4">
                <div class="call-form__title">
                    Иванов Александр                </div>
                <div class="call-form__desc mb-4">Консультант по продажам</div>
                <a href="tel:+37379472172" class="call-form__title text-white">
                    +(373) 79-472-172                </a>
            </div>
        </div>
    </div>
</section>