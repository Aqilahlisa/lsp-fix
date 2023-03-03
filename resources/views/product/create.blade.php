@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Add Product</div>
                <div class="card-body">
                   <form action="{{ route('product.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="" class="">Product Name</label>
                        <input type="text" name="namaproduct" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Price</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Qty</label>
                        <input type="text" name="qty" class="form-control">
                    </div>
                    
                    <div class="card-footer">
                    <a href="{{route('product.index')}}" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg> Back</a>
                    <button class="btn btn-primary float-end"type="submit">Submit</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
   </div>

@endsection