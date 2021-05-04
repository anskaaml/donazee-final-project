@extends('layout.header-footer')

@section('title')
	Detail Pembayaran
@endsection

@section('content')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<h3 class="tittle-w3l" style="text-align:center;">Detail Pembayaran<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
				<div class="row-card" style="display:flex;align-items:center; justify-content:center;">
					<div class="column-card">
						<div class="card-info">
							<div class="product-name-w3l" style="text-align:center;">
                                <h7>Silahkan transfer sesuai nominal dibawah ini</h7>
									<h1 style="padding:20px 0px 20px 0px;">
                                        Rp {{ $item->amount }}
                                    </h1>
                            </div>
						</div>
							<div class="card-info" style="margin-top:50px;">
								<div class="product-name-w3l" style="text-align:center;">
                                    <h7>Rekening A/N DonaZee - Surabaya</h7>
                                    	<h2 style="padding:20px 0px 20px 0px;">
                                            <img src="{{ asset('images/bni.png') }}" style="width:100px; height:50px;">
                                                686454737
                                        </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
    </div>
</div>

@endsection