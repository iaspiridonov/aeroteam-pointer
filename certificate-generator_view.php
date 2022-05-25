<?php
$connect = new mysqli("localhost", "root", "", "aeroteam");
$results_per_page = 20;  
if($_POST['action'] == 'createCertificate') {
    $today = strtotime(date("mdy")); 
    $query = "SELECT count(id) as num FROM certificates WHERE date = " . $today;  
    $result = mysqli_query($connect, $query);
    $flagUnique = true;
    $price = (int)filter_var($_POST['price']);
    $firstValue = date("dmy");
    //var_dump($firstValue);
    $row = mysqli_fetch_array($result);
    $secondValue = $row['num'] + 1;
    if($secondValue < 10){
        $secondValue = '0' . $secondValue;
    }
    //var_dump($secondValue);
    $thirdValue = randomStrGenerator(3);
    //var_dump($thirdValue);
    $certificateCode = $firstValue . $secondValue . $thirdValue;
    $query = "INSERT INTO certificates (code, price, status, date) VALUES ('" . $certificateCode . "'," . $price . ",0," . $today . ")";
   // var_dump($query);
    $result = mysqli_query($connect, $query);
    $query = "select * from certificates";  
    $result = mysqli_query($connect, $query);  
    $number_of_result = mysqli_num_rows($result);
    var_dump($number_of_result);
    $number_of_page = ceil ($number_of_result / $results_per_page); 
    if($number_of_page  < 2){
        header("Location: /certificate-generator.php?addCertificate=1");
        die;
    } else {
        header("Location: /certificate-generator.php?page=" . $number_of_page );
        die;
    }
    //var_dump($result);
}
if($_POST['action'] == 'changeStatus'){
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
    background: rgb(255,251,230);
    background: radial-gradient(circle, rgba(255,251,230,1) 46%, rgba(228,217,167,1) 100%, rgba(0,212,255,1) 100%);
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
      border-radius: 15px;
      font-size: 14pt;
      margin-bottom: 20px;
  }
  button{
      width: 60%;
      height: 70px;
      border-radius: 15px;
      background-color: blue;
      color: white;
      font-size: 16pt;
      font-family: sans-serif;
      border:1px solid white;
  }
  button:hover{
      background-color: white;
      color: blue;
      border:1px solid blue;
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
    height:100%;
    width : 100%;
    cursor: pointer;
    border-radius: 30px;
  }
  .status[data-status="0"]{
    background-color: green;
    color: white;
  }
  .status[data-status="1"]{
    background-color: red;
    color: white;
  }
</style>
<body>
<h1>Таблица сертификатов<?= $_GET['page'] ? ' - страница ' . $_GET['page'] : '' ?></h1>
<div class='wrap'>
<div class='table'>
<table>
    <tr>
        <td>#</td>
        <td>Код Сертификата</td>
        <td>Цена</td>
        <td>Дата</td>
        <td>Статус</td>
    </tr>

<?php
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  
$page_first_result = ($page-1) * $results_per_page; 
$query = "select * from certificates";  
$result = mysqli_query($connect, $query);  
$number_of_result = mysqli_num_rows($result);  
//var_dump($result);
//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);
$query = "SELECT * FROM certificates LIMIT " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($connect, $query);  
//var_dump($result);
//display the retrieved result on the webpage 
$cnt = ($page - 1)  * $results_per_page + 1;
while ($row = mysqli_fetch_array($result)) {
    if($row['status'] == 1) {
        $status = 'Использован';
    }  else {
        $status = 'Не использован';
    }
    echo '<tr><td>' . $cnt . '</td><td>' . $row['code'] . '</td><td>' . $row['price'] . '</td><td>' . date("d.m.Y",$row['date']) 
    . '</td><td><div class="status" data-status="' . $row['status'] . '" id="' . $row['id'] . '">' . $status . '</div></td></tr>'; 
    $cnt++; 
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
</table>
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
</div>
<div class='pagination'>
    <?php if($page == 2) { ?>
        <a href='/certificate-generator.php' class='left<?= $page == 1 ? ' hidden' : '' ?>'><</a>
    <?php } else { ?>
        <a href='/certificate-generator.php?page=<?= $page - 1 ?>' class='left<?= $page == 1 ? ' hidden' : '' ?>'><</a>
    <?php } ?>   
    <div class="page-number"><?= $page ?></div>
    <a href='/certificate-generator.php?page=<?= $page + 1 ?>' class='right<?= $page == $number_of_page ? ' hidden' : '' ?>'>></a>
</div>
</body>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.status').click(function() {
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
        });
    });
</script>