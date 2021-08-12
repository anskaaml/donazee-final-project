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
				<div class="row-card" style="display:flex;align-items:center; justify-content:center;">
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
									<h3>Butuh Dana Rp {{ $item->target }}</h3>
                            		<div id="slider-range"></div>
									<p>{{ $item->organization_name }} &nbsp
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
										<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  										<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
										</svg> 
										Deadline {{ $item->deadline }}
									</p>
									
									<div class="snipcart-details">
                                		<form action="{{ route('transaction-process', $item->id) }}" method="get">
											<input type="submit" name="submit" value="Donasi Sekarang" class="button">
										</form>
									</div>
							</div>
						</div>
					</div>
					<div class="card-info" style="margin-top:50px; height:20rem;">
						<div class="product-name-w3l">
							<h4>
								<a>Bukti Transfer</a>
							</h4>
							<br>
								<div class="embed-responsive embed-responsive-16by9">
									@if($item->funds->count())
										<img class="card-img embed-responsive-item" data-enlargeable width="100" style="cursor: zoom-in" src="{{ Storage::url($item->funds->first()->image) }}">
									@endif
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
													<a>Penerima Dana</a>
												</h4>
													<p>{{ $item->receiver }}</p>
											</div>
										</div>
										<div class="card-info" style="margin-top:50px; height:29rem;">
											<div class="product-name-w3l">
												<h4>
													<a>Deskripsi Donasi</a>
												</h4>
													<p>{{ $item->description }}</p>
											</div>
										</div>
										
									</div>
				</div>
		</div>
    </div>
</div>

<!-- Image Fullscrean On Click --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
  var src = $(this).attr('src');
  var modal;

  function removeModal() {
    modal.remove();
    $('body').off('keyup.modal-close');
  }
  modal = $('<div>').css({
    background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
    backgroundSize: 'contain',
    width: '100%',
    height: '100%',
    position: 'fixed',
    zIndex: '10000',
    top: '0',
    left: '0',
    cursor: 'zoom-out'
  }).click(function() {
    removeModal();
  }).appendTo('body');
  //handling ESC
  $('body').on('keyup.modal-close', function(e) {
    if (e.key === 'Escape') {
      removeModal();
    }
  });
});
</script>

@endsection