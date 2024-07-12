<?php  
 require "conBase.php";

//-------------------------
if (isset($_GET['dataraion'])) {
   
    $dela = $_GET['dela'];
    $panala = $_GET['panala'];
    $categoria = $_GET['categoria'];
  
    //  Probe examinate
    $sql = "select (select T_admin  FROM raion WHERE id = raion) AS rai, sum(cop_Total) as cop_Total,
sum(cop_Csub) as cop_Csub,
sum(cop_Pre) as cop_Pre,
sum(cop_Sco) as cop_Sco,
sum(ent_Total) as ent_Total,
sum(ent_Csub) as ent_Csub,
sum(ent_Pre) as ent_Pre,
sum(ent_Sco) as ent_Sco,sum(cop_Total) as cop_Totala,
sum(cop_Csub) as cop_Csuba,
sum(cop_Pre) as cop_Prea,
sum(cop_Sco) as cop_Scoa,
sum(ent_Total) as ent_Totala,
sum(ent_Csub) as ent_Csuba,
sum(ent_Pre) as ent_Prea,
sum(ent_Sco) as ent_Scoa
    FROM main_table 
    WHERE raion in (select id from raion where categoria in('$categoria')) and d_inv = 10 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
 $stmt = sqlsrv_query($conn, $sql);



//  Persoane depistate
    $sql_Per_Dep_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai_TT, 
    sum(total) as total_TT,
    sum(c_sub) as c_sub_T,
    sum(d_Pre_T) as d_Pre_T_T,
    sum(d_Pre_O) as d_Pre_O_T,
    sum(d_Sco) as d_Sco_T
        FROM main_table WHERE raion in (select id from raion where categoria in ('$categoria')) and d_inv = 10 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_T =sqlsrv_query($conn, $sql_Per_Dep_T);
//==============
$sql_Per_Dep_EV = "select sum(total) as totalE,sum(c_sub) as c_sub_E from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 1 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_EV = sqlsrv_query($conn, $sql_Per_Dep_EV);
 //============
$sql_Per_Dep_AL = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 2 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_AL = sqlsrv_query($conn, $sql_Per_Dep_AL);
 //============
 $sql_Per_Dep_TT = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 3 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
 $stmt_Per_Dep_TT = sqlsrv_query($conn, $sql_Per_Dep_TT);
  //============
$sql_Per_Dep_HN = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 4 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_HN = sqlsrv_query($conn, $sql_Per_Dep_HN);
  //============
$sql_Per_Dep_DL = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 6 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_DL = sqlsrv_query($conn, $sql_Per_Dep_DL);
 //============
 $sql_Per_Dep_SS = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 7 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
 $stmt_Per_Dep_SS = sqlsrv_query($conn, $sql_Per_Dep_SS);

 //============
 $sql_Per_Dep_EG = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 8 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
 $stmt_Per_Dep_EG = sqlsrv_query($conn, $sql_Per_Dep_EG);
  //============
$sql_Per_Dep_ALTE = "select sum(total) as totalA,sum(c_sub) as c_sub_A from main_table where raion in (select id from raion where categoria in('$categoria')) and d_inv = 9 and datam BETWEEN '$dela' and '$panala' GROUP BY raion";
$stmt_Per_Dep_ALTE = sqlsrv_query($conn, $sql_Per_Dep_ALTE);




//Frecventa invaziilor

    $fre_a = "WITH one_values AS (
      SELECT 
          SUM(total) AS one_total,
          SUM(c_sub) AS one_c_sub,
          SUM(d_Pre_T) AS one_d_Pre_T,
          SUM(d_Sco) AS one_d_Sco,
          raion
      FROM 
          main_table
      WHERE 
          d_inv = 1 
          AND datam BETWEEN '$dela' AND '$panala'
      GROUP BY 
          raion
  ), 
  eight_values AS (
      SELECT 
          SUM(total) AS eight_total,
          SUM(c_sub) AS eight_c_sub,
          SUM(d_Pre_T) AS eight_d_Pre_T,
          SUM(d_Sco) AS eight_d_Sco,
          raion
      FROM 
          main_table
      WHERE 
          d_inv = 8 
          AND datam BETWEEN '$dela' AND '$panala'
      GROUP BY 
          raion
  ),
  totals AS (
      SELECT 
          NULL AS rai,
          SUM(column1) AS column1_total,
          SUM(column2) AS column2_total,
          SUM(column3) AS column3_total,
          SUM(column4) AS column4_total,
          SUM(column5) AS column5_total,
          SUM(column6) AS column6_total,
          SUM(column7) AS column7_total,
          SUM(column8) AS column8_total,
          SUM(column9) AS column9_total,
          SUM(column10) AS column10_total,
          SUM(column11) AS column11_total,
          SUM(column12) AS column12_total
      FROM (
          -- Rezultatul interogării principale
          -- Fiecare coloană este acum sumată pentru fiecare raion și pentru întregul rezultat
          SELECT 
              (SELECT T_admin FROM raion WHERE id = m.raion) AS rai,
              CASE 
                  WHEN SUM(m.cop_Total + m.ent_Total) = 0 THEN 0
                  ELSE CAST(SUM(m.total) * 100.0 / SUM(m.cop_Total + m.ent_Total) AS DECIMAL(10, 2))
              END AS column1,
              CASE 
                  WHEN SUM(m.cop_Csub + m.ent_Csub) = 0 THEN 0
                  ELSE CAST(SUM(m.c_sub) * 100.0 / SUM(m.cop_Csub + m.ent_Csub) AS DECIMAL(10, 2))
              END AS column2,
              CASE 
                  WHEN SUM(m.cop_Pre + m.ent_Pre) = 0 THEN 0
                  ELSE CAST(SUM(m.d_Pre_O) * 100.0 / SUM(m.cop_Pre + m.ent_Pre) AS DECIMAL(10, 2))
              END AS column3,
              CASE 
                  WHEN SUM(m.cop_Sco + m.ent_Sco) = 0 THEN 0
                  ELSE CAST(SUM(m.d_Sco) * 100.0 / SUM(m.cop_Sco + m.ent_Sco) AS DECIMAL(10, 2))
              END AS column4,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.cop_Total) = 0 THEN 0
                          ELSE (SUM(m.total) - ((SELECT one_total FROM one_values WHERE raion = m.raion) - (SELECT eight_total FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Total), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column5,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.cop_Csub) = 0 THEN 0
                          ELSE ((SUM(m.c_sub) - (SELECT one_c_sub FROM one_values WHERE raion = m.raion) - (SELECT eight_c_sub FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Csub), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column6,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.cop_Pre) = 0 THEN 0
                          ELSE (SUM(m.d_Pre_T) - ((SELECT one_d_Pre_T FROM one_values WHERE raion = m.raion) - (SELECT eight_d_Pre_T FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Pre), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column7,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.cop_Sco) = 0 THEN 0
                          ELSE ((SUM(m.d_Sco) - (SELECT one_d_Sco FROM one_values WHERE raion = m.raion) - (SELECT eight_d_Sco FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Sco), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column8,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.ent_Total) = 0 THEN 0
                          ELSE (SELECT one_total FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Total), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column9,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.ent_Csub) = 0 THEN 0
                          ELSE (SELECT one_c_sub FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Csub), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column10,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.ent_Pre) = 0 THEN 0
                          ELSE (SELECT one_d_Pre_T FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Pre), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column11,
              ROUND(
                  CAST(
                      CASE 
                          WHEN SUM(m.ent_Sco) = 0 THEN 0
                          ELSE (SELECT one_d_Sco FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Sco), 0)
                      END
                  AS DECIMAL(10, 2)),
                  2
              ) AS column12
          FROM 
              main_table m
          WHERE 
              m.d_inv = 10 
              AND m.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
              AND m.datam BETWEEN '$dela' AND '$panala'
          GROUP BY 
              m.raion
      ) AS main_query
  )
  -- Selectăm din cele trei seturi de rezultate pentru a obține rezultatele finale
  SELECT * FROM (
      -- Rezultatul interogării principale
      SELECT * FROM (
          SELECT 
              (CASE WHEN rai IS NULL THEN 'TOTAL' ELSE rai END) AS rai,
              column1,
              column2,
              column3,
              column4,
              column5,
              column6,
              column7,
              column8,
              column9,
              column10,
              column11,
              column12
          FROM 
              (
                  SELECT 
                      (SELECT T_admin FROM raion WHERE id = m.raion) AS rai,
                      CASE 
                          WHEN SUM(m.cop_Total + m.ent_Total) = 0 THEN 0
                          ELSE CAST(SUM(m.total) * 100.0 / SUM(m.cop_Total + m.ent_Total) AS DECIMAL(10, 2))
                      END AS column1,
                      CASE 
                          WHEN SUM(m.cop_Csub + m.ent_Csub) = 0 THEN 0
                          ELSE CAST(SUM(m.c_sub) * 100.0 / SUM(m.cop_Csub + m.ent_Csub) AS DECIMAL(10, 2))
                      END AS column2,
                      CASE 
                          WHEN SUM(m.cop_Pre + m.ent_Pre) = 0 THEN 0
                          ELSE CAST(SUM(m.d_Pre_O) * 100.0 / SUM(m.cop_Pre + m.ent_Pre) AS DECIMAL(10, 2))
                      END AS column3,
                      CASE 
                          WHEN SUM(m.cop_Sco + m.ent_Sco) = 0 THEN 0
                          ELSE CAST(SUM(m.d_Sco) * 100.0 / SUM(m.cop_Sco + m.ent_Sco) AS DECIMAL(10, 2))
                      END AS column4,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.cop_Total) = 0 THEN 0
                                  ELSE (SUM(m.total) - ((SELECT one_total FROM one_values WHERE raion = m.raion) - (SELECT eight_total FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Total), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column5,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.cop_Csub) = 0 THEN 0
                                  ELSE ((SUM(m.c_sub) - (SELECT one_c_sub FROM one_values WHERE raion = m.raion) - (SELECT eight_c_sub FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Csub), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column6,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.cop_Pre) = 0 THEN 0
                                  ELSE (SUM(m.d_Pre_T) - ((SELECT one_d_Pre_T FROM one_values WHERE raion = m.raion) - (SELECT eight_d_Pre_T FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Pre), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column7,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.cop_Sco) = 0 THEN 0
                                  ELSE ((SUM(m.d_Sco) - (SELECT one_d_Sco FROM one_values WHERE raion = m.raion) - (SELECT eight_d_Sco FROM eight_values WHERE raion = m.raion))) * 100.0 / NULLIF(SUM(m.cop_Sco), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column8,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.ent_Total) = 0 THEN 0
                                  ELSE (SELECT one_total FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Total), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column9,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.ent_Csub) = 0 THEN 0
                                  ELSE (SELECT one_c_sub FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Csub), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column10,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.ent_Pre) = 0 THEN 0
                                  ELSE (SELECT one_d_Pre_T FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Pre), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column11,
                      ROUND(
                          CAST(
                              CASE 
                                  WHEN SUM(m.ent_Sco) = 0 THEN 0
                                  ELSE (SELECT one_d_Sco FROM one_values WHERE raion = m.raion) * 100.0 / NULLIF(SUM(m.ent_Sco), 0)
                              END
                          AS DECIMAL(10, 2)),
                          2
                      ) AS column12
                  FROM 
                      main_table m
                  WHERE 
                      m.d_inv = 10 
                      AND m.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
                      AND m.datam BETWEEN '$dela' AND '$panala'
                  GROUP BY 
                      m.raion
              ) AS main_query
      ) AS main_result
  
      UNION ALL
  
      -- Rezultatul pentru suma fiecărei coloane
        SELECT 
          'Total' AS rai,
          CAST(ROUND(column1_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column1_total,
          CAST(ROUND(column2_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column2_total,
          CAST(ROUND(column3_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column3_total,
          CAST(ROUND(column4_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column4_total,
          CAST(ROUND(column5_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column5_total,
          CAST(ROUND(column6_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column6_total,
          CAST(ROUND(column7_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column7_total,
          CAST(ROUND(column8_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column8_total,
          CAST(ROUND(column9_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column9_total,
          CAST(ROUND(column10_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column10_total,
          CAST(ROUND(column11_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column11_total,
          CAST(ROUND(column12_total / lungime_tabel, 2) AS DECIMAL(10, 2)) AS column12_total
      FROM 
          totals, 
          (SELECT COUNT(id) AS lungime_tabel FROM raion WHERE categoria IN ('$categoria')) AS count_query
  ) AS final_result;
  
  
  ";
    $stmt_f =sqlsrv_query($conn, $fre_a);


    $fre_b = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Total) as xxxx from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
    and datam between '$dela' and '$panala' group by raion";
    $stmt_ff =sqlsrv_query($conn, $fre_b);




                     //Coprologic
    //===========
    //---------------------------------------------------cop_Total===========3
             //Total = Ascaris lumbricoides(randu 2)
  $rAL_cop_Total = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Total) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
  and datam between '$dela' and '$panala' group by raion";
  $stmt_rAL_cop_Total =sqlsrv_query($conn, $rAL_cop_Total);
            //Total = total(randu 10)
  $rTOTAL_cop_Total = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Total) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
  and datam between '$dela' and '$panala' group by raion";
  $stmt_rTOTAL_cop_Total = sqlsrv_query($conn, $rTOTAL_cop_Total);

//---------------------------------------------------------------cop_Csub===========4
               //copii sub 17ani = Ascaris lumbricoides(randu 2)
               $rAL_cop_Csub = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Csub) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
               and datam between '$dela' and '$panala' group by raion";
               $stmt_rAL_cop_Csub =sqlsrv_query($conn, $rAL_cop_Csub);
                         //copii sub 17ani = total(randu 10)
               $rTOTAL_cop_Csub = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Csub) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
               and datam between '$dela' and '$panala' group by raion";
               $stmt_rTOTAL_cop_Csub = sqlsrv_query($conn, $rTOTAL_cop_Csub);
              
//--------------------------------------------------------cop_Pre===========5
               //prescolari = Ascaris lumbricoides(randu 2)
               $rAL_cop_Pre = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Pre) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
               and datam between '$dela' and '$panala' group by raion";
               $stmt_rAL_cop_Pre =sqlsrv_query($conn, $rAL_cop_Pre);
                         //prescolari = total(randu 10)
               $rTOTAL_cop_Pre = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Pre) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
               and datam between '$dela' and '$panala' group by raion";
               $stmt_rTOTAL_cop_Pre = sqlsrv_query($conn, $rTOTAL_cop_Pre);
//--------------------------------------------------------cop_Sco=========6
//scolari = Ascaris lumbricoides(randu 2)
$rAL_cop_Sco = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Sco) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
and datam between '$dela' and '$panala' group by raion";
$stmt_rAL_cop_Sco =sqlsrv_query($conn, $rAL_cop_Sco);
          //scolari = total(randu 10)
$rTOTAL_cop_Sco = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(cop_Sco) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
and datam between '$dela' and '$panala' group by raion";
$stmt_rTOTAL_cop_Sco = sqlsrv_query($conn, $rTOTAL_cop_Sco);





//============================La enterobioza
    //---------------------------------------------------ent_Total==========7
             //Total = Enterobius vermicularis(randu 1)
             $rEV_ent_Total = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Total) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
             and datam between '$dela' and '$panala' group by raion";
             $stmt_rEV_ent_Total =sqlsrv_query($conn, $rEV_ent_Total);
                       //Total = total(randu 10)
             $rTOTAL_ent_Total = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Total) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
             and datam between '$dela' and '$panala' group by raion";
             $stmt_rTOTAL_ent_Total = sqlsrv_query($conn, $rTOTAL_ent_Total);
           
           //---------------------------------------------------------------ent_Csub========8
                          //entii sub 17ani = Enterobius vermicularis(randu 1)
                          $rEV_ent_Csub = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Csub) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
                          and datam between '$dela' and '$panala' group by raion";
                          $stmt_rEV_ent_Csub =sqlsrv_query($conn, $rEV_ent_Csub);
                                    //entii sub 17ani = total(randu 10)
                          $rTOTAL_ent_Csub = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Csub) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
                          and datam between '$dela' and '$panala' group by raion";
                          $stmt_rTOTAL_ent_Csub = sqlsrv_query($conn, $rTOTAL_ent_Csub);
           
           //--------------------------------------------------------ent_Pre====9
                          //prescolari = Enterobius vermicularis(randu 1)
                          $rEV_ent_Pre = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Pre) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
                          and datam between '$dela' and '$panala' group by raion";
                          $stmt_rEV_ent_Pre =sqlsrv_query($conn, $rEV_ent_Pre);
                                    //prescolari = total(randu 10)
                          $rTOTAL_ent_Pre = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Pre) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
                          and datam between '$dela' and '$panala' group by raion";
                          $stmt_rTOTAL_ent_Pre = sqlsrv_query($conn, $rTOTAL_ent_Pre);
           //--------------------------------------------------------ent_Sco=======10
           //scolari = Enterobius vermicularis(randu 1)
           $rEV_ent_Sco = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Sco) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_ent_Sco =sqlsrv_query($conn, $rEV_ent_Sco);
                     //scolari = total(randu 10)
           $rTOTAL_ent_Sco = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(ent_Sco) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTOTAL_ent_Sco = sqlsrv_query($conn, $rTOTAL_ent_Sco);

// INDICATORII DE MORBIDITATE

       //cazuri absolute
       //1,2,3
       $im_First_total = "select (select T_admin  FROM raion WHERE id = raion) as rai, sum(total) as totalA, sum(c_sub) as csub from main_table where raion in (select id from raion where categoria in('$categoria')) 
       and d_inv = 10 and datam like CONCAT( left('$dela',4),'%') GROUP BY raion";
       $stmt_im_First_total = sqlsrv_query($conn, $im_First_total);
        //4,5
       $im_Second_total = "select (select T_admin  FROM raion WHERE id = raion) as rai, sum(total) as totalA, sum(c_sub) as csub from main_table where raion in (select id from raion where categoria in('$categoria')) 
       and d_inv = 10 and datam like CONCAT( left('$panala',4),'%') GROUP BY raion";
      $stmt_im_Second_total = sqlsrv_query($conn, $im_Second_total);
        //6,7
        $im_MFirst = "select (select raion.T_admin  FROM raion WHERE raion.id = main_table.raion) as rai, 
        (ROUND((cast (sum(total) AS FLOAT)*100000/
(select total_Popul FROM populatie WHERE id = main_table.raion and datap like CONCAT( left('$dela',4),'%') )),2)) as totalA,  
        (ROUND((cast (sum(c_sub) as float)*1000/(select total_Copii FROM populatie WHERE id = main_table.raion and datap like CONCAT( left('$dela',4),'%') )),2)) as csub from main_table where raion in (select id from raion where categoria in('$categoria')) 
               and d_inv = 10 and datam like CONCAT( left('$dela',4),'%') GROUP BY raion";
     $stmt_imMFirst =  sqlsrv_query($conn, $im_MFirst);
      //8.9
      $im_MSecond =  "select (select T_admin  FROM raion WHERE id = raion) as rai, (ROUND((cast (sum(total) AS FLOAT)*100000/(select total_Popul FROM populatie WHERE id = main_table.raion and datap like CONCAT( left('$panala',4),'%') )),2)) as totalA,  
      (ROUND((cast (sum(c_sub) as float)*1000/(select total_Copii FROM populatie WHERE id = main_table.raion and datap like CONCAT( left('$panala',4),'%') )),2)) as csub from main_table where raion in (select id from raion where categoria in('$categoria')) 
             and d_inv = 10 and datam like CONCAT( left('$panala',4),'%') GROUP BY raion";
      $stmt_imMSecond =  sqlsrv_query($conn, $im_MSecond);


      //  ======================== MALARIA==========================

      $malaria_table = "SELECT 
      CASE WHEN GROUPING(m.raionm) = 1 THEN 'Total' ELSE (SELECT T_admin FROM raion WHERE id = m.raionm) END AS Teritorii_Administrative,
      SUM(m.raionm) AS raion_id,
      SUM(m.p_examin) AS suma_p_examin,
      SUM(m.p_dep_m) AS suma_p_dep_m,
      SUM(m.bazin_apa) AS suma_bazin_apa,
      SUM(m.incaperi_p) AS suma_incaperi_p,
      SUM(m.vegetatii_p) AS suma_vegetatii_p
  FROM 
      malarie AS m
  WHERE 
      m.datamm >= '$dela' AND m.datamm <= '$panala'
      AND m.raionm IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
  GROUP BY 
      m.raionm WITH ROLLUP";
      $stmt_malaria_table =  sqlsrv_query($conn, $malaria_table);


  //   ========================== dehelmentizarea========================
$dehelment_table = "SELECT 
CASE WHEN GROUPING(d.raiond) = 1 THEN 'Total' ELSE (SELECT T_admin FROM raion WHERE id = d.raiond) END AS Teritorii_Administrative,
SUM(d.column1) AS suma_column1,
SUM(d.column2) AS suma_column2,
SUM(d.column3) AS suma_column3,
SUM(d.column4) AS suma_column4,
SUM(d.column5) AS suma_column5,
SUM(d.column6) AS suma_column6,
SUM(d.column7) AS suma_column7,
SUM(d.column8) AS suma_column8,
SUM(d.column9) AS suma_column9,
SUM(d.column10) AS suma_column10,
SUM(d.column11) AS suma_column11,
SUM(d.column12) AS suma_column12,
SUM(d.column13) AS suma_column13,
SUM(d.column14) AS suma_column14,
SUM(d.column15) AS suma_column15,
SUM(d.column16) AS suma_column16,
SUM(d.column17) AS suma_column17,
SUM(d.column18) AS suma_column18,
SUM(d.column19) AS suma_column19,
SUM(d.column20) AS suma_column20,
SUM(d.column21) AS suma_column21,
SUM(d.column22) AS suma_column22,
SUM(d.column23) AS suma_column23,
SUM(d.column24) AS suma_column24,
SUM(d.column25) AS suma_column25,
SUM(d.column26) AS suma_column26
FROM 
dehel AS d
WHERE 
d.datamd >= '$dela' AND d.datamd <= '$panala'
AND d.raiond IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
GROUP BY 
d.raiond WITH ROLLUP;
";
$stmt_dehelment_table =  sqlsrv_query($conn, $dehelment_table);


//==================INDICATORII DE INVAZII =======================
// ======================= 1.1==============

$ind_invazii_E_ver = "WITH Sumari AS (
  SELECT 
      raion.id AS ID_Raion,
      (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
      SUM(main_table.total) AS Suma_Totala,
      SUM(main_table.c_sub) AS Suma_C_Sub,
      SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
      SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
      SUM(main_table.d_Sco) AS Suma_D_Sco,
      SUM(main_table.rural_T) AS Suma_Rural_T,
      SUM(main_table.rural_Csub) AS Suma_Rural_CSub
  FROM 
      main_table 
  INNER JOIN 
      raion ON main_table.raion = raion.id
  WHERE 
      main_table.d_inv = 1 
      AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
      AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
  GROUP BY 
      main_table.raion, raion.id
), SumaEnt AS (
  SELECT 
      (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
      SUM(main_table.ent_Total) AS Suma_ent_total,
  SUM(main_table.ent_Csub) AS Suma_ent_Csub,
  SUM(main_table.total) AS Suma_Total,
  SUM(main_table.c_sub) AS Suma_c_sub
  FROM 
      main_table 
  WHERE 
      main_table.d_inv = 10 
      AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
      AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
  GROUP BY 
      main_table.raion
)
SELECT 
  Sumari.ID_Raion,
  Sumari.Teritorii_Administrative,
  Sumari.Suma_Totala,
  Sumari.Suma_C_Sub,
  Sumari.Suma_D_Pre_T,
  Sumari.Suma_D_Pre_O,
  Sumari.Suma_D_Sco,
  Sumari.Suma_Rural_T,
  Sumari.Suma_Rural_CSub,
  ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
FROM 
  Sumari
INNER JOIN 
  SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
  $stmt_ind_invazii_E_ver =  sqlsrv_query($conn, $ind_invazii_E_ver);
  
  //====================1.2==================
  $ind_invazii_A_Lum = "WITH Sumari AS (
    SELECT 
        raion.id AS ID_Raion,
        (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
        SUM(main_table.total) AS Suma_Totala,
        SUM(main_table.c_sub) AS Suma_C_Sub,
        SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
        SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
        SUM(main_table.d_Sco) AS Suma_D_Sco,
        SUM(main_table.rural_T) AS Suma_Rural_T,
        SUM(main_table.rural_Csub) AS Suma_Rural_CSub
    FROM 
        main_table 
    INNER JOIN 
        raion ON main_table.raion = raion.id
    WHERE 
        main_table.d_inv = 2 
        AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
        AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
    GROUP BY 
        main_table.raion, raion.id
  ), SumaEnt AS (
    SELECT 
        (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
        SUM(main_table.ent_Total) AS Suma_ent_total,
    SUM(main_table.ent_Csub) AS Suma_ent_Csub,
    SUM(main_table.total) AS Suma_Total,
    SUM(main_table.c_sub) AS Suma_c_sub
    FROM 
        main_table 
    WHERE 
        main_table.d_inv = 10 
        AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
        AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
    GROUP BY 
        main_table.raion
  )
  SELECT 
    Sumari.ID_Raion,
    Sumari.Teritorii_Administrative,
    Sumari.Suma_Totala,
    Sumari.Suma_C_Sub,
    Sumari.Suma_D_Pre_T,
    Sumari.Suma_D_Pre_O,
    Sumari.Suma_D_Sco,
    Sumari.Suma_Rural_T,
    Sumari.Suma_Rural_CSub,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
  ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
  ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
  ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
  ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
  ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
  FROM 
    Sumari
  INNER JOIN 
    SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
    $stmt_ind_invazii_A_Lum =  sqlsrv_query($conn, $ind_invazii_A_Lum);
    
    //================================1.3=====================
    $ind_invazii_T_Tri = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 3 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
      ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_T_Tri =  sqlsrv_query($conn, $ind_invazii_T_Tri);

       //================================1.4=====================
    $ind_invazii_H_nana = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 4 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
      ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_H_nana =  sqlsrv_query($conn, $ind_invazii_H_nana);

      //================================1.5=====================
    $ind_invazii_Ts_Ts = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 5 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
      ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_Ts_Ts =  sqlsrv_query($conn, $ind_invazii_Ts_Ts);

        //================================1.6=====================
    $ind_invazii_D_lat = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 6 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
      ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_D_lat =  sqlsrv_query($conn, $ind_invazii_D_lat);

       //================================1.7=====================
    $ind_invazii_S_ster = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 7 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
      ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_total, 0), 2) AS Frec_Inv_Total,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_ent_Csub, 0), 2) AS Frec_Inv_Total2,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_S_ster =  sqlsrv_query($conn, $ind_invazii_S_ster);

       //================================1.8=====================
    $ind_invazii_E_gran = "WITH Sumari AS (
      SELECT 
          raion.id AS ID_Raion,
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS Teritorii_Administrative,
          SUM(main_table.total) AS Suma_Totala,
          SUM(main_table.c_sub) AS Suma_C_Sub,
          SUM(main_table.d_Pre_T) AS Suma_D_Pre_T,
          SUM(main_table.d_Pre_O) AS Suma_D_Pre_O,
          SUM(main_table.d_Sco) AS Suma_D_Sco,
          SUM(main_table.rural_T) AS Suma_Rural_T,
          SUM(main_table.rural_Csub) AS Suma_Rural_CSub
      FROM 
          main_table 
      INNER JOIN 
          raion ON main_table.raion = raion.id
      WHERE 
          main_table.d_inv = 8 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND raion.id IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion, raion.id
    ), SumaEnt AS (
      SELECT 
          (SELECT T_admin FROM raion WHERE id = main_table.raion) AS rai,
          SUM(main_table.ent_Total) AS Suma_ent_total,
      SUM(main_table.ent_Csub) AS Suma_ent_Csub,
      SUM(main_table.total) AS Suma_Total,
      SUM(main_table.c_sub) AS Suma_c_sub
      FROM 
          main_table 
      WHERE 
          main_table.d_inv = 10 
          AND main_table.datam LIKE CONCAT(LEFT('$panala', 4), '%') 
          AND main_table.raion IN (SELECT id FROM raion WHERE categoria IN ('$categoria'))
      GROUP BY 
          main_table.raion
    )
    SELECT 
      Sumari.ID_Raion,
      Sumari.Teritorii_Administrative,
      Sumari.Suma_Totala,
      Sumari.Suma_C_Sub,
      Sumari.Suma_D_Pre_T,
      Sumari.Suma_D_Pre_O,
      Sumari.Suma_D_Sco,
      Sumari.Suma_Rural_T,
      Sumari.Suma_Rural_CSub,
     
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100 / NULLIF(SumaEnt.Suma_Total, 0), 2) AS Frec_Inv_Total3,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 100 / NULLIF(SumaEnt.Suma_c_sub, 0), 2) AS Frec_Inv_Total4,
    ROUND(CAST((Sumari.Suma_Totala) AS float) * 100000 / (select total_Popul FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total5,
    ROUND(CAST((Sumari.Suma_C_Sub) AS float) * 1000 / (select total_Copii FROM populatie WHERE id = Sumari.ID_Raion and datap like CONCAT( left('$panala',4),'%')),2) as Frec_Inv_Total6
    FROM 
      Sumari
    INNER JOIN 
      SumaEnt ON Sumari.Teritorii_Administrative = SumaEnt.rai";
      $stmt_ind_invazii_E_gran =  sqlsrv_query($conn, $ind_invazii_E_gran);



//============================TOTAL==========================11
//RANDU 1
$rEV_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_TOTAL =sqlsrv_query($conn, $rEV_TOTAL);
//RANDU 2
$rAL_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_TOTAL =sqlsrv_query($conn, $rAL_TOTAL);
//RANDU 3
$rTT_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_TOTAL =sqlsrv_query($conn, $rTT_TOTAL);
//RANDU 4
$rHN_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_TOTAL =sqlsrv_query($conn, $rHN_TOTAL);
//RANDU 5
$rTSTS_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_TOTAL =sqlsrv_query($conn, $rTSTS_TOTAL);
//RANDU 6
$rDL_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_TOTAL =sqlsrv_query($conn, $rDL_TOTAL);
//RANDU 7
$rSS_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_TOTAL =sqlsrv_query($conn, $rSS_TOTAL);
//RANDU 8
$rEG_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_TOTAL =sqlsrv_query($conn, $rEG_TOTAL);
//RANDU 9 
$rAH_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_TOTAL =sqlsrv_query($conn, $rAH_TOTAL);
//RANDU 10
$rT_TOTAL = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(total) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_TOTAL =sqlsrv_query($conn, $rT_TOTAL);

//===========================COPII SUB 17 ANI========================12
//RANDU 1
$rEV_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_C_SUB =sqlsrv_query($conn, $rEV_C_SUB);
//RANDU 2
$rAL_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_C_SUB =sqlsrv_query($conn, $rAL_C_SUB);
//RANDU 3
$rTT_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_C_SUB =sqlsrv_query($conn, $rTT_C_SUB);
//RANDU 4
$rHN_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_C_SUB =sqlsrv_query($conn, $rHN_C_SUB);
//RANDU 5
$rTSTS_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_C_SUB =sqlsrv_query($conn, $rTSTS_C_SUB);
//RANDU 6
$rDL_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_C_SUB =sqlsrv_query($conn, $rDL_C_SUB);
//RANDU 7
$rSS_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_C_SUB =sqlsrv_query($conn, $rSS_C_SUB);
//RANDU 8
$rEG_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_C_SUB =sqlsrv_query($conn, $rEG_C_SUB);
//RANDU 9 
$rAH_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_C_SUB =sqlsrv_query($conn, $rAH_C_SUB);
//RANDU 10
$rT_C_SUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(c_sub) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_C_SUB =sqlsrv_query($conn, $rT_C_SUB);

//===========================PRESCOLARI TOTAL======================13
//RANDU 1
$rEV_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_D_PRE_T =sqlsrv_query($conn, $rEV_D_PRE_T);
//RANDU 2
$rAL_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_D_PRE_T =sqlsrv_query($conn, $rAL_D_PRE_T);
//RANDU 3
$rTT_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_D_PRE_T =sqlsrv_query($conn, $rTT_D_PRE_T);
//RANDU 4
$rHN_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_D_PRE_T =sqlsrv_query($conn, $rHN_D_PRE_T);
//RANDU 5
$rTSTS_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_D_PRE_T =sqlsrv_query($conn, $rTSTS_D_PRE_T);
//RANDU 6
$rDL_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_D_PRE_T =sqlsrv_query($conn, $rDL_D_PRE_T);
//RANDU 7
$rSS_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_D_PRE_T =sqlsrv_query($conn, $rSS_D_PRE_T);
//RANDU 8
$rEG_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_D_PRE_T =sqlsrv_query($conn, $rEG_D_PRE_T);
//RANDU 9 
$rAH_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_D_PRE_T =sqlsrv_query($conn, $rAH_D_PRE_T);
//RANDU 10
$rT_D_PRE_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_T) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_D_PRE_T =sqlsrv_query($conn, $rT_D_PRE_T);

//===========================prescolari  organizatii================14
//RANDU 1
$rEV_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_D_PRE_O =sqlsrv_query($conn, $rEV_D_PRE_O);
//RANDU 2
$rAL_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_D_PRE_O =sqlsrv_query($conn, $rAL_D_PRE_O);
//RANDU 3
$rTT_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_D_PRE_O =sqlsrv_query($conn, $rTT_D_PRE_O);
//RANDU 4
$rHN_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_D_PRE_O =sqlsrv_query($conn, $rHN_D_PRE_O);
//RANDU 5
$rTSTS_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_D_PRE_O =sqlsrv_query($conn, $rTSTS_D_PRE_O);
//RANDU 6
$rDL_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_D_PRE_O =sqlsrv_query($conn, $rDL_D_PRE_O);
//RANDU 7
$rSS_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_D_PRE_O =sqlsrv_query($conn, $rSS_D_PRE_O);
//RANDU 8
$rEG_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_D_PRE_O =sqlsrv_query($conn, $rEG_D_PRE_O);
//RANDU 9 
$rAH_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_D_PRE_O =sqlsrv_query($conn, $rAH_D_PRE_O);
//RANDU 10
$rT_D_PRE_O = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Pre_O) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_D_PRE_O =sqlsrv_query($conn, $rT_D_PRE_O);

//===========================SCOLARI====================15
//RANDU 1
$rEV_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_D_SCO =sqlsrv_query($conn, $rEV_D_SCO);
//RANDU 2
$rAL_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_D_SCO =sqlsrv_query($conn, $rAL_D_SCO);
//RANDU 3
$rTT_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_D_SCO =sqlsrv_query($conn, $rTT_D_SCO);
//RANDU 4
$rHN_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_D_SCO =sqlsrv_query($conn, $rHN_D_SCO);
//RANDU 5
$rTSTS_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_D_SCO =sqlsrv_query($conn, $rTSTS_D_SCO);
//RANDU 6
$rDL_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_D_SCO =sqlsrv_query($conn, $rDL_D_SCO);
//RANDU 7
$rSS_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_D_SCO =sqlsrv_query($conn, $rSS_D_SCO);
//RANDU 8
$rEG_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_D_SCO =sqlsrv_query($conn, $rEG_D_SCO);
//RANDU 9 
$rAH_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_D_SCO =sqlsrv_query($conn, $rAH_D_SCO);
//RANDU 10
$rT_D_SCO = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(d_Sco) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_D_SCO =sqlsrv_query($conn, $rT_D_SCO);

//===========================POPULATIA RURAL TOTALA=================16
//RANDU 1
$rEV_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_RURAL_T =sqlsrv_query($conn, $rEV_RURAL_T);
//RANDU 2
$rAL_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_RURAL_T =sqlsrv_query($conn, $rAL_RURAL_T);
//RANDU 3
$rTT_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_RURAL_T =sqlsrv_query($conn, $rTT_RURAL_T);
//RANDU 4
$rHN_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_RURAL_T =sqlsrv_query($conn, $rHN_RURAL_T);
//RANDU 5
$rTSTS_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_RURAL_T =sqlsrv_query($conn, $rTSTS_RURAL_T);
//RANDU 6
$rDL_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_RURAL_T =sqlsrv_query($conn, $rDL_RURAL_T);
//RANDU 7
$rSS_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_RURAL_T =sqlsrv_query($conn, $rSS_RURAL_T);
//RANDU 8
$rEG_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_RURAL_T =sqlsrv_query($conn, $rEG_RURAL_T);
//RANDU 9 
$rAH_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_RURAL_T =sqlsrv_query($conn, $rAH_RURAL_T);
//RANDU 10
$rT_RURAL_T = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_T) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_RURAL_T =sqlsrv_query($conn, $rT_RURAL_T);

//===========================RURAL COPII SUB 17 ANI==============17
//RANDU 1
$rEV_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=1 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEV_RURAL_CSUB =sqlsrv_query($conn, $rEV_RURAL_CSUB);
//RANDU 2
$rAL_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=2 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAL_RURAL_CSUB =sqlsrv_query($conn, $rAL_RURAL_CSUB);
//RANDU 3
$rTT_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=3 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTT_RURAL_CSUB =sqlsrv_query($conn, $rTT_RURAL_CSUB);
//RANDU 4
$rHN_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=4 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rHN_RURAL_CSUB =sqlsrv_query($conn, $rHN_RURAL_CSUB);
//RANDU 5
$rTSTS_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=5 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rTSTS_RURAL_CSUB =sqlsrv_query($conn, $rTSTS_RURAL_CSUB);
//RANDU 6
$rDL_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=6 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rDL_RURAL_CSUB =sqlsrv_query($conn, $rDL_RURAL_CSUB);
//RANDU 7
$rSS_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=7 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rSS_RURAL_CSUB =sqlsrv_query($conn, $rSS_RURAL_CSUB);
//RANDU 8
$rEG_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=8 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rEG_RURAL_CSUB =sqlsrv_query($conn, $rEG_RURAL_CSUB);
//RANDU 9 
$rAH_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=9 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rAH_RURAL_CSUB =sqlsrv_query($conn, $rAH_RURAL_CSUB);
//RANDU 10
$rT_RURAL_CSUB = "select (select T_admin  FROM raion WHERE id = raion) AS rai,sum(rural_Csub) as number from main_table where d_inv=10 and raion in (select id from raion where categoria in('$categoria')) 
           and datam between '$dela' and '$panala' group by raion";
           $stmt_rT_RURAL_CSUB =sqlsrv_query($conn, $rT_RURAL_CSUB);

          }

        

?>