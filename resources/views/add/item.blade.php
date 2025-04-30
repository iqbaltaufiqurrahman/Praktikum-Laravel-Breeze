@extends('layout')
@section('title', 'Add Item Data')
@section('content-title', 'Add a New Item')
@section('content')
<div class="parent md-12 bg-light" id="content-area">
    <div class="row">
        <!--Table-->
        <div class="col-md-8 mt-3 pb-5">
            <div class="card shadow">
                <div class="card-header"></div>
                    <div class="card-body">
                        <form action="{{ route('item.store') }}" method="POST">

                            @csrf

                            <div class="form-group">
                                <label class="text-dark">Item Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="..." autocomplete="off">
                            </div>

                            <!--Dropdown Select untuk Kategori-->
                            <div class="form-group pt-2">
                                <label class="text-dark">Kategori</label>
                                <select class="form-control" name="category_id" required>
                                    <option selected>Pilih Kategori</option>
                                    <!--Untuk menampilkan data nama kategori yang tersedia di tabel categories-->
                                    @foreach ($categories as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-dark">Item Price</label>
                                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old('price') }}" placeholder="..." autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="text-dark">Item Stock</label>
                                <input class="form-control @error('stock') is-invalid @enderror" type="text" name="stock" value="{{ old('stock') }}" placeholder="..." autocomplete="off">
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