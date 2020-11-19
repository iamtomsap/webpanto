@extends('layout/main') 
    
@section('title','Crawler Cranes')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-10">
                <h1 class="mt-3" >{{ $product->product_type }}</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Year</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Spec</th>
                        <th scope="col">HM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->product_sn }}</td>
                            <td>{{ $product->product_year }}</td>
                            <td>{{ $product->product_brand }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_spec }}</td>
                            <td>{{ number_format($product->product_hm,0) }}</td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    $images = DB::table('product_image')->where('product_id',$product->id)->get(); 

                    foreach($images as $img){?>
                        <!-- Button trigger modal -->
                        <a onMouseOver="this.style.cursor='pointer'" data-toggle="modal" data-target="#exampleModal">
                            <img src="/{{ $img->url }}" height="175" width="175" class="img-thumbnail">&nbsp;
                       </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="widht:500px;">
                                    <img src="/{{ $img->url }}" width="750px">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        </div>
                       <!-- <a onMouseOver="this.style.cursor='pointer'" data-toggle="modal" data-target="#myModal">
                            <img src="/{{ $img->url }}" height="175" width="175" class="img-thumbnail">&nbsp;
                       </a>

                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="/{{ $img->url }}" height="175" width="175" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <?php }
                ?>
                
                <br/><br/>
                <?php
                    if($product->product_type=="All Terrain Crane"){
                        echo "<a class='btn btn-dark' role='button' href='/allterraincranes'>Back</a>";
                    }elseif($product->product_type=="Crawler Crane"){
                        echo "<a class='btn btn-dark' role='button' href='/crawlercranes'>Back</a>";
                    }elseif($product->product_type=="Rough Terrain Crane"){
                        echo "<a class='btn btn-dark' role='button' href='/roughterraincranes'>Back</a>";
                    }elseif($product->product_type=="Truck Crane"){
                        echo "<a class='btn btn-dark' role='button' href='/truccranes'>Back</a>";
                    }
                ?>
                
          </div>
      </div>
  </div>
@endsection