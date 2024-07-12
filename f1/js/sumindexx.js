let sum_total = document.getElementById('sum_total');

let total = document.querySelectorAll('[name="total[]"]');
let numbers = [];

for( let i = 0; i < total.length; i++ ){
 numbers.push( total[i].value ); 
 
 total[i].addEventListener('input', function(){
   numbers[i] = this.value; 

   updateResults();
 });
}

let sum_c_sub = document.getElementById('sum_c_sub');

let c_sub = document.querySelectorAll('[name="c_sub[]"]');
let nr_c_sub = [];

for( let i = 0; i < c_sub.length; i++ ){
    nr_c_sub.push( c_sub[i].value ); 
    
    c_sub[i].addEventListener('input', function(){
        nr_c_sub[i] = this.value; 
      updateResults();
    });
}

let sum_d_Pre_T = document.getElementById('sum_d_Pre_T');

let d_Pre_T = document.querySelectorAll('[name="d_Pre_T[]"]');
let nr_d_Pre_T = [];

for( let i = 0; i < d_Pre_T.length; i++ ){
    nr_d_Pre_T.push( d_Pre_T[i].value ); 
    
    d_Pre_T[i].addEventListener('input', function(){
        nr_d_Pre_T[i] = this.value; 
      updateResults();
    });
}

let sum_d_Pre_O = document.getElementById('sum_d_Pre_O');

let d_Pre_O = document.querySelectorAll('[name="d_Pre_O[]"]');
let nr_d_Pre_O = [];

for( let i = 0; i < d_Pre_O.length; i++ ){
    nr_d_Pre_O.push( d_Pre_O[i].value ); 
    
    d_Pre_O[i].addEventListener('input', function(){
        nr_d_Pre_O[i] = this.value; 
      updateResults();
    });
}

let sum_d_Sco = document.getElementById('sum_d_Sco');

let d_Sco = document.querySelectorAll('[name="d_Sco[]"]');
let nr_d_Sco = [];

for( let i = 0; i < d_Sco.length; i++ ){
    nr_d_Sco.push( d_Sco[i].value ); 
    
    d_Sco[i].addEventListener('input', function(){
        nr_d_Sco[i] = this.value; 
      updateResults();
    });
}

let sum_rural_T = document.getElementById('sum_rural_T');

let rural_T = document.querySelectorAll('[name="rural_T[]"]');
let nr_rural_T = [];

for( let i = 0; i < rural_T.length; i++ ){
    nr_rural_T.push( rural_T[i].value ); 
    
    rural_T[i].addEventListener('input', function(){
        nr_rural_T[i] = this.value; 
      updateResults();
    });
}

let sum_rural_Csub = document.getElementById('sum_rural_Csub');

let rural_Csub = document.querySelectorAll('[name="rural_Csub[]"]');
let nr_rural_Csub = [];

for( let i = 0; i < rural_Csub.length; i++ ){
    nr_rural_Csub.push( rural_Csub[i].value ); 
    
    rural_Csub[i].addEventListener('input', function(){
        nr_rural_Csub[i] = this.value; 
      updateResults();
    });
}

let sum_c_CIM = document.getElementById('sum_c_CIM');

let c_CIM = document.querySelectorAll('[name="c_CIM[]"]');
let nr_c_CIM = [];

for( let i = 0; i < c_CIM.length; i++ ){
    nr_c_CIM.push( c_CIM[i].value ); 
    
    c_CIM[i].addEventListener('input', function(){
        nr_c_CIM[i] = this.value; 
      updateResults();
    });
}

let sum_cop_Total = document.getElementById('sum_cop_Total');

let cop_Total = document.querySelectorAll('[name="cop_Total[]"]');
let nr_cop_Total = [];

for( let i = 0; i < cop_Total.length; i++ ){
    nr_cop_Total.push( cop_Total[i].value ); 
    
    cop_Total[i].addEventListener('input', function(){
        nr_cop_Total[i] = this.value; 
      updateResults();
    });
}

let sum_cop_Csub = document.getElementById('sum_cop_Csub');

let cop_Csub = document.querySelectorAll('[name="cop_Csub[]"]');
let nr_cop_Csub = [];

for( let i = 0; i < cop_Csub.length; i++ ){
    nr_cop_Csub.push( cop_Csub[i].value ); 
    
    cop_Csub[i].addEventListener('input', function(){
        nr_cop_Csub[i] = this.value; 
      updateResults();
    });
}

let sum_cop_Pre = document.getElementById('sum_cop_Pre');

let cop_Pre = document.querySelectorAll('[name="cop_Pre[]"]');
let nr_cop_Pre = [];

for( let i = 0; i < cop_Pre.length; i++ ){
    nr_cop_Pre.push( cop_Pre[i].value ); 
    
    cop_Pre[i].addEventListener('input', function(){
        nr_cop_Pre[i] = this.value; 
      updateResults();
    });
}

let sum_cop_Sco = document.getElementById('sum_cop_Sco');

let cop_Sco = document.querySelectorAll('[name="cop_Sco[]"]');
let nr_cop_Sco = [];

for( let i = 0; i < cop_Sco.length; i++ ){
    nr_cop_Sco.push( cop_Sco[i].value ); 
    
    cop_Sco[i].addEventListener('input', function(){
        nr_cop_Sco[i] = this.value; 
      updateResults();
    });
}

let sum_ent_Total = document.getElementById('sum_ent_Total');

let ent_Total = document.querySelectorAll('[name="ent_Total[]"]');
let nr_ent_Total = [];

for( let i = 0; i < ent_Total.length; i++ ){
    nr_ent_Total.push( ent_Total[i].value ); 
    
    ent_Total[i].addEventListener('input', function(){
        nr_ent_Total[i] = this.value; 
      updateResults();
    });
}

let sum_ent_Csub = document.getElementById('sum_ent_Csub');

let ent_Csub = document.querySelectorAll('[name="ent_Csub[]"]');
let nr_ent_Csub = [];

for( let i = 0; i < ent_Csub.length; i++ ){
    nr_ent_Csub.push( ent_Csub[i].value ); 
    
    ent_Csub[i].addEventListener('input', function(){
        nr_ent_Csub[i] = this.value; 
      updateResults();
    });
}

let sum_ent_Pre = document.getElementById('sum_ent_Pre');

let ent_Pre = document.querySelectorAll('[name="ent_Pre[]"]');
let nr_ent_Pre = [];

for( let i = 0; i < ent_Pre.length; i++ ){
    nr_ent_Pre.push( ent_Pre[i].value ); 
    
    ent_Pre[i].addEventListener('input', function(){
        nr_ent_Pre[i] = this.value; 
      updateResults();
    });
}

let sum_ent_Sco = document.getElementById('sum_ent_Sco');

let ent_Sco = document.querySelectorAll('[name="ent_Sco[]"]');
let nr_ent_Sco = [];

for( let i = 0; i < ent_Sco.length; i++ ){
    nr_ent_Sco.push( ent_Sco[i].value ); 
    
    ent_Sco[i].addEventListener('input', function(){
        nr_ent_Sco[i] = this.value; 
      updateResults();
    });
}




updateResults();


function updateResults(){
for(let x = 0; x < 2 ; x++){

    sum_total.value = sumArr( numbers );
    sum_c_sub.value = sumArr(nr_c_sub);
    sum_d_Pre_T.value = sumArr(nr_d_Pre_T);
    sum_d_Pre_O.value = sumArr(nr_d_Pre_O);
    sum_d_Sco.value = sumArr(nr_d_Sco);
    sum_rural_T.value = sumArr(nr_rural_T);
    sum_rural_Csub.value = sumArr(nr_rural_Csub);
    //====
    sum_c_CIM.value = sumArr(nr_c_CIM);
    sum_cop_Total.value = sumArr(nr_cop_Total);
    sum_cop_Csub.value = sumArr(nr_cop_Csub);
    sum_cop_Pre.value = sumArr(nr_cop_Pre);
    sum_cop_Sco.value = sumArr(nr_cop_Sco);
    sum_ent_Total.value = sumArr(nr_ent_Total);
    sum_ent_Csub.value = sumArr(nr_ent_Csub);
    sum_ent_Pre.value = sumArr(nr_ent_Pre);
    sum_ent_Sco.value = sumArr(nr_ent_Sco);


   for (let y = 0; y < 9; y++) {
    let sum_total_entV = document.getElementsByName('c_sub[]')[y];
     sum_total_entV.value = Number(nr_d_Pre_T[y]) + Number(nr_d_Sco[y]); 
   nr_c_sub[y] = sum_total_entV.value;
   }
   //===========
    let sum_total_copCsub = document.getElementsByName('cop_Csub[]')[1];
    sum_total_copCsub.value = Number(nr_cop_Pre[1]) + Number(nr_cop_Sco[1]); 
    nr_cop_Csub[1] = sum_total_copCsub.value;
   //===========
   let sum_total_entCsub = document.getElementsByName('ent_Csub[]')[0];
    sum_total_entCsub.value = Number(nr_ent_Pre[0]) + Number(nr_ent_Sco[0]); 
    nr_ent_Csub[0] = sum_total_entCsub.value;


}
}

function sumArr(arr){
 let x = 0;
 for( let i = 0; i < arr.length; i++ ){
   x += +arr[i]; // (*2)
 }
 return x;
}





