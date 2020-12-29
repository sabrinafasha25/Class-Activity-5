@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Student Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="matric_no">Matric No</label>
              <input type="text" class="form-control" name="matric_no"/>
          </div>
          <div class="form-group">
                <label for="gender">Gender</label>
                <input type="radio" class="form-control" name="gender" id="gender" value="Male" >Male</input>
                <input type="radio" class="form-control" name="gender" id="gender" value="Female" >Female</input>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth" id="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship" id="citizenship"/>
          </div>
          <div class="form-group">
              <label for="marital_status">Marital Status</label>
              <input type="radio" class="form-control" name="marital_status" id="marital_status" value="Single" >Single</input>
              <input type="radio" class="form-control" name="marital_status" id="marital_status" value="Married" >Married</input>
          </div>
          <div class="form-group">
                <label>Religion</label>
                <select class="form-control" name="religion" id="religion"/>
                    <option value="Select">Select</option>
                    <option value="Islam">Islam</option>
                    <option value="Christ">Christ</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
          </div>
          <div class="form-group">
                <label>Student Activity Status</label>
                <input type="radio" class="form-control" name="activity_status" id="activity_status" value="Active">Active</input>
                <input type="radio" class="form-control" name="activity_status" id="activity_status"value="Inactive">Inactive</input>
          </div>
          <div class="form-group">
                <label>Current Year of Study</label>
                <input type="text" class="form-control" name="current_year" id="current_year"/>
          </div>
          <div class="form-group">
                <label>Identity No</label>
                <input type="text" class="form-control" name="id_no" id="id_no"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="row justify-content-center">
          <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;
          <button type="submit" class="btn btn-primary text-center">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection
