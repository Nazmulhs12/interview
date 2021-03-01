@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
   


    <div class="card card-primary offset-2 col-md-8">
                  <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{url('product')}}" >
                    @csrf
                    @METHOD('put')
                    <div class="card-body">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{$product->title}}" placeholder="Enter Title">
                      </div>
                     <input type="hidden" class="form-control" name="id"  placeholder="Enter Title">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="pro_desc" value="{{$product->title}}"  placeholder="Enter Product Description">
                      </div>
                      <div class="form-group">
                        <label>Varient</label>
                        <div class="input-group">
                          <select class="form-control" name="color">
                              <option value="0">Red</option>
                              <option value="1">Green</option>   
                          </select>
                           <select class="form-control" name="size">
                              <option value="0">SM</option>
                              <option value="1">XL</option>
                              
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="Price" value="{{$product->Price}}" placeholder="Enter Price">
                      </div>
                      <div class="form-group">
                        <label>In Stock</label>
                        <input type="number" class="form-control" name="stock" value="{{$product->stock}}" placeholder="Enter In Stock">
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                  </form>
                </div>
@endsection
