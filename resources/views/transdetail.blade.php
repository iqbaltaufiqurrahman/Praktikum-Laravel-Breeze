@extends('layout')
@section('title', 'Transaction Details')
@section('content-title', 'Transaction Details')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href=""><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="head">No.</th>
                                    <th class="head">Transaction ID</th>
                                    <th class="head">Item Name</th>
                                    <th class="head">Qty</th>
                                    <th class="head">Subtotal</th>
                                    <th class="head">Action</th>
                                </tr>
                            </thead>
                            @forelse($transdetails as $histori)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$histori->trans->id}}</td>
                                    <td>{{$histori->item->name}}</td>
                                    <td>{{$histori->qty}}</td>
                                    <td>Rp. {{$histori->subtotal}}</td>
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