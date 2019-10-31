@extends('layouts.index')
@section('content')
<main>
    <section class="form-add-event">
        <div class="main-banner content wow fadeInDown" data-wow-delay=".2s">
            <div class="form-input">
                <figure class="button-choose-file"><img class="ofc" src="images/form-add-event/main-banner.jpg" alt="">
                    <figcaption>
                        <h3>Tải ảnh bìa lên</h3>
                        <p>Kích thước tối ưu:</p>
                        <p>1440 x 600px (không lớn hơn 1MB)</p><svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M19,7h-0.4c-0.4,0-0.7-0.2-0.9-0.6l-1.2-2.3c-0.3-0.7-1-1.1-1.8-1.1H9.2C8.5,3,7.8,3.4,7.4,4.1L6.3,6.4   C6.1,6.8,5.8,7,5.4,7H5c-2.2,0-4,1.8-4,4v6c0,2.2,1.8,4,4,4h14c2.2,0,4-1.8,4-4v-6C23,8.8,21.2,7,19,7z M12,17c-2.2,0-4-1.8-4-4   c0-2.2,1.8-4,4-4s4,1.8,4,4C16,15.2,14.2,17,12,17z" id="photo"/></g></svg>
                    </figcaption>
                </figure>
                <input class="file-img" type="file" hidden>
            </div>
        </div>
        <div class="form-info-event">
            <form action="#">
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label class="big-title" for="ten-su-kien">Tên sự kiện:</label>
                        <div class="form-input">
                            <input class="big-input" id="ten-su-kien" type="text" name="" placeholder="Nhập tên sự kiện">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="dia-diem">Tên địa điểm:</label>
                        <div class="form-input">
                            <input id="dia-diem" type="text" name="" placeholder="Nhập tên sự kiện">
                        </div>
                        <div class="form-row margin-5px">
                            <div class="form-input col-lg-6">
                                <select name="">
                                    <option value="0">-- Tỉnh / Thành --</option>
                                    <option value="0">Thành Phố Hồ Chí Minh</option>
                                    <option value="0">Thành Phố Hà Nội</option>
                                    <option value="0">Thành Phố Đà Nẵng</option>
                                    <option value="0">Thành Phố Hải Phòng</option>
                                    <option value="0">Thành Phố Cần Thơ</option>
                                    <option value="0">Tỉnh An Giang</option>
                                    <option value="0">Tỉnh Bà Rịa - Vũng Tàu</option>
                                    <option value="0">Tỉnh Bạc Liêu</option>
                                    <option value="0">Tỉnh Bắc Giang</option>
                                    <option value="0">Tỉnh Bắc Kạn</option>
                                    <option value="0">Tỉnh Bắc Ninh</option>
                                    <option value="0">Tỉnh Bến Tre</option>
                                    <option value="0">Tỉnh Bình Dương</option>
                                    <option value="0">Tỉnh Bình Định</option>
                                    <option value="0">Tỉnh Bình Phước</option>
                                    <option value="0">Tỉnh Bình Thuận</option>
                                    <option value="0">Tỉnh Cà Mau</option>
                                    <option value="0">Tỉnh Cao Bằng</option>
                                    <option value="0">Tỉnh Đắk Lắk</option>
                                    <option value="0">Tỉnh Đắk Nông</option>
                                    <option value="0">Tỉnh Điện Biên</option>
                                    <option value="0">Tỉnh Đồng Nai</option>
                                    <option value="0">Tỉnh Đồng Tháp</option>
                                    <option value="0">Tỉnh Gia Lai</option>
                                    <option value="0">Tỉnh Hà Giang</option>
                                    <option value="0">Tỉnh Hà Nam</option>
                                    <option value="0">Tỉnh Hà Tĩnh</option>
                                    <option value="0">Tỉnh Hải Dương</option>
                                    <option value="0">Tỉnh Hậu Giang</option>
                                    <option value="0">Tỉnh Hòa Bình</option>
                                    <option value="0">Tỉnh Hưng Yên</option>
                                    <option value="0">Tỉnh Kiên Giang</option>
                                    <option value="0">Tỉnh Kon Tum</option>
                                    <option value="0">Tỉnh Khánh Hòa</option>
                                    <option value="0">Tỉnh Lai Châu</option>
                                    <option value="0">Tỉnh Lạng Sơn</option>
                                    <option value="0">Tỉnh Lào Cai</option>
                                    <option value="0">Tỉnh Lâm Đồng</option>
                                    <option value="0">Tỉnh Long An</option>
                                    <option value="0">Tỉnh Nam Định</option>
                                    <option value="0">Tỉnh Ninh Bình</option>
                                    <option value="0">Tỉnh Ninh Thuận</option>
                                    <option value="0">Tỉnh Nghệ An</option>
                                    <option value="0">Tỉnh Phú Thọ</option>
                                    <option value="0">Tỉnh Phú Yên</option>
                                    <option value="0">Tỉnh Quảng Bình</option>
                                    <option value="0">Tỉnh Quảng Nam</option>
                                    <option value="0">Tỉnh Quảng Ninh</option>
                                    <option value="0">Tỉnh Quảng Ngãi</option>
                                    <option value="0">Tỉnh Quảng Trị</option>
                                    <option value="0">Tỉnh Sóc Trăng</option>
                                    <option value="0">Tỉnh Sơn La</option>
                                    <option value="0">Tỉnh Tây Ninh</option>
                                    <option value="0">Tỉnh Tiền Giang</option>
                                    <option value="0">Tỉnh Tuyên Quang</option>
                                    <option value="0">Tỉnh Thái Bình</option>
                                    <option value="0">Tỉnh Thái Nguyên</option>
                                    <option value="0">Tỉnh Thanh Hóa</option>
                                    <option value="0">Tỉnh Thừa Thiên Huế</option>
                                    <option value="0">Tỉnh Trà Vinh</option>
                                    <option value="0">Tỉnh Vĩnh Long</option>
                                    <option value="0">Tỉnh Vĩnh Phúc</option>
                                    <option value="0">Tỉnh Yên Bái</option>
                                </select>
                            </div>
                            <div class="form-input col-lg-6">
                                <select name="">
                                    <option value="0">-- Quận / Huyện --</option>
                                    <option value="0">Quận 1</option>
                                    <option value="0">Quận 2</option>
                                    <option value="0">Quận 3</option>
                                    <option value="0">Quận 4</option>
                                    <option value="0">Quận 5</option>
                                    <option value="0">Quận 6</option>
                                    <option value="0">Quận 7</option>
                                    <option value="0">Quận 8</option>
                                    <option value="0">Quận 9</option>
                                    <option value="0">Quận 10</option>
                                    <option value="0">Quận 11</option>
                                    <option value="0">Quận 12</option>
                                    <option value="0">Quận Bình Thạnh</option>
                                    <option value="0">Quận Gò Vấp</option>
                                    <option value="0">Quận Phú Nhuận</option>
                                    <option value="0">Quận Tân Bình</option>
                                    <option value="0">Quận Tân Phú</option>
                                    <option value="0">Quận Bình Tân</option>
                                    <option value="0">Huyện Cần Giờ</option>
                                    <option value="0">Huyện Củ Chi</option>
                                    <option value="0">Huyện Hóc Môn</option>
                                    <option value="0">Huyện Nhà Bè</option>
                                    <option value="0">Huyện Bình Chánh</option>
                                    <option value="0">Quận Thủ Đức</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <div class="title-input">Logo của sự kiện</div>
                        <div class="form-input add-img-small">
                            <figure class="button-choose-file"><img class="ofc" src="images/icons/default-logo-organizer.png" alt=""></figure>
                            <input class="file-img" type="file" name="" hidden>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="loai-su-kien">Chọn loại sự kiện</label>
                        <div class="form-input">
                            <select id="loai-su-kien" name="">
                                <option>-- Thể loại sự kiện --</option>
                                <optgroup label="Giải trí">
                                    <option>Thể loại 1</option>
                                    <option>Thể loại 2</option>
                                    <option>Thể loại 3</option>
                                    <option>Thể loại 4</option>
                                    <option>Thể loại 5</option>
                                    <option>Thể loại 6</option>
                                </optgroup>
                                <optgroup label="Học Tập">
                                    <option>Thể loại 1</option>
                                    <option>Thể loại 2</option>
                                    <option>Thể loại 3</option>
                                    <option>Thể loại 4</option>
                                    <option>Thể loại 5</option>
                                    <option>Thể loại 6</option>
                                </optgroup>
                                <optgroup label="Khác">
                                    <option>Thể loại 1</option>
                                    <option>Thể loại 2</option>
                                    <option>Thể loại 3</option>
                                    <option>Thể loại 4</option>
                                    <option>Thể loại 5</option>
                                    <option>Thể loại 6</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nhà tổ chức</label>
                        <div class="form-input add-img-small">
                            <figure class="button-choose-file"><img class="ofc" src="images/icons/default-logo-organizer.png" alt=""></figure>
                            <input class="file-img" type="file" name="" hidden>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Số lượng vé</label>
                        <div class="form-input">
                            <input type="number" placeholder="Nhập tên sự kiện">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Giá vé</label>
                        <div class="form-input">
                            <input type="number" placeholder="Nhập tên sự kiện">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Ngày diễn ra sự kiện</label>
                        <div class="form-input">
                            <input type="date">
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Thông tin sự kiện</label>
                        <textarea id="editor" name="content">This is some sample content.</textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sdt">Thông tin liên lạc</label>
                        <div class="form-input">
                            <input id="sdt" type="text" name="" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sdt">Email nhận thông báo</label>
                        <div class="form-input">
                            <input id="sdt" type="Email" name="" placeholder="hoangviet.hung.009@gmail.com">
                        </div>
                    </div>
                </div>
                <button class="btn">THÊM SỰ KIỆN</button>
            </form>
        </div>
    </section>
</main>

@endsection