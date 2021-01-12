@extends('layout.header-footer')

@section('title')
	Informasi Campaign Donasi
@endsection

@section('content')

<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Informasi Campaign Donasi<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
				<div class="row-card">
					<div class="column-card">
						<div class="card-campaign" style="margin-bottom:50px;">
							<div class="speioffer-agile">
									<div class="embed-responsive embed-responsive-16by9">
										@if($item->galleries->count())
										<img class="card-img embed-responsive-item" src="{{ Storage::url($item->galleries->first()->image) }}">
										@endif
									</div>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a>{{ $item->title }}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h3>Rp 53500 dari Rp {{ $item->target }}</h3>
                            		<div id="slider-range"></div>
									<p>{{ $item->organization_name }} &nbsp
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
										<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  										<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
										</svg> 
										Deadline {{ $item->deadline }}
									</p>
									
									<div class="snipcart-details">
										@auth
                                		<form action="{{ route('payment-process', $item->id) }}" method="post">
											@csrf
											<button class="button" name="submit" value="Donasi"type="submit">Donasi</button>
										</form>
										@endauth
									</div>

							</div>
						</div>
					</div>
			</div>
									<div class="column-card">
										<div class="card-info">
											<div class="product-name-w3l">
												<h4>
													<a>Penggalang Dana</a>
												</h4>
													
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp {{ $item->fundraiser_name }}</p>
											</div>
										</div>
										<div class="card-info" style="margin-top:50px; height:10rem;">
											<div class="product-name-w3l">
												<h4>
													<a>Dekripsi Donasi</a>
												</h4>
													<p>{{ $item->description }}</p>
											</div>
										</div>
										<div class="card-info" style="margin-top:50px; height:30rem;">
											<div class="product-name-w3l">
												<h4>
													<a>Donasi Yang Masuk</a>
												</h4>
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp M. Fahrizal donasi Rp 10.000</p>											
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp Salsa Amelia Dwi donasi Rp 25.000</p>
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp Anggita Hana donasi Rp 10.000</p>
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp Rudi Harsalim donasi Rp 100.000</p>
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp Purwanto donasi Rp 20.000</p>
													<p><img class="ava-user" src="{{ asset('images/user-anonim.png') }}" alt="ava user">&nbsp Riniati Fatma donasi Rp 15.000</p>
											</div>
										</div>
									</div>
				</div>
		</div>
    </div>
</div>

@endsection