@extends('navbar')
@section('content')
@section('title')
    Contact Form
@endsection
<div class="container">
<div class="row">
<div class="col-6">
<form action="/Contact" method="post" >
@csrf
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" >
    <small class="text-danger"> {{ $errors->first('name') }}</small>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" name="email"  class="form-control">
    <small class="text-danger"> {{ $errors->first('email') }}</small>
  </div>
  <div class="mb-3">
    <label for="Message" class="form-label">Message</label>
    <textarea type="text"  name="message"  class="form-control"></textarea>
    <small class="text-danger"> {{ $errors->first('message') }}</small>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection