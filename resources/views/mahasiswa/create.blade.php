@extends('layout.formtamplate')

@section('content')
<!-- START FORM -->
<form action='{{ url('mahasiswa') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nim' value="{{Session::get('nim')}}" id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' value="{{Session::get('jurusan')}}" id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <a class="col-sm-1 text-center pointer" style="align-self: center" href="{{url('mahasiswa')}}">Kembali</a>
            <button type="submit" class="btn btn-primary col-sm-1 mt-2" name="submit">SIMPAN</button>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
