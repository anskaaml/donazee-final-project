@extends('layout.header-footer')

@section('title')
	Metode Pembayaran
@endsection

@section('content')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Pilih Metode Pembayaran<span class="heading-style"></span></h3>
		</div>
        <div class="content-bottom-in">
			<div class="w3l-specilamk">
				<div class="row-card">
					<div class="column-card">
						<div class="card-campaign" style="margin-bottom:50px;">
							<div class="speioffer-agile">
									<div class="embed-responsive embed-responsive-16by9">
										<img class="card-img embed-responsive-item" src="images/campaign1.jpg">
									</div>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a>Bantuan Bencana Alam Tsunami</a>
								</h4>
								<div class="w3l-pricehkj">
									<h3>Rp 532.856.948 dari Rp 728.469.821</h3>
                            		<div id="slider-range"></div>
									<p>Yayasan Sosial Warga Kasih</p>
									
							</div>
						</div>
					</div>
			</div>
									<div class="column-card">
										<div class="card-info">
											<div class="product-name-w3l">
												<h4 style="padding-bottom:10px">
                                                    <a>Pembayaran Instan</a>
                                                </h4>
                                    
                                            </div>
                                            <div class="input-group">
    				                            <div id="radioBtn" class="btn-group">
    					                            <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="gopay">
                                                        <img src="images/gopay.jpg" style="width:100px; height:50px;">
                                                    </a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="dana">
                                                        <img src="images/dana.jpg" style="width:100px; height:50px;">
                                                    </a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="ovo">
                                                        <img src="images/ovo.png" style="width:100px; height:50px;">
                                                    </a>
    				                            </div>
                                                    <input type="hidden" name="pembayaran" id="gopay">
                                                    <input type="hidden" name="pembayaran" id="dana">
    				                                <input type="hidden" name="pembayaran" id="ovo">
    			                            </div>
										</div>
										<div class="card-info" style="margin-top:50px;">
											<div class="product-name-w3l">
												<h4>
													<a>Transfer Bank</a>
												</h4>
											</div>
											<div class="w3l-pricehkj">
                                            <div class="input-group" style="margin-bottom:20px;">
    				                            <div id="radioBtn" class="btn-group">
    					                            <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="bri">
                                                        <img src="images/bni.png" style="width:100px; height:50px;"></a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="bni">
                                                        <img src="images/bri.png" style="width:100px; height:50px;"></a>
                                                    <a class="btn btn-primary btn-sm notActive" data-toggle="pembayaran" data-title="mandiri">
                                                        <img src="images/mandiri.png" style="width:100px; height:50px;"></a>
    				                            </div>
                                                    <input type="hidden" name="pembayaran" id="bri">
                                                    <input type="hidden" name="pembayaran" id="bni">
                                                    <input type="hidden" name="pembayaran" id="mandiri">
											</div>
												<!-- sementara -->
                                            	<form action="/nominal-dana" method="get">
												    <div class="snipcart-details">
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