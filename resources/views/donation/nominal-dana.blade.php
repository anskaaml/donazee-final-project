@extends('layout.header-footer')

@section('content')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="ads-grid">
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l" style="text-align:center;">Isi Nominal Dana<span class="heading-style"></span></h3>
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
												<h4>
													<a>Nominal Dana Lainnya</a>
												</h4>
											</div>
											<div class="w3l-pricehkj">
												<!-- sementara -->
                                            	<form action="/detail-pembayaran">
                                                	<input type="text" id="nominal" name="nominal" placeholder="Masukkan nominal dana">
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