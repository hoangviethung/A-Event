<?php $__env->startSection('content'); ?>
<main>
    <section class="register bg-main">
        <div class="container">
            <div class="box-register">
                <ul class="menu-login-register">
                    <li class="item"><a href="<?php echo e(url('pages/login')); ?>">ĐĂNG NHẬP</a></li>
                    <li class="item active"><a href="<?php echo e(url('pages/register')); ?>">ĐĂNG KÍ</a></li>
                </ul>
                <div class="box-form-register">
                    <form action="dang-nhap.html">
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="email">Email *</label>
                                <div class="form-input">
                                    <input id="email" type="text" placeholder="Địa chỉ email *"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="user-name">Tài khoản *</label>
                                <div class="form-input">
                                    <input id="user-name" type="text" placeholder="Tên tài khoản *"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="pass">Mật khẩu *</label>
                                <div class="form-input">
                                    <input id="pass" type="password" placeholder="Mật khẩu *"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="repass">Nhập lại mật khẩu *</label>
                                <div class="form-input">
                                    <input id="repass" type="password" placeholder="Nhập lại mật khẩu *"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Số điện thoại *</label>
                                <div class="form-input">
                                    <input id="address" type="phone" placeholder="Số điện thoại"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Địa chỉ</label>
                                <div class="form-input">
                                    <input id="address" type="text" placeholder="Địa chỉ"><span class="error">Bắt lỗi</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="address">Ngày sinh *</label>
                                <div class="form-input">
                                    <input type="date">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="address">Giới tính *</label>
                                <div class="form-input">
                                    <label class="check-box" for="nam">Nam</label>
                                    <input id="nam" type="radio" name="gender" checked>
                                    <label class="check-box" for="nu">Nữ</label>
                                    <input id="nu" type="radio" name="gender">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="choose-file" for="file-avatar">Chọn ảnh đại diện</label>
                                <div class="form-input">
                                    <input id="file-avatar" type="file" hidden>
                                </div>
                                <p>Details of goods: Quantity/G.W/Goods/FileName</p>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    <select id="vip" name="">
                                        <option value="">Normal</option>
                                        <option value="">V.I.P</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <P>To learn more about how Music.com collects, uses, shares and protects your personal data please read our full Privacy Policy.</P>
                                <p>To learn more about how Music.com collects, uses, shares and protects your personal data please read our full Privacy Policy.</p>
                            </div>
                        </div>
                        <button class="btn" type="submit">ĐĂNG KÝ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\A-Event\back-end\event\resources\views/pages/register.blade.php ENDPATH**/ ?>