@extends('layout')
@section('title', 'Edit Category Data')
@section('content-title', 'Edit Category')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $categories->id)}}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="text-dark">Edit Category Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $categories->name }}" autocomplete="off">
                            </div>

                            <!-- error message -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!--Button Save & Reset-->
                            <div class="row pt-2">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                                </div>
                                <div class="col">
                                    <button type="reset" class="btn btn-warning btn-block">RESET</button>
                                </div>
                            </div>

                        </form>
                    </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!--Table End-->
    </div>    
</div>
@endsection