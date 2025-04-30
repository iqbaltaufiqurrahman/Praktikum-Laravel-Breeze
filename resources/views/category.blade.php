@extends('layout')
@section('title', 'Master Category')
@section('content-title', 'Categories')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3 pb-5">

            <!-- Alert -->
            @if (session('successAdd'))
                <div class="alert alert-success">
                    {{ session('successAdd') }}
                </div>
            @endif
            
            @if (session('successDel'))
                <div class="alert alert-warning">
                    {{ session('successDel') }}
                </div>
            @endif

            @if (session('successEdt'))
                <div class="alert alert-success">
                    {{ session('successEdt') }}
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header"><a href="{{ route('category.create') }}" class="btn btn-success mt-2 mb-2"><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
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
                                        <a href="{{ route('category.edit', $kategori->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>

                                        <form action="{{ route('category.destroy', $kategori->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <div class="alert alert-danger">
                                    Data Category belum ada.
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