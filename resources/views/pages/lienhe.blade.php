@extends('master-layout')
@section('content')
<div class="main">
    <div class="row">
        <div class="col-xs-12 col-md-9 cont-left">
            <div class="box_w">
                <p><span>Trang chủ</span><i class="fas fa-chevron-right"></i> <span>Liên hệ</span></p>
                <h1 class="head-title">Liên hệ</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.353810539155!2d105.77561731424586!3d21.05852649213888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454d5b793271f%3A0x26c5c91013ad48b!2zTmfDtSA0MyBD4buVIE5odeG6vywgQ-G7lSBOaHXhur8sIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1562919467609!5m2!1svi!2s"
                    width="100%" height="320px" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="box_contact">
                    <p>
                        <p><i class="fas fa-home"></i>: 43 Phạm Văn Đồng, Cổ Nhuế, Hà Nội </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>: 0123.456.789 </p>
                        <p><i class="fas fa-fax"></i> : 0123.456.789 </p>
                        <p><i class="far fa-envelope"></i>: contact@talentwin.co
                        </p>
                    </p>

                </div>
            </div>
            <div class="box_w">
                <h1 class="head-title">Ý kiến bạn đọc</h1>
                <form class="form_contact">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" id="name" placeholder="Họ và tên của bạn">
                            <input type="text" id="phone" placeholder="Điện thoại liên hệ">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="address" placeholder="Địa chỉ liên hệ">
                            <input type="text" id="mail" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="title" id="title" placeholder="Tiêu đề">
                            <textarea name="content" id="content" placeholder="Nội dung"></textarea>
                            <input type="submit" id="btnSubmit" name="btnSubmit" value="Gửi">
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-3 cont-right">
            <div>
                <img src="images/baner-right.jpg" alt="">
            </div>
            <div class="lienhe">
                <span>Sexxking - chủ động tư vấn sức khỏe</span>
                <form>
                    <div class="form-group">
                        <label for="ip1">Họ và Tên </label>
                        <input type="email" class="form-control" id="ip1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="sl">GiớiTính</label>
                        <select class="form-control" id="sl">
                            <option>Nam</option>
                            <option>Nữ</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sl">Năm sinh</label>
                        <select class="form-control" id="sl">
                            <option>1950</option>
                            <option>1951</option>
                            <option>1952</option>
                            <option>1954</option>
                            <option>1955</option>
                        </select>
                    </div>
                    <button type="submit" class="btn bg-dark text-white mx-2">Đăng ký ngay</button>

                </form>

            </div>

            <iframe width="100%" height="250px"  src="https://www.youtube.com/embed/XiyDT0SRYqA" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
    </div>
</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
@endsection
