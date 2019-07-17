	<header class=" container-fluid bg-dark">
        <div class="container header">
            <a href="{{ url('/') }}">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div></a>

            <div class="hotline">
                <img src="images/hotline.png" alt="">
                <span>09123923923</span>
            </div>
        </div>
	</header>

	<nav class="nav-horizontal container-fluid">
		<div class="nav-horizontal-container container">
			<div class="nav-horizontal-content">
				<ul class="nav-ul-lv-1">
						<li><a href="{{ url('/') }}">Trang chủ</a></li><li>
							<a href="{{ url('/testosterone-luteinizing') }}">testosterone & lutenizing</i></a>
							<ul class="nav-ul-lv-2">
								<li><a href="#">Testosteron</a></li>
								<li><a href="#">Lutenizing</a></li>
							</ul>
                        </li>
                        <li>
							<a href="{{ url('/manduc') }}">Mãn dục nam</a>
							<ul class="nav-ul-lv-2">
								<li>
                                    <a href="#">Mãn dục nam là gì ?</a>
                                    <a href="#">Triệu chứng của mãn dục nam ?</a>
                                    <a href="#">nguyên tắc phục hồi mãn dục nam</a>
								</li>

							</ul>
                        </li>
                        <li><a href="{{ url('sexking') }}">sexxking</a></li>
                        <li><a href="{{ url('/tintuc') }}">tin tức</a>
                            <ul class="nav-ul-lv-2">
                                <li>
                                    <a href="#">tin tức</a>
                                    <a href="#">Triệu chứng của mãn dục nam </a>
                                    <a href="#">nguyên tắc phục hồi</a>
                                </li>

                            </ul></li>

                        <li><a href="{{ url('tienich') }}">tiện ích</a></li>
                        <li><a href="{{ url('lienhe') }}">liên hệ</a>
                            <ul class="nav-ul-lv-2">
                                <li>
                                    <a href="#">liên hệ</a>

                                </li>

                            </ul></li>

                        <li><a href="{{ url('muangay') }}">mua ngay</a></li>
                        <a id="search"><li><i class="fas fa-search"></i></li></a>
                        <div class="search-box"><input type="text" placeholder="search">
                            <a><i class="fas fa-search"></i></a>
                        </div>
                </ul>
				<div class="menu-mobile-button"><i class="fas fa-bars"></i></div>
			</div>
		</div>
    </nav>

	<script type="text/javascript" src="js/nav-horizontal.js"></script>

	<section class="menu-mobile">
		<div class="menu-mobile-bg"></div>
		<div class="menu-mobile-box">
			<div class="menu-mobile-info">

			</div>
			<div class="menu-mobile-content">
				<div class="menu-left">
					<div class="menu-left-title"><h3>Menu</h3></div>
					<div class="menu-left-content">

						<ul class="menu-left-ul-lv-1">
                        <li><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li><a href="{{ url('/testosterone-luteinizing') }}">Mãn dục nam</a></li>
                        <li><a href="{{ url('sexking') }}">Sexxking</a></li>
                        <li><a href="{{ url('/tintuc') }}">Tin Tức</a></li>
                        <li><a href="{{ url('tienich') }}">Tiện ích</a></li>
                        <li><a href="{{ url('/manduc') }}">Mãn dục nam</a></li>
                        <li><a href="{{ url('lienhe') }}">Liên hệ</a></li>
                        <li class="lienhe-led"><a href="{{ url('/muangay') }}">Mua ngay</a></li>
					</ul>

					</div> <!-- menu-left-content -->
				</div> <!-- menu-left -->

			</div>
        </div>
        <script type="text/javascript">
            var search = document.querySelector('.search-box');
            var searchtt = true ;
            document.getElementById("search").addEventListener("click",function(){
                if( searchtt === true ){
                    search.classList.add('search-box2');
                    search.classList.remove('search-box');
                    return searchtt = false;
                }
                else{
                    search.classList.add('search-box');
                    search.classList.remove('search-box2');
                    return searchtt = true;
                }
            });
        </script>
        <script type="text/javascript" src="js/menu-left-js.js"></script>
		<script type="text/javascript" src="js/menu-mobile.js"></script>
	</section>

