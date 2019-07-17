

	@extends('master-layout')
	@section('content')
    <div class="main">
		<div class="slidehome owl-carousel owl-theme">
			<div class="item">
                <img src="images/banner4.png" alt="">
            </div>
            <div class="item">
                <img src="images/banner2.png" alt="">
            </div>
            {{-- <div class="item">
                <img src="images/banner1.png" alt="">
            </div> --}}
            {{-- <div class="item">? --}}
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-4 ">
				<div class="box tuvan">
						<div class="head-tuvan">
                                <img src="images/box1.png" alt="">
                                <a href="#">CHUYÊN GIA NAM HỌC</a>
                        </div>

					</h3>
					<div class="content">
						<p>
							<a href="#"> <img src="images/tuvan1.jpg"></a> <br>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
						</p>
					</div>
					<a href="#" class="detail"><b>CHI TIẾT</b></a>
					<div class="box-bottom"></div>
				</div>

			</div>
			<div class="col-xs-6 col-sm-4 ">
				<div class="box kiemtra">
						<div class="head-tuvan">
                                <img src="images/box2.png" alt="">
                                <a href="#">kiểm tra bản lĩnh phái mạnh</a>
                        </div>
					</h3>
					<div class="content">
						<p>
							<a href="#"> <img src="images/tuvan2.jpg"></a> <br>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
						</p>
					</div>
					<a href="#" class="detail"><b>CHI TIẾT</b></a>
					<div class="box-bottom"></div>
				</div>

			</div>
			<div class="col-xs-6 col-sm-4 ">
				<div class="box tintuc">
						<div class="head-tuvan">
                                <img src="images/box3.png" alt="">
                                <a href="#">CHUYÊN GIA NAM HỌC</a>
                        </div>
					</h3>
					<div class="content">
						<ul class="cont-tt">
							<li>
								<div class="row">
									<div class="left cont-img">
										<a href="#"><img src="images/tt1.jpg"></a>
									</div>
									<div class="left cont-ndung">
										<p><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page when </a> </p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="left cont-img">
										<a href="#"><img src="images/tt1.jpg"></a>
									</div>
									<div class="left cont-ndung">
										<p><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page when </a> </p>
									</div>
								</div>
							</li>
							<li class="last">
								<div class="row">
									<div class="left cont-img">
										<a href="#"><img src="images/tt1.jpg"></a>
									</div>
									<div class="left cont-ndung">
										<p><a href="#">It is a long established fact that a reader will be distracted by the readable content of a page when </a> </p>
									</div>
								</div>
							</li>

						</ul>

						</div>
					{{-- <a href="#" class="detail"><b>CHI TIẾT</b></a> --}}
					<div class="box-bottom"></div>
				</div>

			</div>

		</div>
	</div>
		<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
	</section>

	@endsection
