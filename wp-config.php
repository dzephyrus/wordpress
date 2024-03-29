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
define( 'DB_NAME', 'design_web2' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'XhN(_p[Xz(q|KHc_4XBg>^}O/lE<fCvV:FrbZh+>S6HQvHPOh_pI:(OG`Kk)(bbo' );
define( 'SECURE_AUTH_KEY',  'tt0~N*BaH:g}!iK6a}p~s|4Tc*U3BMvq?wV^Koxa]2p&J7:.,@iYKL3 5Fr*1lht' );
define( 'LOGGED_IN_KEY',    ':K:uY=59EkGB&4tDZyHVSXLh.:veM:lY`0.r(Ogw9IKvYjZaM99:,8nTdM$@#H(k' );
define( 'NONCE_KEY',        ':.$8&6zQJMHhz$!?FwBz.PB1+%]rI7j^TLoG@/p?hIjlIr`9&W6}Ps!|P*&FGHD4' );
define( 'AUTH_SALT',        't&@Lg*8A5SW`c[+IJgZEw:tX(aak0vC1+ k:Bx@}D|gx(rMWDp93EJPr)Oj()3)p' );
define( 'SECURE_AUTH_SALT', 'CfE;Oy`yTg~umeI+!xEU[Kxt=+jo7pE=i2j{2>}^JCRSP1?,0jhM9ul9kRrSyey5' );
define( 'LOGGED_IN_SALT',   'FVyB=o:Nal&rwJi<l9B61FfIzj3@)U){,9HG#X}2`$53v/<!U;0%.@v`haY<s;_$' );
define( 'NONCE_SALT',       '6qMQ1nr%g>x&jJ]ahN$*<_2&t;s=JQQ]GS9*xvg.QuuIlfx-R*t!]wXTrsdK7_/&' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
