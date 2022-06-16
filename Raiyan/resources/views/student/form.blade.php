

<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name ?? "" }}">

    <span class="text-danger">
        @error('name')
        *{{$message}}
        @enderror
    </span>
</div>

<div class="form-group">
    <label for="">Description</label><br>

    <textarea  name="description" rows="4" cols="50">{{$data->description ?? ""}}
        </textarea>
</div>
<br>

<div class="form-group">
     <label for="gender">Gender :</label>
 
           Male<input type="radio" class="" name="gender" value="male"  {{($data->gender ?? '') =='male' ? "checked" : ""}}>
           Female<input type="radio" class="" name="gender" value="female" {{($data->gender ?? '') =='female' ? "checked" : ""}}>  
    <br>
           <span class="text-danger">
            @error('gender')
            *{{$message}}
            @enderror
        </span>
        
    
    </div>



<br>
<div class="form-group">    
    <label for="">Hobby : </label>
cricket<input type="checkbox" name="hobby[]" value="cricket">
Batminton<input type="checkbox"  name="hobby[]" value="badminton">
Football<input type="checkbox"  name="hobby[]" value="football">
</div>
<br>

<select name="state">
    <option name="state" value="" >Select your state</option>
    <option name="state" value="gujarat" {{($data->state ?? '') == 'gujarat' ? "Selected" : ""}}>Gujarat</option>
    <option name="state" value="maharashtra" {{($data->state ?? '') == 'maharashtra' ? "Selected" : ""}}>Maharashtra</option>
    <option name="state" value="up" {{($data->state ?? '') == 'up' ? "Selected" : ""}}>Up</option>
</select><br>
<span class="text-danger">
    @error('state')
    *{{$message}}
    @enderror
</span>

<br>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>