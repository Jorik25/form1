<?php require "conBase.php";

require "php/raportF.php";

//-------------------------
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
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/stylee.css">
    <!-- alert -->
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <!-- alert -->
    <title>Document</title>
    <style>
       
      tr th input{
            pointer-events: none;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="raport.php" class="nav-link">Raport</a></li>
<li class="nav-item">
    <form method="get" action="" class="form-inline">
        <input class="form-control" name="dela" type="month" name="eventdate" value="">
        <input class="form-control" name="panala" type="month" name="eventdate" value="">
             <select name="raion" id="rai" class="form-select form-control">
            <option value="1">Mun.Chisinau</option>
            <option value="2">Mun.Balti</option>
            <option value="3">Mun.Tiraspol</option>
            <option value="4">Mun.Bender</option>
            <option value="5">R-ul Anenii Noi</option>
            <option value="6">R-ul Basarabeasca</option>
            <option value="7">R-ul Briceni</option>
            <option value="8">R-ul Cahul</option>
            <option value="9">R-ul Cantemir</option>
            <option value="10">R-ul Cimislia</option>
            <option value="11">R-ul Criuleni</option>
            <option value="12">R-ul Calarasi</option>
            <option value="13">R-ul Causeni</option>
            <option value="14">R-ul Donduseni</option>
            <option value="15">R-ul Drochia</option>
            <option value="16">Dubasari</option>
            <option value="17">R-ul Edinet</option>
            <option value="18">R-ul Falesti</option>
            <option value="19">R-ul Floresti</option>
            <option value="20">R-ul Glodeni</option>
            <option value="21">R-ul Hincesti</option>
            <option value="22">R-ul Ialoveni</option>
            <option value="23">R-ul Leova</option>
            <option value="24">R-ul Nisporeni</option>
            <option value="25">R-ul Ocnita</option>
            <option value="26">R-ul Orhei</option>
            <option value="27">R-ul Rezina</option>
            <option value="28">R-ul Riscani</option>
            <option value="29">R-ul Singerei</option>
            <option value="30">R-ul Soroca</option>
            <option value="31">R-ul Straseni</option>
            <option value="32">R-ul Soldanesti</option>
            <option value="33">R-ul Stefan-Voda</option>
            <option value="34">R-ul Taraclia</option>
            <option value="35">R-ul Telenesti</option>
            <option value="36">R-ul Ungheni</option>
            <option value="37">Comrat</option>
            <option value="38">Ceadir-Lunga</option>
            <option value="39">Vulcanesti</option>
            <option value="40">Camenca</option>
            <option value="41">Dubasari -dr.Nistru</option>
            <option value="42">Grigoropol</option>
            <option value="43">Ribnita</option>
            <option value="44">Slobozia</option>
        </select>
        <button class="form-control" onclick="" name="dataraion">Gen.Raport</button>
    </form></li>
                     

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                
                                <a type="submit" class="dropdown-item" onclick="mainTaible()">T.Principal</a>
                                <a type="submit" class="dropdown-item" onclick="probeEx()">P.Examinate</a>
                                <a type="submit" class="dropdown-item" onclick="perDep()">P.Depistate</a>
                                <a type="submit" class="dropdown-item" onclick="fInv()">F.Invaziilor</a>
                                <a type="submit" class="dropdown-item" onclick="iMor()">I.Morbiditate</a>
                                <a type="submit" class="dropdown-item" onclick="mPar()">Maladii parazitare</a>
                                <a type="submit" class="dropdown-item" onclick="iInv()">Indicatorii de invazii</a>
                                <a type="submit" class="dropdown-item" onclick="mParCaz()">Maladii parazitare 58</a>
                                <a type="submit" class="dropdown-item" onclick="iPar()">Indicii parazitologici 58</a>
                                <a type="submit" class="dropdown-item" onclick="deh()">Dehelmintizarea</a>
                                <a type="submit" class="dropdown-item" onclick="acop()">Acoperirea</a>
                                <a type="submit" class="dropdown-item" onclick="malaria()">Malaria</a>
                             

                            </div>
                        </li>

                        <li class="nav-item"><a href="modify.php" class="nav-link">Modificare</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </section>
    <!-- END nav -->
 
    <label>
        Multi-select
        <input mbsc-input id="my-input" data-dropdown="true" data-tags="true" />
    </label>
    <select id="multiple-select" multiple>
        <option value="1">Books</option>
        <option value="2">Movies, Music & Games</option>
        <option value="3">Electronics & Computers</option>
        <option value="4">Home, Garden & Tools</option>
        <option value="5">Health & Beauty</option>
        <option value="6">Toys, Kids & Baby</option>
        <option value="7">Clothing & Jewelry</option>
        <option value="8">Sports & Outdoors</option>
    </select>


       
        <br>
       



    <div class="mainTaible" style="display: none;">
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
                                <th><input name="c_sub[]" type="text"></th>
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
                                <th><input name="c_CIM[]" type="text"></th>
                                <th><input name="cop_Total[]" type="text"></th>
                                <th><input name="cop_Csub[]" type="text"></th>
                                <th><input name="cop_Pre[]" type="text"></th>
                                <th><input name="cop_Sco[]" type="text"></th>
                                <th><input name="ent_Total[]" type="text"></th>
                                <th><input name="ent_Csub[]" type="text"></th>
                                <th><input name="ent_Pre[]" type="text"></th>
                                <th><input name="ent_Sco[]" type="text"></th>
                                <th><input name="total[]" type="text"></th>
                                <th><input name="c_sub[]" type="text"></th>
                                <th><input name="d_Pre_T[]" type="text"></th>
                                <th><input name="d_Pre_O[]" type="text"></th>
                                <th><input name="d_Sco[]" type="text"></th>
                                <th><input name="rural_T[]" type="text"></th>
                                <th><input name="rural_Csub[]" type="text"></th>
                            </tr>
                </thead>

            </table>
    </div>


    <?php if (isset($stmt)) : ?>
    <div class="probeEx" style="display: none;"> 
         <!-- 11111111111111111111111111111 -->
    <div class="p-5 text-center">
        <h1 class="mb-3">Probe examinate</h1>
    </div>
    <!-- 111111111111111111111 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Teritoriile <br> administrative</th>
                    <th colspan="8">Numărul probelor examinate la helmintiaze, sem. I-II</th>
                    <th colspan="8">Numărul probelor examinate la helmintiaze, date cumulative </th>
                </tr>
                <tr>
                    <th colspan="4">Prin metode coprologice</th>
                    <th colspan="4">Prin metode speciale</th>
                    <th colspan="4">Prin metode coprologice</th>
                    <th colspan="4">Prin metode coprologice</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th colspan="2">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th colspan="2">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th colspan="2">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th colspan="2">Inclusiv</th>
                </tr>
                <tr>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                </tr>
                <?php while ($row = sqlsrv_fetch_array($stmt)) : ?>
                <tr>
                    <th><?php echo $row['rai']?></th>
                    <th><input name="cop_Total[]" type="text" value="<?php echo $row['cop_Total']?>"></th>
                    <th><input name="cop_Csub[]" type="text" value="<?php echo $row['cop_Csub']?>"></th>
                    <th><input name="cop_Pre[]" type="text" value="<?php echo $row['cop_Pre']?>"></th>
                    <th><input name="cop_Sco[]" type="text" value="<?php echo $row['cop_Sco']?>"></th>
                    <th><input name="ent_Total[]" type="text" value="<?php echo $row['ent_Total']?>"></th>
                    <th><input name="ent_Csub[]" type="text" value="<?php echo $row['ent_Csub']?>"></th>
                    <th><input name="ent_Pre[]" type="text" value="<?php echo $row['ent_Pre']?>"></th>
                    <th><input name="ent_Sco[]" type="text" value="<?php echo $row['ent_Sco']?>"></th>
                    <th><input name="cop_Totala[]" type="text" value="<?php echo $row['cop_Totala']?>"></th>
                    <th><input name="cop_Csuba[]" type="text" value="<?php echo $row['cop_Csuba']?>"></th>
                    <th><input name="cop_Prea[]" type="text" value="<?php echo $row['cop_Prea']?>"></th>
                    <th><input name="cop_Scoa[]" type="text" value="<?php echo $row['cop_Scoa']?>"></th>
                    <th><input name="ent_Totala[]" type="text" value="<?php echo $row['ent_Totala']?>"></th>
                    <th><input name="ent_Csuba[]" type="text" value="<?php echo $row['ent_Csuba']?>"></th>
                    <th><input name="ent_Prea[]" type="text" value="<?php echo $row['ent_Prea']?>"></th>
                    <th><input name="ent_Scoa[]" type="text" value="<?php echo $row['ent_Scoa']?>"></th>
                </tr>
                <?php endwhile; ?>
                    <?php endif; ?>

            </thead>
        </table>
    </div>
 
    <div class="perDep" style="display: none;">
         <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3">Persoane depistate</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Teritoriile administrative</th>
                    <th rowspan="2" colspan="5">Cazuti absolute (infectati)</th>
                    <th colspan="16">Din numărul total au fost depistate cu:</th>
                </tr>
                <tr>
                    <th colspan="2">Enterobius <br> vermicularis</th>
                    <th colspan="2">Ascaris <br> lumbricoides</th>
                    <th colspan="2">Trichocephalus <br> trichiurus</th>
                    <th colspan="2">Hymenolepis <br> nana</th>

                    <th colspan="2">Diphyllobothrium <br> latum</th>
                    <th colspan="2">Strongyloides <br> stercoralis</th>
                    <th colspan="2">Echinococcus <br> granulosus</th>
                    <th colspan="2">Altele</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 anii</th>
                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
            </thead>
        </table>
    </div>
   
    <div class="fInv" style="display: none;"> 
        <!-- 333333333333333333333333333333 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Frecventa invaziilor</h1>
    </div>
    <!-- 33333333333333333333333333333333 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Teritoriile administrative</th>
                    <th colspan="4">Frecventa invaziilor, total</th>
                    <th colspan="8">Inclusiv</th>
                </tr>
                <tr>
                    <th rowspan="3">Total</th>
                    <th rowspan="3"> Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                    <th colspan="4">La examenele coprologice</th>
                    <th colspan="4">La examenele la enterobioza</th>
                </tr>
                <tr>
                    <th rowspan="2">Prescolari</th>
                    <th rowspan="2">Scolari</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                </tr>
                <tr>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>

            </thead>
        </table>
    </div>

    <div class="iMor" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Indicii de morbiditate</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="4">Cazuri absolute(infectii)</th>
                    <th colspan="4">Mortabilitatea</th>
                    <th rowspan="4">Indicele de raport 2021/2022</th>
                </tr>
                <tr>
                    <th colspan="2">2021</th>
                    <th colspan="2">2022</th>
                    <th colspan="2">2021</th>
                    <th colspan="2">2022</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>

            </thead>
        </table>
    </div>
 
    <div class="mPar" style="display: none;">
         <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Maladii parazitare, morbiditatea pe contingente </h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Denumirea maladiilor</th>
                    <th rowspan="3">Numărul cazurilor înregis</th>
                    <th rowspan="3">Morbiditatea la 100 mii populatie</th>
                    <th colspan="2">Copii 0-17 ani</th>
                    <th colspan="4">Populaţia rurală</th>
                    <th colspan="4">Populaţia urbană</th>

                </tr>
                <tr>
                    <th rowspan="2">Nr cazuri înregis</th>
                    <th rowspan="2">Morbiditatea la 1000 copii</th>
                    <th rowspan="2">Nr cazuri înregis</th>
                    <th rowspan="2">Morbiditatea la 100 mii populatie</th>
                    <th colspan="2">Copii 0-17 ani</th>
                    <th rowspan="2">Nr cazuri înregis</th>
                    <th rowspan="2">Morbiditatea la 100 mii populatie</th>
                    <th colspan="2">Copii 0-17 ani</th>
                </tr>
                <tr>
                    <th>Nr cazuri înregis.</th>
                    <th>Morbiditatea la 1000 copii</th>
                    <th>Nr cazuri înregis.</th>
                    <th>Morbiditatea la 1000 copii</th>
                </tr>
                <tr>
                    <th>Enterobius <br> vermicularis</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Ascaris <br> lumbricoides</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Trichocephalus <br> trichiurus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Hymenolepis <br> nana</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Taenia solium, <br> T. saginatus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Diphyllobothrium <br> latum</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Strongyloides <br> stercoralis</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Echinococcus <br> granulosus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Alte <br> helmintiaze</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
                <tr>
                    <th>Total</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>

    <div class="iInv" style="display: none;">
    <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3">Indicatorii de invazii</h1>
    </div>
    <!-- 2222222222222222222222222 -->
    <div>
        <h3 class="mb-1 text-center">1.1. E. vermicularis</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.2. A. lumbricoides</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.3. T. trichiurus</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>

    </div>


    <div>
        <h3 class="mb-1 text-center">1.4. H.nana</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.5.      T. solium, T. saginata</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.6.      D. latum</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.7.      S. stercoralis</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>
                    <th colspan="2" rowspan="2">Frecvența invaziei</th>
                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.8.      E. granulosus</h3>
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritorii administrative</th>
                    <th colspan="7">Persoane depistate-sem.I-II</th>
                    <th colspan="7">Persoane depistate-date cumulative</th>

                    <th colspan="2" rowspan="2">Ponderea în suma invaziilor</th>
                    <th colspan="2" rowspan="2">Morbiditatea</th>
                    <th rowspan="3">Indicele de raport 2022/2021</th>
                </tr>
                <tr>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="3">Inclusiv</th>
                    <th rowspan="2">Rural total </th>
                    <th rowspan="2">Rural copii 0-17 ani </th>

                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>

                    <th>Total</th>
                    <th>Copii 0-17 ani</th>
                    <th>100 mii populatie</th>
                    <th>1000 copii</th>
                </tr>
                <tr>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>
    </div>
    
    <div class="mParCaz" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Maladii parazitare, cazuri absolute pe teritorii (58 teritorii)</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="2">Denumirea maladiilor</th>
                    <th rowspan="2">Înregistrat total</th>
                    <th rowspan="2">La copii pînă la 17 ani</th>
                    <th colspan="3">inclusiv</th>
                    <th colspan="2">Populaţia rurală</th>
                    <th colspan="2">Populaţia urbană</th>
                </tr>
                <tr>
                    <th>Prescolari total</th>
                    <th>Prescolari organizati</th>
                    <th>Scolari</th>
                    <th>Total</th>
                    <th>Copii pina la 17 ani</th>
                    <th>Total</th>
                    <th>Copii pina la 17 ani</th>
                </tr>
                <tr>
                    <th>Enterobius <br> vermicularis</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Ascaris <br> lumbricoides</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Trichocephalus <br> trichiurus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Hymenolepis <br> nana</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Taenia solium, <br> T. saginatus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Diphyllobothrium <br> latum</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Strongyloides <br> stercoralis</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Echinococcus <br> granulosus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Alte <br> helmintiaze</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>

    <div class="iPar" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3">Indicii parazitologici, date comparative (58 teritorii)</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Denumirea maladiilor</th>
                    <th colspan="5">sem.I-II</th>
                    <th colspan="7">12 luni</th>
                </tr>
                <tr>
                    <th colspan="4">Cazuri absolute</th>
                    <th rowspan="3">Indicele de raport 2021/2022</th>
                    <th colspan="4">Cazuri absolute</th>
                    <th colspan="2" rowspan="2">Indicele morbiditatii la 100000 de oameni</th>
                    <th rowspan="3">Indicele de raport 2021/2022</th>
                </tr>
                <tr>
                    <th colspan="2">Total</th>
                    <th colspan="2">Inclusiv copii</th>
                    <th colspan="2">Total</th>
                    <th colspan="2">Inclusiv copii</th>
                </tr>
                <tr>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2021</th>
                    <th>2022</th>
                </tr>
                <tr>
                    <th>Enterobius <br> vermicularis</th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                </tr>
                <tr>
                    <th>Ascaris <br> lumbricoides</th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                    <th><input class="inn" type="text" name="test"></th>
                </tr>
                <tr>
                    <th>Trichocephalus <br> trichiurus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Hymenolepis <br> nana</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Taenia solium, <br> T. saginatus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Diphyllobothrium <br> latum</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Strongyloides <br> stercoralis</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Echinococcus <br> granulosus</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Alte <br> helmintiaze</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>

                </tr>
            </thead>
        </table>
    </div>
  
    <div class="deh" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Dehelmintizarea</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Teritoriile administrative</th>
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
                    <th>mun. Chisinau</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
                <tr>
                    <th>Total pe municipii</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
            </thead>
        </table>
    </div>
  
    <div class="acop" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Acoperirea cu tratamente antiparazitare</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="3">Teritoriile administrative</th>
                    <th colspan="2" rowspan="2">Total</th>
                    <th colspan="16">Inclusiv in:</th>
                </tr>
                <tr>
                    <th colspan="2">Enterobioza</th>
                    <th colspan="2">Ascaridoza</th>
                    <th colspan="2">Tricocefaloza</th>
                    <th colspan="2">Himenolepidoza</th>
                    <th colspan="2">Teniidoze</th>
                    <th colspan="2">Difilobotrioza</th>
                    <th colspan="2">Strongiloidoza</th>
                    <th colspan="2">Altele</th>
                </tr>
                <tr>
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
                    <th>mun. Chisinau</th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
            </thead>
        </table>
    </div>
 
    <div class="malaria" style="display: none;">
        <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Malaria</h1>
    </div>
    <!-- 2222222222222222222222222 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th colspan="3">Investigaţii la malarie</th>
                    <th colspan="3">Măsuri de combatere a dipterelor hematofage</th>
                </tr>
                <tr>
                    <th rowspan="2">Teritoriile adminsitrative</th>
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
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                    <th><input class="inn" type="text"></th>
                </tr>
            </thead>
        </table>
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
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>


    <script type='text/javascript'>
        $('#multiple-select').mobiscroll().select({
    inputElement: document.getElementById('my-input'),
    touchUi: false
});
        
    </script>
    

</body>

</html>


<?php if (isset($stmt_f) && isset($stmt_ff)) : ?>
    <div class="fInv" style="display: none;"> 
        <!-- 333333333333333333333333333333 -->
    <div class="p-5 text-center">
        <h1 class="mb-3"> Frecventa invaziilor</h1>
    </div>
    <!-- 33333333333333333333333333333333 -->
        <table class="firstTable" id="firstTable">
            <thead>
                <tr>
                    <th rowspan="4">Teritoriile administrative</th>
                    <th colspan="4">Frecventa invaziilor, total</th>
                    <th colspan="8">Inclusiv</th>
                </tr>
                <tr>
                    <th rowspan="3">Total</th>
                    <th rowspan="3"> Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                    <th colspan="4">La examenele coprologice</th>
                    <th colspan="4">La examenele la enterobioza</th>
                </tr>
                <tr>
                    <th rowspan="2">Prescolari</th>
                    <th rowspan="2">Scolari</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Copii 0-17 ani</th>
                    <th colspan="2">Inclusiv</th>
                </tr>
                <tr>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                    <th>Prescolari</th>
                    <th>Scolari</th>
                </tr>
                <?php while (
                    ($rowF = sqlsrv_fetch_array($stmt_f))&&($rowFF = sqlsrv_fetch_array($stmt_ff))
                //formula coloana 1
                && ($row_rT_TOTAL = sqlsrv_fetch_array($stmt_rT_TOTAL)) && ($row_rTOTAL_cop_Total = sqlsrv_fetch_array($stmt_rTOTAL_cop_Total)) && ($row_rTOTAL_ent_Total = sqlsrv_fetch_array($stmt_rTOTAL_ent_Total))
                //formula coloana 2
                && ($row_rT_C_SUB = sqlsrv_fetch_array($stmt_rT_C_SUB)) && ($row_rTOTAL_cop_Csub = sqlsrv_fetch_array($stmt_rTOTAL_cop_Csub)) && ($row_rTOTAL_ent_Csub = sqlsrv_fetch_array($stmt_rTOTAL_ent_Csub))
                //formula coloana 3
                && ($row_rT_D_PRE_T = sqlsrv_fetch_array($stmt_rT_D_PRE_T)) && ($row_rTOTAL_cop_Pre = sqlsrv_fetch_array($stmt_rTOTAL_cop_Pre)) && ($row_rTOTAL_ent_Pre = sqlsrv_fetch_array($stmt_rTOTAL_ent_Pre))
                //formula coloana 4
                && ($row_rT_D_SCO = sqlsrv_fetch_array($stmt_rT_D_SCO)) && ($row_rTOTAL_cop_Sco = sqlsrv_fetch_array($stmt_rTOTAL_cop_Sco)) && ($row_rTOTAL_ent_Sco = sqlsrv_fetch_array($stmt_rTOTAL_ent_Sco))
                //formula coloana 5
                && /*$row_rT_TOTAL*/ ($row_rEV_TOTAL = sqlsrv_fetch_array($stmt_rEV_TOTAL)) && ($row_rEG_TOTAL = sqlsrv_fetch_array($stmt_rEG_TOTAL)) /*$row_rTOTAL_cop_Total*/
                //formula coloana 6
                && /*$row_rT_C_SUB*/ ($row_rEV_C_SUB = sqlsrv_fetch_array($stmt_rEV_C_SUB)) && ($row_rEG_C_SUB = sqlsrv_fetch_array($stmt_rEG_C_SUB)) /*$row_rTOTAL_cop_Csub*/
                //formula coloana 7
                && /* $row_rT_D_PRE_T */ ($row_rEV_D_PRE_T = sqlsrv_fetch_array($stmt_rEV_D_PRE_T)) && ($row_rEG_D_PRE_T = sqlsrv_fetch_array($stmt_rEG_D_PRE_T)) /*$row_rTOTAL_ent_Pre*/
                //formula coloana 8
                && /* $row_rT_D_SCO */ ($row_rEV_D_SCO = sqlsrv_fetch_array($stmt_rEV_D_SCO)) && ($row_rEG_D_SCO = sqlsrv_fetch_array($stmt_rEG_D_SCO)) /*$row_rTOTAL_ent_Sco*/
                //formula coloana 9
                /* $row_rEV_TOTAL  $row_rTOTAL_ent_Total */
                //formula coloana 10
                /* $row_rEV_C_SUB  $row_rTOTAL_ent_Csub */
                //formula coloana 11
                /* $row_rEV_D_PRE_T  $row_rTOTAL_ent_Pre */
                //formula coloana 12
                /* $row_rEV_D_SCO  $row_rTOTAL_ent_Sco */
                // $row_rest = ($rowF['ssss'] + $rowFF['xxxx'])*100;
                ) : ?>
            
                <tr>
                    <th><?php echo $row_rT_TOTAL['rai']?></th>
                    <th><input value="<?php echo round($row_freTotal = ($row_rT_TOTAL['number'] * 100 / ($row_rTOTAL_cop_Total['number'] + $row_rTOTAL_ent_Total['number'])),2) ?>"></th>
                    <th><input value="<?php echo round($row_freCopSub = ($row_rT_C_SUB['number'] * 100 / ($row_rTOTAL_cop_Csub['number'] + $row_rTOTAL_ent_Csub['number'])),2) ?>"></th>
                    <th><input value="<?php echo round($row_freIncPre = ($row_rT_D_PRE_T['number'] * 100 / ($row_rTOTAL_cop_Pre['number'] + $row_rTOTAL_ent_Pre['number'])),2) ?>"></th>
                    <th><input value="<?php echo round($row_freIncSco = ($row_rT_D_SCO['number'] * 100 / ($row_rTOTAL_cop_Sco['number'] + $row_rTOTAL_ent_Sco['number'])),2) ?>"></th>
                    <th><input value="<?php echo round($row_freCOP_total = ((($row_rT_TOTAL['number'] - ($row_rEV_TOTAL['number'] + $row_rEG_TOTAL['number'])) * 100 )/ $row_rTOTAL_cop_Total['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_freCOP_csub = (($row_rT_C_SUB['number'] - $row_rEV_C_SUB['number'] + $row_rEG_C_SUB['number']) * 100 / $row_rTOTAL_cop_Csub['number']),2) ?>"></th>
                    
                    <th><input value="<?php echo round($row_freCOP_pre = ((($row_rT_D_PRE_T['number'] - ($row_rEV_D_PRE_T['number'] + $row_rEG_D_PRE_T['number'])) * 100) / $row_rTOTAL_cop_Pre['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_freCOP_sco = ((($row_rT_D_SCO['number'] - ($row_rEV_D_SCO['number'] + $row_rEG_D_SCO['number'])) * 100) / $row_rTOTAL_cop_Sco['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_entTotal = (($row_rEV_TOTAL['number'] * 100) / $row_rTOTAL_ent_Total['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_entcopsub = (($row_rEV_C_SUB['number'] * 100) / $row_rTOTAL_ent_Csub['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_entpre = (($row_rEV_D_PRE_T['number'] * 100) / $row_rTOTAL_ent_Pre['number']),2) ?>"></th>
                    <th><input value="<?php echo round($row_entsco = (($row_rEV_D_SCO['number'] * 100) / $row_rTOTAL_ent_Sco['number']),2) ?>"></th>

                </tr>
                <?php endwhile; ?>
                    <?php endif; ?>

            </thead>
        </table>
    </div>






//==============================
//==============================
//TOTAL RAPORT
//PROBE EXAMINATE
//==============================
//==============================

    const tabel = document.getElementById('probExaminate');
    // Obține toate celulele din coloana "copROLOGIC total"
    const probExaminate_copTotal = tabel.querySelectorAll('td[name="cop_Total[]"]');
     // Obține toate celulele din coloana "copROLOGIC COPII"
     const probExaminate_copCsub = tabel.querySelectorAll('td[name="cop_Csub[]"]');
  
  // Inițializează suma
  //copROLOGIC total
  let suma_probExaminate_copTotal = 0;

  // Coprologic COPII
  let suma_probExaminate_copCsub = 0;



  //console.log(probExaminate_copTotal);
  //==========================================================Calcularea sumei

  // Calculează suma copROLOGIC total
  probExaminate_copTotal.forEach((cell_probExaminate_copTotal) => {
    const valoare_copTotal = parseInt(cell_probExaminate_copTotal.textContent);
    if (!isNaN(valoare_copTotal)) {
      suma_probExaminate_copTotal += valoare_copTotal;
    }
  });

  // Calculează suma copROLOGIC total
  probExaminate_copCsub.forEach((cell_probExaminate_copCsub) => {
    const valoare_copCsub = parseInt(cell_probExaminate_copCsub.textContent);
    if (!isNaN(valoare_copCsub)) {
      suma_probExaminate_copCsub += valoare_copCsub;
    }
  });
  
  //============================================================ Afișează suma
  //coprologic total
  const rezultatElement_copTotal = document.getElementById("rezultat_copTotal");
  rezultatElement_copTotal.innerHTML = suma_probExaminate_copTotal;
  //coprologic copii
  const rezultatElement_copCsub = document.getElementById("rezultat_copCsub");
  rezultatElement_copCsub.innerHTML = suma_probExaminate_copCsub;


 
const tabel = document.getElementById('probExaminate');

const probExaminate_copTotal = tabel.querySelectorAll('td[name="cop_Total[]"]');
const probExaminate_copCsub = tabel.querySelectorAll('td[name="cop_Csub[]"]');
const probExaminate_cop_Pre = tabel.querySelectorAll('td[name="cop_Pre[]"]');
const probExaminate_cop_Sco = tabel.querySelectorAll('td[name="cop_Sco[]"]');

const probExaminate_entTotal = tabel.querySelectorAll('td[name="ent_Total[]"]');
const probExaminate_entCsub = tabel.querySelectorAll('td[name="ent_Csub[]"]');
const probExaminate_ent_Pre = tabel.querySelectorAll('td[name="ent_Pre[]"]');
const probExaminate_ent_Sco = tabel.querySelectorAll('td[name="ent_Sco[]"]');

const probExaminate_copTotala = tabel.querySelectorAll('td[name="cop_Totala[]"]');
const probExaminate_copCsuba = tabel.querySelectorAll('td[name="cop_Csuba[]"]');
const probExaminate_cop_Prea = tabel.querySelectorAll('td[name="cop_Prea[]"]');
const probExaminate_cop_Scoa = tabel.querySelectorAll('td[name="cop_Scoa[]"]');

const probExaminate_entTotala = tabel.querySelectorAll('td[name="ent_Totala[]"]');
const probExaminate_entCsuba = tabel.querySelectorAll('td[name="ent_Csuba[]"]');
const probExaminate_ent_Prea = tabel.querySelectorAll('td[name="ent_Prea[]"]');
const probExaminate_ent_Scoa = tabel.querySelectorAll('td[name="ent_Scoa[]"]');


let suma_probExaminate_copTotal = 0;
let suma_probExaminate_copCsub = 0;
let suma_probExaminate_cop_Pre = 0;
let suma_probExaminate_cop_Sco = 0;

let suma_probExaminate_entTotal = 0;
let suma_probExaminate_entCsub = 0;
let suma_probExaminate_ent_Pre = 0;
let suma_probExaminate_ent_Sco = 0;

let suma_probExaminate_copTotala = 0;
let suma_probExaminate_copCsuba = 0;
let suma_probExaminate_cop_Prea = 0;
let suma_probExaminate_cop_Scoa = 0;

let suma_probExaminate_entTotala = 0;
let suma_probExaminate_entCsuba = 0;
let suma_probExaminate_ent_Prea = 0;
let suma_probExaminate_ent_Scoa = 0;


function calculateSum(cells, sumVariable) {
  cells.forEach((cell) => {
    const value = parseInt(cell.textContent);
    if (!isNaN(value)) {
      sumVariable += value;
    }
  });
  return sumVariable;
}


suma_probExaminate_copTotal = calculateSum(probExaminate_copTotal, suma_probExaminate_copTotal);
suma_probExaminate_copCsub = calculateSum(probExaminate_copCsub, suma_probExaminate_copCsub);
suma_probExaminate_cop_Pre = calculateSum(probExaminate_cop_Pre, suma_probExaminate_cop_Pre);
suma_probExaminate_cop_Sco = calculateSum(probExaminate_cop_Sco, suma_probExaminate_cop_Sco);

suma_probExaminate_entTotal = calculateSum(probExaminate_entTotal, suma_probExaminate_entTotal);
suma_probExaminate_entCsub = calculateSum(probExaminate_entCsub, suma_probExaminate_entCsub);
suma_probExaminate_ent_Pre = calculateSum(probExaminate_ent_Pre, suma_probExaminate_ent_Pre);
suma_probExaminate_ent_Sco = calculateSum(probExaminate_ent_Sco, suma_probExaminate_ent_Sco);

suma_probExaminate_copTotala = calculateSum(probExaminate_copTotala, suma_probExaminate_copTotala);
suma_probExaminate_copCsuba = calculateSum(probExaminate_copCsuba, suma_probExaminate_copCsuba);
suma_probExaminate_cop_Prea = calculateSum(probExaminate_cop_Prea, suma_probExaminate_cop_Prea);
suma_probExaminate_cop_Scoa = calculateSum(probExaminate_cop_Scoa, suma_probExaminate_cop_Scoa);

suma_probExaminate_entTotala = calculateSum(probExaminate_entTotala, suma_probExaminate_entTotala);
suma_probExaminate_entCsuba = calculateSum(probExaminate_entCsuba, suma_probExaminate_entCsuba);
suma_probExaminate_ent_Prea = calculateSum(probExaminate_ent_Prea, suma_probExaminate_ent_Prea);
suma_probExaminate_ent_Scoa = calculateSum(probExaminate_ent_Scoa, suma_probExaminate_ent_Scoa);


document.getElementById("rezultat_copTotal").textContent = suma_probExaminate_copTotal;
document.getElementById("rezultat_copCsub").textContent = suma_probExaminate_copCsub;
document.getElementById("rezultat_cop_Pre").textContent = suma_probExaminate_cop_Pre;
document.getElementById("rezultat_cop_Sco").textContent = suma_probExaminate_cop_Sco;

document.getElementById("rezultat_ent_Total").textContent = suma_probExaminate_entTotal;
document.getElementById("rezultat_ent_Csub").textContent = suma_probExaminate_entCsub;
document.getElementById("rezultat_ent_Pre").textContent = suma_probExaminate_ent_Pre;
document.getElementById("rezultat_ent_Sco").textContent = suma_probExaminate_ent_Sco;

document.getElementById("rezultat_cop_Totala").textContent = suma_probExaminate_copTotala;
document.getElementById("rezultat_cop_Csuba").textContent = suma_probExaminate_copCsuba;
document.getElementById("rezultat_cop_Prea").textContent = suma_probExaminate_cop_Prea;
document.getElementById("rezultat_cop_Scoa").textContent = suma_probExaminate_cop_Scoa;

document.getElementById("rezultat_ent_Totala").textContent = suma_probExaminate_entTotala;
document.getElementById("rezultat_ent_Csuba").textContent = suma_probExaminate_entCsuba;
document.getElementById("rezultat_ent_Prea").textContent = suma_probExaminate_ent_Prea;
document.getElementById("rezultat_ent_Scoa").textContent = suma_probExaminate_ent_Scoa;

