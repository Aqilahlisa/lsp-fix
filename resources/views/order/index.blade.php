@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="card">
            <div class="card-header">
                <h2>Data Product</h2>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <select name="product_id" class="form-control">
                        <label for="">Data Product</label>
                        <option value="#">-Pilih Product</option>
                        @foreach($product as $item)
                            <option value="{{$item->product_id}}">{{$item->namaproduct}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Check Out</button>
                </form>
            </div>
        </div>
        &nbsp;&nbsp;
        <div class='card'>
            <div class="card-header">
            <h5 ckass='warning'>Printer Product</h5>
            </div>
             <div class='card-body'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Printer Name</th>
                            <th>Spesification</th>
                            <th>Price</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                </table>
            </div> 
        </div>
    </div>
</div>
@endsection