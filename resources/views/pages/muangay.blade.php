@extends('master-layout')
@section('content')
<div class="main">
    <div class="row">
        <div class="col-xs-12 col-md-9 cont-left">
            <p class="breadcumb"><span>Trang chủ</span><i class="fas fa-chevron-right muiten"></i> <span>Mua sản
                    phẩm</span></p>
            <div class="row muangay">
                <div class="col-md-6 product-mua">
                    <img src="images/product.png" alt="">
                </div>
                <div class="col-md-6">
                    <div class="tt-product">
                        <span>Sexxking khỏe để hạnh phúc</span>
                        <span>Tình trạng : <strong>còn hàng</strong></span>
                        <span>Giá : <strong>720000Đ</strong></span>
                        <div>
                            <div class="mua-button ">
                                <a class="btn"><i class="fas fa-minus"></i></a><span>1</span><a class="btn"><i
                                        class="fas fa-plus"></i></a>
                                <button type="button" data-toggle="modal" data-target="#modal1"
                                    class="btn btn-danger mx-2 my-2"><i class="fas fa-cart-plus bg-none"></i>Mua
                                    ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="cart">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-chitiet-tab" data-toggle="tab" href="#nav-chitiet"
                        role="tab" aria-controls="nav-chitiet" aria-selected="true">Chi tiết sản phẩm</a>
                    <a class="nav-item nav-link" id="nav-giaohang-tab" data-toggle="tab" href="#nav-giaohang" role="tab"
                        aria-controls="nav-giaohang" aria-selected="false">Thông tin giao hàng</a>
                    <a class="nav-item nav-link" id="nav-camket-tab" data-toggle="tab" href="#nav-camket" role="tab"
                        aria-controls="nav-camket" aria-selected="false">Cam kết của Sexxking</a>
                    <a class="nav-item nav-link" id="nav-danhgia-tab" data-toggle="tab" href="#nav-danhgia" role="tab"
                        aria-controls="nav-danhgia" aria-selected="false">Đánh giá</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tab">
                <div class="tab-pane fade show active" id="nav-chitiet" role="tabpanel"
                    aria-labelledby="nav-chitiet-tab">
                    <div class="hihi">
                        <span class="title">
                            1 . Cách dùng
                        </span><br>
                        <span> + Uống 1 viên / ngày trước hoặc trong bữa ăn.</span><br>
                        <span> + Uống 1 viên x 2 lần/ngày, (sáng, chiều), uống trong hoặc sau bữa ăn.</span><br>
                        <span>+ Nên dùng thường xuyên.</span><br>
                        <span class="title">
                            2. ĐỐI TƯỢNG SỬ DỤNG
                        </span><br>
                        <span>Nam giới trên 18 tuổi cần tăng cường các chức năng trên</span><br>
                        <span><br>
                            Đóng gói: Chai 30 viên</span><br>
                        <span>Bảo quản: Nơi khô ráo, thoáng mát, nhiệt độ dưới 30 độ C, tránh ẩm và ánh nắng mặt trời,
                            để xa
                            tầm tay trẻ em.</span><br>
                        <span>Thông tin về công dụng sản phẩm công bố theo giấy phép SĐK:
                            49707/2017/ATTP-XNCB</span><br>
                        <span>ĐC : Nhà vườn 17 , KDT Mới Trung Văn , Nam Từ Liêm , Hà Nội</span><br>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-giaohang" role="tabpanel" aria-labelledby="nav-giaohang-tab">
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
                <div class="tab-pane fade" id="nav-camket" role="tabpanel" aria-labelledby="nav-camket-tab">
                    <div class="hihi">
                        <span class="title">
                            Cam kết từ chúng tôi
                        </span>
                        <strong>Cam kết bán hàng tại Sexxking được xây dựng dựa trên uy tín và sứ mệnh mang đến những
                            sản phẩm chất lượng, tốt nhất cho khách hàng.</strong>
                        <span class="content">Mang đến cho khách hàng sản phẩm chính hãng, có tem bảo hành và nguồn gốc
                            xuất xứ, lô sản xuất và hạn sử dụng đầy đủ.</span>
                        <span class="content">Luôn cung cấp sản phẩm đúng chất lượng như hình ảnh và thông tin đăng tải
                            theo đúng mức giá được niêm yết.</span>
                        <span class="content">Giữ bí mật tuyệt đối thông tin của khách hàng, không chia sẻ cho các cá
                            nhân và tổ chức khác.</span>
                        <span class="content">Bán đúng giá tại các nhà thuốc Sexking (chưa bao gồm phí giao
                            hàng)</span>
                        <span class="content">Giao hàng tận nơi trên toàn quốc.</span>
                        <span>Cam kết bảo mật thông tin cá nhân của tất cả khách hàng.</span>
                        <strong>Thông tin của khách hàng sẽ được Sexxking sử dụng với những công việc được đưa ra trong
                            chính sách này.</strong>
                        <span class="content">Sexxking chỉ sử dụng thông tin của khách hàng trong thời gian mà pháp luật
                            cho phép và chỉ phục vụ cho giao dịch giữa 2 bên.</span>
                        <span class="content">Thông tin của khách hàng tuyệt đối sẽ không được mua bán hay chuyển giao
                            cho bên thứ 3.</span>
                        <strong>Thông tin khách hàng mà chúng tôi thu thập và do khách hàng đồng ý cung cấp
                            gồm:</strong>
                        <span class="content">1 Tên khách hàng</span>
                        <span class="content">2 Số điện thoại liên hệ</span>
                        <span class="content">3 Email (nếu có)</span>
                        <span class="content">4 Địa chỉ giao nhận</span>
                        <strong>Các thông tin trên được Sexxking sử dụng vào các mục đích:</strong>
                        <span class="content">Liên lạc với khách hàng để xác minh đơn đặt hàng. </span>

                        <span class="content">Thông báo về việc giao hàng và hỗ trợ khách hàng.</span>

                        <span class="content">Xử lý đơn hàng của khách hàng trên hệ thống</span>

                        <span class="content">Sexxking sẽ chia sẻ thông tin khách hàng (Địa chỉ nhận hàng và số điện
                            thoại liện hệ) với công ty chuyển phát nhanh để phục vụ cho việc giao hàng tới quý
                            khách.</span>
                        <strong>Bảo mật thông tin cá nhân khách hàng</strong>
                        <span class="content">Sexxking đảm bảo tất cả mọi thông tin của khách hàng sẽ được bảo mật tuyệt
                            đối và sử dụng đúng mục đích.
                            Sau khi đã hoàn thành giao dịch thông tin khách hàng sẽ được chúng tôi xóa khỏi hệ thống chỉ
                            lưu lại các thông tin cần thiết để hỗ trợ khách hàng dịch vụ về sau.
                        </span>
                        <strong>
                            Chính sách bảo mật tại Sexxking</strong>
                        <span class="content">Sexxking có thể thay đổi chính sách bảo mật và mọi thay đổi sẽ được công
                            khai trên website Sexxking.com.vn</span>
                        <span class="content">Tất cả các thay đổi về chính sách bảo mật chúng tôi đều tuân thủ theo quy
                            định của Pháp Luật Nhà Nước hiện hành</span>
                        <span class="content">Mọi ý kiến thắc mắc, khiếu nại và tranh chấp vui lòng liên hệ với chúng
                            tôi qua hotline: </span>
                        <span>Trân trọng,<br>
                            Sexxking</span>


                    </div>

                </div>
                <div class="tab-pane fade" id="nav-danhgia" role="tabpanel" aria-labelledby="nav-danhgia-tab">
                    <span class="title">
                        Viết đánh giá
                    </span>
                    <form>
                        <div class="form-group">
                            <label for="Email">Email *</label>
                            <input type="email" class="form-control" id="Email" placeholder="Nhập email của bạn ">
                        </div>
                        <div class="form-group">
                            <label for="text">Đánh giá *</label>
                            <textarea class="form-control" id="text" rows="3" placeholder="Viết bình luận"></textarea>
                        </div>
                        <button class="btn btn-primary">Gửi đánh giá </button>
                    </form>
                </div>
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
            <a href="">
                <img src="images/product.png" alt="">
            </a>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade m-2" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn vừa chọn mua sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-start">
                <img src="images/product.png" alt="">
                <div class="ml-4 mt-4 d-flex flex-column">
                    <span class="title">Sản phẩm SEXXKING</span>
                    <span>Giá : 720 000 Đ</span>
                    <span>Sô Lượng : 1</span>
                </div>

            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Chọn hình thức thanh toán </h5>
                <form>
                    <div class="form-group">
                        <select class="form-control w-100" id="exampleFormControlSelect1">
                            <option>1. Thanh toán khi nhận hàng</option>
                            <option>2. Thanh toán qua internet Banking</option>
                            <option>3. Thanh toán bằng thẻ quốc tế Visa, Master Card</option>
                            <option>4. Chuyển khoản trực tiếp tại ngân hàng.</option>

                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               <a href="{{ url('dathang') }}"><button class="btn btn-danger">Mua ngay</button></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
@endsection
