@extends('master')

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
      <h1>Lawn Services in Windermere, FL</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <p class="lead">C.A. Lawn Care currently serves multiple clients in Isleworth.</p>
      <p>Every job is unique, but we understand that Isleworth clients demand exceptional service at competitive rates.</p>
      <p>We recognize that you are an upper end client and focus on being an upper end service provider.</p>
      <h2>The Right People</h2>
      <p>Every employee at C.A. Lawn Care is trained and experienced.  We arrive at your property with the knowledge of how to complete the job.</p>
      <h2>The Right Equipment</h2>
      <p>They say, you know when you have the right tool for the job.  It is important and not every landscaping company has the equipment it takes to serve Isleworth.  Our equipment is new, reliable and kept clean.</p>
      <h2>On Time</h2>
      <p>It is disrespectful to be late.  Our current clients will agree, we do whatever it takes to be at your property at the same time each week.</p>
    </div>
  </div>
@stop