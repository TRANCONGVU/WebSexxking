@extends('master-layout')
@section('content')
<div class="main">
    <div class="row">
        <div class="col-xs-12 col-md-9 cont-left">
                <p><span>Trang chủ</span><i class="fas fa-chevron-right"></i> <span>Đặt hàng</span></p>
                <h4 class="text-center">Vui lòng điền thông tin dưới đây</h4>
                <form>
                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Họ và Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                            </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="adres">Địa chỉ giao hàng </label>
                          <input type="text" class="form-control" id="adres" placeholder="">
                        </div>

                        {{--  <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>  --}}
                        <button type="submit" class="btn btn-primary">Đặt hàng</button>
                      </form>
                      <div class="hihi">
                            <span class="title">
                                Giao hàng
                            </span><br>
                            <span>Sau khi đặt hàng thành công, Bộ phận Chăm sóc Khách hàng của Sexxking sẽ liên hệ với Quý
                                khách
                                để xác nhận và gửi email/sms về thông tin đơn hàng trong thời gian sớm nhất.</span><br>
                            <span>Hiện tại Sexxking hợp tác với ViettelPost - đơn vị chuyển phát hàng đầu tại Việt Nam để
                                thực
                                hiện chuyển phát các sản phẩm tới Quý khách hàng</span><br>
                            <span>Sau khi xác nhận thành công, đơn hàng sẽ được giao đến Quý khách trong khoảng thời gian
                                sau
                                đây</span><br>
                            <table class="table my-4">
                                <thead>
                                    <th>Địa chỉ giao hàng</th>
                                    <th>Thời gian giao hàng</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Thành phố hà nội</th>
                                        <th>6 - 24 giờ</th>
                                    </tr>
                                    <tr>
                                        <th>Thành phố hồ chí minh</th>
                                        <th>6 - 24 giờ</th>
                                    </tr>
                                    <tr>
                                        <th>Tỉnh thành khác</th>
                                        <th>2 - 3 ngày</th>
                                    </tr>
                                </tbody>

                            </table>
                            <span style="font-style: italic;">*Lưu ý: thời gian giao hàng dự kiến ở trên chỉ áp dụng cho các
                                đơn
                                hàng trong nước.</span> <br>
                            <span>Tất cả các đơn hàng từ khắp cả nước sẽ được chia làm 2 khu vực và phí vận chuyển áp dụng
                                cho
                                tất cả các đơn hàng của Quý khách (trong đó, Sexxking đã hỗ trợ 50-70% chi phí giao hàng và
                                phí
                                thu tiền hộ):</span><br>
                            <span>
                                Khu vực 1: Thành phố Hồ Chí Minh và Hà Nội là 10.000đ/đơn hàng bất kỳ</span><br>
                            <span>Khu vực 2: Các tỉnh, thành phố còn lại trên toàn quốc là 20.000đ/đơn hàng bất kỳ
                            </span><br>
                            <span class="text-danger">Quý khách hàng lưu ý luôn luôn kiểm tra kĩ tình trạng sản phẩm sau khi
                                nhận được ngay tại thời
                                điểm nhận hàng và có sự chứng kiến của nhân viên giao hàng. Các vấn đề như bể vỡ, vỏ hộp
                                chai
                                thuốc bị rách nát hoặc seal đã bị mở, … Tất cả những sự cố này sẽ chỉ được đổi trả nếu do
                                lỗi từ
                                phía nhân viên của Sexxking và đơn vị vận chuyển ViettelPost.</span> <br>
                            <span>
                                Trong quá trình giao hàng có thể phát sinh những vấn đề ngoài ý muốn về phía Khách hàng
                                khiến
                                việc giao hàng bị chậm trễ. Sexxking sẽ linh động giải quyết cho Khách hàng trong từng
                                trường
                                hợp như sau:
                            </span><br>
                            <span>
                                - Khách hàng không cung cấp chính xác và đầy đủ địa chỉ giao hàng và số điện thoại liên
                                lạc.</span><br>
                            <span>- Khách hàng không sẵn sàng để nhận hàng vào thời điểm giao hàng.</span><br>
                            <span>- Sexxking đã giao hàng đúng hẹn theo thông tin giao hàng nhưng không liên lạc được với
                                Khách
                                hàng và chờ tại địa điểm giao hàng quá 10 phút, mọi nỗ lực của nhân viên giao hàng nhằm liên
                                hệ
                                với Khách hàng đều không thành công.</span><br>
                            <span>- Những trường hợp bất khả kháng như thiên tai, tai nạn giao thông, gián đoạn mạng lưới
                                giao
                                thông, đứt cáp, hệ thống bị tấn công.</span><br>
                            <span>Các trường hợp khác: Trong trường hợp xảy ra sự cố phức tạp hơn, Sexxking bảo đảm quyền
                                lợi
                                lớn nhất thuộc về Khách hàng.</span><br>
                            <span class="title">
                                Thanh toán
                            </span><br>
                            <span>Chúng tôi hỗ trợ 4 phương thức thanh toán cho tất cả các đơn hàng trên hệ
                                thống.</span><br>
                            <span>1. Thanh toán khi nhận hàng (COD): Quý khách sẽ thanh toán tiền mặt cho nhân viên giao
                                hàng
                                ngay sau khi nhận được hàng.</span><br>
                            <span>2. Thanh toán bằng Internet Banking: Thẻ/tài khoản ATM của quý khách có đăng kí sử dụng
                                dịch
                                vụ internet banking</span><br>
                            <span>3. Thanh toán bằng thẻ quốc tế Visa, Master Card</span><br>
                            <span>4. Chuyển khoản trực tiếp tại ngân hàng.</span><br>
                            <span>Mọi thắc mắc và góp ý vui lòng liên hệ Hotline Chăm sóc khách hàng: 0931323123</span>
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

            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/XiyDT0SRYqA" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
@endsection
