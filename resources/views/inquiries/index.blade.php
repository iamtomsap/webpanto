@extends('layout/main') 
    
@section('title','Inquiries')

@section('container')
  <div class="container mt-4">
        <h1>Sent Us Your Inquiry</h1>
      <div class="row">
          <div class="col-6">
          <form class="needs-validation" action="/inquiries" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="inquiry_type">Inquiry Type</label>
                    <select class="custom-select" name="inquiry_type" id="inquiry_type" required>
                        <!-- <option>Rental</option> -->
                        <option>Used Equipment</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <textarea class="form-control" name="subject" id="subject" rows="3" placeholder="I'm From XYZ Company"></textarea>
            </div>

            @csrf

            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
          </div>
      </div>
  </div>
@endsection