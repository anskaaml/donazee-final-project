@extends('layout.header-footer')

@section('title')
	Upload Gambar / Foto
@endsection

@section('content')
<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Upload Foto<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
                <div class="row-card" style="display:flex;align-items:center; justify-content:center;">
						<div class="card-campaign" style="width:40rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj">
								  		<form action="{{ route('image-upload.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
									<h4>Pilih salah satu gambar atau foto (JPG / JPEG / PNG)</h4>
                                        <input type="file" id="image" name="image" style="margin:50px 0px 50px 0px;">
                                        <div class="snipcart-details">
                                    	    <input type="submit" name="submit" value="Lanjut" class="button" style="height:50px;" />
									</form>
                                        </div>
							</div>
						</div>
					</div>
			</div>

@endsection