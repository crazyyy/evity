<?php
function return_null($text) {
	return '';
}

function remove_version_from_js_and_css($src) {
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

function remove_id_from_css_scripts($html) {
	return preg_replace("/id='[a-z0-9_-]*'\s\s/", '', $html);
}

function access_denied() {
	status_header(404);
	nocache_headers();
	include( get_404_template() );
	exit;
}

function access_denied_wp() {
	if (is_feed())
		access_denied();
	if (is_author())
		access_denied();
	if (is_search())
		access_denied();
}

function change_wp_includes_url($url) {
	return str_replace('wp-includes', 'libs', $url);
}

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links', 2);

if (!is_admin()) {
	add_filter('script_loader_src', 'change_wp_includes_url', 1000, 1); 
	add_filter('style_loader_src','change_wp_includes_url', 1000, 1);
	add_action( 'wp', 'access_denied_wp' );
}

add_filter('the_generator', 'return_null');
add_filter('aioseop_prev_link','return_null');
add_filter('aioseop_next_link','return_null');
add_filter('style_loader_src', 'remove_version_from_js_and_css', 9999);
add_filter('script_loader_src', 'remove_version_from_js_and_css', 9999);
add_filter('style_loader_tag', 'remove_id_from_css_scripts', 9999);

add_action('do_feed', 'access_denied', 1);
add_action('do_feed_rdf', 'access_denied', 1);
add_action('do_feed_rss', 'access_denied', 1);
add_action('do_feed_rss2', 'access_denied', 1);
add_action('do_feed_atom', 'access_denied', 1);

function remove_class_upload($html) {
   return preg_replace('/wp-image-\d+/', '', $html); 
}
add_filter ('get_image_tag_class', 'remove_class_upload');

function remove_wp_class($content) {
   return preg_replace('/\swp-image-\d+/', '', $content);
}
add_filter('the_content', 'remove_wp_class');
//Регистрация сайтбаров
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Сайдбар',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
    ));
//Регистрация сайтбаров

//Регистрация меню
function register_my_menus(){register_nav_menus(array('s-menu' => 'sidebar-menu','f-menu' => 'footer-menu'));}
if (function_exists('register_nav_menus')){
    add_action( 'init', 'register_my_menus' );
}
/*<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>*/

//Регистрация меню 
function maxsite_the_russian_time($tdate = '') {
  if ( substr_count($tdate , '---') > 0 ) return str_replace('---', '', $tdate);

  $treplace = array (
  "Январь" => "января",
  "Февраль" => "февраля",
  "Март" => "марта",
  "Апрель" => "апреля",
  "Май" => "мая",
  "Июнь" => "июня",
  "Июль" => "июля",
  "Август" => "августа",
  "Сентябрь" => "сентября",
  "Октябрь" => "октября",
  "Ноябрь" => "ноября",
  "Декабрь" => "декабря",
  

  );
    return strtr($tdate, $treplace);
}

add_filter('the_time', 'maxsite_the_russian_time');
add_filter('get_the_time', 'maxsite_the_russian_time');
add_filter('the_date', 'maxsite_the_russian_time');
add_filter('get_the_date', 'maxsite_the_russian_time');
add_filter('the_modified_time', 'maxsite_the_russian_time');
add_filter('get_the_modified_date', 'maxsite_the_russian_time');
add_filter('get_post_time', 'maxsite_the_russian_time');
add_filter('get_comment_date', 'maxsite_the_russian_time');
/* Обрезка текста - excerpt
maxchar = количество символов.
text = какой текст обрезать (по умолчанию берется excerpt поста, если его нету, то content, если есть тег <!--more-->, то maxchar игнорируется и берется все, что до него, с сохранением HTML тегов )
save_format = Сохранять перенос строк или нет. По умолчанию сохраняется. Если в параметр указать определенные теги, то они НЕ будут вырезаться из обрезанного текста (пример: save_format=<strong><a> )
echo = выводить на экран или возвращать (return) для обработки.
П.с. Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
*/
function kama_excerpt($args=''){
  global $post;
    parse_str($args, $i);
    $maxchar   = isset($i['maxchar']) ?  (int)trim($i['maxchar'])   : 350;
    $text      = isset($i['text']) ?      trim($i['text'])    : '';
    $save_format = isset($i['save_format']) ? trim($i['save_format'])     : false;
    $echo    = isset($i['echo']) ?      false         : true;

  if (!$text){
    $out = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
    $out = preg_replace ("!\[/?.*\]!U", '', $out ); //убираем шоткоды, например:[singlepic id=3]
    // для тега <!--more-->
    if( !$post->post_excerpt && strpos($post->post_content, '<!--more-->') ){
      preg_match ('/(.*)<!--more-->/s', $out, $match);
      $out = str_replace("\r", '', trim($match[1], "\n"));
      $out = preg_replace( "!\n\n+!s", "</p><p>", $out );
      $out = "<p>". str_replace( "\n", "<br />", $out ) ."</p>";
      if ($echo)
        return print $out;
      return $out;
    }
  }

  $out = $text.$out;
  if (!$post->post_excerpt)
    $out = strip_tags($out, $save_format);

  if ( iconv_strlen($out, 'utf-8') > $maxchar ){
    $out = iconv_substr( $out, 0, $maxchar, 'utf-8' );
    $out = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $out); //убираем последнее слово, ибо оно в 99% случаев неполное
  }

  if($save_format){
    $out = str_replace( "\r", '', $out );
    $out = preg_replace( "!\n\n+!", "</p><p>", $out );
    $out = "<p>". str_replace ( "\n", "<br />", trim($out) ) ."</p>";
  }

  if($echo) return print $out;
  return $out;
}
function the_excerpt_max_charlength($charlength) {
     $excerpt = get_the_excerpt();
     $charlength++;
     if ( mb_strlen( $excerpt ) > $charlength ) {
          $subex = mb_substr( $excerpt, 0, $charlength - 5 );
          $exwords = explode( ' ', $subex );
          $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
          if ( $excut < 0 ) {
               echo mb_substr( $subex, 0, $excut );
          } else {
               echo $subex;
          }
          echo '...';
     } else {
          echo $excerpt;
     }
}
//обрезка тектса
//поддержка миниатюры
if(function_exists('add_theme_support')) { 
add_theme_support('post-thumbnails'); 
}
//поддержка миниатюры
//пагинация
/* Альтернатива wp_pagenavi (без лишних обращений к данным)
------------------------------------------------------------------------------ */
function kama_pagenavi($before='', $after='', $echo=true) {
  /* ================ Настройки ================ */
  $text_num_page = ''; // Текст для количества страниц. {current} заменится текущей, а {last} последней. Пример: 'Страница {current} из {last}' = Страница 4 из 60
  $num_pages = 5; // сколько ссылок показывать
  $stepLink = ''; // после навигации ссылки с определенным шагом (значение = число (какой шаг) или '', если не нужно показывать). Пример: 1,2,3...10,20,30
  $dotright_text = '…'; // промежуточный текст "до".
  $dotright_text2 = '…'; // промежуточный текст "после".
  $backtext = ' '; // текст "перейти на предыдущую страницу". Ставим '', если эта ссылка не нужна.
  $nexttext = ' '; // текст "перейти на следующую страницу". Ставим '', если эта ссылка не нужна.
  $first_page_text = ''; // текст "к первой странице" или ставим '', если вместо текста нужно показать номер страницы.
  $last_page_text = ''; // текст "к последней странице" или пишем '', если вместо текста нужно показать номер страницы.
  /* ================ Конец Настроек ================ */ 

  global $wp_query;
  $posts_per_page = (int) $wp_query->query_vars[posts_per_page];
  $paged = (int) $wp_query->query_vars[paged];
  $max_page = $wp_query->max_num_pages;

  if($max_page <= 1 ) return false; //проверка на надобность в навигации

  if(empty($paged) || $paged == 0) $paged = 1;

  $pages_to_show = intval($num_pages);
  $pages_to_show_minus_1 = $pages_to_show-1;

  $half_page_start = floor($pages_to_show_minus_1/2); //сколько ссылок до текущей страницы
  $half_page_end = ceil($pages_to_show_minus_1/2); //сколько ссылок после текущей страницы

  $start_page = $paged - $half_page_start; //первая страница
  $end_page = $paged + $half_page_end; //последняя страница (условно)

  if($start_page <= 0) $start_page = 1;
  if(($end_page - $start_page) != $pages_to_show_minus_1) $end_page = $start_page + $pages_to_show_minus_1;
  if($end_page > $max_page) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = (int) $max_page;
  }

  if($start_page <= 0) $start_page = 1;

  $out='';//выводим навигацию
    $out.= $before."<div class='wp-pagenavi'>\n";
        if ($text_num_page){
          $text_num_page = preg_replace ('!{current}|{last}!','%s',$text_num_page);
          $out.= sprintf ("<span class='pages'>$text_num_page</span>",$paged,$max_page);
        }

        if ($backtext && $paged!=1) $out.= '<a href="'.get_pagenum_link(($paged-1)).'" class="prev">'.$backtext.'</a>';

        if ($start_page >= 2 && $pages_to_show < $max_page) {
          $out.= '<a href="'.get_pagenum_link().'">'. ($first_page_text?$first_page_text:1) .'</a>';
          if($dotright_text && $start_page!=2) $out.= '<span class="extend">'.$dotright_text.'</span>';
        }

        for($i = $start_page; $i <= $end_page; $i++) {
          if($i == $paged) {
            $out.= '<span class="current">'.$i.'</span>';
          } else {

            $out.= '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
          }
        }

        //ссылки с шагом
        if ($stepLink && $end_page < $max_page){
          for($i=$end_page+1; $i<=$max_page; $i++) {
            if($i % $stepLink == 0 && $i!==$num_pages) {
              if (++$dd == 1) $out.= '<span class="extend">'.$dotright_text2.'</span>';
              $out.= '<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
            }
          }
        }

        if ($end_page < $max_page) {
          if($dotright_text && $end_page!=($max_page-1)) $out.= '<span class="extend">'.$dotright_text2.'</span>';
          $out.= '<a href="'.get_pagenum_link($max_page).'">'. ($last_page_text?$last_page_text:$max_page) .'</a>';
        }

        if ($nexttext && $paged!=$end_page) $out.= '<a href="'.get_pagenum_link(($paged+1)).'" class="next">'.$nexttext.'</a>';

    $out.= "</div>".$after."\n";
  if ($echo) echo $out;
  else return $out;
}
//пагинация
?>