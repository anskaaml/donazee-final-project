@extends('layout.header-footer')

@section('title')
	Upload Gambar / Foto
@endsection

@section('content')
<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Komitmen Penggalangan Dana<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
                <div class="row-card" style="display:flex;align-items:center; justify-content:center;">
						<div class="card-campaign" style="width:40rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj">
								  	<form action="{{ route('commitment', $item->id) }}" method="get" enctype="multipart/form-data">
                                    @csrf
									<h4>Dengan ini Care.In akan memastikan bahwa data penggalngan dana asli kebenarannya dan
										diterima oleh penerima, baik dengan memverifikasi, monitoring dana, hingga kunjungan langsung
										ke lapangan jika diperlukan
									</h4>
										<br>
                                        <div class="snipcart-details">
                                    	    <input type="submit" name="submit" value="Setuju" class="button" style="height:50px;" />
									</form>
                                        </div>
							</div>
						</div>
					</div>
			</div>

@endsection