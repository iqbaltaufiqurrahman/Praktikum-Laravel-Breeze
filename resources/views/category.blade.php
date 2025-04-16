@extends('layout')
@section('title', 'Categories')
@section('content-title', 'Categories')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-6 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href=""><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="head">No.</th>
                                    <th class="head">Category</th>
                                    <th class="head">Action</th>
                                </tr>
                            </thead>
                            @forelse($categories as $kategori)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$kategori->name}}</td>
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