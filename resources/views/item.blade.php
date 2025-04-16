@extends('layout')
@section('title', 'Items')
@section('content-title', 'Items')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href=""><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="head">No.</th>
                                    <th class="head">Name</th>
                                    <th class="head">Category</th>
                                    <th class="head">Price</th>
                                    <th class="head">Stock</th>
                                    <th class="head">Action</th>
                                </tr>
                            </thead>
                            @forelse($items as $barang)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$barang->name}}</td>
                                    <td>{{$barang->category->name}}</td>
                                    <td>Rp. {{$barang->price}}</td>
                                    <td>{{$barang->stock}}</td>
                                    <td>
                                        <a class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                            @endforelse
                        </table>
                    </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!--Table End-->
    </div>    
</div>
@endsection