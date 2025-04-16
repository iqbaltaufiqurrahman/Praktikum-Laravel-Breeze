@extends('layout')
@section('title', 'Home')
@section('content-title', 'Home')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-12 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"><a class="btn btn-success mt-2 mb-2" href=""><i class="fas fa-plus"></i></a></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!--Table End-->
    </div>    
</div>
@endsection