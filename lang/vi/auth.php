<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth', language 'vi', branch 'MOODLE_27_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Những plugin chứng thực có sẵn';
$string['alternateloginurl'] = 'URL đăng nhập thay thế';
$string['auth_data_mapping'] = 'Bản đồ hoá dữ liệu';
$string['auth_fieldlock'] = 'Giá trị khoá';
$string['auth_fieldlocks'] = 'Khoá các trường của người dùng';
$string['auth_multiplehosts'] = 'Có thể nhập nhiều hosts hay địa chỉ (thí dụ: host1.com; host2.com; host3.com) hay (xxx.xxx.xxx.xxx; xxx.xxx.xxx.xxx)';
$string['auth_passwordisexpired'] = 'Mật khẩu hết hạn. Bạn có muốn đổi mật khẩu bây giờ không?';
$string['auth_remove_delete'] = 'Xoá toàn bộ phần cục bộ';
$string['auth_remove_keep'] = 'Giữ phần cục bộ';
$string['auth_remove_suspend'] = 'Tạm treo phần cục bộ';
$string['auth_remove_user_key'] = 'Bỏ người dùng bên ngoài';
$string['auth_sync_script'] = 'Đoạn mã đồng bộ hoá cron';
$string['auth_updatelocal'] = 'Cập nhật cục bộ (local)';
$string['auth_updateremote'] = 'Cập nhật ngoại biên (external)';
$string['auth_user_create'] = 'Kích hoạt chức năng tạo người dùng';
$string['auto_add_remote_users'] = 'Tự động thêm người dùng từ xa';
$string['changepassword'] = 'Thay URL mật khẩu';
$string['chooseauthmethod'] = 'Chọn một phương thức chứng thực';
$string['createpasswordifneeded'] = 'Tạo mật khẩu nếu cần';
$string['emailchangecancel'] = 'Huỷ việc thay đổi điện thư';
$string['emailupdate'] = 'Cập nhật địa chỉ điện thư';
$string['emailupdatetitle'] = 'Xác định thư điện đã được cập nhật tại {$a->site}';
$string['enterthenumbersyouhear'] = 'Nhập vào các số bạn nghe';
$string['enterthewordsabove'] = 'Nhập vào các từ trên đây';
$string['errormaxconsecutiveidentchars'] = 'Mật khẩu phải có ít nhất là {$a} ký tự định dạng khác nhau.';
$string['errorminpassworddigits'] = 'Mật khẩu phải có ít nhất là {$a} ký tự số.';
$string['errorminpasswordlength'] = 'Mật khẩu phải có chiều dài ít nhất là {$a} ký tự.';
$string['errorminpasswordlower'] = 'Mật khẩu phải có ít nhất là {$a} ký tự viết thường.';
$string['errorminpasswordnonalphanum'] = 'Mật khẩu phải có ít nhất là {$a} ký tự dạng chữ.';
$string['errorminpasswordupper'] = 'Mật khẩu phải có ít nhất là {$a} ký tự viết hoa.';
$string['errorpasswordupdate'] = 'Lỗi khi cập nhật mật khẩu, mật khẩu chưa được đổi';
$string['forcechangepassword'] = 'Bắt buộc thay đổi mật khẩu';
$string['forcechangepasswordfirst_help'] = 'Bắt buộc thay đổi mật khẩu khi người dùng đăng nhập Moodle lần đầu';
$string['forcechangepassword_help'] = 'Bắt buộc thay đổi mật khẩu khi người dùng đăng nhập Moodle lần kế tiếp';
$string['forgottenpasswordurl'] = 'Quên URL mật khẩu';
$string['getanaudiocaptcha'] = 'Chọn CAPTCHA âm thanh';
$string['getanimagecaptcha'] = 'Chọn CAPTCHA hình ảnh';
$string['getanothercaptcha'] = 'Chọn một loại CAPTCHA khác';
$string['guestloginbutton'] = 'Nút đăng nhập cho khách';
$string['incorrectpleasetryagain'] = 'Sai. Vui lòng thử lại.';
$string['infilefield'] = 'Trường phải có trong tập tin';
$string['informminpassworddigits'] = 'ít nhất {$a} con số';
$string['informminpasswordlength'] = 'ít nhất {$a} ký tự';
$string['informminpasswordlower'] = 'ít nhất {$a} ký tự viết thường';
$string['informminpasswordnonalphanum'] = 'ít nhất {$a} ký tự không phải số';
$string['informminpasswordupper'] = 'ít nhất {$a} ký tự viết hoa';
$string['informpasswordpolicy'] = 'Mật khẩu phải có {$a}';
$string['instructions'] = 'Hướng dẫn';
$string['internal'] = 'Cục bộ';
$string['locked'] = 'Đã khoá';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Mật khẩu không thể thay đổi';
$string['noprofileedit'] = 'Hồ sơ không thể được cập nhật';
$string['ntlmsso_failed'] = 'Không thể tự động đăng nhập, hãy thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO chưa được kích hoạt.';
$string['plaintext'] = 'Văn bản đơn giản';
$string['pluginnotenabled'] = 'Plugin chứng thực \'{$a}\' chưa được kích hoạt.';
$string['pluginnotinstalled'] = 'Plugin chứng thực \'{$a}\' chưa được cài.';
$string['potentialidps'] = 'Đăng nhập bằng tài khoản của bạn trên:';
$string['recaptcha'] = 'reCAPTCHA';
$string['selfregistration'] = 'Tự đăng ký';
$string['suspended'] = 'Treo tài khoản';
$string['unlocked'] = 'Mở khoá';
$string['unlockedifempty'] = 'Mở khoá nếu để trống';
$string['update_never'] = 'Không thời hạn';
$string['update_oncreate'] = 'Khi được tạo';
$string['update_onlogin'] = 'Mỗi lần đăng nhập';
$string['update_onupdate'] = 'Khi cập nhật';
