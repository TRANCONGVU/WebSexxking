@extends('master-layout')
@section('content')
<div class="main">
    <div class="row">
        <div class="col-md-9 cont-left">
            <div class="box_w">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">CẨM NANG Sexxking</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">TRẮC NGHIỆM MÃN DỤC NAM</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">TRẮC NGHIỆM CƯƠNG DƯƠNG</a>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class=" col-sx 12 col-md-4">
                                    <img src="images/product.png">
                                </div>
                                <div class=" col-sx 12 col-md-8">
                                    <h1 class="head-title"> Cẩm nang Sexxking</h1>
                                    <p>Cung cấp thông tin về Sexxking, những thông tin khoa học để tăng cường
                                        sức khỏe toàn thân và sức khỏe sinh lý nam giới.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="boxnews_intro">
                                <p>
                                    <a title="Mãn dục nam" href="#">Mãn dục nam</a> là quá trình suy giảm tự nhiên ở nam
                                    giới xảy ra khi lượng <a title="Testosterone" href="#">Testosterone</a> trong máu
                                    giảm dưới mức bình thường làm ảnh hưởng nghiêm trọng đến sức khỏe toàn thân và sinh
                                    lý. Để biết mình có khả năng bị mãn dục không, bạn vui lòng thử trắc nghiệm sau nhé.
                                </p>
                            </div>
                            <form>
                                <div class="box_mdn">
                                    <h2>Trắc nghiệm mãn dục nam</h2>
                                    <div class="tn_content panel panel-default" style="border-radius:0">
                                        Lưu ý: Trắc nghiệm này chỉ áp dụng cho nam giới từ 18 tuổi trở lên. Vui lòng
                                        chọn đủ thông tin cho từng câu hỏi trắc nghiệm này<br>
                                        <div class="tn_question">
                                            <strong>1. Bạn có gặp 1 trong những Triệu chứng tình dục này
                                                ko?</strong><br>
                                            <span class="pull-right">Có&nbsp; Không</span>
                                            <ul>
                                                <li>
                                                    <span>Giảm ham muốn</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck11" name="ck11[]" value="1">
                                                        <input type="checkbox" class="ck11" name="ck11[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn cương dương</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck12" name="ck12[]" value="1">
                                                        <input type="checkbox" class="ck12" name="ck12[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Giảm tinh trùng, khó có con</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck13" name="ck13[]" value="1">
                                                        <input type="checkbox" class="ck13" name="ck13[]" value="0">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>2. Bạn có gặp một trong những Triệu chứng toàn thân này
                                                không?</strong>
                                            <ul>
                                                <li>
                                                    <span>Tăng các bệnh lý tim mạch</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck21" name="ck21[]" value="1">
                                                        <input type="checkbox" class="ck21" name="ck21[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn hô hấp (ngưng thở lúc ngủ, ngáy to)</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck22" name="ck22[]" value="1">
                                                        <input type="checkbox" class="ck22" name="ck22[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn thần kinh (giảm trí nhớ, khó tập trung)</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck23" name="ck23[]" value="1">
                                                        <input type="checkbox" class="ck23" name="ck23[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn tinh thần (stress)</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck24" name="ck24[]" value="1">
                                                        <input type="checkbox" class="ck24" name="ck24[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Béo phì -béo bụng</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck25" name="ck25[]" value="1">
                                                        <input type="checkbox" class="ck25" name="ck25[]" value="0">
                                                    </span>
                                                </li>
                                                <li class="ss26">
                                                    <span>Giảm khối lượng cơ, giảm sức cơ</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck26" name="ck26[]" value="1">
                                                        <input type="checkbox" class="ck26" name="ck26[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Loãng xương, dễ gãy xương</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck27" name="ck27[]" value="1">
                                                        <input type="checkbox" class="ck27" name="ck27[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn da, tóc (da nhăn, rụng tóc)</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck28" name="ck28[]" value="1">
                                                        <input type="checkbox" class="ck28" name="ck28[]" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rối loạn tạo máu (thiếu máu)</span>
                                                    <span class="pull-right">
                                                        <input type="checkbox" id="ck29" name="ck29[]" value="1">
                                                        <input type="checkbox" class="ck29" name="ck29[]" value="0">
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <center> <input id="tn_submit" value="XEM ĐÁP ÁN" onclick="return checkSend()">
                                        </center>
                                    </div>
                                    <center>
                                        <div class="tn_answer panel panel-default col-xs-12 col-sm-9">
                                            <h3>ĐÁP ÁN</h3>
                                            <div class="tn_answer_true ">
                                                Bạn đang bước vào giai đoạn mãn dục. Hãy dùng Sâm Alipas Platium mỗi
                                                ngày để tăng cường sức khỏe toàn thân và cải thiện sức khỏe sinh lý.
                                            </div>
                                            <div class="tn_answer_false">
                                                Xin chúc mừng. Bạn chưa bước vào giai đoạn mãn dục. Hãy dùng Sâm Alipas
                                                Platium mỗi ngày để nâng cao sức khỏe toàn thân và phòng ngừa mãn dục
                                                sớm.
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </form>


                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="boxnews_intro">
                                <p>
                                    <a title="Rối loạn cương dương"
                                        href="https://alipasplatinum.com.vn/tin-tuc/roi-loan-cuong-duong-c11a207.html">Rối
                                        loạn cương dương</a> là cụm từ được Hội Nam học thế giới dùng để thay thế cho
                                    các từ bất lực, liệt dương, thiểu năng sinh dục nam giới,… Để biết mình có khả năng
                                    bị Rối loạn cương dương không, bạn vui lòng thử trắc nghiệm sau nhé.</p>
                            </div>
                            <form name="tn_mdn" id="tn_cd">
                                <div class="box_mdn">
                                    <h2>Trắc nghiệm về chức năng cương dương ở nam giới - theo I.I.E.F</h2>
                                    <div class="tn_content panel panel-default" style="border-radius:0">
                                        Lưu ý: Trắc nghiệm này chỉ áp dụng cho nam giới từ 18 tuổi trở lên. Vui lòng
                                        chọn đủ thông tin cho từng câu hỏi trắc nghiệm này<br>
                                        <div class="tn_question">
                                            <strong>1. Trong 4 tuần lễ qua, bạn có thường cương được dương vật trong lúc
                                                hoạt động tình dục hay không?</strong>
                                            <ul id="c1">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd1" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>2. Trong 4 tuần lễ qua, khi bạn có cương dương vật do kích thích
                                                tình dục, dương vật của bạn có đủ cứng để đưa vào âm đạo không?</strong>
                                            <ul id="c2">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd2" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>3. Trong 4 tuần lễ qua, khi muốn giao hợp, bạn có đưa được dương vật
                                                vào âm đạo của người phụ nữ không?</strong>
                                            <ul id="c3">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd3" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>4. Trong 4 tuần lễ qua, suốt trong lúc giao hợp, bạn có duy trì được
                                                độ cương sau khi đã đưa được dương vật vào âm đạo người phụ nữ hay
                                                không?</strong>
                                            <ul id="c4">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd4" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>5. Trong 4 tuần lễ qua, bạn có thấy khó khăn khi duy trì cương dương
                                                vật để giao hợp trọn vẹn không?</strong>
                                            <ul id="c5">
                                                <li>
                                                    <span>Không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Cực kỳ khó khăn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Quá khó khăn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Khó khăn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Hơi khó khăn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Không khó khăn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd5" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>6. Trong 4 tuần lễ qua, bạn ước lượng sự tự tin mà bạn có được trong
                                                việc duy trì cương dương vật như thế nào?</strong>
                                            <ul id="c6">
                                                <li>
                                                    <span>Rất ít / không có</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd6" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Ít</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd6" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Vừa phải</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd6" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd6" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rất cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd6" value="4">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>7. Trong 4 tuần lễ qua, có bao nhiêu lần giao hợp?</strong>
                                            <ul id="c7">
                                                <li>
                                                    <span>Không lần nào</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>1 - 2 lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>3 - 4 lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>5 - 6 lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>7 - 10 lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Hơn 11 lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd7" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>8. Trong 4 tuần lễ qua, bạn có thấy thỏa mãn khi giao hợp
                                                không?</strong>
                                            <ul id="c8">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd8" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>9. Trong 4 tuần lễ qua, bạn có thấy thích thú trong khi giao hợp
                                                không?</strong>
                                            <ul id="c9">
                                                <li>
                                                    <span>Không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Không thấy thích</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Không thích lắm</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Tàm tạm</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rất thích thú</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Cực kỳ thích thú</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd9" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>10. Trong 4 tuần lễ qua khi được kích thích tình dục hay giao hợp,
                                                bạn có xuất tinh hay không?</strong>
                                            <ul id="c10">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd10" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>11. Trong 4 tuần lễ qua, khi được kích thích tình dục hay giao hợp,
                                                bạn có cảm giác cực khoái hay không?</strong>
                                            <ul id="c11">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd11" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>12. Trong 4 tuần lễ qua, bạn có cảm thấy ham muốn tình dục
                                                không?</strong>
                                            <ul id="c12">
                                                <li>
                                                    <span>Không hoạt động tình dục / không giao hợp</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần như không bao giờ / không bao giờ</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Dưới 1/2 số lần</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Thỉnh thoảng (khoảng 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Gần hầu hết (hơn 1/2 số lần)</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="4">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Luôn luôn hoàn toàn</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd12" value="5">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>13. Trong 4 tuần lễ qua, sự ham muốn tình dục của bạn gia tăng đến
                                                mức độ nào?</strong>
                                            <ul id="c13">
                                                <li>
                                                    <span>Rất ít / không có</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd13" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Ít</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd13" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Vừa phải</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd13" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd13" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rất cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd13" value="4">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>14. Trong 4 tuần lễ qua bạn có cảm thấy hài lòng với cuộc sống tình
                                                dục của mình không?</strong>
                                            <ul id="c14">
                                                <li>
                                                    <span>Không hài lòng</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd14" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Hơi hài lòng</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd14" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Tạm hài lòng</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd14" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Khá hài lòng</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd14" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rất hài lòng</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd14" value="4">
                                                    </span>
                                                </li>
                                            </ul>
                                            <strong>15. Trong 4 tuần lễ qua, trong quan hệ tình dục với phụ nữ có làm
                                                người phụ nữ hài lòng không?</strong>
                                            <ul id="c15">
                                                <li>
                                                    <span>Rất ít / không có</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd15" value="0">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Ít</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd15" value="1">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Vừa phải</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd15" value="2">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd15" value="3">
                                                    </span>
                                                </li>
                                                <li>
                                                    <span>Rất cao</span>
                                                    <span class="pull-right">
                                                        <input type="radio" name="rd15" value="4">
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <center><input id="tn_submit" value="XEM ĐÁP ÁN" onclick="return checkSend()">
                                        </center>
                                    </div>
                                    <center>
                                        <div class="tn_answer cuongduong panel panel-default col-sm-8">
                                            <h3>ĐÁP ÁN</h3>
                                            <div class="tn_answer_20"> Bạn đã có dấu hiệu rối loạn cương dương mức độ
                                                nặng. Hãy dùng Sâm Alipas Platium mỗi ngày để tăng cường sức khỏe nền
                                                tảng và cải thiện sức khỏe sinh lý của mình.</div>
                                            <div class="tn_answer_30">Bạn đã có dấu hiệu rối loạn cương dương mức độ
                                                trung bình. Hãy dùng Sâm Alipas Platium mỗi ngày để tăng cường sức khỏe
                                                nền tảng và cải thiện sức khỏe sinh lý của mình.</div>
                                            <div class="tn_answer_40">Bạn đã có dấu hiệu rối loạn cương dương mức độ
                                                nhẹ. Hãy dùng Sâm Alipas Platium mỗi ngày để tăng cường sức khỏe nền
                                                tảng và cải thiện sức khỏe sinh lý của mình.</div>
                                            <div class="tn_answer_50">Xin chúc mừng. Bạn không có dấu hiệu rối loạn
                                                cương dương. Bạn có thể sử dụng Sâm Alipas Platium mỗi ngày để duy trì
                                                sức khỏe nền tảng và sức khỏe sinh lý của mình.</div>
                                        </div>
                                    </center>
                                </div>
                            </form>
                        </div>
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
        </div>
    </div>
</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
@endsection
