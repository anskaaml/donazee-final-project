@extends('layout.header-footer')

@section('title')
	Detail Donasi
@endsection

@section('content')
<script src="{{ asset('js/textarea.js') }}"></script>
<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Form Penggalangan Dana<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
			<div class="w3l-specilamk">
                <div class="row-card" style="display:flex;align-items:center; justify-content:center;">
						<div class="card-campaign" style="width:50rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj">
                            		<form action="{{ route('fundraise-store') }}" method="post" style="padding: 20px 20px 20px 20px;" >
                                    @csrf
                                    <!-- <h4>Kategori Donasi</h4>
                                        <div class="select-city">
			                                <select class="list_of_cities" style="margin:10px 0px 20px 0px;">
					                            <option selected style="display:none;color:#eee;">Pilih Kategori</option>
                                                    <option>Pendidikan</option>
                                                    <option>Lingkungan</option>
                                                    <option>Kegiatan Sosial</option>
                                                    <option>Bencana Alam</option>
                                                    <option>Balita dan Anak Sakit</option>
                                                    <option>Medis dan Kesehatan</option>
                                                    <option>Peduli Hewan</option>
                                                    <option>Rumah Ibadah</option>
                                                    <option>Difabel</option>
                                                    <option>Zakat</option>
                                                    <option>Panti Asuhan</option>
                                                    <option>Kemanusiaan</option>
                                                    <option>Lainnya</option>
                                            </select>
                                        </div>    -->
                                    <h4>Judul</h4>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}" style="margin:10px 0px 20px 0px;" >

                                    <h4>Nama Penggalang</h4>
                                        <input type="text" id="fundraiser_name" name="fundraiser_name" value="{{ old('fundraiser_name') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Target Dana (Rp)</h4>
                                        <input type="number" id="target" name="target" value="{{ old('target') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Batas Waktu</h4>
                                        <input type="date" id="deadline" name="deadline" value="{{ old('target') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Tujuan Penggalangan Dana</h4>    
                                        <input type="text" id="purpose" name="purpose" value="{{ old('purpose') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Penerima Penggalangan Dana</h4>  
                                        <input type="text" id="receiver" name="receiver" value="{{ old('receiver') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Nama Organisasi / Yayasan / Komunitas Penggalang / Lainnya</h4>  
                                        <input type="text" id="organization_name" name="organization_name" value="{{ old('organization_name') }}" style="margin:10px 0px 20px 0px;">

                                    <h4>Deskripsi Penggalangan Dana</h4>      
                                        <textarea id="description" name="description" rows="10" style="margin:10px 0px 50px 0px;"></textarea> 
                                        
                                        <div class="snipcart-details">
                                            <input type="submit" name="submit" value="Lanjut" class="button" style="height:50px;" />
									</form>
                                        </div>
							</div>
						</div>
					</div>
			</div>
@endsection