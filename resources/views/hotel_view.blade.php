@extends('layouts.new_layout')

@section('content')
<div class="container" style="padding-top: 150px;padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hotel Information</div>

                <div class="card-body">
                   <form action="save_hotel_info" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name">
                        
                      </div>
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Location">
                      </div>
                     
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
