@extends('layout')
@section('title', 'Add Transaction Data')
@section('content-title', 'Add a New Transaction')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('transaction.store') }}" method="POST">

                            @csrf

                            <!--Dropdown Select untuk Kategori-->
                            <div class="form-group pt-2">
                                <label class="text-dark">User</label>
                                <select class="form-control" name="user_id" required>
                                    <option selected>Pilih User</option>
                                    <!--Untuk menampilkan data nama user yang tersedia di tabel users-->
                                    @foreach ($users as $pengguna)
                                        <option value="{{ $pengguna->id }}">{{ $pengguna->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-dark">Enter Date</label>
                                <input class="form-control @error('date') is-invalid @enderror" type="date"  name="date" value="{{ old('date') }}">
                            </div>

                            <div class="form-group">
                                <label class="text-dark">Transaction Total</label>
                                <input class="form-control @error('total') is-invalid @enderror" type="text" name="total" value="{{ old('total') }}" placeholder="..."  autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="text-dark">Paytotal</label>
                                <input class="form-control @error('paytotal') is-invalid @enderror" type="text" name="paytotal" value="{{ old('paytotal') }}" placeholder="..."  autocomplete="off">
                            </div>

                            <!--Button Save & Reset-->
                            <div class="row pt-2">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
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