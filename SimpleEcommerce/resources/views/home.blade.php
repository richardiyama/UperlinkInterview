@extends('layouts.dashboard')

@section('content')
 <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
           
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Image</th>
              <th>Approve</th>
              <th>Reject</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $prod)
            <tr>
              <td>{{$prod->product_name}}</td>
              <td>{{$prod->description}}</td>
              <td>{{$prod->price}}</td>
              <td>{{$prod->image_name}}</td>
              <td>{{$prod->approve}}</td>
              <td>{{$prod->reject}}</td>
              
            </tr>
           
          </tbody>
          @endforeach
                       
        </table>
      </div>
@endsection
