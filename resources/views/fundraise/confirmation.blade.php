@extends('layout.header-footer')

@section('title')
	Konfirmasi Penggalangan Dana
@endsection

@section('content')
<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Penggalangan Dana Berhasil Dibuat<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
                <div class="row-card" style="display:flex;align-items:center; justify-content:center;">
						<div class="card-campaign" style="width:30rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj" style="text-align:center;">
								   	<div class="embed-responsive embed-responsive-4by3">
								   		<img class="card-img embed-responsive-item" src="{{ asset('images/confirm.png') }}">  
									</div>  
										<br>
										<div class="snipcart-details">
											<a href="{{ route('home') }}">
												<input type="submit" name="submit" value="Kembali ke Home" class="button" style="height:50px;" />
											</a>
										</div>                          
								</div>
							</div>
						</div>
				</div>
@endsection