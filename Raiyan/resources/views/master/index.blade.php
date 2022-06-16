
@include('layouts.app')


<style>
    form{
        display: inline-block;
    }
</style>

<div class="container">

    <h1 class="text-center">Subjects</h1>

    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">Id</th> --}}
            <th scope="col">Id</th>
            <th scope="col">Subject</th>
           
          </tr>
        </thead>
        <tbody>
    
            @foreach ($subject as $data)
    
          <tr>
            {{-- <th scope="row">{{$data->id}}</th> --}}
            <td>{{$data->id}}</td>
            <td>{{$data->subject}}</td>
          </tr>
    
          @endforeach
        </tbody>
      </table>



</div>