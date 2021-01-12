@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Detail Transaksi</h1>
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
       <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th>Campaign Donasi</th>
                <td>{{ $item->donation_campaign->title }}</td>
            </tr>
            <tr>
                <th>Nama Penggalang</th>
                <td>{{ $item->user->name }}</td>
            </tr>
            <tr>
                <th>Nominal Dana</th>
                <td>Rp {{ $item->fund_nominal }}</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>{{ $item->payment_method }}</td>
            </tr>
            <tr>
                <th>Status Transaksi</th>
                <td>{{ $item->transaction_status }}</td>
            </tr>
       </table>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection