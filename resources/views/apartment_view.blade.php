@extends('layouts.new_layout')

@section('content')
<div class="container" style="padding-top: 150px;padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Apartment Information</div>

                <div class="card-body">
                   <form action="save_apartment_info" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Hotel</label>
                        <select class="form-control" name="hotel_id">
                          <option>Select</option>
                          @foreach($datas as $d)
                             <option value="{{$d->id}}">{{$d->name}}</option>
                          @endforeach
                        </select>
                          
                      </div>
                      <div class="form-group">
                        <label >Apartment-no</label>
                        <input type="text" class="form-control" name="apartment_no" placeholder="Apartment_no">
                      </div>
                        <div class="form-group">
                        <label>Apartment-details</label>
                        <input type="text" class="form-control" name="apartment_details"  placeholder="Apartment_details">
                        
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
