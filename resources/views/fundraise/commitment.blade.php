@extends('layout.header-footer')

@section('title')
	Komitmen 
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
                <div class="row-card" style="display:flex;align-items:center; justify-content:center; ">
						<div class="card-campaign" style="width:30rem;">
							<div class="product-name-w3l">
								<div class="w3l-pricehkj">
								  	<form action="{{ route('commitment', $item->id) }}" method="get" enctype="multipart/form-data">
                                    @csrf
										<h4>Dengan ini kami akan memastikan bahwa data penggalangan dana asli kebenarannya dan
											diterima oleh penerima, baik melalui verifikasi data serta monitoring dana ke penerima</h4>

										<div class="embed-responsive embed-responsive-16by9">
								   			<img class="card-img embed-responsive-item" src="{{ asset('images/commitment.png') }}">  
										</div>
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