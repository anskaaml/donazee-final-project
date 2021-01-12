@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Campaign Donasi</h1>
        <a href="{{ route('donation-campaign.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-50"></i>Tambah Campaign Donasi
        </a>
</div>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Campaign Donasi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pencarian Data ..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
        <p class="mb-4"></p>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Nama Penggalang</th>
                        <th>Target</th>
                        <th>Batas Waktu</th>
                        <th>Tujuan</th>
                        <th>Penerima</th>
                        <th>Deskripsi</th>
                        <th>Asal Penggalang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if($items)
                    @foreach($items as $item)
                   <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->fundraiser_name }}</td>
                        <td>{{ $item->target }}</td>
                        <td>{{ $item->deadline }}</td>
                        <td>{{ $item->purpose }}</td>
                        <td>{{ $item->receiver }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->organization_name }}</td>
                        <td>
                            <a href="{{ route('donation-campaign.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('donation-campaign.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection