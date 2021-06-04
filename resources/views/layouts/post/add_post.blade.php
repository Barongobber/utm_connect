@extends('layouts.app')

@section('content')
<div class="d-sm-flex justify-content-between align-items-center">
  <h3 class="text-dark mb-4">Add Event</h3>
</div>
<div class="mb-3">
  <a class="btn btn-shadow btn-danger" href="{{ route('table') }}">
    <i class="fas fa-angle-left"></i>
    <span>Back</span>
  </a>
</div>
<form action="{{ route('addEvent') }}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="card shadow">
    <div class="tabbable">
      <div class="tab-content">
        <div class="card-header py-3">
          <p class="text-primary m-0 font-weight-bold">Insert Event Information</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Title<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input name="e_title" type="text" class="form-control" placeholder="Write your title of event here" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Category<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <select name="e_category" class="form-control" required>
                    <option value="" selected>Choose Category</option>
                    <option value="Sports">Sports</option>
                    <option value="Academic">Academic</option>
                    <option value="Arts or Music">Arts or Music</option>
                    <option value="Strategic Studies">Strategic Studies</option>
                    <option value="Human Dev">Human Development</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Closed Reg Date<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input name="e_closed_on" type="date" class="form-control" aria-describedby="date-of-birth" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Event Date<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input name="e_date" type="date" class="form-control" aria-describedby="date-of-birth" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Venue<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input name="e_venue" type="text" class="form-control" placeholder="Write event's vanue here" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Open For<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <select name="e_open_for" class="form-control" required>
                    <option value="" selected>Choose</option>
                    <option value="Participants">Participants</option>
                    <option value="Committee">Committee</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">URL (Typeform or Gform)<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input name="e_url" type="text" class="form-control" placeholder="Drop your Typeform/Gform's URL here" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Event Details<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <textarea name="e_details" rows="8" type="text" class="form-control" placeholder="Write details of the event here" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Picture 1<span style="color: red;">*</span></label>
                <div class="col-sm-9">
                  <input type="file" class="btn btn-primary" name="e_pic1" id="" required>
                </div>
              </div>
              <!--For pic2 & pic3 I'll make it require for now-->
              <div class="form-group row">
                <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                <div class="col-sm-9">
                  <input type="file" class="btn btn-primary" name="e_pic2" id="">
                </div>
              </div>
              <div class="form-group row">
                <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                <div class="col-sm-9">
                  <input type="file" class="btn btn-primary" name="e_pic3" id="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="text-right ">
            <a class="btn btn-danger btn-shadow" href="{{ route('table') }}">Cancel</a>
            <button type="submit" class="btn btn-success btn-shadow">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection
