

@include('layouts.app')


<style>

form{
    display: inline-block;
}

</style>

<h1 class="text-center">Products</h1>

<div class="container">
<a href="{{route('product.create')}}"> <button class="btn btn-primary">Insert Data</button></a>

<table class="table">
    <thead>
        <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Hobby</th>
            <th scope="col">Product Type</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($input as $data)

        <tr>
            {{-- <th scope="row">{{$data->id}}</th> --}}
            <td>{{$data->first_name." ". $data->last_name}}</td>
           
            <td>{{$data->description}}</td>
            <td>{{$data->hobby}}</td>
            <td>{{$data->product_type}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->total}}</td>
          
            <td>
                <a href="{{route('product.show' ,$data->id)}}"> <button class="btn btn-primary">Show</button></a>
                <a href="{{route('product.edit' ,$data->id)}}"> <button class="btn btn-success">Edit</button></a>
                <span>
                    {{-- <form action="{{route('product.destroy' ,$data->id)}}" method="POST"> --}}

                        {{-- @dd($data->id) --}}

                        {!!Form::open([
                            'route' => ['product.destroy', $data->id],
                             'method' => 'POST'
                        ])!!}
                       
                        {{-- @csrf --}}
                        {!!Form::token()!!}

                        @method('DELETE')
                        <a> <button class="btn btn-danger">Delete</button></a>
                    {{-- </form> --}}
                    {!!form::close()!!}
                  
                </span>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>


</body>

</html>