@extends('layouts.new_layout')

@section('content')
<div class="container" style="padding-top: 150px;padding-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Packages!!!</div>

                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tour Place</th>
      <th scope="col">Tour Time</th>
      <th scope="col">Hotel name</th>
      <th scope="col">Apartment No</th>
      <th scope="col">Capacity</th>
      <th scope="col">Transport</th>
      <th scope="col">Fare</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $c=1; ?>
    @foreach($datas as $d)

    <tr>
      <td scope="row">{{$c++}}</td>
      <td>{{$d->journey_place}}</td>
      <td>{{$d->journey_time}}</td>
      <td>{{$d->name}}</td>
      <td>{{$d->apartment_no}}</td>
      <td>{{$d->capacity}}</td>
      <td>{{$d->transport}}</td>
      <td>{{$d->fare}}</td>
      <td><a href="save_subscription/{{Auth::user()->id}}/{{$d->id}}">BUY</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
