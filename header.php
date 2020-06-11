<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta name="viewport"　
content="width=device-width, initial-scale=1.0 ">

    
<!--ヘッダー画像読み込み-->
  <?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<?php endif; ?>  
    <!--ヘッダー画像読み込み-->


    
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/webclipicon.png" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
    
    
    
    
<?php wp_head(); ?>
</head>
    
    
    
<body <?php body_class(); ?>>
<header>
  
    <!-- headbar -->
          <div class="headbar">
          <div class="headbar-left">
              <a href=""> <i class="far fa-question-circle"></i></a>
              </div>
          <div class="headbar-right">
              <div class="headbar-right-left">
                  <p>予想月収<i class="far fa-question-circle"></i><strong>￥99,841</strong></p>
              </div>
              <div class="headbar-right-right">
                  <span>はじめる</span>
              </div>
              </div>
          </div>

</header>