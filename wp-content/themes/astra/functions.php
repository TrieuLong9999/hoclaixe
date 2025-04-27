<?php

/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('ASTRA_THEME_VERSION', '4.9.0');
define('ASTRA_THEME_SETTINGS', 'astra-settings');
define('ASTRA_THEME_DIR', trailingslashit(get_template_directory()));
define('ASTRA_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('ASTRA_THEME_ORG_VERSION', file_exists(ASTRA_THEME_DIR . 'inc/w-org-version.php'));

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define('ASTRA_EXT_MIN_VER', '4.9.0');

/**
 * Load in-house compatibility.
 */
if (ASTRA_THEME_ORG_VERSION) {
  require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define('ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com');

/**
 * ToDo: Deprecate constants in future versions as they are no longer used in the codebase.
 */
define('ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url('/pricing/', 'free-theme', 'dashboard', 'upgrade') : 'https://woocommerce.com/products/astra-pro/');
define('ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url('/pricing/', 'free-theme', 'customizer', 'upgrade') : 'https://woocommerce.com/products/astra-pro/');

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if (is_admin()) {
  require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if (! defined('ASTRA_SITES_VER') || version_compare(ASTRA_SITES_VER, '4.3.7', '<') || version_compare(ASTRA_SITES_VER, '4.4.4', '>')) {
  // NPS Survey Integration
  require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
  require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * UTM Analytics lib file.
 */
require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-utm-analytics.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if (is_admin()) {
  /**
   * Admin Menu Settings
   */
  require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
  require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
  require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if (version_compare(PHP_VERSION, '5.4', '>=')) {
  require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
  require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
  require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if (version_compare(PHP_VERSION, '5.3', '>=')) {
  require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
function add_bootstrap_5()
{
  // Thêm Bootstrap CSS từ CDN
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');

  // Thêm Bootstrap JS từ CDN
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'add_bootstrap_5');
function my_custom_scripts()
{
?>
  <script type="text/javascript">
    // Đoạn mã JavaScript của bạn
    document.addEventListener('keydown', function(e) {
      // Kiểm tra nếu phím Space (mã phím 32) được nhấn
      if (e.keyCode === 32) {
        e.preventDefault(); // Ngừng hành vi mặc định của phím Space
      }
    });


    // 
    // 	
    document.addEventListener('DOMContentLoaded', function() {
      // Check nếu tồn tại phần tử có class .video-simulaton
      const wrapper = document.querySelector('.video-simulaton');
      if (wrapper) {
        console.log('Class .video-simulaton tồn tại — chạy API nè!');

        const container = wrapper.querySelector('.array-button-exercise');

        if (!container) {
          console.warn('Không tìm thấy container để render nút!');
          return;
        }
        // Gọi API
        fetch('/wp-json/api/v1/get-video') // Đường dẫn API bạn tự setup
          .then(res => res.json())
          .then(data => {
            console.log('Dữ liệu từ API:', data);
            arrayVideo = data;
            // Xóa nội dung cũ
            container.innerHTML = '';

            // Tạo 6 cột
            const columns = 6;
            const buttonsPerCol = 20;
            var videoActive = -1;
            let firstButton = null;
            var arrayTimeSpace = [];

            for (let col = 0; col < columns; col++) {
              const colDiv = document.createElement('div');
              colDiv.className = 'col-2';

              for (let i = 0; i < buttonsPerCol; i++) {
                const index = col * buttonsPerCol + i;
                const item = data[index];

                if (!item) continue; // tránh lỗi nếu ít hơn 120 item

                const button = document.createElement('button');
                button.className = 'btn btn-secondary w-100 mb-2';
                button.textContent = item.name || `${item.id}`;
                button.setAttribute('data-id', item.id);

                console.log("col", col, "i", i);

                if (col == 0 && i == 0) {
                  firstButton = button;
                }
                console.log("click first button", firstButton);

                button.addEventListener('click', () => {
                  const sourceVideo = document.querySelector('.change-video-simulaton');
                  if (!sourceVideo) {
                    console.warn('Không tìm thấy container để chuyển video');
                    return;
                  }
                  // Reset tất cả button về btn-secondary
                  const allButtons = container.querySelectorAll('button');
                  allButtons.forEach(btn => {
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-secondary');
                  });

                  // Đặt nút hiện tại thành btn-primary
                  button.classList.remove('btn-secondary');
                  button.classList.add('btn-primary');

                  // Cập nhật src mới
                  sourceVideo.src = item.url_video;
                  videoActive = item.id;
                  arrayTimeSpace[videoActive] = null;
                  console.log("videoActive", videoActive);
                  // Load lại video
                  const videoTag = sourceVideo.closest('video');
                  if (videoTag) {
                    videoTag.load();
                    videoTag.play(); // auto play lại
                  } else {
                    console.warn('Không tìm thấy thẻ <video> bao quanh');
                  }
                });

                colDiv.appendChild(button);
              }

              container.appendChild(colDiv);

            }
            if (firstButton) {
              firstButton.click();
            }

            //Next video khi video kết thúc
            const sourceVideo = document.querySelector('.change-video-simulaton');
            const videoTag = document.querySelector('video');
            if (videoTag) {
              videoTag.addEventListener('ended', () => {
                if (videoActive === -12) {
                  console.warn('Không có video nào được chọn');
                  return;
                }
                console.log("video ended");
                // Tìm video tiếp theo
                const nextvideo = data.findIndex(item => item.id === videoActive);
                console.log("nextvideo", nextvideo);
                if (data[nextvideo + 1]) {
                  videoActive = data[nextvideo + 1].id;
                  sourceVideo.src = data[nextvideo + 1].url_video;
                  videoTag.load();
                  videoTag.play();
                } else {
                  videoActive = -12; // Reset videoActive

                  // Hoặc bạn có thể hiển thị thông báo hoặc thực hiện hành động khác
                  // Ví dụ: alert("Không có video tiếp theo");
                  alert("Không có video tiếp theo");
                  console.log("Không có video tiếp theo");
                }
                // Tự động click vào nút tiếp theo
                console.log("videoActive", videoActive);

                if (videoActive !== -12) {
                  const nextButton = container.querySelector(`button[data-id="${videoActive}"]`);
                  if (nextButton) {
                    nextButton.click();
                  } else {
                    console.warn('Không tìm thấy nút tiếp theo');
                  }
                }

              });

              //Chạy input range theo video
              const inputRangeCustom = document.querySelector('.custom-range');
              if (inputRangeCustom) {
                videoTag.addEventListener('loadedmetadata', () => {
                  const duration = videoTag.duration;
                  inputRangeCustom.setAttribute('max', duration);

                  //Vẽ các khung màu theo điểm 
                  const customTimeRangeDiv = document.querySelector(".custom-time-range");
                  customTimeRangeDiv.style.width = "100%";
                  customTimeRangeDiv.style.position = "relative";
                  const backgroudTimeRange = document.querySelector('#range-background');
                  backgroudTimeRange.style.width = "100%";
                  // backgroudTimeRange.textContent = "aaaaa"
                  backgroudTimeRange.style.position = 'relative';
                  // backgroudTimeRange.style.top = "50%";
                  backgroudTimeRange.style.left = "0";
                  backgroudTimeRange.style.height = "6px";
                  // backgroudTimeRange.style.tranform = "translateY(-50%)";
                  console.log("backgroudTimeRange", backgroudTimeRange);

                  if (backgroudTimeRange) {
                    backgroudTimeRange.innerHTML = "";
                    let maxTime = duration;
                    let minTime = 0;

                    const videoPlay = data.find(item => item.id === videoActive);
                    if (videoPlay) {
                      // console.log("videoPlay", videoPlay);

                      const arrayColors = ["#008000", "#00FF7F", "#FFD700", "#F08080", "#FF0000"];
                      const distance = Math.abs(videoPlay.z_time1 - videoPlay.z_time2) / 5;
                      console.log("arrayColors", arrayColors);

                      // Tạo các khung màu

                      console.log("maxTime", maxTime);
                      console.log("minTime", minTime);
                      const startPercent = ((Number(videoPlay.z_time2) - Number(minTime)) / (maxTime - minTime)) * 100;
                      const widthPercent = (distance / (maxTime - minTime)) * 100;

                      for (let i = 0; i < 5; i++) {
                        const div = document.createElement('div');
                        div.classList.add('color-segment');


                        console.log("startPercent", startPercent + widthPercent * i);
                        console.log("widthPercent", widthPercent);
                        console.log("seg", (maxTime - minTime));

                        div.style.position = "absolute";
                        div.style.left = `${startPercent+widthPercent*i}%`;
                        div.style.width = `${widthPercent}%`;
                        div.style.height = '100%';
                        div.style.backgroundColor = arrayColors[i];
                        backgroudTimeRange.appendChild(div);
                      }

                    }
                  }

                })

                videoTag.addEventListener('timeupdate', () => {
                  const currentTime = videoTag.currentTime;
                  inputRangeCustom.value = currentTime;
                });
              }


              // nhấn space lấy thời gian video
              document.addEventListener('keydown', function(e) {
                if (e.keyCode === 32) {
                  e.preventDefault(); // Ngừng hành vi mặc định của phím Space
                  const currentTime = Number(videoTag.currentTime);
                  console.log("Thời gian hiện tại của video:", videoActive, currentTime);
                  // Thực hiện hành động khác với thời gian hiện tại nếu cần
                  if (arrayTimeSpace[videoActive] != null) {
                    return;
                  }
                  const dataTimeVideo = data.find((item => item.id === videoActive));
                  console.log("dataTimeVideo", dataTimeVideo);

                  if (!dataTimeVideo) {
                    return;
                  }
                  // Tính khoảng thời gian chia đều thành 5 phần
                  const startTime = Number(dataTimeVideo.z_time2);
                  const endTime = Number(dataTimeVideo.z_time1);
                  let distanceTime = Number(Math.abs(endTime - startTime) / 5);


                  console.log("distanceTime:", distanceTime);
                  console.log("startTime (z_time2):", startTime);
                  console.log("endTime (z_time1):", endTime);
                  console.log("currentTime:", currentTime);

                  const tableCell = document.querySelector(`.video-${videoActive}`);
                  let pointExample = 0;

                  if (currentTime >= startTime && currentTime < startTime + distanceTime) {
                    console.log("x5");
                    pointExample = 5;
                  } else if (currentTime >= startTime + distanceTime && currentTime < startTime + distanceTime * 2) {
                    console.log("x4");
                    pointExample = 4;
                  } else if (currentTime >= startTime + distanceTime * 2 && currentTime < startTime + distanceTime * 3) {
                    console.log("x3");
                    pointExample = 3;
                  } else if (currentTime >= startTime + distanceTime * 3 && currentTime < startTime + distanceTime * 4) {
                    console.log("x2");
                    pointExample = 2;
                  } else if (currentTime >= startTime + distanceTime * 4 && currentTime <= endTime) {
                    console.log("x1");
                    pointExample = 1;
                  }

                  console.log("pointExample:", pointExample);

                  arrayTimeSpace[videoActive] = pointExample;
                  //TODO tạo tam giác mũi chúi xuống 
                  const triangleDown = document.createElement('div');
                  triangleDown.className = 'triangle-down';
                  triangleDown.style.position = 'absolute';
                  triangleDown.style.left = `${currentTime * 100 / videoTag.duration}%`;
                  triangleDown.style.width = '0';
                  triangleDown.style.height = '0';
                  triangleDown.style.borderLeft = " 5px solid transparent";
                  triangleDown.style.borderRight = "5px solid transparent";
                  triangleDown.style.borderTop = '10px solid #555';
                  triangleDown.style.top = "-5px";
                  // triangleDown.style.backgroundColor = "red";
                  const backgroudTimeRange = document.querySelector('#range-background');
                  backgroudTimeRange.appendChild(triangleDown);
                  console.log("triangleDown", triangleDown);

                  if (tableCell) {
                    tableCell.innerHTML = `<span class="text-danger">${pointExample}</span> `;
                  } else {
                    console.warn('Không tìm thấy ô tương ứng trong bảng!');
                  }
                }
              });
            } else {
              console.warn('Không tìm thấy thẻ <video> bao quanh');
            }



            //render table data
            const tableContainer = document.querySelector('.data-value-video');
            if (!tableContainer) {
              console.warn('Không tìm thấy container để render bảng!');
              return;
            } else {
              let tableRow = document.createElement('tr');

              for (let i = 0; i < data.length; i++) {
                const item = data[i];

                tableRow.innerHTML += `
                  <td>${i + 1}</td>
                  <td class="video-${item.id}"></td>
                `;

                if ((i + 1) % 6 === 0) { // mỗi 6 mục thì tạo hàng mới
                  tableContainer.appendChild(tableRow);
                  tableRow = document.createElement('tr');
                }
              }

              // Nếu còn dư < 6 ô cuối cùng
              if ((data.length % 6) !== 0) {
                tableContainer.appendChild(tableRow);
              }
            }
          })
          .catch(err => {
            console.error('Lỗi API:', err);
            container.innerHTML = '<p class="text-danger">Lỗi khi tải dữ liệu.</p>';
          });
      }

      function renderBgTime(videoPlay) {
        const distanceTime = Number(Math.abs(videoPlay.z_time1 - videoPlay.z_time2) / 5);
        //Vẽ khung màu 
        const arrayColors = [{
            start: parseFloat(videoPlay.z_time2),
            color: "#008000"
          },
          {
            start: parseFloat(videoPlay.z_time2 + distanceTime),
            color: "#00FF7F"
          },
          {
            start: parseFloat(videoPlay.z_time2 + distanceTime * 2),
            color: "#FFD700"
          },
          {
            start: parseFloat(videoPlay.z_time2 + distanceTime * 3),
            color: "#F08080"
          },
          {
            start: parseFloat(videoPlay.z_time2 + distanceTime * 4),
            color: "#FF0000"
          },
        ];
        return arrayColors;
      }
    });
  </script>
<?php
}
add_action('wp_footer', 'my_custom_scripts');


add_action('rest_api_init', function () {
  register_rest_route('api/v1', '/get-video', [
    'methods' => 'GET',
    'callback' => 'get_video_simulation',
    'permission_callback' => '__return_true',
  ]);
});
function get_video_simulation($request)
{
  global $wpdb;

  // Giới hạn kết quả là 120 bản ghi
  $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}video_simulation LIMIT 120", ARRAY_A);

  return rest_ensure_response($results);
}
