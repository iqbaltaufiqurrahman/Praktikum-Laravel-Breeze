@extends('layout')
@section('title', 'Transactions')
@section('content-title', 'Transactions')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-12 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href="{{ route('transaction.create') }}"><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="head">No.</th>
                                    <th class="head">Username</th>
                                    <th class="head">Date</th>
                                    <th class="head">Total</th>
                                    <th class="head">Paytotal</th>
                                    <th class="head">Action</th>
                                </tr>
                            </thead>
                            @forelse($transactions as $bayar)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$bayar->user->name}}</td>
                                    <td>{{$bayar->date}}</td>
                                    <td>{{"Rp. " . number_format($bayar->total,0)}}</td>
                                    <td>{{"Rp. " . number_format($bayar->paytotal,0)}}</td>
                                    <td>
                                        <a class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                        <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <div class="alert alert-danger">
                                    Data Transaction belum ada.
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