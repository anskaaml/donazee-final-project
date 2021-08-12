@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Ubah Bukti Transfer</h1>
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
        <form action="{{ route('fund.update', $item->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="donation_campaigns_id">Campaign Donasi</label>
            <select name="donation_campaigns_id" required class="form-control">
                        {{ $item->donation_campaigns_id }} 
                @foreach($donation_campaigns as $donation_campaign)
                    <option value="{{ $donation_campaign->id }}">
                        {{ $donation_campaign->title }}                    
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Upload Bukti Transfer</label>
            <input type="file" name="image">
        </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection