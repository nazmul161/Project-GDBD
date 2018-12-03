@extends('layouts.new_layout')

@section('content')
<div class="container" style="padding-top: 150px;padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Package Information</div>

                <div class="card-body">
                   <form action="save_package_info" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Hotel-ID</label>
                        <select class="form-control" name="hotel_id">
                          <option>Select</option>
                          @foreach($datas as $d)
                             <option value="{{$d->id}}">{{$d->name}}</option>
                          @endforeach
                        </select>
                        
                        
                      </div>
                      <div class="form-group">
                        <label >Fare</label>
                        <input type="text" class="form-control" name="fare" placeholder="Fare">
                      </div>
                        <div class="form-group">
                        <label>Journey-Time</label>
                        <input type="text" class="form-control" name="journey_time"  placeholder="Enter Journey-Time">
                        
                      </div>
                        <div class="form-group">
                        <label>Journey-place</label>
                        <input type="text" class="form-control" name="journey_place"  placeholder="Enter Journey_place">
                        
                      </div>
                       <div class="form-group">
                        <label>Capacity</label>
                        <input type="text" class="form-control" name="capacity"  placeholder="Enter Capacity">
                        
                      </div>
                        <div class="form-group">
                        <label>Transport</label>
                        <input type="text" class="form-control" name="transport"  placeholder="Enter vehicle">
                        
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
