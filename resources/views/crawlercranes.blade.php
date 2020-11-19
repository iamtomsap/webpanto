@extends('layout/main') 
    
@section('title','Crawler Cranes')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-10">
                <h1 class="mt-3" >Crawler Cranes</h1>
                <table class="table">
                    @foreach( $products as $prod)
                    <tr>
                        <td rowspan="3">
                            <img src="/{{ $prod->product_image }}" height="175" width="175" class="img-thumbnail">
                        </td>
                        <td><strong>No</strong></td>
                        <td>{{ $prod->product_sn }}</td>
                        <td><strong>Model</strong></td>
                        <td>{{ $prod->product_name }}</td>
                        <td rowspan="3"  style="text-align: center; vertical-align: middle;">
                            <a href="detailProduct/{{ $prod->id }}">
                                <img src="/images/details-button.png" width="155" height="55"/>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Year</strong></td>
                        <td>{{ $prod->product_year }}</td>
                        <td><strong>Spec</strong></td>
                        <td>{{ $prod->product_spec }}</td>
                    </tr>
                    <tr>
                        <td><strong>Brand</strong></td>
                        <td>{{ $prod->product_brand }}</td>
                        <td><strong>Hr</strong></td>
                        <td>{{ $prod->product_hm }}</td>
                    </tr>
                    @endforeach
                    
                </table>
          </div>
      </div>
  </div>
@endsection