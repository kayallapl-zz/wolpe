<style>
section #huge_it_gallery {
    padding: <?php echo get_option('thumb_box_padding'); ?>px !important;
    min-width: 100%;
    width: 100%;
    min-height: 100%;
    text-align: center;
    margin: 0;
    margin-bottom: 30px;
<?php if(get_option("thumb_box_has_background") == 'on'){ ?>  background-color: #<?php echo get_option("thumb_box_background"); ?>; <?php } ?>
<?php if(get_option("thumb_box_use_shadow") == 'on'){ echo 'box-shadow: 0 0 10px;'; } ?>
}
#huge_it_gallery .huge_it_big_li {
<?php if(get_option("image_natural_size_thumbnail")=='resize'){?>
    overflow:hidden;
    width: 100%;
    max-width: <?php echo get_option("thumb_image_width")+2*get_option("thumb_image_border_width"); ?>px;
    height: <?php echo get_option("thumb_image_height")+2*get_option("thumb_image_border_width"); ?>px;
    margin: <?php echo get_option("thumb_margin_image"); ?>px <?php echo get_option("thumb_margin_image")-2; ?>px !important;
    border-radius: <?php echo get_option("thumb_image_border_radius"); ?>px;
    padding:0 !important;
<?php }
elseif(get_option("image_natural_size_thumbnail")=='natural'){
?>
    overflow:hidden;
    width: <?php echo get_option("thumb_image_width")+2*get_option("thumb_image_border_width"); ?>px;
    height: <?php echo get_option("thumb_image_height")+2*get_option("thumb_image_border_width"); ?>px;
    margin: <?php echo get_option("thumb_margin_image"); ?>px !important;
    border-radius: <?php echo get_option("thumb_image_border_radius"); ?>px;
    padding:0 !important;
<?php }?>
    border-radius: <?php echo get_option("thumb_image_border_radius"); ?>px;
    border: <?php echo get_option("thumb_image_border_width"); ?>px solid #<?php echo get_option("thumb_image_border_color"); ?>;
    box-sizing: border-box;
}
#huge_it_gallery li img {
<?php if(get_option("image_natural_size_thumbnail")=='resize'){?>
    width: 100%;
    max-width: <?php echo get_option("thumb_image_width"); ?>px;
    height: <?php echo get_option("thumb_image_height"); ?>px;
    margin:0 !important;
<?php }
elseif(get_option("image_natural_size_thumbnail")=='natural'){
?>
    margin:0 !important;
    max-width: none !important;
<?php }?>
    border-radius: <?php  if(get_option("thumb_image_border_width") == 0) echo get_option("thumb_image_border_radius"); else echo 0; ?>px;
}
section #huge_it_gallery li .overLayer ul li h2,
section #huge_it_gallery li .infoLayer ul li h2 {
    font-size: <?php echo get_option("thumb_title_font_size"); ?>px;
    color: #<?php echo get_option("thumb_title_font_color"); ?>;
}
section #huge_it_gallery li .infoLayer ul li p {
    color: #<?php echo get_option("thumb_title_font_color"); ?>;
}
section #huge_it_gallery li .overLayer,
section #huge_it_gallery li .infoLayer {
    -webkit-transition: opacity 0.3s linear;
    -moz-transition: opacity 0.3s linear;
    -ms-transition: opacity 0.3s linear;
    -o-transition: opacity 0.3s linear;
    transition: opacity 0.3s linear;
    width: 100%;
    max-width: <?php echo get_option("thumb_image_width")+2*get_option("thumb_image_border_width"); ?>px;
    height: <?php echo get_option("thumb_image_height")+2*get_option("thumb_image_border_width"); ?>px;
    position: absolute;
    text-align: center;
    opacity: 0;
    top: 0;
    left: 0;
    z-index: 4;
    max-height: 100%;
    border-radius: <?php  if(get_option("thumb_image_border_width") == 0) echo get_option("thumb_image_border_radius"); else echo 0; ?>px;
}
section #huge_it_gallery li a {
    position: absolute;
    display: block;
    width: 100%;
    max-width: <?php echo get_option("thumb_image_width")+2*get_option("thumb_image_border_width"); ?>px;
    height: <?php echo get_option("thumb_image_height")+2*get_option("thumb_image_border_width"); ?>px;
    top: 0;
    left: 0;
    z-index: 6;
    max-height: 100%;
}
.load_more3 {
    margin: 10px 0;
    position:relative;
    text-align:<?php if(get_option('video_ht_view7_loadmore_position') == 'left') {echo 'left';} 
					elseif (get_option('video_ht_view7_loadmore_position') == 'center') { echo 'center'; }
					elseif(get_option('video_ht_view7_loadmore_position') == 'right') { echo 'right'; }?>;
    width:100%;
}
.load_more_button3 {
    border-radius: 10px;
    display:inline-block;
    padding:5px 15px;
    font-size:<?php echo get_option('video_ht_view7_loadmore_fontsize'); ?>px !important;;
    color:<?php echo '#'.get_option('video_ht_view7_loadmore_font_color'); ?> !important;;
    background:<?php echo '#'.get_option('video_ht_view7_button_color'); ?> !important;
    cursor:pointer;
}
.load_more_button3:hover{
    color:<?php echo '#'.get_option('video_ht_view7_loadmore_font_color_hover'); ?> !important;
    background:<?php echo '#'.get_option('video_ht_view7_button_color_hover'); ?> !important;
}
.loading3 {
    display:none;
}
.paginate3{
    font-size:<?php echo get_option('video_ht_view7_paginator_fontsize'); ?>px !important;
    color:<?php echo '#'.get_option('video_ht_view7_paginator_color'); ?> !important;
    text-align: <?php echo get_option('video_ht_view7_paginator_position'); ?>;
}
.paginate3 a{
    border-bottom: none !important;
}
.icon-style3{
    font-size: <?php echo get_option('video_ht_view7_paginator_icon_size'); ?>px !important;
    color:<?php echo '#'.get_option('video_ht_view7_paginator_icon_color'); ?> !important;
}
.clear{
    clear:both;
}
section #huge_it_gallery li:hover .overLayer {
    -webkit-transition: opacity 0.3s linear;
    -moz-transition: opacity 0.3s linear;
    -ms-transition: opacity 0.3s linear;
    -o-transition: opacity 0.3s linear;
    transition: opacity 0.3s linear;
    opacity: <?php echo (get_option("thumb_title_background_transparency")/100)+0.001; ?>;
    display: block;
    background: #<?php echo get_option("thumb_title_background_color"); ?>;
    /*border-radius: <?php  if(get_option("thumb_image_border_width") == 0) echo get_option("thumb_image_border_radius"); else echo 0; ?>px;*/
}
section #huge_it_gallery li:hover .infoLayer {
    -webkit-transition: opacity 0.3s linear;
    -moz-transition: opacity 0.3s linear;
    -ms-transition: opacity 0.3s linear;
    -o-transition: opacity 0.3s linear;
    transition: opacity 0.3s linear;
    opacity: 1;
    display: block;
}
section #huge_it_gallery p {text-align:center;}
<?php	switch ($like_dislike) {
case "dislike":
    ?>
/*/////Like/Dislike Styles BEGIN//////like/dislike//////*/
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?>{
    position: absolute;
    top: 80%;
    right: 10px;
    z-index: 999;
    display: none;
    color: #<?php echo get_option('ht_thumb_likedislike_font_color'); ?>;
}
#huge_it_gallery .huge_it_big_li:hover .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?>{
    display: table;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper ,
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_dislike_wrapper {
    position:relative;
    background:<?php
			list($r,$g,$b) = array_map('hexdec',str_split(get_option('ht_thumb_likedislike_bg'),2));
				$titleopacity=get_option("ht_thumb_likedislike_bg_trans")/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>;
    display: inline-block;
    border-radius: 3px;
    font-size:0;
    cursor: pointer;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper{
    margin-right: 30px !important;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_dislike_wrapper{
    margin: 3px 3px 3px 0;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like{
    font-size:0;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like .huge_it_like_thumb {
    display:block;
    float:left;
    padding:4px 4px 4px 18px;
    font-size: 12px;
    font-weight: 700;
    position:relative;
    height: 28px;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like_count,
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_dislike_count{
    display:block;
    float:left;
    padding:4px 4px 4px 4px;
    font-size: 12px;
    font-weight: 700;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_dislike{
    font-size:0;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_dislike .huge_it_dislike_thumb {
    display:block;
    float:left;
    padding:4px 4px 4px 18px;
    font-size: 12px;
    font-weight: 700;
    position:relative;
    height: 28px;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .like_thumb_up{
    font-size: 17px;
    position:absolute;
    top: 0;
    left: -20px;
    color:#<?php echo get_option('ht_thumb_likedislike_thumb_color'); ?>;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .dislike_thumb_down{
    font-size: 17px;
    position:absolute;
    top: 0;
    left: -20px;
    color:#<?php echo get_option('ht_thumb_likedislike_thumb_color'); ?>;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_hide{
    display: none !important;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .like_thumb_active{
    color: #<?php echo get_option('ht_thumb_likedislike_thumb_active_color'); ?> !important;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .like_font_active{
    color: #<?php echo get_option('ht_thumb_active_font_color'); ?> !important;
}
@media screen and (min-width: 768px){
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper:hover .huge_it_like {
        color: #<?php echo get_option('ht_thumb_active_font_color'); ?> !important;
    }
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper:hover .like_thumb_up {
        color: #<?php echo get_option('ht_thumb_likedislike_thumb_active_color'); ?> !important;
    }
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_dislike_wrapper:hover .huge_it_dislike {
        color: #<?php echo get_option('ht_thumb_active_font_color'); ?> !important;
    }
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_dislike_wrapper:hover .dislike_thumb_down {
        color: #<?php echo get_option('ht_thumb_likedislike_thumb_active_color'); ?> !important;
    }
}
/*/////Like/Dislike Styles END//////like/dislike//////*/
<?php break;
      case 'heart':
?>
/*/////Like/Dislike Styles BEGIN//////Heart//////*/
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?>{
    position: absolute;
    top: 0;
    right: 0;
    z-index: 99;
    display: none;
}
#huge_it_gallery .huge_it_big_li:hover .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?>{
    display: block;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper  {
    position:relative;
    background:<?php
			list($r,$g,$b) = array_map('hexdec',str_split(get_option('ht_thumb_likedislike_bg'),2));
				$titleopacity=get_option("ht_thumb_likedislike_bg_trans")/100;						
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important'; 		
	?>;
    display: inline-block;
    border-radius: 8px;
    font-size:0;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper:hover{
    background: #D6D4D4;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper{
    margin: 3px;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like{
    font-size:0;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like .huge_it_like_thumb {
    display: block;
    float: left;
<?php $heartCount='';
if(get_option('ht_thumb_rating_count')=='off'){
    $heartCount="transparent";
}else{
    $heartCount='#'.get_option('ht_thumb_likedislike_font_color');
}
?>;
    color:<?php echo $heartCount; ?>;
    width: 38px;
    height: 38px;
    padding:8px 0 !important;
    font-size: 12px;
    text-align: center;
    font-weight: 700;
    position: relative;
    cursor: pointer;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like_count{
    display:none;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_like  .likeheart{
    font-size: 32px;
    color:#<?php echo get_option('ht_thumb_heart_likedislike_thumb_color'); ?>;
    position: absolute;
    top: 4px;
    left: 3px;
    transition:0.3s ease;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .like_thumb_active{
    color: #<?php echo get_option('ht_thumb_heart_likedislike_thumb_active_color'); ?> !important;
}
.huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .like_font_active{
<?php if(get_option('ht_thumb_rating_count')!='off'):?>
    color: #<?php echo get_option('ht_thumb_active_font_color'); ?> !important;
<?php endif; ?>
}
@media screen and (min-width: 768px){
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper:hover .huge_it_like_thumb {
    <?php if(get_option('ht_thumb_rating_count')!='off'):?>
        color: #<?php echo get_option('ht_thumb_active_font_color'); ?> !important;
    <?php endif; ?>
    }
    .huge_it_gallery_like_cont_<?php echo $galleryID.$pID; ?> .huge_it_gallery_like_wrapper:hover .likeheart {
        color: #<?php echo get_option('ht_thumb_heart_likedislike_thumb_active_color'); ?> !important;
    }
}
/*/////Like/Dislike Styles END//////Heart//////*/
<?php
          break;
          }?>
</style>