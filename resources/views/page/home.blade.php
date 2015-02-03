@extends('master')

@section('sidebar')
  <div class="row">
    <div class="col-lg-12">
      <h2>Request a Quote</h2>
      <p>The ONLY required field is phone.</p>
    </div>
  </div>
  {{ Form::open(['url' => '/', 'role' => 'form', 'id' => 'quoteform']) }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Address">
    </div>
    <div class="form-group">
      <label for="service">Service</label>
      <select id="service" class="form-control" name="service">
        <option>-- Select --</option>
        <option value="lawn service">Lawn Service</option>
        <option value="mulching">Mulching</option>
        <option value="sod replacement">Sod Replacement</option>
        <option value="irrigation repairs">Irrigation Repairs</option>
        <option value="irrigation installs">Irrigation Installs</option>
        <option value="landscape installs">Landscape Installs</option>
      </select>
    </div>
    <div class="form-group">
      <label for="details">Details</label>
      <textarea name="details" class="form-control" id="details" rows="3"></textarea>
    </div>
    <div class="form-group">
      <p>Calls are returned between 4pm - 6pm M-F</p>
      <input type="submit" class="btn btn-primary" value="Get Quote" />
    </div>
  {{ Form::close() }}
@stop

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h2>Services Offered</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-xs-6">
      <div class="row firstclass text-center services">
        <div class="col-sm-4">
          <img src="/images/lawn_service.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Lawn Service</h3>
        </div>
        <div class="col-sm-4">
          <img src="/images/mulch.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Mulching</h3>
        </div>
        <div class="col-sm-4">
          <img src="/images/sod.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Sod Replacement</h3>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xs-6">
      <div class="row firstclass text-center services">
        <div class="col-sm-4">
          <img src="/images/irrigation.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Irrigation</h3>
        </div>
        <div class="col-sm-4">
          <img src="/images/tree_work.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Tree Work</h3>
        </div>
        <div class="col-sm-4">
          <img src="/images/landscape_installs.jpg" alt="..." class="img-rounded img-responsive" />
          <h3>Landscape Install</h3>
        </div>
      </div>
    </div>
  </div>
@stop