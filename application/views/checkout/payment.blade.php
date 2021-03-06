@layout('layouts.default')

@section('content')
<div class="container">
    <div class="page-header">
    <h1>Alışverişi Tamamla <small>Ödeme Ekranı!</small></h1>
    </div>
    <div class="row-fluid">
    	<div class="span12">
		    <div class="progress progress-success progress-striped">
		    	<div class="bar" style="width: 100%;"></div>
		    </div>
    	</div>
    </div>
	<div class="row-fluid">
		<div class="span9">
			<p class="lead">Ödeme Seçenekleri</p>
	     <form action="/checkout/payment/complete" method="POST" class="form-horizontal span8">
        <fieldset>
          <legend>Payment</legend>
       
          <div class="control-group">
            <label class="control-label">Kart Sahibinin Adı / Soyadı</label>
            <div class="controls">
              <input name="CCOwner" type="text" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name" required>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Kart Numarası</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input name="CC[]" type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" required>
                </div>
                <div class="span3">
                  <input name="CC[]" type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Second four digits" required>
                </div>
                <div class="span3">
                  <input name="CC[]" type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" required>
                </div>
                <div class="span3">
                  <input name="CC[]" type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" required>
                </div>
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Kart Son Kullanım Tarihi</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input name="Month" class="input-block-level" maxlength="2" placeholder="07" type="text" pattern="\d{2}">
                </div>
                <div class="span3">
                  <input name="Year" class="input-block-level" maxlength="2" placeholder="14" type="text" pattern="\d{2}">
                </div>
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card CVV</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span12">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" name="CCV" title="Three digits at back of your card" required>
                </div>
              </div>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="isThreeD"><b>3D Kullanmak istiyorum</b></label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span12">
                  <input type="checkbox" value="1" checked="" name="isThreeD">
                </div>
              </div>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Gönder</button>
          </div>
        </fieldset>
      </form>
			    <script>
		
			    </script>
		</div>
		<div class="span3">
			<div>
			    <blockquote>
			    	<strong>Teslimat Adresi</strong>
			    </blockquote>
				    <address>
				   		{{$Delivery->address}}<br>
				   		{{$Delivery->getTown->name}} / {{$Delivery->getCity->name}}<br>
				    </address>
			</div>
			<div>
			    <blockquote>
			    	<strong>Fatura Adresi</strong>
			    </blockquote>
				    <address>
				   		{{$Billing->address}}<br>
				   		{{$Billing->getTown->name}} / {{$Billing->getCity->name}}<br>
				    </address>
			</div>
		   <blockquote><strong>E-Posta Adresiniz</strong></blockquote>
    		<a href="mailto:#">{{$user->email}}</a>
		</div>
	</div>
</div>

@endsection