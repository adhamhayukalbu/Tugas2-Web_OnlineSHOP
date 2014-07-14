           		<ul class="nav nav-tabs">
                  <li class="active"><a href="/Orderyuk/index.php?r=site/index">Home</a></li>
                  <li><a href="/Orderyuk/index.php?r=site/page&view=about">About</a></li>
                  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#Nike">Nike</a></li>
						<li><a href="#Adidas">Adidas</a></li>
						<li><a href="#Vans">Vans</a></li>
						<li><a href="#Converse">Converse</a></li>
					</ul>
				  </li>
                </ul>
    <div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/nike.png" alt="Me"  />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/vans.png" alt="Me"  />
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/adidas.png" alt="Me"  />
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/converse.png" alt="Me"  />
            </div>
        </div>
    </div> 
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
    <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRainGrow',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> 
   <h3 class="header" style="color:#51a351;font-size:20px;font-family:'Candara';">Apa yang ingin kamu pesan ?<span class="header-line"></span> </h3> 
    <div class="row-fluid">
        	<div class="span6">
            <div class="square-background square-colored clearfix">
               	<div class="square square-back pull-left">
                   <a href="#Nike"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/60px/nike_white.png" alt="" class=""></a>
          		</div>
                 <h4 style="font-size:20px;font-family:'Candara';"><b>NIKE</b></h4>
                 <p style="font-size:16px;font-family:'Candara';">Adalah sebuah perusahaan sepatu Amerika Serikat, baik casual maupun olahraga. Brand ini merupakan salah satu yang terbesar di dunia</p>
            </div>
                
            	<div class="square-background square-colored clearfix">
                    <div class="square square-back pull-left">
                      <a href="#Adidas"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/60px/Adidas_white.png" alt="" class=""></a>
          			</div>
                     <h4 style="font-size:20px;font-family:'Candara';"><b>Adidas</b></h4>
                     <p style="font-size:16px;font-family:'Candara';">Adalah sebuah perusahaan sepatu Jerman. Diambil dari nama Adolf (Adi) Dassler dimulai dari produksi sepatu pada 1920-an di Herzogenaurach</p>
                </div>
            </div>
			
            <div class="span6">
            <div class="square-background square-colored clearfix">
                    <div class="square square-back  pull-left">
                       <a href="#Vans"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/60px/vans_white.png" alt="" class=""></a>
					</div>
                     <h4 style="font-size:20px;font-family:'Candara';"><b>VANS</b></h4>
                     <p style="font-size:16px;font-family:'Candara';">Adalah sebuah perusahaan sepatu Amerika Serikat, baik casual maupun olahraga. Brand ini berkhuskan untuk olahraga skateboard</p>
            </div>
                
            <div class="square-background square-colored clearfix">
                    <div class="square square-back pull-left">
                       <a href="#Converse"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/60px/converse_grey.png" alt="" class=""></a>
					</div>
                     <h4 style="font-size:20px;font-family:'Candara';"><b>Converse</b></h4>
                     <p style="font-size:16px;font-family:'Candara';">Adalah sebuah perusahaan sepatu Amerika Serikat. Brand ini berbahan casual dan simple</p>
            </div> 
            </div>       
    </div>
<h3 class="header" style="color:#51a351;font-size:20px;font-family:'Candara';">Bagaimana pendapat mereka ?<span class="header-line"></span> </h3> 
<div style="margin-bottom:-3px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      	<div style="margin-left:1px;"class="row-fluid">
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/wp.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:18px;font-family:'Candara';"><b>WAHYU PAMUNGKAS <small>MAHASISWA</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Sepatu Nike nya pas bro ! Mantap Banget gan untuk mahasiswa seperti saya yang hobi futsal dan sepak bola."</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/adji.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>ADJI GENDUT <small>MAHASISWA</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Barang berkualitas bagus dan harga sangat terjangkau untuk kalangan mahasiswa seperti saya."</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/ucup.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>ALOYSIUS OKY <small>MAHASISWA</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Converse memang simple dan nyaman dipake.  Jadi tambah pede saya dan harga nya pun pas dikantong."</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/miqdar.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>MIQDAR AFIS <small>MAHASISWA</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Ukuran pas, order juga mudah. Pelayananya pun memuaskan, Soal Harga ? yang lain lebih mahal. KENKA SHOP is The Best"</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		</div>
    </div>
    <div class="item">
        <div style="margin-left:0px; margin-right:1px;"class="row-fluid">
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/anis.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>ANIS LESTARI <small>MAHASISWI</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Sepatunya bagus, ukuranya pas, warnanya menarik. Apik kabeh pokoke gitu lho dan Harganya Murah."</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/rani.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>RANI RAHAYUNI <small>MAHASISWI</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Sebenarnya semua sepatunya enggak tipeku semua, tapi karena harga nya terjangkau jadi ya dibeli aja deh :)"</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/handiko.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>HANDIKO R <small>MAHASISWA</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Converse memang simple dan nyaman dipake.  Jadi tambah pede saya dan harga nya pun pas dikantong."</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		<div class="span3">
		<div class="colored_banner ">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/friska.png" width="128" height="64" alt="Me" class="img-circle" />
			<h4 style="font-size:20px;font-family:'Candara';"><b>FRISKA ASYJ <small>MAHASISWI</small></b></h4>
            <p style="font-size:16px;font-family:'Candara';">"Ukuran pas, order juga mudah. Pelayananya pun memuaskan, Soal Harga ? yang lain lebih mahal. KENKA SHOP The Best"</p>
			<br/>
			<button type="button" class="btn btn-success navbar-btn">Read More</button>
		</div>
		</div>
		</div>
    </div>
  </div>

  <!-- Controls -->
  <a class="right carousel-control" href="#carousel-example-generic"  data-slide="next">
    <center><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/next.png"  alt="Me" class="img-circle" /></center>
  </a>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <center><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/prev.png" alt="Me" class="img-circle" /></center>
  </a>
</div>


