@extends('layout')
@section('title', 'Transaction History')
@section('content-title', 'Transaction Details')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-12 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href=""><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
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
                            @forelse($transaction_details as $histori)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$histori->transaction->id}}</td>
                                    <td>{{$histori->item->name}}</td>
                                    <td>{{$histori->qty}}</td>
                                    <td>{{"Rp. " . number_format($histori->subtotal,0)}}</td>
                                    <td>
                                        <a class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <div class="alert alert-danger">
                                    Data Transaction Details belum ada.
                                </div>
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