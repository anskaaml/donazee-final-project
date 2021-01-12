@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Campaign Donasi</h1>
<p class="mb-4"></p>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('donation-campaign.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="funraiser_name">Nama Penggalang</label>
            <input type="text" class="form-control" name="fundraiser_name" value="{{ old('fundraiser_name') }}">
        </div>
        <div class="form-group">
            <label for="target">Target Dana</label>
            <input type="number" class="form-control" name="target" value="{{ old('target') }}">
        </div>
        <div class="form-group">
            <label for="deadline">Batas Waktu</label>
            <input type="date" class="form-control" name="deadline" value="{{ old('deadline') }}">
        </div>
        <div class="form-group">
            <label for="purpose">Tujuan</label>
            <input type="text" class="form-control" name="purpose" value="{{ old('purpose') }}">
        </div>
        <div class="form-group">
            <label for="receiver">Ditujukan Untuk (Pribadi / Keluarga / Organisasi / Yayasan / Komunitas)</label>
            <input type="text" class="form-control" name="receiver" value="{{ old('receiver') }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="d-block w-100 form-control" name="description" rows="10">{{ old('description') }}</textarea> 
        </div>
        <div class="form-group">
            <label for="organization_name">Nama Organisasi / Yayasan / Komunitas Penggalang</label>
            <input type="text" class="form-control" name="organization_name" value="{{ old('organization_name') }}">
        </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection