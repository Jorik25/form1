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
    <link rel="stylesheet" href="css/style.css">
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
        tr td input{
            pointer-events: none;
        }
    </style>
</head>

<body>



    <section class="ftco-section">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="raport.php">Raport</a>
                <form action="#" class="searchform order-sm-start order-lg-last">

                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="raport.php" class="nav-link">Raport</a></li>
<li class="nav-item">
    <form method="get" action="" class="form-inline">
        <input class="form-control" name="dela" type="month" name="eventdate" value="" min="2000-06" step="6">
        <input class="form-control" name="panala" type="month" name="eventdate" value="" min="2000-06" step="6">
        <select class="form-control form-select" name="categoria" id="">
            <option value="mun">Municipii</option>
            <option value="r-ul">Raioane</option>
            <option value="min">Departamente</option>
            <option value="auto">Autonomii</option>
            <option value="mun','r-ul','auto">Ministere</option>
            <option value="mun','r-ul','auto','min">Total Republica</option>
        </select>
             
        <button class="form-control"  name="dataraion" onclick="array()">Gen.Raport</button>
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
                        <li class="nav-item"><a href="populatia.php" class="nav-link">Populatia</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </section>
    <!-- END nav -->
 

    


       
        <br>



    <div class="mainTaible" style="display: none;">
           
    </div>

    <?php if (isset($stmt)): ?>
        <div class="probeEx" style="display: none;"> 
             <!-- 11111111111111111111111111111 -->
            <div class="p-5 text-center">
            <h1 class="mb-3">Probe examinate</h1>
            </div>
        <!-- 111111111111111111111 -->
            <table class="firstTable" id="probExaminate">
                <thead>
                    <tr>
                        <th rowspan="4">Teritoriile <br> administrative</th>
                       
                        <th colspan="8">Numărul probelor examinate la helmintiaze</th>
                    </tr>
                    <tr>
                       
                        <th colspan="4">Prin metode coprologice</th>
                        <th colspan="4">Prin metode speciale</th>
                    </tr>
                    <tr>
                        
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
                    </tr>
                    <?php while ($row = sqlsrv_fetch_array($stmt)): ?>
                        <tr>
                            <th><?php echo $row['rai'] ?></th>
                           
                            <td name="cop_Totala[]"><?php echo $row['cop_Totala'] ?></td>
                            <td name="cop_Csuba[]"><?php echo $row['cop_Csuba'] ?></td>
                            <td name="cop_Prea[]"><?php echo $row['cop_Prea'] ?></td>
                            <td name="cop_Scoa[]"><?php echo $row['cop_Scoa'] ?></td>
                            <td name="ent_Totala[]"><?php echo $row['ent_Totala'] ?></td>
                            <td name="ent_Csuba[]"><?php echo $row['ent_Csuba'] ?></td>
                            <td name="ent_Prea[]"><?php echo $row['ent_Prea'] ?></td>
                            <td name="ent_Scoa[]"><?php echo $row['ent_Scoa'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                    
                    
                    </tr>
                    
                        <tr>
                            <th> <input value="TOTAL"></th>
                           
                            <th id="rezultat_cop_Totala"></th>
                            <th id="rezultat_cop_Csuba"></th>
                            <th id="rezultat_cop_Prea"></th>
                            <th id="rezultat_cop_Scoa"></th>
                            <th id="rezultat_ent_Totala"></th>
                            <th id="rezultat_ent_Csuba"></th>
                            <th id="rezultat_ent_Prea"></th>
                            <th id="rezultat_ent_Scoa"></th>
                            
                            
                        </tr>
<?php endif; ?>

            </thead>
        </table>
    </div>
   
    <?php if (isset($stmt_Per_Dep_T) && isset($stmt_Per_Dep_EV) && isset($stmt_Per_Dep_AL) && isset($stmt_Per_Dep_TT) && isset($stmt_Per_Dep_HN) && isset($stmt_Per_Dep_DL) && isset($stmt_Per_Dep_SS) && isset($stmt_Per_Dep_EG) && isset($stmt_Per_Dep_ALTE)): ?>
            <div class="perDep" style="display: none;">
             <!-- 2222222222222222222222222 -->
        <div class="p-5 text-center">
            <h1 class="mb-3">Persoane depistate</h1>
        </div>
        <!-- 2222222222222222222222222 -->
            <table class="firstTable" id="perDepistate">
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
                    <?php while (($rowT = sqlsrv_fetch_array($stmt_Per_Dep_T)) && ($rowEV = sqlsrv_fetch_array($stmt_Per_Dep_EV)) && ($rowAL = sqlsrv_fetch_array($stmt_Per_Dep_AL)) && ($rowTT = sqlsrv_fetch_array($stmt_Per_Dep_TT)) && ($rowHN = sqlsrv_fetch_array($stmt_Per_Dep_HN)) && ($rowDL = sqlsrv_fetch_array($stmt_Per_Dep_DL)) && ($rowSS = sqlsrv_fetch_array($stmt_Per_Dep_SS)) && ($rowEG = sqlsrv_fetch_array($stmt_Per_Dep_EG)) && ($rowALTE = sqlsrv_fetch_array($stmt_Per_Dep_ALTE))): ?>
                        <tr>
                            <th><?php echo $rowT['rai_TT'] ?></th>
                            <td name="c_sub_T"><?php echo $rowT['c_sub_T'] ?></td>
                            <td name="total_TT"><?php echo $rowT['total_TT'] ?></td>
                            <td name="d_Pre_T_T"><?php echo $rowT['d_Pre_T_T'] ?></td>
                            <td name="d_Pre_O_T"><?php echo $rowT['d_Pre_O_T'] ?></td>
                            <td name="d_Sco_T"><?php echo $rowT['d_Sco_T'] ?></td>
                            <td name="totalE"><?php echo $rowEV['totalE'] ?></td>
                            <td name="c_sub_E"><?php echo $rowEV['c_sub_E'] ?></td>
                            <td name="totalAa"><?php echo $rowAL['totalA'] ?></td>
                            <td name="c_sub_Aa"><?php echo $rowAL['c_sub_A'] ?></td>
                            <td name="totalAb"><?php echo $rowTT['totalA'] ?></td>
                            <td name="c_sub_Ab"><?php echo $rowTT['c_sub_A'] ?></td>
                            <td name="totalAc"><?php echo $rowHN['totalA'] ?></td>
                            <td name="c_sub_Ac"><?php echo $rowHN['c_sub_A'] ?></td>
                            <td name="totalAd"><?php echo $rowDL['totalA'] ?></td>
                            <td name="c_sub_Ad"><?php echo $rowDL['c_sub_A'] ?></td>
                            <td name="totalAe"><?php echo $rowSS['totalA'] ?></td>
                            <td name="c_sub_Ae"><?php echo $rowSS['c_sub_A'] ?></td>
                            <td name="totalAf"><?php echo $rowEG['totalA'] ?></td>
                            <td name="c_sub_Af"><?php echo $rowEG['c_sub_A'] ?></td>
                            <td name="totalAg"><?php echo $rowALTE['totalA'] ?></td>
                            <td name="c_sub_Ag"><?php echo $rowALTE['c_sub_A'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                    <tr>
                            <th> <input value="TOTAL"></th>
                            <th id="rezultat_perDepistate_c_sub_T"></th>
                            <th id="rezultat_perDepistate_total_TT"></th>
                            <th id="rezultat_perDepistate_d_Pre_T_T"></th>
                            <th id="rezultat_perDepistate_d_Pre_O_T"></th>
                            <th id="rezultat_perDepistate_d_Sco_T"></th>
                            <th id="rezultat_perDepistate_totalE"></th>
                            <th id="rezultat_perDepistate_c_sub_E"></th>
                            <th id="rezultat_perDepistate_totalAa"></th>
                            <th id="rezultat_perDepistate_c_sub_Aa"></th>
                            <th id="rezultat_perDepistate_totalAb"></th>
                            <th id="rezultat_perDepistate_c_sub_Ab"></th>
                            <th id="rezultat_perDepistate_totalAc"></th>
                            <th id="rezultat_perDepistate_c_sub_Ac"></th>
                            <th id="rezultat_perDepistate_totalAd"></th>
                            <th id="rezultat_perDepistate_c_sub_Ad"></th>
                            <th id="rezultat_perDepistate_totalAe"></th>
                            <th id="rezultat_perDepistate_c_sub_Ae"></th>
                            <th id="rezultat_perDepistate_totalAf"></th>
                            <th id="rezultat_perDepistate_c_sub_Af"></th>
                            <th id="rezultat_perDepistate_totalAg"></th>
                            <th id="rezultat_perDepistate_c_sub_Ag"></th>
                            
                            
                        </tr>

                    <?php endif; ?>
            </thead>
        </table>
    </div>
  
    
    <?php if (isset($stmt_f)): ?>
        <div class="fInv" style="display: none;"> 
            <!-- 333333333333333333333333333333 -->
        <div class="p-5 text-center">
            <h1 class="mb-3"> Frecventa invaziilor</h1>
        </div>
        <!-- 33333333333333333333333333333333 -->
            <table class="firstTable" id="frecInvaziilor">
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
                        $rowF = sqlsrv_fetch_array($stmt_f)
                    ): ?>
            
                        <tr>
                            <th><?php echo $rowF['rai']  ?></th>
                            <td name="Frec_Inv_1"><?php echo number_format($rowF['column1'], 2) ?></td>
<td name="Frec_Inv_2"><?php echo number_format($rowF['column2'], 2) ?></td>
<td name="Frec_Inv_3"><?php echo number_format($rowF['column3'], 2) ?></td>
<td name="Frec_Inv_4"><?php echo number_format($rowF['column4'], 2) ?></td>
<td name="Frec_Inv_5"><?php echo number_format($rowF['column5'], 2) ?></td>
<td name="Frec_Inv_6"><?php echo number_format($rowF['column6'], 2) ?></td>
<td name="Frec_Inv_7"><?php echo number_format($rowF['column7'], 2) ?></td>
<td name="Frec_Inv_8"><?php echo number_format($rowF['column8'], 2) ?></td>
<td name="Frec_Inv_9"><?php echo number_format($rowF['column9'], 2) ?></td>
<td name="Frec_Inv_10"><?php echo number_format($rowF['column10'], 2) ?></td>
<td name="Frec_Inv_11"><?php echo number_format($rowF['column11'], 2) ?></td>
<td name="Frec_Inv_12"><?php echo number_format($rowF['column12'], 2) ?></td>
                        </tr>
                    <?php endwhile; ?>
                    
                    <?php endif; ?>

            </thead>
        </table>
    </div>

    <?php if (isset($stmt_im_First_total)): ?>
        <div class="iMor" style="display: none;">
            <!-- 2222222222222222222222222 -->
        <div class="p-5 text-center">
            <h1 class="mb-3"> Indicii de morbiditate</h1>
        </div>
        <!-- 2222222222222222222222222 -->
            <table class="firstTable" id="indMorbiditate">
                <thead>
                    <tr>
                        <th rowspan="3">Teritorii administrative    </th>
                        <th colspan="4">Cazuri absolute(infectii)</th>
                        <th colspan="4">Mortabilitatea</th>
                        <th rowspan="3">Indicele de raport 2021/2022</th>
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
                    <?php while (
                        ($rowCA_TF = sqlsrv_fetch_array($stmt_im_First_total))
                        && ($rowCA_TS = sqlsrv_fetch_array($stmt_im_Second_total))
                        && ($rowCA_MF = sqlsrv_fetch_array($stmt_imMFirst))
                        && ($rowCA_MFs = sqlsrv_fetch_array($stmt_imMSecond))
                    ): ?>
                        <tr>
                            <th><?php echo $rowCA_TF['rai'] ?></th>
                            <td name='Ind_Morb_1'><?php echo $rowCA_TF['totalA'] ?></td>
                            <td name='Ind_Morb_2'><?php echo $rowCA_TF['csub'] ?></td>
                            <td name='Ind_Morb_3'><?php echo $rowCA_TS['totalA'] ?></td>
                            <td name='Ind_Morb_4'><?php echo $rowCA_TS['csub'] ?></td>
                            <td name='Ind_Morb_5'><?php echo $rowCA_MF['totalA'] ?></td>
                            <td name='Ind_Morb_6'><?php echo $rowCA_MF['csub'] ?></td>
                            <td name='Ind_Morb_7'><?php echo $rowCA_MFs['totalA'] ?></td>
                            <td name='Ind_Morb_8'><?php echo $rowCA_MFs['csub'] ?></td>
                            <td name='Ind_Morb_9'></td>
                        </tr>
                    <?php endwhile; ?>
                    <tr>
                            <th> <input value="TOTAL"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_1"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_2"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_3"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_4"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_5"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_6"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_7"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_8"></th>
                            <th id="rezultat_indMorbiditate_Ind_Morb_9"></th>                           
                        </tr>
                <?php endif; ?>
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


    <?php if ((isset($stmt_ind_invazii_E_ver)) 
    && (isset($stmt_ind_invazii_A_Lum))
    && (isset($stmt_ind_invazii_T_Tri))
    && (isset($stmt_ind_invazii_H_nana))
    && (isset($stmt_ind_invazii_Ts_Ts))
    && (isset($stmt_ind_invazii_D_lat))
    && (isset($stmt_ind_invazii_S_ster))
    && (isset($stmt_ind_invazii_E_gran))
): ?>
    <div class="iInv" style="display: none;">
    <!-- 2222222222222222222222222 -->
    <div class="p-5 text-center">
        <h1 class="mb-3">Indicatorii de invazii</h1>
    </div>
    <!-- 2222222222222222222222222 -->
    <div>
        <h3 class="mb-1 text-center">1.1. E. vermicularis</h3>
        <table class="firstTable" id="INV_E_ver">
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
                <?php while (
                        $row_E_ver = sqlsrv_fetch_array($stmt_ind_invazii_E_ver) 
                    ): ?>
                <tr>
                    <th><?php echo $row_E_ver['Teritorii_Administrative'] ?></th>
                    <td name="inv_E_ver1"><?php echo $row_E_ver['Suma_Totala'] ?></td>
                    <td name="inv_E_ver2"><?php echo $row_E_ver['Suma_C_Sub'] ?></td>
                    <td name="inv_E_ver3"><?php echo $row_E_ver['Suma_D_Pre_T'] ?></td>
                    <td name="inv_E_ver4"><?php echo $row_E_ver['Suma_D_Pre_O'] ?></td>
                    <td name="inv_E_ver5"><?php echo $row_E_ver['Suma_D_Sco'] ?></td>
                    <td name="inv_E_ver6"><?php echo $row_E_ver['Suma_Rural_T'] ?></td>
                    <td name="inv_E_ver7"><?php echo $row_E_ver['Suma_Rural_CSub'] ?></td>
                    <td name="inv_E_ver8"><?php echo $row_E_ver['Suma_Totala'] ?></td>
                    <td name="inv_E_ver9"><?php echo $row_E_ver['Suma_C_Sub'] ?></td>
                    <td name="inv_E_ver10"><?php echo $row_E_ver['Suma_D_Pre_T'] ?></td>
                    <td name="inv_E_ver11"><?php echo $row_E_ver['Suma_D_Pre_O'] ?></td>
                    <td name="inv_E_ver12"><?php echo $row_E_ver['Suma_D_Sco'] ?></td>
                    <td name="inv_E_ver13"><?php echo $row_E_ver['Suma_Rural_T'] ?></td>
                    <td name="inv_E_ver14"><?php echo $row_E_ver['Suma_Rural_CSub'] ?></td>
                    <td name="inv_E_ver15"><?php echo $row_E_ver['Frec_Inv_Total'] ?></td>
                    <td name="inv_E_ver16"><?php echo $row_E_ver['Frec_Inv_Total2'] ?></td>
                    <td name="inv_E_ver17"><?php echo $row_E_ver['Frec_Inv_Total3'] ?></td>
                    <td name="inv_E_ver18"><?php echo $row_E_ver['Frec_Inv_Total4'] ?></td>
                    <td name="inv_E_ver19"><?php echo $row_E_ver['Frec_Inv_Total5'] ?></td>
                    <td name="inv_E_ver20"><?php echo $row_E_ver['Frec_Inv_Total6'] ?></td>
                    <td name="inv_E_ver21"><?php // echo $row_E_ver[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_E_ver1"></th>
                    <th id="rezultat_E_ver2"></th>
                    <th id="rezultat_E_ver3"></th>
                    <th id="rezultat_E_ver4"></th>
                    <th id="rezultat_E_ver5"></th>
                    <th id="rezultat_E_ver6"></th>
                    <th id="rezultat_E_ver7"></th>
                    <th id="rezultat_E_ver8"></th>
                    <th id="rezultat_E_ver9"></th>
                    <th id="rezultat_E_ver10"></th>
                    <th id="rezultat_E_ver11"></th>
                    <th id="rezultat_E_ver12"></th>
                    <th id="rezultat_E_ver13"></th>
                    <th id="rezultat_E_ver14"></th>
                    <th id="rezultat_E_ver15"></th>
                    <th id="rezultat_E_ver16"></th>
                    <th id="rezultat_E_ver17"></th>
                    <th id="rezultat_E_ver18"></th>
                    <th id="rezultat_E_ver19"></th>
                    <th id="rezultat_E_ver20"></th>
                    <th id="rezultat_E_ver21"></th>
                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.2. A. lumbricoides</h3>
        <table class="firstTable" id="INV_A_Lum">
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
                <?php while (
                        $row_A_Lum = sqlsrv_fetch_array($stmt_ind_invazii_A_Lum) 
                    ): ?>
                <tr>
                    <th><?php echo $row_A_Lum['Teritorii_Administrative'] ?></th>
                    <td name="inv_A_Lum1"><?php echo $row_A_Lum['Suma_Totala'] ?></td>
                    <td name="inv_A_Lum2"><?php echo $row_A_Lum['Suma_C_Sub'] ?></td>
                    <td name="inv_A_Lum3"><?php echo $row_A_Lum['Suma_D_Pre_T'] ?></td>
                    <td name="inv_A_Lum4"><?php echo $row_A_Lum['Suma_D_Pre_O'] ?></td>
                    <td name="inv_A_Lum5"><?php echo $row_A_Lum['Suma_D_Sco'] ?></td>
                    <td name="inv_A_Lum6"><?php echo $row_A_Lum['Suma_Rural_T'] ?></td>
                    <td name="inv_A_Lum7"><?php echo $row_A_Lum['Suma_Rural_CSub'] ?></td>
                    <td name="inv_A_Lum8"><?php echo $row_A_Lum['Suma_Totala'] ?></td>
                    <td name="inv_A_Lum9"><?php echo $row_A_Lum['Suma_C_Sub'] ?></td>
                    <td name="inv_A_Lum10"><?php echo $row_A_Lum['Suma_D_Pre_T'] ?></td>
                    <td name="inv_A_Lum11"><?php echo $row_A_Lum['Suma_D_Pre_O'] ?></td>
                    <td name="inv_A_Lum12"><?php echo $row_A_Lum['Suma_D_Sco'] ?></td>
                    <td name="inv_A_Lum13"><?php echo $row_A_Lum['Suma_Rural_T'] ?></td>
                    <td name="inv_A_Lum14"><?php echo $row_A_Lum['Suma_Rural_CSub'] ?></td>
                    <td name="inv_A_Lum15"><?php echo $row_A_Lum['Frec_Inv_Total'] ?></td>
                    <td name="inv_A_Lum16"><?php echo $row_A_Lum['Frec_Inv_Total2'] ?></td>
                    <td name="inv_A_Lum17"><?php echo $row_A_Lum['Frec_Inv_Total3'] ?></td>
                    <td name="inv_A_Lum18"><?php echo $row_A_Lum['Frec_Inv_Total4'] ?></td>
                    <td name="inv_A_Lum19"><?php echo $row_A_Lum['Frec_Inv_Total5'] ?></td>
                    <td name="inv_A_Lum20"><?php echo $row_A_Lum['Frec_Inv_Total6'] ?></td>
                    <td name="inv_A_Lum21"><?php // echo $row_A_Lum[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_A_Lum1"></th>
                    <th id="rezultat_A_Lum2"></th>
                    <th id="rezultat_A_Lum3"></th>
                    <th id="rezultat_A_Lum4"></th>
                    <th id="rezultat_A_Lum5"></th>
                    <th id="rezultat_A_Lum6"></th>
                    <th id="rezultat_A_Lum7"></th>
                    <th id="rezultat_A_Lum8"></th>
                    <th id="rezultat_A_Lum9"></th>
                    <th id="rezultat_A_Lum10"></th>
                    <th id="rezultat_A_Lum11"></th>
                    <th id="rezultat_A_Lum12"></th>
                    <th id="rezultat_A_Lum13"></th>
                    <th id="rezultat_A_Lum14"></th>
                    <th id="rezultat_A_Lum15"></th>
                    <th id="rezultat_A_Lum16"></th>
                    <th id="rezultat_A_Lum17"></th>
                    <th id="rezultat_A_Lum18"></th>
                    <th id="rezultat_A_Lum19"></th>
                    <th id="rezultat_A_Lum20"></th>
                    <th id="rezultat_A_Lum21"></th>
                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.3. T. trichiurus</h3>
        <table class="firstTable" id="INV_T_Tri">
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
                <?php while (
                        $row_T_Tri = sqlsrv_fetch_array($stmt_ind_invazii_T_Tri) 
                    ): ?>
                <tr>
                    <th><?php echo $row_T_Tri['Teritorii_Administrative'] ?></th>
                    <td name="inv_T_Tri1"><?php echo $row_T_Tri['Suma_Totala'] ?></td>
                    <td name="inv_T_Tri2"><?php echo $row_T_Tri['Suma_C_Sub'] ?></td>
                    <td name="inv_T_Tri3"><?php echo $row_T_Tri['Suma_D_Pre_T'] ?></td>
                    <td name="inv_T_Tri4"><?php echo $row_T_Tri['Suma_D_Pre_O'] ?></td>
                    <td name="inv_T_Tri5"><?php echo $row_T_Tri['Suma_D_Sco'] ?></td>
                    <td name="inv_T_Tri6"><?php echo $row_T_Tri['Suma_Rural_T'] ?></td>
                    <td name="inv_T_Tri7"><?php echo $row_T_Tri['Suma_Rural_CSub'] ?></td>
                    <td name="inv_T_Tri8"><?php echo $row_T_Tri['Suma_Totala'] ?></td>
                    <td name="inv_T_Tri9"><?php echo $row_T_Tri['Suma_C_Sub'] ?></td>
                    <td name="inv_T_Tri10"><?php echo $row_T_Tri['Suma_D_Pre_T'] ?></td>
                    <td name="inv_T_Tri11"><?php echo $row_T_Tri['Suma_D_Pre_O'] ?></td>
                    <td name="inv_T_Tri12"><?php echo $row_T_Tri['Suma_D_Sco'] ?></td>
                    <td name="inv_T_Tri13"><?php echo $row_T_Tri['Suma_Rural_T'] ?></td>
                    <td name="inv_T_Tri14"><?php echo $row_T_Tri['Suma_Rural_CSub'] ?></td>
                    <td name="inv_T_Tri15"><?php echo $row_T_Tri['Frec_Inv_Total'] ?></td>
                    <td name="inv_T_Tri16"><?php echo $row_T_Tri['Frec_Inv_Total2'] ?></td>
                    <td name="inv_T_Tri17"><?php echo $row_T_Tri['Frec_Inv_Total3'] ?></td>
                    <td name="inv_T_Tri18"><?php echo $row_T_Tri['Frec_Inv_Total4'] ?></td>
                    <td name="inv_T_Tri19"><?php echo $row_T_Tri['Frec_Inv_Total5'] ?></td>
                    <td name="inv_T_Tri20"><?php echo $row_T_Tri['Frec_Inv_Total6'] ?></td>
                    <td name="inv_T_Tri21"><?php // echo $row_T_Tri[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_T_Tri1"></th>
                    <th id="rezultat_T_Tri2"></th>
                    <th id="rezultat_T_Tri3"></th>
                    <th id="rezultat_T_Tri4"></th>
                    <th id="rezultat_T_Tri5"></th>
                    <th id="rezultat_T_Tri6"></th>
                    <th id="rezultat_T_Tri7"></th>
                    <th id="rezultat_T_Tri8"></th>
                    <th id="rezultat_T_Tri9"></th>
                    <th id="rezultat_T_Tri10"></th>
                    <th id="rezultat_T_Tri11"></th>
                    <th id="rezultat_T_Tri12"></th>
                    <th id="rezultat_T_Tri13"></th>
                    <th id="rezultat_T_Tri14"></th>
                    <th id="rezultat_T_Tri15"></th>
                    <th id="rezultat_T_Tri16"></th>
                    <th id="rezultat_T_Tri17"></th>
                    <th id="rezultat_T_Tri18"></th>
                    <th id="rezultat_T_Tri19"></th>
                    <th id="rezultat_T_Tri20"></th>
                    <th id="rezultat_T_Tri21"></th>
                </tr>
            </thead>
        </table>

    </div>


    <div>
        <h3 class="mb-1 text-center">1.4. H.nana</h3>
        <table class="firstTable" id="INV_H_nana">
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
                <?php while (
                        $row_H_nana = sqlsrv_fetch_array($stmt_ind_invazii_H_nana) 
                    ): ?>
                <tr>
                    <th><?php echo $row_H_nana['Teritorii_Administrative'] ?></th>
                    <td name="inv_H_nana1"><?php echo $row_H_nana['Suma_Totala'] ?></td>
                    <td name="inv_H_nana2"><?php echo $row_H_nana['Suma_C_Sub'] ?></td>
                    <td name="inv_H_nana3"><?php echo $row_H_nana['Suma_D_Pre_T'] ?></td>
                    <td name="inv_H_nana4"><?php echo $row_H_nana['Suma_D_Pre_O'] ?></td>
                    <td name="inv_H_nana5"><?php echo $row_H_nana['Suma_D_Sco'] ?></td>
                    <td name="inv_H_nana6"><?php echo $row_H_nana['Suma_Rural_T'] ?></td>
                    <td name="inv_H_nana7"><?php echo $row_H_nana['Suma_Rural_CSub'] ?></td>
                    <td name="inv_H_nana8"><?php echo $row_H_nana['Suma_Totala'] ?></td>
                    <td name="inv_H_nana9"><?php echo $row_H_nana['Suma_C_Sub'] ?></td>
                    <td name="inv_H_nana10"><?php echo $row_H_nana['Suma_D_Pre_T'] ?></td>
                    <td name="inv_H_nana11"><?php echo $row_H_nana['Suma_D_Pre_O'] ?></td>
                    <td name="inv_H_nana12"><?php echo $row_H_nana['Suma_D_Sco'] ?></td>
                    <td name="inv_H_nana13"><?php echo $row_H_nana['Suma_Rural_T'] ?></td>
                    <td name="inv_H_nana14"><?php echo $row_H_nana['Suma_Rural_CSub'] ?></td>
                    <td name="inv_H_nana15"><?php echo $row_H_nana['Frec_Inv_Total'] ?></td>
                    <td name="inv_H_nana16"><?php echo $row_H_nana['Frec_Inv_Total2'] ?></td>
                    <td name="inv_H_nana17"><?php echo $row_H_nana['Frec_Inv_Total3'] ?></td>
                    <td name="inv_H_nana18"><?php echo $row_H_nana['Frec_Inv_Total4'] ?></td>
                    <td name="inv_H_nana19"><?php echo $row_H_nana['Frec_Inv_Total5'] ?></td>
                    <td name="inv_H_nana20"><?php echo $row_H_nana['Frec_Inv_Total6'] ?></td>
                    <td name="inv_H_nana21"><?php // echo $row_H_nana[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_H_nana1"></th>
                    <th id="rezultat_H_nana2"></th>
                    <th id="rezultat_H_nana3"></th>
                    <th id="rezultat_H_nana4"></th>
                    <th id="rezultat_H_nana5"></th>
                    <th id="rezultat_H_nana6"></th>
                    <th id="rezultat_H_nana7"></th>
                    <th id="rezultat_H_nana8"></th>
                    <th id="rezultat_H_nana9"></th>
                    <th id="rezultat_H_nana10"></th>
                    <th id="rezultat_H_nana11"></th>
                    <th id="rezultat_H_nana12"></th>
                    <th id="rezultat_H_nana13"></th>
                    <th id="rezultat_H_nana14"></th>
                    <th id="rezultat_H_nana15"></th>
                    <th id="rezultat_H_nana16"></th>
                    <th id="rezultat_H_nana17"></th>
                    <th id="rezultat_H_nana18"></th>
                    <th id="rezultat_H_nana19"></th>
                    <th id="rezultat_H_nana20"></th>
                    <th id="rezultat_H_nana21"></th>
                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.5.      T. solium, T. saginata</h3>
        <table class="firstTable" id="INV_Ts_Ts">
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
                <?php while (
                        $row_Ts_Ts = sqlsrv_fetch_array($stmt_ind_invazii_Ts_Ts) 
                    ): ?>
                <tr>
                    <th><?php echo $row_Ts_Ts['Teritorii_Administrative'] ?></th>
                    <td name="inv_Ts_Ts1"><?php echo $row_Ts_Ts['Suma_Totala'] ?></td>
                    <td name="inv_Ts_Ts2"><?php echo $row_Ts_Ts['Suma_C_Sub'] ?></td>
                    <td name="inv_Ts_Ts3"><?php echo $row_Ts_Ts['Suma_D_Pre_T'] ?></td>
                    <td name="inv_Ts_Ts4"><?php echo $row_Ts_Ts['Suma_D_Pre_O'] ?></td>
                    <td name="inv_Ts_Ts5"><?php echo $row_Ts_Ts['Suma_D_Sco'] ?></td>
                    <td name="inv_Ts_Ts6"><?php echo $row_Ts_Ts['Suma_Rural_T'] ?></td>
                    <td name="inv_Ts_Ts7"><?php echo $row_Ts_Ts['Suma_Rural_CSub'] ?></td>
                    <td name="inv_Ts_Ts8"><?php echo $row_Ts_Ts['Suma_Totala'] ?></td>
                    <td name="inv_Ts_Ts9"><?php echo $row_Ts_Ts['Suma_C_Sub'] ?></td>
                    <td name="inv_Ts_Ts10"><?php echo $row_Ts_Ts['Suma_D_Pre_T'] ?></td>
                    <td name="inv_Ts_Ts11"><?php echo $row_Ts_Ts['Suma_D_Pre_O'] ?></td>
                    <td name="inv_Ts_Ts12"><?php echo $row_Ts_Ts['Suma_D_Sco'] ?></td>
                    <td name="inv_Ts_Ts13"><?php echo $row_Ts_Ts['Suma_Rural_T'] ?></td>
                    <td name="inv_Ts_Ts14"><?php echo $row_Ts_Ts['Suma_Rural_CSub'] ?></td>
                    <td name="inv_Ts_Ts15"><?php echo $row_Ts_Ts['Frec_Inv_Total'] ?></td>
                    <td name="inv_Ts_Ts16"><?php echo $row_Ts_Ts['Frec_Inv_Total2'] ?></td>
                    <td name="inv_Ts_Ts17"><?php echo $row_Ts_Ts['Frec_Inv_Total3'] ?></td>
                    <td name="inv_Ts_Ts18"><?php echo $row_Ts_Ts['Frec_Inv_Total4'] ?></td>
                    <td name="inv_Ts_Ts19"><?php echo $row_Ts_Ts['Frec_Inv_Total5'] ?></td>
                    <td name="inv_Ts_Ts20"><?php echo $row_Ts_Ts['Frec_Inv_Total6'] ?></td>
                    <td name="inv_Ts_Ts21"><?php // echo $row_Ts_Ts[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_Ts_Ts1"></th>
                    <th id="rezultat_Ts_Ts2"></th>
                    <th id="rezultat_Ts_Ts3"></th>
                    <th id="rezultat_Ts_Ts4"></th>
                    <th id="rezultat_Ts_Ts5"></th>
                    <th id="rezultat_Ts_Ts6"></th>
                    <th id="rezultat_Ts_Ts7"></th>
                    <th id="rezultat_Ts_Ts8"></th>
                    <th id="rezultat_Ts_Ts9"></th>
                    <th id="rezultat_Ts_Ts10"></th>
                    <th id="rezultat_Ts_Ts11"></th>
                    <th id="rezultat_Ts_Ts12"></th>
                    <th id="rezultat_Ts_Ts13"></th>
                    <th id="rezultat_Ts_Ts14"></th>
                    <th id="rezultat_Ts_Ts15"></th>
                    <th id="rezultat_Ts_Ts16"></th>
                    <th id="rezultat_Ts_Ts17"></th>
                    <th id="rezultat_Ts_Ts18"></th>
                    <th id="rezultat_Ts_Ts19"></th>
                    <th id="rezultat_Ts_Ts20"></th>
                    <th id="rezultat_Ts_Ts21"></th>
                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.6.      D. latum</h3>
        <table class="firstTable" id="INV_D_lat">
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
                <?php while (
                        $row_D_lat = sqlsrv_fetch_array($stmt_ind_invazii_D_lat) 
                    ): ?>
                <tr>
                    <th><?php echo $row_D_lat['Teritorii_Administrative'] ?></th>
                    <td name="inv_D_lat1"><?php echo $row_D_lat['Suma_Totala'] ?></td>
                    <td name="inv_D_lat2"><?php echo $row_D_lat['Suma_C_Sub'] ?></td>
                    <td name="inv_D_lat3"><?php echo $row_D_lat['Suma_D_Pre_T'] ?></td>
                    <td name="inv_D_lat4"><?php echo $row_D_lat['Suma_D_Pre_O'] ?></td>
                    <td name="inv_D_lat5"><?php echo $row_D_lat['Suma_D_Sco'] ?></td>
                    <td name="inv_D_lat6"><?php echo $row_D_lat['Suma_Rural_T'] ?></td>
                    <td name="inv_D_lat7"><?php echo $row_D_lat['Suma_Rural_CSub'] ?></td>
                    <td name="inv_D_lat8"><?php echo $row_D_lat['Suma_Totala'] ?></td>
                    <td name="inv_D_lat9"><?php echo $row_D_lat['Suma_C_Sub'] ?></td>
                    <td name="inv_D_lat10"><?php echo $row_D_lat['Suma_D_Pre_T'] ?></td>
                    <td name="inv_D_lat11"><?php echo $row_D_lat['Suma_D_Pre_O'] ?></td>
                    <td name="inv_D_lat12"><?php echo $row_D_lat['Suma_D_Sco'] ?></td>
                    <td name="inv_D_lat13"><?php echo $row_D_lat['Suma_Rural_T'] ?></td>
                    <td name="inv_D_lat14"><?php echo $row_D_lat['Suma_Rural_CSub'] ?></td>
                    <td name="inv_D_lat15"><?php echo $row_D_lat['Frec_Inv_Total'] ?></td>
                    <td name="inv_D_lat16"><?php echo $row_D_lat['Frec_Inv_Total2'] ?></td>
                    <td name="inv_D_lat17"><?php echo $row_D_lat['Frec_Inv_Total3'] ?></td>
                    <td name="inv_D_lat18"><?php echo $row_D_lat['Frec_Inv_Total4'] ?></td>
                    <td name="inv_D_lat19"><?php echo $row_D_lat['Frec_Inv_Total5'] ?></td>
                    <td name="inv_D_lat20"><?php echo $row_D_lat['Frec_Inv_Total6'] ?></td>
                    <td name="inv_D_lat21"><?php // echo $row_D_lat[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_D_lat1"></th>
                    <th id="rezultat_D_lat2"></th>
                    <th id="rezultat_D_lat3"></th>
                    <th id="rezultat_D_lat4"></th>
                    <th id="rezultat_D_lat5"></th>
                    <th id="rezultat_D_lat6"></th>
                    <th id="rezultat_D_lat7"></th>
                    <th id="rezultat_D_lat8"></th>
                    <th id="rezultat_D_lat9"></th>
                    <th id="rezultat_D_lat10"></th>
                    <th id="rezultat_D_lat11"></th>
                    <th id="rezultat_D_lat12"></th>
                    <th id="rezultat_D_lat13"></th>
                    <th id="rezultat_D_lat14"></th>
                    <th id="rezultat_D_lat15"></th>
                    <th id="rezultat_D_lat16"></th>
                    <th id="rezultat_D_lat17"></th>
                    <th id="rezultat_D_lat18"></th>
                    <th id="rezultat_D_lat19"></th>
                    <th id="rezultat_D_lat20"></th>
                    <th id="rezultat_D_lat21"></th>
                </tr>
            </thead>
        </table>
    </div>



    <div>
        <h3 class="mb-1 text-center">1.7.      S. stercoralis</h3>
        <table class="firstTable" id="INV_S_ster">
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
                <?php while (
                        $row_S_ster = sqlsrv_fetch_array($stmt_ind_invazii_S_ster) 
                    ): ?>
                <tr>
                    <th><?php echo $row_S_ster['Teritorii_Administrative'] ?></th>
                    <td name="inv_S_ster1"><?php echo $row_S_ster['Suma_Totala'] ?></td>
                    <td name="inv_S_ster2"><?php echo $row_S_ster['Suma_C_Sub'] ?></td>
                    <td name="inv_S_ster3"><?php echo $row_S_ster['Suma_D_Pre_T'] ?></td>
                    <td name="inv_S_ster4"><?php echo $row_S_ster['Suma_D_Pre_O'] ?></td>
                    <td name="inv_S_ster5"><?php echo $row_S_ster['Suma_D_Sco'] ?></td>
                    <td name="inv_S_ster6"><?php echo $row_S_ster['Suma_Rural_T'] ?></td>
                    <td name="inv_S_ster7"><?php echo $row_S_ster['Suma_Rural_CSub'] ?></td>
                    <td name="inv_S_ster8"><?php echo $row_S_ster['Suma_Totala'] ?></td>
                    <td name="inv_S_ster9"><?php echo $row_S_ster['Suma_C_Sub'] ?></td>
                    <td name="inv_S_ster10"><?php echo $row_S_ster['Suma_D_Pre_T'] ?></td>
                    <td name="inv_S_ster11"><?php echo $row_S_ster['Suma_D_Pre_O'] ?></td>
                    <td name="inv_S_ster12"><?php echo $row_S_ster['Suma_D_Sco'] ?></td>
                    <td name="inv_S_ster13"><?php echo $row_S_ster['Suma_Rural_T'] ?></td>
                    <td name="inv_S_ster14"><?php echo $row_S_ster['Suma_Rural_CSub'] ?></td>
                    <td name="inv_S_ster15"><?php echo $row_S_ster['Frec_Inv_Total'] ?></td>
                    <td name="inv_S_ster16"><?php echo $row_S_ster['Frec_Inv_Total2'] ?></td>
                    <td name="inv_S_ster17"><?php echo $row_S_ster['Frec_Inv_Total3'] ?></td>
                    <td name="inv_S_ster18"><?php echo $row_S_ster['Frec_Inv_Total4'] ?></td>
                    <td name="inv_S_ster19"><?php echo $row_S_ster['Frec_Inv_Total5'] ?></td>
                    <td name="inv_S_ster20"><?php echo $row_S_ster['Frec_Inv_Total6'] ?></td>
                    <td name="inv_S_ster21"><?php // echo $row_S_ster[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_S_ster1"></th>
                    <th id="rezultat_S_ster2"></th>
                    <th id="rezultat_S_ster3"></th>
                    <th id="rezultat_S_ster4"></th>
                    <th id="rezultat_S_ster5"></th>
                    <th id="rezultat_S_ster6"></th>
                    <th id="rezultat_S_ster7"></th>
                    <th id="rezultat_S_ster8"></th>
                    <th id="rezultat_S_ster9"></th>
                    <th id="rezultat_S_ster10"></th>
                    <th id="rezultat_S_ster11"></th>
                    <th id="rezultat_S_ster12"></th>
                    <th id="rezultat_S_ster13"></th>
                    <th id="rezultat_S_ster14"></th>
                    <th id="rezultat_S_ster15"></th>
                    <th id="rezultat_S_ster16"></th>
                    <th id="rezultat_S_ster17"></th>
                    <th id="rezultat_S_ster18"></th>
                    <th id="rezultat_S_ster19"></th>
                    <th id="rezultat_S_ster20"></th>
                    <th id="rezultat_S_ster21"></th>
                </tr>
            </thead>
        </table>
    </div>


    <div>
        <h3 class="mb-1 text-center">1.8.      E. granulosus</h3>
        <table class="firstTable" id="INV_E_gran">
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
                <?php while (
                        $row_E_gran = sqlsrv_fetch_array($stmt_ind_invazii_E_gran) 
                    ): ?>
                <tr>
                    <th><?php echo $row_E_gran['Teritorii_Administrative'] ?></th>
                    <td name="inv_E_gran1"><?php echo $row_E_gran['Suma_Totala'] ?></td>
                    <td name="inv_E_gran2"><?php echo $row_E_gran['Suma_C_Sub'] ?></td>
                    <td name="inv_E_gran3"><?php echo $row_E_gran['Suma_D_Pre_T'] ?></td>
                    <td name="inv_E_gran4"><?php echo $row_E_gran['Suma_D_Pre_O'] ?></td>
                    <td name="inv_E_gran5"><?php echo $row_E_gran['Suma_D_Sco'] ?></td>
                    <td name="inv_E_gran6"><?php echo $row_E_gran['Suma_Rural_T'] ?></td>
                    <td name="inv_E_gran7"><?php echo $row_E_gran['Suma_Rural_CSub'] ?></td>
                    <td name="inv_E_gran8"><?php echo $row_E_gran['Suma_Totala'] ?></td>
                    <td name="inv_E_gran9"><?php echo $row_E_gran['Suma_C_Sub'] ?></td>
                    <td name="inv_E_gran10"><?php echo $row_E_gran['Suma_D_Pre_T'] ?></td>
                    <td name="inv_E_gran11"><?php echo $row_E_gran['Suma_D_Pre_O'] ?></td>
                    <td name="inv_E_gran12"><?php echo $row_E_gran['Suma_D_Sco'] ?></td>
                    <td name="inv_E_gran13"><?php echo $row_E_gran['Suma_Rural_T'] ?></td>
                    <td name="inv_E_gran14"><?php echo $row_E_gran['Suma_Rural_CSub'] ?></td>
                    
                    <td name="inv_E_gran17"><?php echo $row_E_gran['Frec_Inv_Total3'] ?></td>
                    <td name="inv_E_gran18"><?php echo $row_E_gran['Frec_Inv_Total4'] ?></td>
                    <td name="inv_E_gran19"><?php echo $row_E_gran['Frec_Inv_Total5'] ?></td>
                    <td name="inv_E_gran20"><?php echo $row_E_gran['Frec_Inv_Total6'] ?></td>
                    <td name="inv_E_gran21"><?php // echo $row_E_gran[''] ?></td>

                </tr>
                <?php endwhile; ?>
                <tr>
                    <th><input value="TOTAL"></th>
                    <th id="rezultat_E_gran1"></th>
                    <th id="rezultat_E_gran2"></th>
                    <th id="rezultat_E_gran3"></th>
                    <th id="rezultat_E_gran4"></th>
                    <th id="rezultat_E_gran5"></th>
                    <th id="rezultat_E_gran6"></th>
                    <th id="rezultat_E_gran7"></th>
                    <th id="rezultat_E_gran8"></th>
                    <th id="rezultat_E_gran9"></th>
                    <th id="rezultat_E_gran10"></th>
                    <th id="rezultat_E_gran11"></th>
                    <th id="rezultat_E_gran12"></th>
                    <th id="rezultat_E_gran13"></th>
                    <th id="rezultat_E_gran14"></th>
                    
                    <th id="rezultat_E_gran17"></th>
                    <th id="rezultat_E_gran18"></th>
                    <th id="rezultat_E_gran19"></th>
                    <th id="rezultat_E_gran20"></th>
                    <th id="rezultat_E_gran21"></th>
                </tr>

                <?php endif; ?>
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
  

    <?php if (isset($stmt_dehelment_table)): ?>
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
                <?php while (($rowDehelm_table = sqlsrv_fetch_array($stmt_dehelment_table))): ?>
                <tr>
                    <th><?php echo $rowDehelm_table['Teritorii_Administrative']  ?></th>   
                    <td><?php echo $rowDehelm_table['suma_column1']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column2']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column3']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column4']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column5']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column6']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column7']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column8']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column9']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column10']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column11']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column12']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column13']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column14']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column15']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column16']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column17']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column18']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column19']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column20']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column21']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column22']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column23']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column24']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column25']  ?></td>
                    <td><?php echo $rowDehelm_table['suma_column26']  ?></td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
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
 

    <?php if (isset($stmt_malaria_table)): ?>
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
                <?php while (($rowMalarie_table = sqlsrv_fetch_array($stmt_malaria_table))): ?>
                <tr>
                    <th><?php echo $rowMalarie_table['Teritorii_Administrative'] ?></th>
                    <td name='malaria1'><?php echo $rowMalarie_table['suma_p_examin'] ?></td>
                    <td name='malaria2'><?php echo $rowMalarie_table['suma_p_dep_m'] ?></td>
                    <td name='malaria3'><?php echo $rowMalarie_table['suma_bazin_apa'] ?></td>
                    <td name='malaria4'><?php echo $rowMalarie_table['suma_incaperi_p'] ?></td>
                    <td name='malaria5'><?php echo $rowMalarie_table['suma_vegetatii_p'] ?></td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
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
        function array() {

<?php


//sql запрос
$sql = "select d_inv,
    sum(c_CIM)as c_CIM,
    sum(cop_Total) as cop_Total,
    sum(cop_Csub)as cop_Csub,
    sum(cop_Pre)as cop_Pre, 
        sum(cop_Sco)as cop_Sco, 
        sum(ent_Total)as ent_Total, 
        sum(ent_Csub)as ent_Csub, 
        sum(ent_Pre)as ent_Pre, 
        sum(ent_Sco)as ent_Sco, 
        sum(total)as total, 
        sum(c_sub)as c_sub, 
        sum(d_Pre_T)as d_Pre_T, 
         sum(d_Pre_O)as d_Pre_O,           
           sum(d_Sco)as d_Sco,        
           sum(rural_T)as rural_T,                     
           sum(rural_Csub)as rural_Csub,
           raion,(select T_admin  FROM raion WHERE id = raion) AS rai
    FROM main_table 
    WHERE raion in (select id from raion where categoria in('$categoria')) and datam BETWEEN '$dela' and '$panala' GROUP BY d_inv, raion";

$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
// столбец SQL в масив PHP
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $d_inv[] = $row['d_inv'];
    $c_CIM[] = $row['c_CIM'];
    $cop_Total[] = $row['cop_Total'];
    $cop_Csub[] = $row['cop_Csub'];
    $cop_Pre[] = $row['cop_Pre'];
    $cop_Sco[] = $row['cop_Sco'];
    $ent_Total[] = $row['ent_Total'];
    $ent_Csub[] = $row['ent_Csub'];
    $ent_Pre[] = $row['ent_Pre'];
    $ent_Sco[] = $row['ent_Sco'];
    $total[] = $row['total'];
    $c_sub[] = $row['c_sub'];
    $d_Pre_T[] = $row['d_Pre_T'];
    $d_Pre_O[] = $row['d_Pre_O'];
    $d_Sco[] = $row['d_Sco'];
    $rural_T[] = $row['rural_T'];
    $rural_Csub[] = $row['rural_Csub'];

    $raion[] = $row['raion'];
    $rai[] = $row['rai'];
}
sqlsrv_free_stmt($stmt);
?>
}
        //                          из массива PHP в массив JS
        //----------------------------------------------------
        let d_inv = <?php echo json_encode($d_inv); ?>;
        let c_CIM = <?php echo json_encode($c_CIM); ?>;
        let cop_Total = <?php echo json_encode($cop_Total); ?>;
        let cop_Csub = <?php echo json_encode($cop_Csub); ?>;
        let cop_Pre = <?php echo json_encode($cop_Pre); ?>;
        let cop_Sco = <?php echo json_encode($cop_Sco); ?>;
        let ent_Total = <?php echo json_encode($ent_Total); ?>;
        let ent_Csub = <?php echo json_encode($ent_Csub); ?>;
        let ent_Pre = <?php echo json_encode($ent_Pre); ?>;
        let ent_Sco = <?php echo json_encode($ent_Sco); ?>;
        let total = <?php echo json_encode($total); ?>;
        let c_sub = <?php echo json_encode($c_sub); ?>;
        let d_Pre_T = <?php echo json_encode($d_Pre_T); ?>;
        let d_Pre_O = <?php echo json_encode($d_Pre_O); ?>;
        let d_Sco = <?php echo json_encode($d_Sco); ?>;
        let rural_T = <?php echo json_encode($rural_T); ?>;
        let rural_Csub = <?php echo json_encode($rural_Csub); ?>;
        
        let raion = <?php echo json_encode($raion); ?>;
        let rai = <?php echo json_encode($rai); ?>;
        //--------------------------------------------------



       



       // document.getElementsByClassName('inn')[0].value = rai[0];
     
    </script>
    

</body>

</html>