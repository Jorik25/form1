<?php require "conBase.php";


if(isset ($_POST['sub'])){

    
    $data = $_POST['datap'];
    $sqlVer = "select datap from populatie where datap = '$data'";
    $result = sqlsrv_query($conn, $sqlVer);
    $rows = sqlsrv_has_rows( $result );
    if($rows === false){ 
          $name = $_POST['id'];
$raion = $_POST['raion'];
$total_Popul = $_POST['total_Popul'];
$total_Copii = $_POST['total_Copii'];
$datap = $_POST['datap'];
$urban = $_POST['urban'];
$rural = $_POST['rural'];
$curban = $_POST['curban'];
$crural = $_POST['crural'];

foreach($name as $index=>$names){
    $s_name=$names;

    $sql = "INSERT INTO populatie (
    id,
    raion,
    total_Popul,
    total_Copii,
    urban,
    rural,
    curban,
    crural,
    datap)
    VALUES ('$s_name',
    '$raion[$index]',
    '$total_Popul[$index]',
    '$total_Copii[$index]',
    '$urban[$index]',
    '$rural[$index]',
    '$curban[$index]',
    '$crural[$index]',
    '$datap'
    )";


    sqlsrv_query($conn, $sql);

      }
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
                text: 'Acest an a fost deja inscris!',
                
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
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="raport.php" class="nav-link">Raport</a></li>
	        	
	        	
	        	<li class="nav-item"><a href="modify.php" class="nav-link">Modificare</a></li>
                <li class="nav-item active"><a href="populatia.php" class="nav-link">Populatia</a></li>
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
                Alege anul
            <input class="datam" name="datap" type="number"  min="1900" max="2099" step="1" value="2022" />
                
            </div> <br>
            

            <br>

        

                <div>
                    <table class="firstTable" id="firstTable">
                        <thead>
                            <tr>
                                <th>NR.</th>
                                <th>Teritoriu</th>
                                <th>Total Populatie</th>
                                <th>Total Copii 0-17 ani</th>
                                <th>Urban</th>
                                <th>Rural</th>
                                <th>Copii Urban</th>
                                <th>Copii Rural</th>
                            
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="1" style="display: none;">1</th>
                                <th><input type="text" name="raion[]" value="MUN.CHISINAU" style="display: none;">MUN.CHISINAU</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="2" style="display: none;">2</th>
                                <th><input type="text" name="raion[]" value="MUN.BALTI" style="display: none;">MUN.BALTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="3" style="display: none;">3</th>
                                <th><input type="text" name="raion[]" value="R-UL ANENII NOI" style="display: none;">R-UL ANENII NOI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="4" style="display: none;">4</th>
                                <th><input type="text" name="raion[]" value="R-UL BASARABEASCA" style="display: none;">R-UL BASARABEASCA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="5" style="display: none;">5</th>
                                <th><input type="text" name="raion[]" value="R-UL BRICENI" style="display: none;">R-UL BRICENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="6" style="display: none;">6</th>
                                <th><input type="text" name="raion[]" value="R-UL CAHUL" style="display: none;">R-UL CAHUL</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="7" style="display: none;">7</th>
                                <th><input type="text" name="raion[]" value="R-UL CALARASI" style="display: none;">R-UL CALARASI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="8" style="display: none;">8</th>
                                <th><input type="text" name="raion[]" value="R-UL CANTEMIR" style="display: none;">R-UL CANTEMIR</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="9" style="display: none;">9</th>
                                <th><input type="text" name="raion[]" value="R-UL CAUSENI" style="display: none;">R-UL CAUSENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="10" style="display: none;">10</th>
                                <th><input type="text" name="raion[]" value="R-UL CIMISLIA" style="display: none;">R-UL CIMISLIA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="11" style="display: none;">11</th>
                                <th><input type="text" name="raion[]" value="R-UL CRIULENI" style="display: none;">R-UL CRIULENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="12" style="display: none;">12</th>
                                <th><input type="text" name="raion[]" value="R-UL DONDUSENI" style="display: none;">R-UL DONDUSENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="13" style="display: none;">13</th>
                                <th><input type="text" name="raion[]" value="R-UL DROCHIA" style="display: none;">R-UL DROCHIA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="14" style="display: none;">14</th>
                                <th><input type="text" name="raion[]" value="R-UL DUBASARI" style="display: none;">R-UL DUBASARI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="15" style="display: none;">15</th>
                                <th><input type="text" name="raion[]" value="R-UL EDINET" style="display: none;">R-UL EDINET</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="16" style="display: none;">16</th>
                                <th><input type="text" name="raion[]" value="R-UL FALESTI" style="display: none;">R-UL FALESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="17" style="display: none;">17</th>
                                <th><input type="text" name="raion[]" value="R-UL FLORESTI" style="display: none;">R-UL FLORESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="18" style="display: none;">18</th>
                                <th><input type="text" name="raion[]" value="R-UL GLODENI" style="display: none;">R-UL GLODENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="19" style="display: none;">19</th>
                                <th><input type="text" name="raion[]" value="R-UL HINCESTI" style="display: none;">R-UL HINCESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="20" style="display: none;">20</th>
                                <th><input type="text" name="raion[]" value="R-UL IALOVENI" style="display: none;">R-UL IALOVENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="21" style="display: none;">21</th>
                                <th><input type="text" name="raion[]" value="R-UL LEOVA" style="display: none;">R-UL LEOVA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="22" style="display: none;">22</th>
                                <th><input type="text" name="raion[]" value="R-UL NISPORENI" style="display: none;">R-UL NISPORENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="23" style="display: none;">23</th>
                                <th><input type="text" name="raion[]" value="R-UL OCNITA" style="display: none;">R-UL OCNITA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="24" style="display: none;">24</th>
                                <th><input type="text" name="raion[]" value="R-UL ORHEI" style="display: none;">R-UL ORHEI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="25" style="display: none;">25</th>
                                <th><input type="text" name="raion[]" value="R-UL REZINA" style="display: none;">R-UL REZINA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="26" style="display: none;">26</th>
                                <th><input type="text" name="raion[]" value="R-UL RISCANI" style="display: none;">R-UL RISCANI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="27" style="display: none;">27</th>
                                <th><input type="text" name="raion[]" value="R-UL SINGEREI" style="display: none;">R-UL SINGEREI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="28" style="display: none;">28</th>
                                <th><input type="text" name="raion[]" value="R-UL SOLDANESTI" style="display: none;">R-UL SOLDANESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="29" style="display: none;">29</th>
                                <th><input type="text" name="raion[]" value="R-UL SOROCA" style="display: none;">R-UL SOROCA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="30" style="display: none;">30</th>
                                <th><input type="text" name="raion[]" value="R-UL STEFAN VODA" style="display: none;">R-UL STEFAN VODA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="31" style="display: none;">31</th>
                                <th><input type="text" name="raion[]" value="R-UL STRASENI" style="display: none;">R-UL STRASENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="32" style="display: none;">32</th>
                                <th><input type="text" name="raion[]" value="R-UL TARACLIA" style="display: none;">R-UL TARACLIA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="33" style="display: none;">33</th>
                                <th><input type="text" name="raion[]" value="R-UL TELENESTI" style="display: none;">R-UL TELENESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="34" style="display: none;">34</th>
                                <th><input type="text" name="raion[]" value="R-UL UNGHENI" style="display: none;">R-UL UNGHENI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="35" style="display: none;">35</th>
                                <th><input type="text" name="raion[]" value="COMRAT" style="display: none;">COMRAT</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="36" style="display: none;">36</th>
                                <th><input type="text" name="raion[]" value="CIADIR-LUNGA" style="display: none;">CIADIR-LUNGA</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="37" style="display: none;">37</th>
                                <th><input type="text" name="raion[]" value="VULCANESTI" style="display: none;">VULCANESTI</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="38" style="display: none;">38</th>
                                <th><input type="text" name="raion[]" value="CMP Armata Nationala" style="display: none;">CMP Armata Nationala</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="39" style="display: none;">39</th>
                                <th><input type="text" name="raion[]" value="ANSP" style="display: none;">ANSP</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                            <tr>
                                <th><input type="text" name="id[]" value="40" style="display: none;">40</th>
                                <th><input type="text" name="raion[]" value="Cancelarea de Stat" style="display: none;">Cancelarea de Stat</th>
                                <th><input type="text" name="total_Popul[]" value=""></th>
                                <th><input type="text" name="total_Copii[]" value=""></th>
                                <th><input type="text" name="urban[]" value=""></th>
                                <th><input type="text" name="rural[]" value=""></th>
                                <th><input type="text" name="curban[]" value=""></th>
                                <th><input type="text" name="crural[]" value=""></th>
                            </tr>
                        </thead>

                    </table>
                    <input class="submit" type="submit" name="sub" value="Отправить"/>
                </div>
            </form>
        
    </div>
    
   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="js/scriptt.js"></script>
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
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