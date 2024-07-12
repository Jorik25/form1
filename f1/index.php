<?php 
require "conBase.php";


if(isset ($_POST['sub'])){

    $raionAles = $_POST['raion'];
    $data = $_POST['datam'];
    $sqlVer = "select datam, raion from main_table where datam = '$data' and raion = $raionAles;";
    $result = sqlsrv_query($conn, $sqlVer);
    $rows = sqlsrv_has_rows( $result );
    if($rows === false){ 
        //main tabel
          $name = $_POST['d_inv'];
$CIM = $_POST['c_CIM'];
$cop_Total = $_POST['cop_Total'];
$cop_Csub = $_POST['cop_Csub'];
$cop_Pre = $_POST['cop_Pre'];
$cop_Sco = $_POST['cop_Sco'];
$ent_Total = $_POST['ent_Total'];
$ent_Csub = $_POST['ent_Csub'];
$ent_Pre = $_POST['ent_Pre'];
$ent_Sco = $_POST['ent_Sco'];
$total = $_POST['total'];
$c_sub = $_POST['c_sub'];
$d_Pre_T = $_POST['d_Pre_T'];
$d_Pre_O = $_POST['d_Pre_O'];
$d_Sco = $_POST['d_Sco'];
$rural_T = $_POST['rural_T'];
$rural_Csub = $_POST['rural_Csub'];
$datam = $_POST['datam'];
$raion = $_POST['raion'];

//dehel
$col1 = $_POST['column1'];
$col2 = $_POST['column2'];
$col3 = $_POST['column3'];
$col4 = $_POST['column4'];
$col5 = $_POST['column5'];
$col6 = $_POST['column6'];
$col7 = $_POST['column7'];
$col8 = $_POST['column8'];
$col9 = $_POST['column9'];
$col10 = $_POST['column10'];
$col11 = $_POST['column11'];
$col12 = $_POST['column12'];
$col13 = $_POST['column13'];
$col14 = $_POST['column14'];
$col15 = $_POST['column15'];
$col16 = $_POST['column16'];
$col17 = $_POST['column17'];
$col18 = $_POST['column18'];
$col19 = $_POST['column19'];
$col20 = $_POST['column20'];
$col21 = $_POST['column21'];
$col22 = $_POST['column22'];
$col23 = $_POST['column23'];
$col24 = $_POST['column24'];
$col25 = $_POST['column25'];
$col26 = $_POST['column26'];

//malarie
$c1 = $_POST['p_examin'];
$c2 = $_POST['p_dep_m'];
$c3 = $_POST['bazin_apa'];
$c4 = $_POST['incaperi_p'];
$c5 = $_POST['vegetatii_p'];


foreach($name as $index=>$names){
    $s_name=$names;

    $sql = "INSERT INTO main_table (
    d_inv,
    c_CIM,
    cop_Total,
    cop_Csub,
    cop_Pre,
    cop_Sco,
    ent_Total,
    ent_Csub,
    ent_Pre,
    ent_Sco,
    total,
    c_sub,
    d_Pre_T,
    d_Pre_O,
    d_Sco,
    rural_T,
    rural_Csub,
    datam,
    raion) 
    VALUES ('$s_name',
    '$CIM[$index]',
    '$cop_Total[$index]',
    '$cop_Csub[$index]',
    '$cop_Pre[$index]',
    '$cop_Sco[$index]',
    '$ent_Total[$index]',
    '$ent_Csub[$index]',
    '$ent_Pre[$index]',
    '$ent_Sco[$index]',
    '$total[$index]',
    '$c_sub[$index]',
    '$d_Pre_T[$index]',
    '$d_Pre_O[$index]',
    '$d_Sco[$index]',
    '$rural_T[$index]',
    '$rural_Csub[$index]',
    '$datam',
    '$raion')";
 sqlsrv_query($conn, $sql);

 

      }

      $sql_dehel = "INSERT INTO dehel (
        column1
       ,column2
       ,column3
       ,column4
       ,column5
       ,column6
       ,column7
       ,column8
       ,column9
       ,column10
       ,column11
       ,column12
       ,column13
       ,column14
       ,column15
       ,column16
       ,column17
       ,column18
       ,column19
       ,column20
       ,column21
       ,column22
       ,column23
       ,column24
       ,column25
       ,column26
       ,datamd
       ,raiond) 
     VALUES ('$col1',
     '$col2',
     '$col3',
     '$col4',
     '$col5',
     '$col6',
     '$col7',
     '$col8',
     '$col9',
     '$col10',
     '$col11',
     '$col12',
     '$col13',
     '$col14',
     '$col15',
     '$col16',
     '$col17',
     '$col18',
     '$col19',
     '$col20',
     '$col21',
     '$col22',
     '$col23',
     '$col24',
     '$col25',
     '$col26',
     '$datam',
     '$raion')";
  sqlsrv_query($conn, $sql_dehel);
  $sql_dehel = "INSERT INTO malarie (
    p_examin
   ,p_dep_m
   ,bazin_apa
   ,incaperi_p
   ,vegetatii_p
   ,datamm
   ,raionm) 
 VALUES ('$c1',
 '$c2',
 '$c3',
 '$c4',
 '$c5',
 
 '$datam',
 '$raion')";
sqlsrv_query($conn, $sql_dehel);

      echo "<script> window.onload = function() {
        Swal.fire({
            
            icon: 'success',
            title: 'Datele au fost inscrise',
            showConfirmButton: false,
            timer: 2000
          })
    }; </script>";
    } else {
        echo "<script> window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Asa Luna si Raion exista deja in baza!',
                
              })
        }; </script>";
    }
       
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/stylee.css">
    <!-- alert -->
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <!-- alert -->
    
    <title>Document</title>
    <style>
        .center {
  display: flex;
  justify-content: center;
  align-items: center;

}

  .button {
  height: 50px;
  width: 200px;
  position: relative;
  background-color: rgb(0, 183, 215);
  cursor: pointer;
  border: 2px solid #252525;
  overflow: hidden;
  border-radius: 30px;
  color: #333;
  transition: all 0.5s ease-in-out;

}

.btn-txt {
  z-index: 1;
  font-weight: 800;
  letter-spacing: 4px;
}

.type1::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.5s ease-in-out;
  background-color: #333;
  border-radius: 30px;
  visibility: hidden;
  height: 10px;
  width: 10px;
  z-index: -1;
}

.button:hover {
  box-shadow: 1px 1px 200px #252525;
  color: #fff;
  border: none;
}

.type1:hover::after {
  visibility: visible;
  transform: scale(100) translateX(2px);
}
    </style>
</head>

<body>
<section class="ftco-section">
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">Forma 1</a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="raport.php" class="nav-link">Raport</a></li>
	        	
	        	
	        	<li class="nav-item"><a href="modify.php" class="nav-link">Modificare</a></li>
                <li class="nav-item"><a href="populatia.php" class="nav-link">populatia</a></li>
                <li class="nav-item"><a href="ztest.php" class="nav-link">Micare</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    

	</section>
<!-- END nav -->

   
    <br>

    <div>

        <form method="post" action="">

            <div class="moon">
                <input class="datam" name="datam" type="month" name="eventdate" value="" min="2000-06" step="6">
            </div> <br>
            <div>
                <select name="raion" id="" class="form-select">
                    <option value="1">MUN.CHISINAU</option>
                    <option value="2">MUN.BALTI</option>
                    <option value="3">R-UL ANENII NOI</option>
                    <option value="4">R-UL BASARABEASCA</option>
                    <option value="5">R-UL BRICENI</option>
                    <option value="6">R-UL CAHUL</option>
                    <option value="7">R-UL CALARASI</option>
                    <option value="8">R-UL CANTEMIR</option>
                    <option value="9">R-UL CAUSENI</option>
                    <option value="10">R-UL CIMISLIA</option>
                    <option value="11">R-UL CRIULENI</option>
                    <option value="12">R-UL DONDUSENI</option>
                    <option value="13">R-UL DROCHIA</option>
                    <option value="14">R-UL DUBASARI</option>
                    <option value="15">R-UL EDINET</option>
                    <option value="16">R-UL FALESTI</option>
                    <option value="17">R-UL FLORESTI</option>
                    <option value="18">R-UL GLODENI</option>
                    <option value="19">R-UL HINCESTI</option>
                    <option value="20">R-UL IALOVENI</option>
                    <option value="21">R-UL LEOVA</option>
                    <option value="22">R-UL NISPORENI</option>
                    <option value="23">R-UL OCNITA</option>
                    <option value="24">R-UL ORHEI</option>
                    <option value="25">R-UL REZINA</option>
                    <option value="26">R-UL RISCANI</option>
                    <option value="27">R-UL SINGEREI</option>
                    <option value="28">R-UL SOLDANESTI</option>
                    <option value="29">R-UL SOROCA</option>
                    <option value="30">R-UL STEFAN VODA</option>
                    <option value="31">R-UL STRASENI</option>
                    <option value="32">R-UL TARACLIA</option>
                    <option value="33">R-UL TELENESTI</option>
                    <option value="34">R-UL UNGHENI</option>
                    <option value="35">R-UL COMRAT</option>
                    <option value="36">R-UL CIADIR-LUNGA</option>
                    <option value="37">R-UL VULCANESTI</option>
                    <option value="38">CMP Armata Nationala</option>
                    <option value="39">ANSP</option>
                    <option value="40">Cancelarea de Stat</option>
                </select>
            </div>

            <br>

        

                <div>
                    <table class="firstTable" id="firstTable">
                        <thead>
                            <tr>

                                <th rowspan="4">Denumirea <br> invaziilor</th>
                                <th rowspan="4">Cifrul conform CIM, <br> revizia X</th>
                                <th colspan="8">Numarul probelor examinate la helmintiaze</th>
                                <th rowspan="4">Total</th>
                                <th rowspan="4">Copii sub<br> 17 ani</th>
                                <th colspan="3">Din ei</th>
                                <th colspan="2">Populatia<br> rurala</th>
                            </tr>
                            <tr>
                                <th colspan="4">Coprologic</th>
                                <th colspan="4">La enterobioza</th>
                                <th rowspan="3">Prescolari<br> total</th>
                                <th rowspan="3">Prescolari<br> organizatii</th>
                                <th rowspan="3">Scolari</th>
                                <th rowspan="3">Total</th>
                                <th rowspan="3">Copii sub <br>17 ani</th>
                            </tr>
                            <tr>
                                <th rowspan="2">Total</th>
                                <th rowspan="2">Copii sub <br>17 ani</th>
                                <th colspan="2">Inclusiv</th>
                                <th rowspan="2">Total</th>
                                <th rowspan="2">Copii sub<br> 17 ani</th>
                                <th colspan="2">Inclusiv</th>

                            </tr>
                            <tr>
                                <th>Prescolari</th>
                                <th>Scolari</th>
                                <th>Prescolari</th>
                                <th>Scolari</th>
                            </tr>
                            <!-- Continutul Primei tabele -->
                            <tr>
                                <th><input type="text" name="d_inv[]" value="1" style="display: none;">Enterobius vermicularis</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 80</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text"></th>
                                <th><input name="ent_Csub[]" type="text"></th>
                                <th><input name="ent_Pre[]" type="text"></th>
                                <th><input name="ent_Sco[]" type="text"></th>
                                <th><input name="total[]" type="text"></th>
                                <th><input id="sum_total_ent" name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>

                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="2" style="display: none;">Ascaris lumbricoides</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 77</th>
                                <th><input name="cop_Total[]" type="text"></th>
                                <th><input name="cop_Csub[]" type="text"></th>
                                <th><input name="cop_Pre[]" type="text"></th>
                                <th><input name="cop_Sco[]" type="text"></th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="3" style="display: none;">Trichocephalus trichiurus</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 79</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="4" style="display: none;">Hymenolepis nana</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 71</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="5" style="display: none;">Taenia solium, T. saginatus</th>
                                <th><input name="c_CIM[]" type="text"  value="0" style="display: none;">B 68.0<br>B 68.1</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="6" style="display: none;">Diphyllobothrium latum</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 70</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="7" style="display: none;">Strongyloides stercoralis</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 78</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="8" style="display: none;">Echinococcus granulosus</th>
                                <th><input name="c_CIM[]" type="text" value="0" style="display: none;">B 67</th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="9" style="display: none;">Alte helmintiaze</th>
                                <th><input name="c_CIM[]" type="text"></th>
                                <th><input name="cop_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="cop_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Total[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Csub[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Pre[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="ent_Sco[]" type="text" value="0" style="display: none;">X</th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                            <tr>
                                <th><input name="d_inv[]" class="EV" type="text" value="10" style="display: none;">Total</th>
                                <th><input id="sum_c_CIM" name="c_CIM[]" type="text"></th>
                                <th><input id="sum_cop_Total" name="cop_Total[]" type="text"></th>
                                <th><input id="sum_cop_Csub" name="cop_Csub[]" type="text"></th>
                                <th><input id="sum_cop_Pre" name="cop_Pre[]" type="text"></th>
                                <th><input  id="sum_cop_Sco" name="cop_Sco[]" type="text"></th>
                                <th><input id="sum_ent_Total" name="ent_Total[]" type="text"></th>
                                <th><input  id="sum_ent_Csub" name="ent_Csub[]" type="text"></th>
                                <th><input id="sum_ent_Pre" name="ent_Pre[]" type="text"></th>
                                <th><input id="sum_ent_Sco" name="ent_Sco[]" type="text"></th>
                                <th><input id="sum_total" name="total[]" type="text"></th>
                                <th><input id="sum_c_sub" name="c_sub[]" type="text"></th>
                                <th><input id="sum_d_Pre_T" name="d_Pre_T[]" type="text"></th>
                                <th><input id="sum_d_Pre_O" name="d_Pre_O[]" type="text"></th>
                                <th><input id="sum_d_Sco" name="d_Sco[]" type="text"></th>
                                <th><input id="sum_rural_T" name="rural_T[]" type="text"></th>
                                <th><input id="sum_rural_Csub" name="rural_Csub[]" type="text"></th>
                            </tr>
                        </thead>

                    </table>

                    <div class="deh">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Dehelmintizarea</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    
                    <th colspan="8">Supusi tratamentului specific</th>
                    <th colspan="18">Inclusiv persoane infestate cu:</th>
                </tr>
                <tr>
                    <th rowspan="3">Total</th>
                    <th rowspan="3">Copii 0-17 ani</th>
                    <th rowspan="2" colspan="2">Infectati</th>
                    <th rowspan="2" colspan="2">Contactati</th>
                    <th rowspan="2" colspan="2">Tratamente profilactice</th>
                    <th colspan="4">E. vermicularis</th>
                    <th rowspan="2" colspan="2">A.lumbricoides</th>
                    <th rowspan="2" colspan="2">T. trichiurus</th>
                    <th rowspan="2" colspan="2">H. nana</th>
                    <th rowspan="2" colspan="2">Taeniidae</th>
                    <th rowspan="2" colspan="2">D. latum</th>
                    <th rowspan="2" colspan="2">S. strongyloides</th>
                    <th rowspan="2" colspan="2">Alte helmintiaze</th>

                </tr>
                <tr>
                    <th colspan="2">Infectaţi</th>
                    <th colspan="2">Contactati</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                </tr>
                <tr>
                    
                    <th><input name="column1" type="text"></th>
                    <th><input name="column2" type="text"></th>
                    <th><input name="column3" type="text"></th>
                    <th><input name="column4" type="text"></th>
                    <th><input name="column5" type="text"></th>
                    <th><input name="column6" type="text"></th>
                    <th><input name="column7" type="text"></th>
                    <th><input name="column8" type="text"></th>
                    <th><input name="column9" type="text"></th>
                    <th><input name="column10" type="text"></th>
                    <th><input name="column11" type="text"></th>
                    <th><input name="column12" type="text"></th>
                    <th><input name="column13" type="text"></th>
                    <th><input name="column14" type="text"></th>
                    <th><input name="column15" type="text"></th>
                    <th><input name="column16" type="text"></th>
                    <th><input name="column17" type="text"></th>
                    <th><input name="column18" type="text"></th>
                    <th><input name="column19" type="text"></th>
                    <th><input name="column20" type="text"></th>
                    <th><input name="column21" type="text"></th>
                    <th><input name="column22" type="text"></th>
                    <th><input name="column23" type="text"></th>
                    <th><input name="column24" type="text"></th>
                    <th><input name="column25" type="text"></th>
                    <th><input name="column26" type="text"></th>
                </tr>
                
            </thead>
        </table>
    </div>

    <div class="malaria">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Malaria</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th colspan="2">Investigaţii la malarie</th>
                    <th colspan="3">Măsuri de combatere a dipterelor hematofage</th>
                </tr>
                <tr>
                    
                    <th colspan="2">Rezultatele examinărilor la malarie (probe-sânge)</th>
                    <th rowspan="2">Delarletea bazinelor de apă (ha)</th>
                    <th colspan="2">Dezinsecţia</th>

                </tr>
                <tr>
                    <th>Persoane examinate</th>
                    <th>Persoane depistate cu malarie</th>
                    <th>Încăperi prelucrate (m2)</th>
                    <th>Vegetaţii prelucrate (ha)</th>
                </tr>
                <tr>
                    <th><input name="p_examin" type="text"></th>
                    <th><input name="p_dep_m" type="text"></th>
                    <th><input name="bazin_apa" type="text"></th>
                    <th><input name="incaperi_p" type="text"></th>
                    <th><input name="vegetatii_p" type="text"></th>
                </tr>
            </thead>
        </table>
    </div>
    <br>
    <br>
                <div class="center"><button class="button type1" type="submit" name="sub">
                <span class="btn-txt">Inregistreaza</span>
                </button></div>
                 
                <br><br><br>             
                
               
                </div>

                
            </form>
        
    </div>
    
   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/sumindexx.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

  <script type="text/javascript">
    //========================

    //убирает автозаполнение
$(document).ready(function(){
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
    });
});
 //========================



</script> 

</body>

</html>