@extends('layouts.app')


@section('content')
{{-- {{"create"}} --}}


<div class="container">

<form action="" method="">

    @csrf
    @method('HEAD')


  @include('student.form')


</form>

{{-- <button class="btn btn-success" id="show">show</button>  --}}
<input type="submit" id="submit" class="btn btn-primary">



<!-- Button trigger modal -->
<button type="button" class="btn btn-success" id="show" data-toggle="modal" data-target="#exampleModal">
    Show
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Showing Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <p id="firstnamedata">First Name</p>
            <p id="lastnamedata">Last Name</p>
            <p id="addressdata">Address</p>
            <p id="fullnamedata">Full Name</p>
            <p id="countrydata">Country</p>
            <p id="statedata">State</p>
            <p id="citydata">City</p>
            <p id="hobbydata">Hobby</p>


          <Script>

            document.querySelector('#show').addEventListener("click", function(){

              var firstname =  document.querySelector('#firstname').value;
              $('#firstnamedata').html("First Name : "+ "<b>"+firstname+"</b>");

              var lastname =  document.querySelector('#lastname').value;
              $('#lastnamedata').html("Last Name : "+"<b>"+ lastname + "</b>");

              var fullname =  document.querySelector('#fullname').value;
              $('#fullnamedata').html("Full Name : "+ "<b>"+ fullname + "</b>");

              var address =  document.querySelector('#address').value;
              $('#addressdata').html("Address : " + "<b>"+ address+ "</b>");

              var country =  document.querySelector('#country').value;
              $('#countrydata').html("Country : " + "<b>" + country + "</b>");

              var state =  document.querySelector('#state').value;
              $('#statedata').html("State : " + "<b>" + state + "</b>");

              var city =  document.querySelector('#city').value;
              $('#citydata').html("City : " + "<b>"+ city + "</b>");


              //Hobby  (checkbox handling)

            //   var hobby =  document.querySelector('#cricket').value;
            //   $('#hobbydata').text("Hobby : " + hobby);

            var cricket = document.querySelector('#cricket');
            var badminton = document.querySelector('#badminton');
            var football = document.querySelector('#football');


            if(cricket.checked == true){
                var cricket1 = document.querySelector('#cricket').value;
                $('#hobbydata').html("Hobby : " + "<b>"+ cricket1 + "</b>");
            }
            else if(badminton.checked == true){
                var badminton1 = document.querySelector('#badminton').value;
                $('#hobbydata').html("Hobby : " + "<b>" + badminton1 + "</b>");
            }
            else if(football.checked){
                var football1 = document.querySelector('#football').value;
                $('#hobbydata').html("Hobby : " + "<b>" +football1 + "</b>");
            }
            else{
                $('#hobbydata').html("Hobby : No Hobby Selected");
            }

            //combined data of checkbox

            if(cricket.checked == true && badminton.checked == true && football.checked == true){

                var cric = document.querySelector('#cricket').value;
                var bad = document.querySelector('#badminton').value;
                var foot = document.querySelector('#football').value;

                $('#hobbydata').html("Hobby : " +"<b>" + cric + ", "+ bad +", "+ foot + "</b>");
}

          else  if(cricket.checked == true && badminton.checked == true){

                var cric = document.querySelector('#cricket').value;
                var bad = document.querySelector('#badminton').value;
                $('#hobbydata').html("Hobby : " + "<b>" + cric + ", "+ bad+ "</b>");
            }
            else if(cricket.checked == true && football.checked == true){

                var cric = document.querySelector('#cricket').value;
                var foot = document.querySelector('#football').value;
                $('#hobbydata').html("Hobby : " +"<b>"+  cric + ", "+ foot + "</b>");

            }
            else if(badminton.checked == true && football.checked == true){
                var bad = document.querySelector('#badminton').value;
                var foot = document.querySelector('#football').value;
                $('#hobbydata').html("Hobby : " +"<b>" + bad + ", "+ foot+ "</b>");

            }


            







            })


          </Script>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection