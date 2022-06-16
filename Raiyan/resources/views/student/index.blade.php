@include('layouts.app')

<style>
    form{
        display: inline-block;
    }
</style>

<div class="container">

    <a href="{{route('student.create')}}"><button class="btn btn-primary">Create New Data</button></a>


    <table class="table">
        <thead>
          <tr>
            {{-- <th scope="col">Id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Gender</th>
            <th scope="col">Hobbies</th>
            <th scope="col">State</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
    
            @foreach ($student as $data)
    
          <tr>
           
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->hobby}}</td>
            <td>{{$data->state}}</td>
            <td>
            <a class="btn btn-primary" href="{{route('student.show',$data->id)}}">Show</a>
                <a class="btn btn-success" href="{{route('student.edit',$data->id)}}">Edit</a>
    
                <form action="{{route('student.destroy',$data->id)}}" method="POST">
                  @csrf
                @method('DELETE')
         <a> <button type="submit" class="btn btn-danger">Delete</button></a></td>
              </form>
          </tr>
    
          @endforeach
        </tbody>
      </table>



</div>