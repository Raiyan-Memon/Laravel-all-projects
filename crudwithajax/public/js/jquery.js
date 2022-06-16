$(document).ready(function () { 



    // alert("raiyan");


// $('#show').on("click", function(){

// console.log("clickeed");
//    var firstname = $('#firstname').val();

//    var lastname = $('#lastname').val();

// //    var fullname = $('#fullname').val(firstname +" " +lastname);

//    alert(firstname +" " +lastname);
// });


$('#firstname').on('keyup',function(){


  var firstdata = $('#firstname').val();

   

   $('#fullname').val(firstdata);

})

$('#lastname').on('keyup', function(){

   var firstname = $('#firstname').val();
   var lastname = $('#lastname').val();

   $('#fullname').val(firstname +" "+ lastname);

})


// Validation
$('#submit').on('click', function(){

   if($('#firstname').val() == ""){
      $('#firstnameerror').text("*First Name must not be empty");
   }else{
      $('#firstnameerror').text("");
   }
   
   if($('#lastname').val() == ""){
      $('#lastnameerror').text("*Last Name must not be empty");
   }else{
      $('#lastnameerror').text("");
   }

   if($('#address').val() == ""){
      $('#addresserror').text("*Address must not be empty");
   }else{
      $('#addresserror').text("");
   }

})

   
//Handing country



})
