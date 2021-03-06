<div class="nav-container">
<div class="nav-box">
    <ul class="nav-ul unstyled">
		<li><div class="nav-ul-title">{{$var->getDescriptions->name}}</div></li>
		<?php $countRow = 0; ?>
		@foreach($var->getChildren as $item)
		@if($countRow < 4)
		<li>
			<a href="#" class="megamenu_drop">{{$item->getDescriptions->name}}</a>
			<small>
			@if($item->getChildren)
				@foreach($item->getChildren as $child)
					{{$child->getDescriptions->name}} 
				@endforeach
			@endif
			</small>
			@if($item->getChildren)
			<div class="nav-dropdown">
				<div class="nav-shadow"></div>
				<div class="nav-dropdown-container">
					<div class="nav-dropdown-left">
						<div class="dummy-container">
							<h4>{{$item->getDescriptions->name}}</h4>
							<dl>
								@foreach($item->getChildren as $child)
									<dt><i class="fa fa-angle-right"></i><a href="{{URL::Base()}}/category/{{$child->getDescriptions->alias}}"> {{$child->getDescriptions->name}}</a></dt>
									<dd>
										<small>{{$child->getDescriptions->description}}</small>
											@if($child->getChildren)
											<div id="sub-category-enabler" onclick="subCategoryEnable(this)"><i class="fa fa-sort-down"></i> Alt kategoriler</div>
											<div class="sub-categories">
												<div class="page-header">
													<h4>{{$child->getDescriptions->name}}</h4><small><div id="sub-category-disabler" onclick="subCategoryDisable()"><i class="icon-mail-reply-all"></i> Üst Menü</div></small>
												</div>
												
												<ul class="nav-subs clearfix">
													@foreach($child->getChildren as $subchild)
													<li>
														<a href="{{URL::Base()}}/category/{{$subchild->getDescriptions->alias}}">{{$subchild->getDescriptions->name}}</a>
													</li>
													@endforeach
												</ul>
											</div>
											@endif
									</dd>
								@endforeach
							</dl>
						</div>
					</div>
					<div class="nav-dropdown-right">
						@if($item->getDescriptions->advert_effect)
						<div class="menu_img_effect">
						
						</div>
						@endif
						@if($item->getDescriptions->advert_img)
							@if($item->getDescriptions->advert_url)<a href="{{$item->getDescriptions->advert_url}}">@endif
							<img alt="{{$item->getDescriptions->name}}" src="http://www.beyazesyapazar.com/advert_beyaz.jpg" />
							@if($item->getDescriptions->advert_url)</a>@endif
						@endif
					</div>
				</div>
			</div>
			@endif
		@else
		<li>
			<a href="#" class="megamenu_drop"><i class="fa fa-plus-square"></i> Daha fazla sonuç...</a>
			<small>Bu reyonda daha çok raf var!</small>
			<div class="nav-dropdown">
				<div class="nav-shadow"></div>
				<div class="nav-dropdown-container">
					<div class="nav-dropdown-left">
						<div class="dummy-container">
							<h4>{{$var->getDescriptions->name}}</h4>
							<dl>
								@foreach($var->getChildren as $child)
									<dt><i class="fa fa-angle-right"></i><a href="{{URL::Base()}}/category/{{$child->getDescriptions->alias}}"> {{$child->getDescriptions->name}}</a></dt>
									<dd>
										<small>{{$child->getDescriptions->description}}</small>
											@if($child->getChildren)
											<div id="sub-category-enabler" onclick="subCategoryEnable(this)"><i class="fa fa-sort-down"></i> Alt kategoriler</div>
											<div class="sub-categories">
												<div class="page-header">
													<h4>{{$child->getDescriptions->name}}</h4><small><div id="sub-category-disabler" onclick="subCategoryDisable()"><i class="icon-mail-reply-all"></i> Üst Menü</div></small>
												</div>
												
												<ul class="nav-subs clearfix">
													@foreach($child->getChildren as $subchild)
													<li>
														<a href="{{URL::Base()}}/category/{{$subchild->getDescriptions->alias}}">{{$subchild->getDescriptions->name}}</a>
													</li>
													@endforeach
												</ul>
											</div>
											@endif
									</dd>
								@endforeach
							</dl>
						</div>
					</div>
					<div class="nav-dropdown-right">
						@if($item->getDescriptions->advert_effect)
						<div class="menu_img_effect">
						
						</div>
						@endif
						@if($item->getDescriptions->advert_img)
							@if($item->getDescriptions->advert_url)<a href="{{$item->getDescriptions->advert_url}}">@endif
							<img alt="{{$item->getDescriptions->name}}" src="http://www.beyazesyapazar.com/advert_beyaz.jpg" />
							@if($item->getDescriptions->advert_url)</a>@endif
						@endif
					</div>
				</div>
			</div>
		</li>
		<?php break; ?>
		@endif
		</li>
		<?php $countRow++; ?>
		@endforeach
    </ul>
</div>
</div>
