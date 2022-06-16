

<div class="form-data">
<label for="firstname"><span style="color: red">*</span> Name</label>
<input type="text" class="form-control" name="firstname" id="firstname">
<span id="firstnameerror" style="color: red"></span><br>   

<label for="lastname"><span style="color: red">*</span>Last Name</label>
<input type="text" class="form-control" name="lastname" id="lastname">
<span id="lastnameerror" style="color: red"></span><br>

<label for="fullname">Full Name</label>
<input type="text" class="form-control" name="fullname" id="fullname" disabled><br> 

<label for="address"><span style="color: red">*</span>Address</label>
<textarea class="form-control" id="address" cols="4" rows="4" name="address"></textarea>
<span id="addresserror" style="color: red"></span><br>


<label for="country"><span style="color: red">*</span>Country</label>
<select class="form-select" id="country">
    <option></option>
    <option value="India">India</option>
    <option value="UK">UK</option>
    <option value="USA">USA</option>
</select><br>

<label for="state"><span style="color: red">*</span>State</label>
<select class="form-select" id="state">
    <option></option>
    <option value="Gujarat">Gujarat</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Haryana">Haryana</option>
</select><br>

<label for="country"><span style="color: red">*</span>City</label>
<select class="form-select" id="city">
    <option></option>
    <option value="Valsad">Valsad</option>
    <option value="Vapi">Vapi</option>
    <option value="Mumbai">Mumbai</option>
</select><br>





<label for="hobby">Hobbies : </label>
<label for="cricket">Cricket</label>
<input type="checkbox" class="form-check-input" name="hobby[]" id="cricket" value="Cricket">

<label for="badminton">Badminton</label>
<input type="checkbox" class="form-check-input" name="hobby[]" id="badminton" value="Badminton">

<label for="football">Football</label>
<input type="checkbox" class="form-check-input" name="hobby[]" id="football" value="Football">



</div>


