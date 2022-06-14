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
    margin-bottom: 23px;
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

        <div class="calculate-wrapper__one">
            <div class="calculate-link__back"><span style="margin-right: 30px;">
            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41 5.59L7 0L8.41 1.41L2.82 7L8.41 12.59L7 14L1.41 8.41L0 7L1.41 5.59Z" fill="#395CB8"></path>
            </svg></span><a>Вернуться к выбору услуг</a>
            </div>

            <form action='/ajax.php' method='POST' onclick="getRadioGroupValue(this)" class="form-calculate">
                <div class="form-calculate__wrapper-one">

                    <h1>Заказ сертификата на полет на самолете</h1>

                    <div class="raio-ul-one">
                        <div class="form_radio_btn">
                            <input id="radio" type="radio" name="radio1" value="0" checked>
                            <label for="radio">Полет на спортивном самолете</label>
                            <div>2&nbsp;<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99888 10.1682C12.6475 10.1682 14.7946 8.02103 14.7946 5.37241C14.7946 2.72379 12.6475 0.57666 9.99888 0.57666C7.35026 0.57666 5.20312 2.72379 5.20312 5.37241C5.20312 8.02103 7.35026 10.1682 9.99888 10.1682Z" fill="#CAD1DC"/>
<path d="M9.99873 19.7598C9.99873 19.7598 19.5902 19.7598 19.5902 17.3619C19.5902 14.4844 14.9144 11.3672 9.99873 11.3672C5.08308 11.3672 0.407227 14.4844 0.407227 17.3619C0.407227 19.7598 9.99873 19.7598 9.99873 19.7598Z" fill="#CAD1DC"/>
</svg></div>
                        </div>

                        <div class="form_radio_btn">
                            <input id="radio-2" type="radio" name="radio1" value="0">
                            <label for="radio-2">Полет на самолете с возможностью управления</label>
                            <div>2&nbsp;<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99888 10.1682C12.6475 10.1682 14.7946 8.02103 14.7946 5.37241C14.7946 2.72379 12.6475 0.57666 9.99888 0.57666C7.35026 0.57666 5.20312 2.72379 5.20312 5.37241C5.20312 8.02103 7.35026 10.1682 9.99888 10.1682Z" fill="#CAD1DC"/>
<path d="M9.99873 19.7598C9.99873 19.7598 19.5902 19.7598 19.5902 17.3619C19.5902 14.4844 14.9144 11.3672 9.99873 11.3672C5.08308 11.3672 0.407227 14.4844 0.407227 17.3619C0.407227 19.7598 9.99873 19.7598 9.99873 19.7598Z" fill="#CAD1DC"/>
</svg></div>
                        </div>

                        <div class="form_radio_btn">
                            <input id="radio-3" type="radio" name="radio1" value="0">
                            <label for="radio-3">Полет на трехместном самолете с возможностью управления</label>
                            <div>3&nbsp;<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99888 10.1682C12.6475 10.1682 14.7946 8.02103 14.7946 5.37241C14.7946 2.72379 12.6475 0.57666 9.99888 0.57666C7.35026 0.57666 5.20312 2.72379 5.20312 5.37241C5.20312 8.02103 7.35026 10.1682 9.99888 10.1682Z" fill="#CAD1DC"/>
<path d="M9.99873 19.7598C9.99873 19.7598 19.5902 19.7598 19.5902 17.3619C19.5902 14.4844 14.9144 11.3672 9.99873 11.3672C5.08308 11.3672 0.407227 14.4844 0.407227 17.3619C0.407227 19.7598 9.99873 19.7598 9.99873 19.7598Z" fill="#CAD1DC"/>
</svg></div>
                        </div>
                    </div>


                     <div class="raio-ul-two-title">Длительность полета</div>

                    <div class="raio-ul-two">
                   

                        <div class="form_radio_btn-two">
                            <input id="radio-4" type="radio" name="radio2" value="900" checked>
                            <label for="radio-4">15 мин.<br><span style="display: inline-block;margin-top: 45px;">900 леeв</sapn></label>
                        </div>

                        <div class="form_radio_btn-two">
                            <input id="radio-5" type="radio" name="radio2" value="1800">
                            <label for="radio-5">30 мин.<br><span style="display: inline-block;margin-top: 45px;">1800 леeв</sapn></label>
                        </div>
                    
                        <div class="form_radio_btn-two">
                            <input id="radio-6" type="radio" name="radio2" value="2700">
                            <label for="radio-6">45 мин.<br><span style="display: inline-block;margin-top: 45px;">2700 леев</sapn></label>
                        </div>
                        
                        <div class="form_radio_btn-two">
                            <input id="radio-7" type="radio" name="radio2" value="3600">
                            <label for="radio-7">60 мин.<br><span style="display: inline-block;margin-top: 45px;">3600 леев</sapn></label>
                        </div>
                    </div>

                </div>

                <div class="form-calculate__wrapper-two">

                    <div class="form-calculate__copiright">
                        <p>Один пассажир + пилот Наличие возможности управлять самолётом.</p>
                        <p>Полёты продолжительностью 15 минут осуществляются над Вадул луй Водами и рекой Днестр. При получасовом полёте есть возможность полетать над Кишинёвом или Старым Оргеевом. 45 и 60 минут - позволяют построить индивидуальный маршрут.</p>
                    </div>


                     <div style="margin-top: 50px;" class="raio-ul-two-title">Длительность полета</div>

                    <div class="raio-ul-three">
                   

                        <div class="form_radio_btn-two">
                            <input id="radio-8" type="radio" name="radio3" value="900" checked>
                            <label for="radio-8">Фотосъемка<br>из салона<br><span>900 леев</sapn></label>
                        </div>

                        <div class="form_radio_btn-two">
                            <input id="radio-9" type="radio" name="radio3" value="300">
                            <label for="radio-9">Видеосъемка <br>из салона<br><span>300 леев</sapn></label>
                        </div>
                    
                        <div class="form_radio_btn-two">
                            <input id="radio-10" type="radio" name="radio3" value="1800">
                            <label for="radio-10">Видеосъемка <br>с монтажем<br><span>1800 леев</sapn></label>
                        </div>

                    </div>
                
                </div>

            <!--/form-->


        </div>

       

    </div>
</section>

<section class="section section--secondary section-display">
    <div class="container">
        <div class="row text-center text-sm-start call-form align-items-sm-center">
            <div class="col-md-8 col-sm-7 col-12 pb-4 pb-sm-0 mb-4 mb-sm-0 u-border-right-sm-white u-border-bottom-m-white pe-sm-4">
                <div class="call-form__title">
                    Итого: <em id="result">1800</em> леев
                </div>
                <div class="call-form__desc mb-4">
                  
                </div>
                    <input type="text" name="phone" onkeyup="this.value = this.value.replace (/\D/, '')" maxlength="10" class="input input--call" placeholder="Телефон" required>
                    <input type="submit" class="input input__submit-transparent mt-xl-0 mt-4" value="Заказать">
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

<script>
function getRadioGroupValue(radioGroupObj){
var val = 0;
for (var i=0; i < radioGroupObj.length; i++)
    if (radioGroupObj[i].checked){
           val+=+radioGroupObj[i].value;
    }
var total= val;
document.getElementById("result").innerHTML=total;
}

</script>