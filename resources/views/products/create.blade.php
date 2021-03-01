@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>
    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div>


    <div class="card card-primary offset-2 col-md-8">
                  <div class="card-header">
                    <h3 class="card-title">Enter Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{url('product')}}" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="pro_desc" placeholder="Enter Product Description">
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
                        <input type="number" class="form-control" name="Price" placeholder="Enter Price">
                      </div>
                      <div class="form-group">
                        <label>In Stock</label>
                        <input type="number" class="form-control" name="stock" placeholder="Enter In Stock">
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                  </form>
                </div>
@endsection
