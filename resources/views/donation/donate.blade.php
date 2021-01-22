@extends('layout.header-footer')

@section('content')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<h3 class="tittle-w3l" style="text-align:center;">Nominal Dana<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
				<div class="row-card">
					<div class="column-card">
						<div class="card-campaign" style="margin-bottom:50px;">
							<div class="speioffer-agile">
									<div class="embed-responsive embed-responsive-16by9">
										<img class="card-img embed-responsive-item" src="{{ Storage::url($item->galleries->first()->image) }}">
									</div>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a>{{ $item->title }}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h3>Rp 0 dari Rp {{ $item->target }}</h3>
                            		<div id="slider-range"></div>
									<p>{{ $item->organization_name }} &nbsp
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
										<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  										<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
										</svg> 
										Deadline {{ $item->deadline }}
									</p>
							</div>
						</div>
					</div>
				</div>
									<div class="column-card">
										<div class="card-info">
											<div class="product-name-w3l">
												<h4 style="padding-bottom:10px">
													<a>Silahkan Pilih Nominal Dana</a>
												</h4>
                                            </div>
                                            <div class="input-group">
    				                            <div id="radioBtn" class="btn-group">
    					                            <a class="btn btn-primary btn-sm active" data-toggle="nominal" data-title="10000">Rp 10.000</a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="nominal" data-title="20000">Rp 20.000</a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="nominal" data-title="50000">Rp 50.000</a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="nominal" data-title="100000">Rp 100.000</a>
    				                            </div>
    				                                <input type="hidden" name="10000" id="10000">
    			                            </div>
										</div>
										<div class="card-info" style="margin-top:50px; height:15rem;">
											<div class="product-name-w3l">
												<h4 style="padding-bottom:10px">
													<a>Nominal Dana Lainnya</a>
												</h4>
											<div class="w3l-pricehkj">
                                            	<form action="{{ route('transaction-donate', $item->id) }}" method="post">
												@csrf
                                    				<input type="number" id="amount" name="amount" min="10000" style="margin: 100px 0px 100px 0px; height: 50px;">
												<div class="snipcart-details" style="margin: 100px 0px 10px 0px;">
                                    				<input type="submit" name="submit" value="Lanjut Pembayaran" class="button" style="height:50px;" />
												</form>
											</div>
										</div>
									</div>
										</div>
									</div>
				</div>
		</div>
    </div>
</div>

<script>
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>

@endsection