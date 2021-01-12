@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Ubah Campaign Donasi</h1>
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
        <form action="{{ route('donation-campaign.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" value="{{ $item->title }}">
        </div>
        <div class="form-group">
            <label for="funraiser_name">Nama Penggalang</label>
            <input type="text" class="form-control" name="fundraiser_name" value="{{ $item->fundraiser_name }}">
        </div>
        <div class="form-group">
            <label for="target">Target Dana</label>
            <input type="number" class="form-control" name="target" value="{{ $item->target }}">
        </div>
        <div class="form-group">
            <label for="deadline">Batas Waktu</label>
            <input type="date" class="form-control" name="deadline" value="{{ $item->deadline }}">
        </div>
        <div class="form-group">
            <label for="purpose">Tujuan</label>
            <input type="text" class="form-control" name="purpose" value="{{ $item->purpose }}">
        </div>
        <div class="form-group">
            <label for="receiver">Ditujukan Untuk (Pribadi / Keluarga / Organisasi / Yayasan / Komunitas)</label>
            <input type="text" class="form-control" name="receiver" value="{{ $item->receiver }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="d-block w-100 form-control" name="description" rows="10">{{ $item->description }}</textarea> 
        </div>
        <div class="form-group">
            <label for="organization_name">Nama Organisasi / Yayasan / Komunitas Penggalang</label>
            <input type="text" class="form-control" name="organization_name" value="{{ $item->organization_name }}">
        </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection