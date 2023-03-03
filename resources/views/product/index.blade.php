@extends('layouts.admin')

@section('content')
<div class='container'>
    <div class='row'>
        <div class='card'>
            <div class="card-header">
                <a href="{{route('product.create')}}" class="btn btn-primary">Add</a>
            </div>
             <div class='card-body'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($product as $pr)
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $pr->namaproduct}}</td>
                                <td>{{ $pr->harga}}</td>
                                <td>{{ $pr->qty}}</td>
                                <td><a href="{{route('product.edit',$pr->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('product.destroy',$pr->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>&nbsp;</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Belum Ada Data</td>
                                    </tr>
                                @endforelse
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</div>
@endsection