@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Student Details</h3>
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
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{ $student->first_name }}" readonly>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" readonly>
            </div>
            <div class="form-group">
              <label for="matric_no">Matric No</label>
              <input type="text" class="form-control" name="matric_no" value="{{ $student->matric_no }}" readonly>
          </div>
          <div class="form-group">
                <label for="gender">Gender</label>
                <input type="radio" class="form-control" name="gender" id="gender" value="{{ $student->gender }}Male" readonly>Male</input>
                <input type="radio" class="form-control" name="gender" id="gender" value="{{ $student->gender }}Female" readonly>Female</input>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $student->date_of_birth }}" readonly>
          </div>
          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship" id="citizenship" value="{{ $student->citizenship }}" readonly>
          </div>
          <div class="form-group">
              <label for="marital_status">Marital Status</label>
              <input type="radio" class="form-control" name="marital_status" id="marital_status" value="{{ $student->marital_status }}Single" readonly>Single</input>
              <input type="radio" class="form-control" name="marital_status" id="marital_status" value="{{ $student->marital_status }}Married" readonly>Married</input>
          </div>
          <div class="form-group">
                <label>Religion</label>
                <select class="form-control" name="religion" id="religion" value="{{ $student->religion }}" readonly>
                    <option value="Select">Select</option>
                    <option value="Islam">Islam</option>
                    <option value="Christ">Christ</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
          </div>
          <div class="form-group">
                <label>Student Activity Status</label>
                <input type="radio" class="form-control" name="activity_status" id="activity_status" value="{{ $student->activity_status }}Active" readonly>Active</input>
                <input type="radio" class="form-control" name="activity_status" id="activity_status"value="{{ $student->activity_status }}Inactive" readonly>Inactive</input>
          </div>
          <div class="form-group">
                <label>Current Year of Study</label>
                <input type="text" class="form-control" name="current_year" id="current_year" value="{{ $student->current_year }}" readonly>
          </div>
          <div class="form-group">
                <label>Identity No</label>
                <input type="text" class="form-control" name="id_no" id="id_no" value="{{ $student->id_no }}" readonly>
          </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $student->email }}" readonly>
            </div>
            </form>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;
            </div>
    </div>
</div>
@endsection
