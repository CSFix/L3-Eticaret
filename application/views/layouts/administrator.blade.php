<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KarelGroup Yönetim Masası</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{URL::base()}}/assetsAdmin/infinite/css/basic.css" rel="stylesheet">
	<link href="{{URL::base()}}/assetsAdmin/infinite/css/dropzone.css" rel="stylesheet">
	<link href="{{URL::base()}}/assetsAdmin/infinite/css/bootstrap.css" rel="stylesheet">
    <link href="{{URL::base()}}/assetsAdmin/infinite/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="{{URL::base()}}/assetsAdmin/infinite/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{URL::base()}}/assetsAdmin/infinite/css/main.css" rel="stylesheet">
	<link href="{{URL::base()}}/assetsAdmin/infinite/css/select2.css" rel="stylesheet">
  <link href="{{URL::base()}}/assetsAdmin/infinite/css/simplemodal.css" rel="stylesheet">
	<link href="{{URL::base()}}/assetsAdmin/infinite/css/select2-bootstrap.css" rel="stylesheet">
	
   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/jquery-1.8.3.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/ui/jquery-ui-1.9.2.custom.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/uniform/jquery.uniform.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flot/excanvas.min.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/simple-modal.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flot/jquery.flot.js"></script>    
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flot/jquery.flot.pie.min.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flot/jquery.flot.resize.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flot/jquery.flot.orderBars.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/sparkline/jquery.sparkline.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/full-calendar/fullcalendar.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/mouse-wheel/jquery.mousewheel.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/file-tree/jqueryFileTree.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/cleditor/jquery.cleditor.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/jquery-splitter/splitter.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/cookie/jquery.cookie.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/masonry/jquery.masonry.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/masked/jquery.maskedinput.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/powertip/jquery.powertip.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/range-picker/daterangepicker.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/range-picker/date.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/fancybox/jquery.fancybox.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/flexslider/jquery.flexslider.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/tags-input/jquery.tagsinput.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/form-validate/jquery.validate.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/scrollbar/jquery.mCustomScrollbar.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/debounced/debounced.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/ibutton/jquery.ibutton.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/password-meter/password_strength.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/gritter/jquery.gritter.min.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/bootstrap-wizards/jquery.bootstrap.wizard.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/rating/jquery.rating.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/bootstrap.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/chosen/chosen.jquery.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/main.js"></script>
    <script src="{{URL::base()}}/assetsAdmin/infinite/js/dashboard.js"></script>
	<script src="{{URL::base()}}/assetsAdmin/infinite/js/select2.js"></script>
	<script src="{{URL::base()}}/assetsAdmin/infinite/js/jquery-barcode.min.js"></script>
	<script src="{{URL::base()}}/assetsAdmin/infinite/js/list.js"></script>

	<script src="{{URL::base()}}/assetsAdmin/infinite/js/dropzone.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link href="css/ie.css" rel="stylesheet">
    <![endif]-->
	<link rel="shortcut icon" href="ico/favicon.png">

    <script>
      //* hide all elements & show preloader
      document.documentElement.className += 'loader';
    </script>
  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="{{URL::base()}}/assetsAdmin/infinite/img/logoImage.png" alt=""></a>

      <span id="mobileNav"><img src="{{URL::base()}}/assetsAdmin/infinite/img/mobile-icon.png" alt=""></span>
      <span id="phoneNav"><img src="{{URL::base()}}/assetsAdmin/infinite/img/mobile-icon.png" alt=""></span>
      
      <div class="phone-menu">
        <ul>
          <li class="active"><a href="index.html"><span></span> Dashboard</a></li>
          <li><a href="#"><span></span> Ürün Yönetimi <div class="subchild-arrow"></div></a>
            <ul>
              <li><a href="{{URL::base()}}/admin/product/new"><span></span> Ürün Ekle</a></li>
              <li><a href="{{URL::base()}}/admin/product/edit"><span></span> Ürün Düzenle</a></li>
              <li><a href="{{URL::base()}}/admin/product/bulk"><span></span> Toplu Ürün İşlemleri</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <ul class="header-actions">
        <li><a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/messages.png" alt=""></a>
          <!-- Messages drop down -->
          <div class="dropdown">
            <div class="dropdown-inner">
              <div class="summary">
                <span><strong>Messages</strong> (6) emails and (2) PM</span>
              </div>
              <a href="#" class="dropdown-block clearfix">
                <img class="avatar" src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_01.png" alt="Profile image">
                <div class="result">
                  <span class="head"><strong>Jason Bourne</strong> <i>1 hour ago</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
              </a>
              <a href="#" class="dropdown-block clearfix">
                <img class="avatar" src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_02.png" alt="Profile image">
                <div class="result">
                  <span class="head"><strong>Adamova Sharapova</strong> <i>3 hour ago</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
              </a>
              <a href="#" class="dropdown-block clearfix">
                <img class="avatar" src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_03.png" alt="Profile image">
                <div class="result">
                  <span class="head"><strong>Angelina Jozek</strong> <i>1 day ago</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
              </a>
              <a href="#" class="dropdown-block clearfix">
                <img class="avatar" src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_04.png" alt="Profile image">
                <div class="result">
                  <span class="head"><strong>Maria Gomez</strong> <i>2 days ago</i></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
              </a>
              <div class="dropdown-footer" align="right">
                <a href="#" class="all-messages">View all messages</a>
              </div>
            </div>
          </div>
          <!-- Messages drop down -->
        </li>
        <li><a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/notification.png" alt=""></a>
          <!-- Notification drop down -->
          <div class="dropdown">
            <div class="dropdown-inner">
              <div class="summary">
                <span><strong>Notifications</strong> (2) alerts and (1) info</span>
              </div>
              <div class="dropdown-block clearfix">
                <div class="result">
                  <p>You are reaching your server diskspace. Please make sure you arrange more diskspace for your security...</p>
                </div>
              </div>
              <div class="dropdown-block clearfix">
                <div class="result">
                  <p>Scheduled system back-up on 02 February 2013 at 00:00...</p>
                </div>
              </div>
              <div class="dropdown-block clearfix">
                <img class="avatar" src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_04.png" alt="Profile image">
                <div class="result">
                  <span class="head"><strong>Maria Gomez</strong> <i>2 days ago</i></span>
                  <p>has updated her profile...</p>
                </div>
              </div>
              <div class="dropdown-footer" align="right">
                <a href="#" class="all-messages">View all notifications</a>
              </div>
            </div>
          </div>
          <!-- Notification drop down -->
        </li>
        <li><a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/settings.png" alt=""></a>
          <!-- Settings drop down -->
          <div class="dropdown">
            <div class="dropdown-inner">
              <div class="summary">
                <strong>Settings</strong> for your site</span>
              </div>
              <a href="#" class="dropdown-block clearfix">
                <span class="head"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/cog.png" alt=""> Change site settings</span>
              </a>
              <a href="#" class="dropdown-block dropdown-block clearfix">
                <span class="head"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/box1.png" alt=""> Plugins</span>
              </a>
              <a href="#" class="dropdown-block clearfix">
                <span class="head"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/grid.png" alt=""> Change theme</span>
              </a>
            </div>
          </div>
          <!-- Settings drop down -->
        </li>
        <li><a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/out.png" alt=""></a></li>
      </ul> 
    </header>

    <div class="mainNavigation">
      <div class="innerNavigation">
        <div class="profile clearfix">
          <a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/avatar_02.png" alt="Profile image"></a>
          <div class="profile-options">
            <div class="basic">
              <div class="info clearfix">
                <span class="name">KarelGroup Yönetim</span>
              </div>
              <div class="search">
                <div class="field">
                  <input type="text" class="span12" placeholder="Arama...">
                  <a href="#" class="button-turquoise"><img src="{{URL::base()}}/assetsAdmin/infinite/img/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
            <div class="user-configuration" align="center">
              <a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/messages.png" alt=""></a>
              <a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/settings.png" alt=""></a>
              <a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/notification.png" alt=""></a>
              <a href="#"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/header/out.png" alt=""></a>
            </div>
          </div>
        </div> 
        <ul class="mainNav">
          <li class="active"><a href="index.html"><span><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/mainNav/dashboard.png"> Ana Sayfa</span></a></li>
          <li class="dropdown"><a href="#"><span><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/mainNav/forms.png"> Ürün Yönetimi</span></a>
            <ul>
              <li><a href="{{URL::base()}}/admin/product/new"><span></span> Ürün Ekleme</a></li>
              <li><a href="{{URL::base()}}/admin/product/edit"><span></span> Ürün Düzenleme</a></li>
              <li><a href="{{URL::base()}}/admin/product/bulk"><span></span> Toplu Ürün İşlemleri</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/mainNav/ui.png"> Kategori Yönetimi</span></a>
            <ul>
              <li><a href="{{URL::base()}}/admin/categories"><span></span> Genel Bakış</a></li>
              <li><a href="{{URL::base()}}/admin/categories/new"><span></span> Kategori Ekle</a></li>
              <li><a href="{{URL::base()}}/admin/categories/edit"><span></span> Kategori Düzenle</a></li>
              <li><a href="{{URL::base()}}/admin/categories/bulk"><span></span> Toplu Kategori İşlemleri</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{URL::base()}}/admin/virtualpos"><span><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/mainNav/ui.png"> Sanal Pos</span></a></li>
          <li><a href="{{URL::base()}}/admin/charts"><span><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/mainNav/chart.png"> Istatistikler</span></a></li>
          

          <div class="nav-widget" align="center">
            <div class="chart" id="sales-current"></div>
            <h4>$52.384 <span><a href="#">March 2013</a></span></h4>
          </div>

          <div class="nav-widget">
            <h5>Diskspace usage:</h5>
            <div class="progress diskspace progress-info thin progress-striped">
              <div class="bar"></div>
            </div>
            <?php
              $disk = new diskUsage;
              $usage = $disk->percentage_used;
            ?>
              <script>
              /// Animate progress bars in mainnavigation ///
              $('.diskspace .bar').animate({
                  'width': '<?php echo $usage ?>'
              }, 4000);</script>
            <h5>Monthly bandwidth:</h5>
            <div class="progress bandwidth progress-danger thin progress-striped">
              <div class="bar"></div>
            </div>
          </div>

          <div class="nav-widget" align="center">
            <div class="chart" id="sales-current2"></div>
            <h4>$352.384 <span><a href="#">April 2013</a></span></h4>
          </div>

          <div class="nav-widget" align="center">
            <a href="#" class="mainNav-button"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/24x24/cog.png" alt=""></a>
            <a href="#" class="mainNav-button"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/24x24/calendar.png" alt=""></a>
            <a href="#" class="mainNav-button"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/24x24/folder.png" alt=""></a>
            <a href="#" class="mainNav-button"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/24x24/plus.png" alt=""></a>
          </div>

          <div class="nav-widget">
            <div class="flexslider-nav">
              <ul class="slides">
                <li>
                  <div class="download-report">
                    <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                    <span>April 2013</span>
                    <a href="#">Download</a>
                  </div>
                </li>
                <li>
                  <div class="download-report">
                    <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/table-excel-icon.png" alt="">
                    <span>March 2013</span>
                    <a href="#">Download</a>
                  </div>
                </li>
                <li>
                  <div class="download-report">
                    <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                    <span>February 2013</span>
                    <a href="#">Download</a>
                  </div>
                </li>
                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
          </div>
        </ul>
        <div class="submenus">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>April 2013</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/table-excel-icon.png" alt="">
                  <span>March 2013</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                  <span>February 2013</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                  <span>January 2013</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/table-excel-icon.png" alt="">
                  <span>December 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>November 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>October 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                  <span>September 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>August 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/table-excel-icon.png" alt="">
                  <span>October 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>September 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>August 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>October 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/table-excel-icon.png" alt="">
                  <span>September 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                  <span>August 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>October 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/word.png" alt="">
                  <span>September 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <li>
                <div class="download-report">
                  <img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/icon_PDF.png" alt="">
                  <span>August 2012</span>
                  <a href="#">Download</a>
                </div>
              </li>
              <!-- items mirrored twice, total of 12 -->
            </ul>
          </div>

          <div id="quick-report" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item">
                <div class="status-widget clearfix">
                  <div class="status">
                    <div class="chart" id="sales"></div>
                    <span class="total">$52.452</span>
                    <span class="month">April 2013</span>
                  </div>
                  <div class="status">
                    <div class="chart" id="sales2"></div>
                    <span class="total">$72.336</span>
                    <span class="month">March 2013</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="status-widget clearfix">
                  <div class="status">
                    <div class="chart" id="sales3"></div>
                    <span class="total">$22.658</span>
                    <span class="month">February 2013</span>
                  </div>
                  <div class="status">
                    <div class="chart" id="sales4"></div>
                    <span class="total">$38.171</span>
                    <span class="month">January 2013</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel nav -->
            <ol class="carousel-indicators">
              <li data-target="#quick-report" data-slide-to="0" class="active"></li>
              <li data-target="#quick-report" data-slide-to="1"></li>
            </ol>
          </div>

          <div class="divider"><span><i></i></span></div>

          <div class="widget-holder">
            <input name="tags" id="tags" value="admin, responsive, mobile, tablet, bootstrap, modern, fresh, gallery grid, charts, ui design, sidebar" />
          </div>

          <div class="divider"><span><i></i></span></div>

          <div class="space" align="center">
            <div class="inline-circle">
              <div class="circle-stats" align="center">
                <div class="chart2" data-percent="72"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/file.png" alt=""></div>
              </div>
              <h5>File count</h5>
            </div>

            <div class="inline-circle">
              <div class="circle-stats" align="center">
                <div class="chart3" data-percent="68"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/drawers.png" alt=""></div>
              </div>
              <h5>Space usage</h5>
            </div>
          </div>

          <div class="space" align="center" style="margin-bottom: -10px;">
            <div class="inline-circle">
              <div class="circle-stats" align="center">
                <div class="chart5" data-percent="43"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/cog2.png" alt=""></div>
              </div>
              <h5>RAM usage</h5>
            </div>

            <div class="inline-circle">
              <div class="circle-stats" align="center">
                <div class="chart4" data-percent="25"><img src="{{URL::base()}}/assetsAdmin/infinite/img/icon/14x14/light/folder2.png" alt=""></div>
              </div>
              <h5>CPU overload</h5>
            </div>
          </div>

          <div class="divider"><span><i></i></span></div>

          <div class="widget-holder">
            <div id="datePicker"></div>
          </div>

          <div class="divider"><span><i></i></span></div>

        </div>
      </div>
    </div>
    </div>
	<div class="content">
	@yield('content')
	</div>
  </body>
</html>