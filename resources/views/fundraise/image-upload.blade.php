@extends('layout.header-footer')

@section('title')
	Upload Gambar 
@endsection

@section('content')
<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Upload Gambar Campaign Donasi<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
                <div class="row-card" style="display:flex;align-items:center; justify-content:center;">
						<div class="card-campaign" style="width:30rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj">
								  	<form action="{{ route('image-upload', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>Pilih salah satu gambar (JPG / JPEG / PNG)</h4>
                                        <input type="file" id="image" name="image" style="margin-top:25px;" required>

										<div class="embed-responsive embed-responsive-4by3">
								   			<img class="card-img embed-responsive-item" src="{{ asset('images/image-upload.png') }}">  
										</div>

                                        <div class="snipcart-details">
                                    	    <input type="submit" name="submit" value="Lanjut" class="button" style="height:50px;" />
									</form>
                                        </div>
							</div>
						</div>
					</div>
			</div>

@endsection