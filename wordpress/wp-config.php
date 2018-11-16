<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'tongviet');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y]3nc[kA{SzEE(rOrU(_Np%PSU}<2,uHF<NKNMH5p^Psp2V2WabP#Na?03V2AE|i');
define('SECURE_AUTH_KEY',  '3PW6E9{7V@:IU&J)pOM.<azMGx;K<CCWvE6G*r>h$s;woTH>o;LPFy_CcjLt>J1~');
define('LOGGED_IN_KEY',    '#o`}5W6{7<GqyrDW_2pfQ1;#dcZo(`UjTo/@UT)N)[wYg#F`?u:Gf]257Md.D48S');
define('NONCE_KEY',        ':P)ZC=|{Nt*|JEXjti)[;3r7lBAFZs9lzIwx4sT)su_*nbdGpzO7&27FVypgBiki');
define('AUTH_SALT',        '_[;l4VrSP!(Fd1[]<2~dH:}fT`JFX8U$M4jItMeqV^HK<?Z?;o2qUVtGa1~xE}jK');
define('SECURE_AUTH_SALT', 'I[f=>6*oe3Ak1TGlzilZ&Nnv(&L(;zH:m%ZZ}R MFYY!hM!iayu0ah@Q;T7Qu=]q');
define('LOGGED_IN_SALT',   'V0:Stl2KuEgBLA(w26[O`j~u[!dsdz+C@D[v2gCH+jtlQH2(s3Z9km83]Ud+T_T&');
define('NONCE_SALT',       '>/B<QqJ&v9iHxy%C=W[<yw=2OT%$nVGO^#Z[)$*=Do!B5cqFWU4@LF^p[@]e+Ust');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'tv_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
