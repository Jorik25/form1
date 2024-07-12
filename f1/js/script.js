const elements = [
  '.mainTaible',
  '.probeEx',
  '.perDep',
  '.fInv',
  '.iMor',
  '.mPar',
  '.iInv',
  '.mParCaz',
  '.iPar',
  '.deh',
  '.acop',
  '.malaria'
];

function toggleDisplay(element) {
  const el = document.querySelector(element);
  if (el.style.display === 'block') {
    el.style.display = 'none';
  } else {
    el.style.display = 'block';
  }
}

function toggleAllExcept(except) {
  elements.forEach((element) => {
    if (element !== except) {
      const el = document.querySelector(element);
      el.style.display = 'none';
    }
  });
}

function calculateSum(cells) {
  let sum = 0;
  let hasDecimal = false; // Verificăm dacă suma are zecimale

  cells.forEach((cell) => {
    const value = parseFloat(cell.textContent);
    if (!isNaN(value)) {
      sum += value;
      if (value % 1 !== 0) { // Dacă valoarea nu este întreagă
        hasDecimal = true;
      }
    }
  });

  if (hasDecimal) {
    return sum.toFixed(2); // Returnează suma cu 2 zecimale
  } else {
    return sum; // Returnează suma ca un număr întreg
  }
}


function updateResult(resultId, sum) {
  document.getElementById(resultId).textContent = sum;
}

function updateTableResults(tabelId, sume) {
  const tabel = document.getElementById(tabelId);
  sume.forEach(({ cells, resultId }) => {
    const selectedCells = tabel.querySelectorAll(`td[name="${cells}"]`);
    const sum = calculateSum(selectedCells);
    updateResult(resultId, sum);
  });
}

function mainTaible() {
  toggleDisplay('.mainTaible');
  toggleAllExcept('.mainTaible');
}

function probeEx() {
  toggleDisplay('.probeEx');
  toggleAllExcept('.probeEx');
  updateTableResults('probExaminate', [
  { cells: 'cop_Totala[]', resultId: 'rezultat_cop_Totala' },
  { cells: 'cop_Csuba[]', resultId: 'rezultat_cop_Csuba' },
  { cells: 'cop_Prea[]', resultId: 'rezultat_cop_Prea' },
  { cells: 'cop_Scoa[]', resultId: 'rezultat_cop_Scoa' },
  { cells: 'ent_Totala[]', resultId: 'rezultat_ent_Totala' },
  { cells: 'ent_Csuba[]', resultId: 'rezultat_ent_Csuba' },
  { cells: 'ent_Prea[]', resultId: 'rezultat_ent_Prea' },
  { cells: 'ent_Scoa[]', resultId: 'rezultat_ent_Scoa' }
  ]);
}


 function perDep() {
   toggleDisplay('.perDep');
   toggleAllExcept('.perDep');
   updateTableResults('perDepistate', [
  { cells: 'c_sub_T', resultId: 'rezultat_perDepistate_c_sub_T' },
  { cells: 'total_TT', resultId: 'rezultat_perDepistate_total_TT' },
  { cells: 'd_Pre_T_T', resultId: 'rezultat_perDepistate_d_Pre_T_T' },
  { cells: 'd_Pre_O_T', resultId: 'rezultat_perDepistate_d_Pre_O_T' },
  { cells: 'd_Sco_T', resultId: 'rezultat_perDepistate_d_Sco_T' },
  { cells: 'totalE', resultId: 'rezultat_perDepistate_totalE' },
  { cells: 'c_sub_E', resultId: 'rezultat_perDepistate_c_sub_E' },
  { cells: 'totalAa', resultId: 'rezultat_perDepistate_totalAa' },
  { cells: 'c_sub_Aa', resultId: 'rezultat_perDepistate_c_sub_Aa' },
  { cells: 'totalAb', resultId: 'rezultat_perDepistate_totalAb' },
  { cells: 'c_sub_Ab', resultId: 'rezultat_perDepistate_c_sub_Ab' },
  { cells: 'totalAc', resultId: 'rezultat_perDepistate_totalAc' },
  { cells: 'c_sub_Ac', resultId: 'rezultat_perDepistate_c_sub_Ac' },
  { cells: 'totalAd', resultId: 'rezultat_perDepistate_totalAd' },
  { cells: 'c_sub_Ad', resultId: 'rezultat_perDepistate_c_sub_Ad' },
  { cells: 'totalAe', resultId: 'rezultat_perDepistate_totalAe' },
  { cells: 'c_sub_Ae', resultId: 'rezultat_perDepistate_c_sub_Ae' },
  { cells: 'totalAf', resultId: 'rezultat_perDepistate_totalAf' },
  { cells: 'c_sub_Af', resultId: 'rezultat_perDepistate_c_sub_Af' },
  { cells: 'totalAg', resultId: 'rezultat_perDepistate_totalAg' },
  { cells: 'c_sub_Ag', resultId: 'rezultat_perDepistate_c_sub_Ag' }
   ]);
 }

 
 function fInv() {
  toggleDisplay('.fInv');
  toggleAllExcept('.fInv');
  
}

function iMor() {
  toggleDisplay('.iMor');
  toggleAllExcept('.iMor');
  updateTableResults('indMorbiditate', [
    { cells: 'Ind_Morb_1', resultId: 'rezultat_indMorbiditate_Ind_Morb_1' },
    { cells: 'Ind_Morb_2', resultId: 'rezultat_indMorbiditate_Ind_Morb_2' },
    { cells: 'Ind_Morb_3', resultId: 'rezultat_indMorbiditate_Ind_Morb_3' },
    { cells: 'Ind_Morb_4', resultId: 'rezultat_indMorbiditate_Ind_Morb_4' },
    { cells: 'Ind_Morb_5', resultId: 'rezultat_indMorbiditate_Ind_Morb_5' },
    { cells: 'Ind_Morb_6', resultId: 'rezultat_indMorbiditate_Ind_Morb_6' },
    { cells: 'Ind_Morb_7', resultId: 'rezultat_indMorbiditate_Ind_Morb_7' },
    { cells: 'Ind_Morb_8', resultId: 'rezultat_indMorbiditate_Ind_Morb_8' },
    { cells: 'Ind_Morb_9', resultId: 'rezultat_indMorbiditate_Ind_Morb_9' }
  ]);
  
}

function mPar() {
  toggleDisplay('.mPar');
  toggleAllExcept('.mPar');
  
}

function iInv() {
  toggleDisplay('.iInv');
  toggleAllExcept('.iInv');
  updateTableResults('INV_E_ver', [
    { cells: 'inv_E_ver1', resultId: 'rezultat_E_ver1' },
    { cells: 'inv_E_ver2', resultId: 'rezultat_E_ver2' },
    { cells: 'inv_E_ver3', resultId: 'rezultat_E_ver3' },
    { cells: 'inv_E_ver4', resultId: 'rezultat_E_ver4' },
    { cells: 'inv_E_ver5', resultId: 'rezultat_E_ver5' },
    { cells: 'inv_E_ver6', resultId: 'rezultat_E_ver6' },
    { cells: 'inv_E_ver7', resultId: 'rezultat_E_ver7' },
    { cells: 'inv_E_ver8', resultId: 'rezultat_E_ver8' },
    { cells: 'inv_E_ver9', resultId: 'rezultat_E_ver9' },
    { cells: 'inv_E_ver10', resultId: 'rezultat_E_ver10' },
    { cells: 'inv_E_ver11', resultId: 'rezultat_E_ver11' },
    { cells: 'inv_E_ver12', resultId: 'rezultat_E_ver12' },
    { cells: 'inv_E_ver13', resultId: 'rezultat_E_ver13' },
    { cells: 'inv_E_ver14', resultId: 'rezultat_E_ver14' },
    { cells: 'inv_E_ver15', resultId: 'rezultat_E_ver15' },
    { cells: 'inv_E_ver16', resultId: 'rezultat_E_ver16' },
    { cells: 'inv_E_ver17', resultId: 'rezultat_E_ver17' },
    { cells: 'inv_E_ver18', resultId: 'rezultat_E_ver18' },
    { cells: 'inv_E_ver19', resultId: 'rezultat_E_ver19' },
    { cells: 'inv_E_ver20', resultId: 'rezultat_E_ver20' },
    { cells: 'inv_E_ver21', resultId: 'rezultat_E_ver21' }
  ]);
  updateTableResults('INV_A_Lum', [
    { cells: 'inv_A_Lum1', resultId: 'rezultat_A_Lum1' },
    { cells: 'inv_A_Lum2', resultId: 'rezultat_A_Lum2' },
    { cells: 'inv_A_Lum3', resultId: 'rezultat_A_Lum3' },
    { cells: 'inv_A_Lum4', resultId: 'rezultat_A_Lum4' },
    { cells: 'inv_A_Lum5', resultId: 'rezultat_A_Lum5' },
    { cells: 'inv_A_Lum6', resultId: 'rezultat_A_Lum6' },
    { cells: 'inv_A_Lum7', resultId: 'rezultat_A_Lum7' },
    { cells: 'inv_A_Lum8', resultId: 'rezultat_A_Lum8' },
    { cells: 'inv_A_Lum9', resultId: 'rezultat_A_Lum9' },
    { cells: 'inv_A_Lum10', resultId: 'rezultat_A_Lum10' },
    { cells: 'inv_A_Lum11', resultId: 'rezultat_A_Lum11' },
    { cells: 'inv_A_Lum12', resultId: 'rezultat_A_Lum12' },
    { cells: 'inv_A_Lum13', resultId: 'rezultat_A_Lum13' },
    { cells: 'inv_A_Lum14', resultId: 'rezultat_A_Lum14' },
    { cells: 'inv_A_Lum15', resultId: 'rezultat_A_Lum15' },
    { cells: 'inv_A_Lum16', resultId: 'rezultat_A_Lum16' },
    { cells: 'inv_A_Lum17', resultId: 'rezultat_A_Lum17' },
    { cells: 'inv_A_Lum18', resultId: 'rezultat_A_Lum18' },
    { cells: 'inv_A_Lum19', resultId: 'rezultat_A_Lum19' },
    { cells: 'inv_A_Lum20', resultId: 'rezultat_A_Lum20' },
    { cells: 'inv_A_Lum21', resultId: 'rezultat_A_Lum21' }
  ]);
  updateTableResults('INV_T_Tri', [
    { cells: 'inv_T_Tri1', resultId: 'rezultat_T_Tri1' },
    { cells: 'inv_T_Tri2', resultId: 'rezultat_T_Tri2' },
    { cells: 'inv_T_Tri3', resultId: 'rezultat_T_Tri3' },
    { cells: 'inv_T_Tri4', resultId: 'rezultat_T_Tri4' },
    { cells: 'inv_T_Tri5', resultId: 'rezultat_T_Tri5' },
    { cells: 'inv_T_Tri6', resultId: 'rezultat_T_Tri6' },
    { cells: 'inv_T_Tri7', resultId: 'rezultat_T_Tri7' },
    { cells: 'inv_T_Tri8', resultId: 'rezultat_T_Tri8' },
    { cells: 'inv_T_Tri9', resultId: 'rezultat_T_Tri9' },
    { cells: 'inv_T_Tri10', resultId: 'rezultat_T_Tri10' },
    { cells: 'inv_T_Tri11', resultId: 'rezultat_T_Tri11' },
    { cells: 'inv_T_Tri12', resultId: 'rezultat_T_Tri12' },
    { cells: 'inv_T_Tri13', resultId: 'rezultat_T_Tri13' },
    { cells: 'inv_T_Tri14', resultId: 'rezultat_T_Tri14' },
    { cells: 'inv_T_Tri15', resultId: 'rezultat_T_Tri15' },
    { cells: 'inv_T_Tri16', resultId: 'rezultat_T_Tri16' },
    { cells: 'inv_T_Tri17', resultId: 'rezultat_T_Tri17' },
    { cells: 'inv_T_Tri18', resultId: 'rezultat_T_Tri18' },
    { cells: 'inv_T_Tri19', resultId: 'rezultat_T_Tri19' },
    { cells: 'inv_T_Tri20', resultId: 'rezultat_T_Tri20' },
    { cells: 'inv_T_Tri21', resultId: 'rezultat_T_Tri21' }
  ]);
  updateTableResults('INV_H_nana', [
    { cells: 'inv_H_nana1', resultId: 'rezultat_H_nana1' },
    { cells: 'inv_H_nana2', resultId: 'rezultat_H_nana2' },
    { cells: 'inv_H_nana3', resultId: 'rezultat_H_nana3' },
    { cells: 'inv_H_nana4', resultId: 'rezultat_H_nana4' },
    { cells: 'inv_H_nana5', resultId: 'rezultat_H_nana5' },
    { cells: 'inv_H_nana6', resultId: 'rezultat_H_nana6' },
    { cells: 'inv_H_nana7', resultId: 'rezultat_H_nana7' },
    { cells: 'inv_H_nana8', resultId: 'rezultat_H_nana8' },
    { cells: 'inv_H_nana9', resultId: 'rezultat_H_nana9' },
    { cells: 'inv_H_nana10', resultId: 'rezultat_H_nana10' },
    { cells: 'inv_H_nana11', resultId: 'rezultat_H_nana11' },
    { cells: 'inv_H_nana12', resultId: 'rezultat_H_nana12' },
    { cells: 'inv_H_nana13', resultId: 'rezultat_H_nana13' },
    { cells: 'inv_H_nana14', resultId: 'rezultat_H_nana14' },
    { cells: 'inv_H_nana15', resultId: 'rezultat_H_nana15' },
    { cells: 'inv_H_nana16', resultId: 'rezultat_H_nana16' },
    { cells: 'inv_H_nana17', resultId: 'rezultat_H_nana17' },
    { cells: 'inv_H_nana18', resultId: 'rezultat_H_nana18' },
    { cells: 'inv_H_nana19', resultId: 'rezultat_H_nana19' },
    { cells: 'inv_H_nana20', resultId: 'rezultat_H_nana20' },
    { cells: 'inv_H_nana21', resultId: 'rezultat_H_nana21' }
  ]);
  updateTableResults('INV_Ts_Ts', [
    { cells: 'inv_Ts_Ts1', resultId: 'rezultat_Ts_Ts1' },
    { cells: 'inv_Ts_Ts2', resultId: 'rezultat_Ts_Ts2' },
    { cells: 'inv_Ts_Ts3', resultId: 'rezultat_Ts_Ts3' },
    { cells: 'inv_Ts_Ts4', resultId: 'rezultat_Ts_Ts4' },
    { cells: 'inv_Ts_Ts5', resultId: 'rezultat_Ts_Ts5' },
    { cells: 'inv_Ts_Ts6', resultId: 'rezultat_Ts_Ts6' },
    { cells: 'inv_Ts_Ts7', resultId: 'rezultat_Ts_Ts7' },
    { cells: 'inv_Ts_Ts8', resultId: 'rezultat_Ts_Ts8' },
    { cells: 'inv_Ts_Ts9', resultId: 'rezultat_Ts_Ts9' },
    { cells: 'inv_Ts_Ts10', resultId: 'rezultat_Ts_Ts10' },
    { cells: 'inv_Ts_Ts11', resultId: 'rezultat_Ts_Ts11' },
    { cells: 'inv_Ts_Ts12', resultId: 'rezultat_Ts_Ts12' },
    { cells: 'inv_Ts_Ts13', resultId: 'rezultat_Ts_Ts13' },
    { cells: 'inv_Ts_Ts14', resultId: 'rezultat_Ts_Ts14' },
    { cells: 'inv_Ts_Ts15', resultId: 'rezultat_Ts_Ts15' },
    { cells: 'inv_Ts_Ts16', resultId: 'rezultat_Ts_Ts16' },
    { cells: 'inv_Ts_Ts17', resultId: 'rezultat_Ts_Ts17' },
    { cells: 'inv_Ts_Ts18', resultId: 'rezultat_Ts_Ts18' },
    { cells: 'inv_Ts_Ts19', resultId: 'rezultat_Ts_Ts19' },
    { cells: 'inv_Ts_Ts20', resultId: 'rezultat_Ts_Ts20' },
    { cells: 'inv_Ts_Ts21', resultId: 'rezultat_Ts_Ts21' }
  ]);
  updateTableResults('INV_D_lat', [
    { cells: 'inv_D_lat1', resultId: 'rezultat_D_lat1' },
    { cells: 'inv_D_lat2', resultId: 'rezultat_D_lat2' },
    { cells: 'inv_D_lat3', resultId: 'rezultat_D_lat3' },
    { cells: 'inv_D_lat4', resultId: 'rezultat_D_lat4' },
    { cells: 'inv_D_lat5', resultId: 'rezultat_D_lat5' },
    { cells: 'inv_D_lat6', resultId: 'rezultat_D_lat6' },
    { cells: 'inv_D_lat7', resultId: 'rezultat_D_lat7' },
    { cells: 'inv_D_lat8', resultId: 'rezultat_D_lat8' },
    { cells: 'inv_D_lat9', resultId: 'rezultat_D_lat9' },
    { cells: 'inv_D_lat10', resultId: 'rezultat_D_lat10' },
    { cells: 'inv_D_lat11', resultId: 'rezultat_D_lat11' },
    { cells: 'inv_D_lat12', resultId: 'rezultat_D_lat12' },
    { cells: 'inv_D_lat13', resultId: 'rezultat_D_lat13' },
    { cells: 'inv_D_lat14', resultId: 'rezultat_D_lat14' },
    { cells: 'inv_D_lat15', resultId: 'rezultat_D_lat15' },
    { cells: 'inv_D_lat16', resultId: 'rezultat_D_lat16' },
    { cells: 'inv_D_lat17', resultId: 'rezultat_D_lat17' },
    { cells: 'inv_D_lat18', resultId: 'rezultat_D_lat18' },
    { cells: 'inv_D_lat19', resultId: 'rezultat_D_lat19' },
    { cells: 'inv_D_lat20', resultId: 'rezultat_D_lat20' },
    { cells: 'inv_D_lat21', resultId: 'rezultat_D_lat21' }
  ]);
  updateTableResults('INV_S_ster', [
    { cells: 'inv_S_ster1', resultId: 'rezultat_S_ster1' },
    { cells: 'inv_S_ster2', resultId: 'rezultat_S_ster2' },
    { cells: 'inv_S_ster3', resultId: 'rezultat_S_ster3' },
    { cells: 'inv_S_ster4', resultId: 'rezultat_S_ster4' },
    { cells: 'inv_S_ster5', resultId: 'rezultat_S_ster5' },
    { cells: 'inv_S_ster6', resultId: 'rezultat_S_ster6' },
    { cells: 'inv_S_ster7', resultId: 'rezultat_S_ster7' },
    { cells: 'inv_S_ster8', resultId: 'rezultat_S_ster8' },
    { cells: 'inv_S_ster9', resultId: 'rezultat_S_ster9' },
    { cells: 'inv_S_ster10', resultId: 'rezultat_S_ster10' },
    { cells: 'inv_S_ster11', resultId: 'rezultat_S_ster11' },
    { cells: 'inv_S_ster12', resultId: 'rezultat_S_ster12' },
    { cells: 'inv_S_ster13', resultId: 'rezultat_S_ster13' },
    { cells: 'inv_S_ster14', resultId: 'rezultat_S_ster14' },
    { cells: 'inv_S_ster15', resultId: 'rezultat_S_ster15' },
    { cells: 'inv_S_ster16', resultId: 'rezultat_S_ster16' },
    { cells: 'inv_S_ster17', resultId: 'rezultat_S_ster17' },
    { cells: 'inv_S_ster18', resultId: 'rezultat_S_ster18' },
    { cells: 'inv_S_ster19', resultId: 'rezultat_S_ster19' },
    { cells: 'inv_S_ster20', resultId: 'rezultat_S_ster20' },
    { cells: 'inv_S_ster21', resultId: 'rezultat_S_ster21' }
  ]);
  updateTableResults('INV_E_gran', [
    { cells: 'inv_E_gran1', resultId: 'rezultat_E_gran1' },
    { cells: 'inv_E_gran2', resultId: 'rezultat_E_gran2' },
    { cells: 'inv_E_gran3', resultId: 'rezultat_E_gran3' },
    { cells: 'inv_E_gran4', resultId: 'rezultat_E_gran4' },
    { cells: 'inv_E_gran5', resultId: 'rezultat_E_gran5' },
    { cells: 'inv_E_gran6', resultId: 'rezultat_E_gran6' },
    { cells: 'inv_E_gran7', resultId: 'rezultat_E_gran7' },
    { cells: 'inv_E_gran8', resultId: 'rezultat_E_gran8' },
    { cells: 'inv_E_gran9', resultId: 'rezultat_E_gran9' },
    { cells: 'inv_E_gran10', resultId: 'rezultat_E_gran10' },
    { cells: 'inv_E_gran11', resultId: 'rezultat_E_gran11' },
    { cells: 'inv_E_gran12', resultId: 'rezultat_E_gran12' },
    { cells: 'inv_E_gran13', resultId: 'rezultat_E_gran13' },
    { cells: 'inv_E_gran14', resultId: 'rezultat_E_gran14' },
   
    { cells: 'inv_E_gran17', resultId: 'rezultat_E_gran17' },
    { cells: 'inv_E_gran18', resultId: 'rezultat_E_gran18' },
    { cells: 'inv_E_gran19', resultId: 'rezultat_E_gran19' },
    { cells: 'inv_E_gran20', resultId: 'rezultat_E_gran20' },
    { cells: 'inv_E_gran21', resultId: 'rezultat_E_gran21' }
  ]);
}

function mParCaz() {
  toggleDisplay('.mParCaz');
  toggleAllExcept('.mParCaz');
  
}

function iPar() {
  toggleDisplay('.iPar');
  toggleAllExcept('.iPar');
  
}

function deh() {
  toggleDisplay('.deh');
  toggleAllExcept('.deh');
  
}

function acop() {
  toggleDisplay('.acop');
  toggleAllExcept('.acop');
  
}

function malaria() {
  toggleDisplay('.malaria');
  toggleAllExcept('.malaria');
  
}



//====================
mobiscroll.setOptions({
  locale: mobiscroll.localeRu,                                           // Specify language like: locale: mobiscroll.localePl or omit setting to use default
  theme: 'ios',                                                          // Specify theme like: theme: 'ios' or omit setting to use default
      themeVariant: 'light'                                              // More info about themeVariant: https://docs.mobiscroll.com/5-20-1/select#opt-themeVariant
});

$(function () {
  // Mobiscroll Select initialization
  $('#demo-single-select').mobiscroll().select({
      inputElement: document.getElementById('demo-single-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-20-1/select#opt-inputElement
  });
});


