@layout('layouts.default')

@section('content')
<div class="container">
    <div class="page-header">
    <h1>Alışverişi Tamamla <small>Sepet Detayı</small></h1>
    </div>
    <div class="row-fluid">
    	<div class="span12">
		    <div class="progress progress-success progress-striped">
		    	<div class="bar" style="width: 33.3%;"></div>
		    </div>
    	</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			@if($product)
			<table class="table table-bordered span12 big">
                <thead>
                <tr>
					<th style="width: 55%"><p class="text-left">Ürün Bilgisi</p></th>
					<th style="width: 10%"><p class="text-center">Adet</p></th>
					<th style="width: 15%"><p class="text-center">Fiyat (KDV Dahil)</p></th>
					<th style="width: 10%"><p class="text-center">İndirim</p></th>
					<th style="width: 10%"><p class="text-center">Kargo Bilgisi</p></th>
                </tr>
				</thead>
				<tbody>
				@foreach($product as $item)
				<?php 
				$images = getProductImages($item);
				$price = getItemPrice($item);
				?>
				<tr data-prod="{{$item->id}}">
					<td>
						<div class="media">
							<img class="media-object pull-left" src="<?php echo $images->main->tinym ?>">
							<div class="media-body" style="max-width:300px">
								<h4 class="media-heading"><?php echo $item->getDetail->name ?></h4>
								<?php echo $item->getDetail->variant ?>
							</div>
						</div>	
					</td>
					<td>
						<input class="input-mini" type="text" value="{{$cache[$item->id]['_qty']}}">
						<button class="btn btn-small btn-block btn-primary" type="button">UYGULA</button>
					</td>
					<td>
						{{$price->get_taxed}}
					</td>
					<td>
						@if($item->getDiscount)
							<p class="text-center"><i class="icon-long-arrow-down"></i> {{$price->totaldiscount}}</p>
						@else
							<p class="text-center muted">Yok</p>
						@endif
					</td>
					<td></td>
                </tr>
				@endforeach
				</tbody>
			</table>
			<table class="table table-bordered table-striped big">
			<thead>
				<tr>
					<th style="width: 30%"><p class="text-center">TOPLAM SİPARİŞ TUTARI</p></th>
					<th style="width: 25%"><p class="text-center">TOPLAM İNDİRİM</p></th>
					<th style="width: 25%"><p class="text-center">KULLANILAN KUPON İNDİRİMİ</p></th>
					<th style="width: 20%"><p class="text-center">TOPLAM TUTAR(KDV Dahil)</p></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php $_price = itemsTotal($cache); ?>
					<td><p class="big text-center text-error"><strong>{{$_price->price}}</strong></p></td>
					<td><p class="big text-center text-success"><strong>{{$_price->discount}}</strong></p></td>
					<td><p class="big text-center muted"><strong>0</strong></p></td></td>
					<td><p class="big text-center text-success"><strong>{{$_price->total}}</strong></p></td>
				</tr>
			</tbody>
			</table>
			@else
				<p>Alışveriş sepetinizde hiç ürün bulunmuyor!</p>
			@endif
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="pull-right" style="width:200px">
				<a href="/checkout/address" class="btn btn-large btn-block btn-success">SATIN AL!</a>
			</div>
		</div>
	</div>
</div>

@endsection