@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Edit Produce</div>
                <div class="card-body">
                   <form action="{{route('product.update',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="">Product Name</label>
                        <input type="text" name="namaproduct" value="{{ $product->namaproduct}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Price</label>
                        <input type="text" name="harga" value="{{ $product->harga}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="">Qty</label>
                        <input type="text" name="qty" value="{{ $product->qty}}" class="form-control">
                    </div>
                    <div class="card-footer">
                       <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
   </div>

@endsection