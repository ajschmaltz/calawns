@extends('yz')

@section('sidebar')
  <div class="row">
    <div class="col-lg-12">
      <h2>Request a Quote</h2>
      <p>The ONLY required field is phone.</p>
    </div>
  </div>
  <form role="form" id="quoteform">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="Phone">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Address">
    </div>
    <div class="form-group">
      <label for="service">Service</label>
      <select id="service" class="form-control">
        <option>-- Select --</option>
        <option>Lawn Service</option>
        <option>Mulching</option>
        <option>Sod Replacement</option>
        <option>Irrigation Repairs</option>
        <option>Irrigation Installs</option>
        <option>Landscape Installs</option>
      </select>
    </div>
    <div class="form-group">
      <label for="details">Details</label>
      <textarea class="form-control" id="details" rows="3"></textarea>
    </div>
    <div class="form-group">
      <p>Calls are returned between 4pm - 6pm M-F</p>
      <input type="submit" class="btn btn-primary" value="Get Quote" />
    </div>
  </form>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h1>About Us</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
    </div>
  </div>
@stop