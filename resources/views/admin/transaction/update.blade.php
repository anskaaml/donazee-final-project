@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Ubah Transaksi</h1>
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
            <label for="title">Nominal Dana</label>
            <input type="text" class="form-control" name="amount" value="{{ $item->amount }}">
        </div>
        <div class="form-group">
            <label for="funraiser_name">Status Transaksi</label>
            <input type="text" class="form-control" name="transaction_status" value="{{ $item->transaction_status }}">
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection