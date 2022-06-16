


<div class="form-group">

    {{Form::label('First Name')}}
    {!!Form::text('first_name' ,$data->first_name ?? "",['class'=>'form-control'])!!}
    <span class="text-danger">
        @error('first_name')
        *{{$message}}
        @enderror
    </span> 

</div>

<div class="form-group">

    {{Form::label('Last Name')}}
    {{Form::text('last_name',$data->last_name ?? "",['class' => 'form-control'])}}
    <span class="text-danger">
        @error('last_name')
        *{{$message}}
        @enderror
    </span>

</div>

<div class="form-group">

        {{Form::label('Description')}}
        {{Form::textarea('description', $data->description ?? "",['class'=>'form-control','rows' => 4, 'cols' => 50])}}

</div>


<br>
<div class="form-group">    

{{Form::label('Hobby')}}

{{Form::label('Cricket')}}
{{Form::checkbox('hobby[]', "cricket")}}
{{Form::label('Badminton')}}
{{Form::checkbox('hobby[]', 'badminton')}}
{{Form::label('Football')}}
{{Form::checkbox('hobby[]', 'football')}}

</div>


<div class="form-group">

    {{Form::label('Product Type')}}
    {{Form::text('product_type',$data->product_type ?? "",['class'=> 'form-control'])}}
</div>

<div class="form-group">

    {{Form::label('Price')}}
    {{Form::number('price',$data->price ?? "", ['class' => 'form-control'])}}

</div>

<div class="form-group">

    {{Form::label('Quantity')}}
    {{Form::number('quantity',$data->quantity ?? "" ,['class' => 'form-control'])}}
    <span class="text-danger">
        @error('quantity')
        *{{$message}}
        @enderror
    </span>

</div>


<br>
<br>

{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
</div>