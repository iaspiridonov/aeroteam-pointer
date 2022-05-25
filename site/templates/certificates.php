<?php namespace ProcessWire;
//$connect = new mysqli("localhost", "root", "", "aeroteam");
//var_dump(date("d.m.y"));
$user = $users->getCurrentUser();
if($user->name == 'guest') { ?>
    <h3 style='text-align: center; padding-top:200px; padding-bottom:200px;'>Чтобы увидеть эту страницу тербуется <a href='/processwire'>авторизоваться</a></h3>
<?php 
} else {
    //var_dump($user);
$results_per_page = 20;  
if($_POST['action'] == 'createCertificate') {   
    $today = date("d.m.Y"); 
    /*$query = "SELECT count(id) as num FROM certificates WHERE date = " . $today;  
    $result = mysqli_query($connect, $query);*/
    $flagUnique = true;
    $price = (int)filter_var($_POST['price']);
    $comment = (string)filter_var($_POST['comment']);
    $firstValue = date("dmy");
    //var_dump($firstValue);
    $row['num'] = 1;//count($pages->find('date=' . $today));
    $secondValue = $row['num'] + 1;
    if($secondValue < 10){
        $secondValue = '0' . $secondValue;
    }
    //var_dump($secondValue);
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $varSize = strlen($chars);
    $randomStr = '';
    for( $x = 0; $x < 3; $x++ ) {  
        $randomStr .= $chars[ rand( 0, $varSize - 1 ) ];    
    }
    $thirdValue = $randomStr;
    
    //var_dump($thirdValue);
    $certificateCode = $firstValue . $secondValue . $thirdValue;
    $p = new Page(); // create new page object
    $p->template = 'certificate_page'; // set template
    $p->parent = wire('pages')->get('/certificate-generator/'); // set the parent
    $p->name = $certificateCode; // give it a name used in the url for the page
    $p->title = $certificateCode; // set page title (not neccessary but recommended)
    $p->price = $price;
    $p->comment = $comment;
    $p->date = $today;

    // added by Ryan: save page in preparation for adding files (#1)

    $p->save();
    //$query = "INSERT INTO certificates (code, price, status, date) VALUES ('" . $certificateCode . "'," . $price . ",0," . $today . ")";
   // var_dump($query);
    //$result = mysqli_query($connect, $query);
    //$query = "select * from certificates"; 
    $cert_page = $pages->findOne('template=certificates'); 
    $result = $cert_page->children();  
    $number_of_result = count($result);
    $number_of_page = ceil ($number_of_result / $results_per_page); 
    if($number_of_page  < 2) {
        header("Location: /certificate-generator?addCertificate=1");
        die;
    } else {
        header("Location: /certificate-generator?page=" . $number_of_page );
        die;
    }
    //var_dump($result);
}
/*if($_POST['action'] == 'changeStatus') {
    $certId = (int)filter_var($_POST['certId']);
    $status = (int)filter_var($_POST['status']);
    if($status == 0){
        $status = 1;
    } else {
        $status = 0;
    }
    $query = "UPDATE certificates SET status = " . $status . " WHERE id = " . $certId;  
    $result = mysqli_query($connect, $query); 
    if($result) {
        echo 'ok';
        die;
    } else {
        echo 'false';
        die;
    }
}*/
if($_POST['action'] == 'deleteCertificate') {
    //$certTitle = filter_var($_GET['cert_code']);
    $product = $pages->findOne('title=' . $_POST['cert_code']);
    $product->delete(true); 
    header("Location: /certificate-generator?certdel=" . $_POST['cert_code'] );
    die;
}
if($_POST['action'] == 'changeCertificate') {
    //$certTitle = filter_var($_GET['cert_code']);
    $product = $pages->findOne('title=' . $_POST['cert_code']);
    //var_dump($product->price);
    $product->price = intval($_POST['price']);
    $product->comment = $_POST['comment'];
    $product->status = intval($_POST['status']);
    //$product->save('price');
    $product->setOutputFormatting(false);
    $product->save();
    //$product->save('status');
    header("Location: /certificate-generator?certchange=1");
    die;
}
function randomStrGenerator($lenOfGenStr) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $varSize = strlen($chars);
    $randomStr = '';
    for( $x = 0; $x < $lenOfGenStr; $x++ ) {  
        $randomStr .= $chars[ rand( 0, $varSize - 1 ) ];    
    }
    return $randomStr;
}
?>
<style>
  table {    
    margin-top: 30px;
	margin-bottom: 20px;
    width: 40vw;
	border: 5px solid black;
	border-collapse: collapse; 
}
 tr {
	font-weight: bold;
	padding: 5px;
	background: #fff;
	border: none;
}
 td {
    text-align: center;
	padding: 5px;
	border: none;
	border-bottom: 1px solid #000;
}
  .table{
      display: flex;
      justify-content: space-evenly;
      align-items: start;
  }
  h1{
      margin-top:10px;
      text-align: center;
  }
  .certificate{
    margin-left: 20px;
    margin-top: 30px;
    margin-bottom: 20px;
    border: 5px solid black;
    background-color: white;
      width:20%;
  }
  .wrap{
    display: flex;
      justify-content: center;
  }
  body{   
    background-color: #fff;
  }
  .form{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: column; 
    height: 100%;
  }
  h3{
      margin-left: 15px;
      margin-bottom: 20px;
  }
  input{
      width: 100%;
      text-align: center;
      height: 40px;
      font-size: 14pt;
      margin-bottom: 20px;
  }
  button{
      width: 60%;
      height: 70px;
      border-radius: 10px;
      background-color: blue;
      color: white;
      font-size: 16pt;
      font-family: "SF Pro";
      border:1px solid white;
  }
  .hidden{
      display: none;
  }
  .pagination{
    display: flex;
      justify-content: center;
      height:50px;
  }
  .page-number{
      text-align: center;
      margin: 0 20px;
      width:18px;
      height:18px;
      border-radius: 50%;
      border: 1px solid black;
  }
  a{
      font-size: 14pt;
      text-decoration: none;
      color: black;
  }
  .status{
    max-width: 10px;
    height:100%;
    width: 100%;
    border-radius: 30px;
  }
  .status[data-status="2"]{
    color: green;
  }
  .status[data-status="1"]{
    color: red;
  }
  .status[data-status="3"]{
    color: darkgoldenrod;
  }
  button[disabled] {
      background-color: grey;
      border:1px solid grey;
  }
  .table_container {
      min-height: 500px;
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: center;
  }
  .table_header {
      margin-left: 0px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      color: #000;
      font-weight: bold;
      font-size: 16pt;
      margin-bottom: 30px;
  }
  .table_block {
      min-width: 100px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      color: darkgray;
      font-size: 14pt;
  }
  .table_container span {
      text-align: center;
      min-width: 200px;
      min-height: 50px;
  }
  .button_change {
    margin-top: -20px;
    max-height: 30px;
    font-size: 10pt;
    background-color: #395cb8;
    border: 1px solid #395cb8;
    margin-right: 20px;
  }
  .button_change:hover {
    background-color: blue;
    border: 1px solid blue;
  }
  .button_delete {
    margin-top: -20px;
    max-height: 30px;
    font-size: 10pt;
    background-color: #df3146;
    border: 1px solid #df3146;
  }
  .button_delete:hover {
    background-color: red;
    border: 1px solid red;
  }
  .new_certificate {
    background-color: #395cb8;
    border: 1px solid #395cb8;
      margin-left: 0px;
    width: 160px;
    max-height: 40px;
    font-size: 10pt;
  }
  .new_certificate:hover {
    background-color: blue;
    border: 1px solid blue;
  }
  .block-popup{
  z-index: 2;
  position: absolute;
  background: #fff;
  width: 500px;
  height: 600px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 10px;
  box-shadow: 0 12px 20px -10px;
  text-align: center;
  display: none;
}
.block-popup span{
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
}
.overlay1 {
  width: 100%;
  height: 100%;
  background: rgba(51, 51, 51, 0.78);
  position: fixed;
  top: 0;
  left: 0;
  display: none;
}
.form_submit {
    width: 330px;
    font-size: 14pt;
    background-color: #395cb8;
    border: 1px solid #395cb8;
}
.form_submit:hover {
    background-color: blue;
    border: 1px solid blue;
}
.select_status{
    width: 329px;
    height: 40px
}
.search {
    width: 500px;
    background-color: #fff;
    border-radius: 10px;
    margin-bottom: 50px;
}
.search_form {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: center;
}
</style>
<body>
<h1>Таблица сертификатов<?= $_GET['page'] ? ' - страница ' . $_GET['page'] : '' ?></h1>
<form class='search_form' action='/certificate-generator/' method='POST'>
    <input type='hidden' name='action' value='findCertificate'>
    <input class='search' name='find_str' type='text' value="<?= $_GET['cert_code'] ?>" placeholder="Поиск" onchange="find_certificate()">
</form>
<div class='table_container'>
    <div class='table_header'>
        <span>#</span>
        <span>Код Сертификата</span>
        <span>Цена</span>
        <span>Дата</span>
        <span>Комментарий</span>
        <span>Статус</span>
        <button class='new_certificate' id='open-modal' <?= $user->hasRole('seller') == false ? 'disabled' : '' ?>>Создать сертификат</button>
    </div>
<!--div class='wrap'>
<div class='table'>
<table>
    <tr>
        <td>#</td>
        <td>Код Сертификата</td>
        <td>Цена</td>
        <td>Дата</td>
        <td>Статус</td>
    </tr-->

<?php
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  
$page_first_result = ($page-1) * $results_per_page;
$cert_page = $pages->findOne('template=certificates');
$cerificates = $cert_page->children();

/*$query = "select * from certificates";  
$result = mysqli_query($connect, $query);  
$number_of_result = mysqli_num_rows($result);  
//var_dump($result);
//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);
$query = "SELECT * FROM certificates LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($connect, $query);  */
//var_dump($result);
//display the retrieved result on the webpage 
$cnt = ($page - 1)  * $results_per_page + 1;
foreach ($cerificates as $key => $c) {
    if($_GET['cert_code']) {
        if(strpos($c->title, $_GET['cert_code']) === false) {
            continue;
        }
    }
    if($c->status == 2) {
        $status = 'Использован';
    }  elseif($c->status == 3) {
        $status = 'Продлен';
    }
    else {
        $status = 'Не использован';
    } ?>
    <div class='table_block'>
        <span><?= $cnt ?></span>
        <span><?= $c->title ?></span>
        <span><?= $c->price ?></span>
        <span><?= $c->date ?></span>
        <span><button class="button_change" onclick="watch_comment('<?= $c->title ?>')">Посмотреть</button></span>
        <span class="status" data-status="<?= $c->status?>" id="<?= $row['id'] ?>"><?= $status ?></span>
        <button class="button_change" onclick="change_certificate('<?= $c->title ?>')" <?= $user->hasRole('aeroteam_admin') == false ? 'disabled' : '' ?>>Изменить</button>
        <form class='form' id='form<?= $c->title ?>' action='/certificate-generator/' method='POST'>
        <input type='hidden' name='action' value='deleteCertificate'>
        <input type='hidden' name='cert_code' value='<?= $c->title ?>'></form>
        <button class="button_delete" id='delete<?= $c->title ?>' onclick="delete_certificate('<?= $c->title ?>')" <?= $user->hasRole('aeroteam_admin') == false ? 'disabled' : '' ?>>Удалить</button>
    </div>
    <div class="block-popup" id="<?= $c->title ?>">
    <form class='form' action='/certificate-generator/' method='POST'>
            <h2>Изменить сертификат</h2>
            <input type='hidden' name='action' value='changeCertificate'>
            <input type='hidden' name='cert_code' value='<?= $c->title ?>'>
            <div>
            <h3>Стоимость сертификата</h3>
            <input type='number' id='price' name='price' value='<?= $c->price ?>' require>
            </div>
            <div>
            <h3>Комментарий</h3>
            <textarea rows="5" cols="38" name="comment"><?= $c->comment ?></textarea>
            </div>
            <div>
            <h3>Статус</h3>
            <select class='select_status' name='status'>
                <option value=1 <?= $row['status'] == 1 ? 'selected' : '' ?>>Не использован</option>
                <option value=2 <?= $row['status'] == 2 ? 'selected' : '' ?>>Использован</option>
                <option value=3 <?= $row['status'] == 3 ? 'selected' : '' ?>>Продлен</option>
            </select>
            </div>
            <button class='form_submit' type='submit'>Сохранить</button>
        </form>
    <span style='min-width:0px !important'>&times;</span>
    </div>
    <div class="overlay1"></div>
    <div class="block-popup" id="comment_<?= $c->title ?>">
        <h3>Комментарий</h3>
        <p><?= $c->comment ?></p>
    <span style='min-width:0px !important'>&times;</span>
    </div>
    <div class="overlay1"></div>
    <?php
    //echo '<tr><td>' . $cnt . '</td><td>' . $row['code'] . '</td><td>' . $row['price'] . '</td><td>' . date("d.m.Y",$row['date']) 
    //. '</td><td><div class="status" data-status="' . $row['status'] . '" id="' . $row['id'] . '">' . $status . '</div></td></tr>'; 
    $cnt++; 
}  
?>
</div> 

<!--/table>
</div>
<div class='certificate'>
    <form class='form' action='certificate-generator.php' method='POST'>
        <h2>Сгенерировать сертификат</h2>
        <input type='hidden' name='action' value='createCertificate'>
        <div>
        <h3>Стоимость сертификата</h3>
        <input type='number' id='price' name='price' value=''>
        </div>
        <button type='submit'>Создать</button>
    </form>
</div>
</div-->
<div class="block-popup" id="generator">
  <form class='form' action='/certificate-generator/' method='POST'>
        <h2>Сгенерировать сертификат</h2>
        <input type='hidden' name='action' value='createCertificate'>
        <div>
        <h3>Стоимость сертификата</h3>
        <input type='number' id='price' name='price' value='' require>
        </div>
        <div>
        <h3>Комментарий</h3>
        <textarea rows="5" cols="40" name="comment"></textarea>
        </div>
        <button class='form_submit' type='submit'>Создать</button>
    </form>
  <span>&times;</span>
</div>
<div class="overlay1"></div>

<?php if($page > 1) { ?>
<div class='pagination'>
    <?php if($page == 2) { ?>
        <a href='/certificate-generator' class='left<?= $page == 1 ? ' hidden' : '' ?>'><</a>
    <?php } else { ?>
        <a href='/certificate-generator?page=<?= $page - 1 ?>' class='left<?= $page == 1 ? ' hidden' : '' ?>'><</a>
    <?php } ?>   
    <div class="page-number"><?= $page ?></div>
    <a href='/certificate-generator?page=<?= $page + 1 ?>' class='right<?= $page == $number_of_page ? ' hidden' : '' ?>'>></a>
</div>
<?php } ?>
</body>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script>
    function watch_comment(id) {
        $('#comment_' +  id + ', .overlay1').fadeIn();
    }
    function change_certificate(id) {
        $('#' +  id + ', .overlay1').fadeIn();
    }
    function delete_certificate(id) {
        $('#form' +  id).submit();
    }
    function find_certificate() {
        find_str = $('.search').val();
        window.location.replace("/certificate-generator/?cert_code=" + find_str);
    }
    $(document).ready(function() {
        /*$('.status').click(function() {
            $.ajax({
                type: "POST",
                url: 'certificate-generator.php',
                data: {'certId':$(this).attr('id'),'action':'changeStatus','status':$(this).attr('data-status')},
                success: function(answer) {
                //console.log(answer);
                location.reload()
                },
                error: function (error) {
                alert('попробуйте еще раз');
                console.log(error);
                }
            });
        });*/
        $('#open-modal').on('click', function(){
            $('.block-popup, .overlay1').fadeIn();
        })
        $('.block-popup span').click(function(){
            $('.block-popup, .overlay1').fadeOut();
        })
    });
</script>
<?php } ?>