function validaDNI(dni){
  var ex_regular_dni; 
  ex_regular_dni = /^\d{8}(?:[-\s]\d{4})?$/;
  if(ex_regular_dni.test (dni) == true){
       alert('Dni corresponde');
  }else{
     alert('Dni erroneo, formato no válido');
   }
}

//Uso
validaDNI("12345678")