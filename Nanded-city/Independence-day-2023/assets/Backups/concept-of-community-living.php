<?php

/*

Template Name:concept-of-community-living.tpl

*/

?>



<?php

/**

* The template for displaying all pages.

*

* This is the template that displays all pages by default.

* Please note that this is the WordPress construct of pages

* and that other 'pages' on your WordPress site will use a

* different template.

*

* @package WordPress

* @subpackage Twenty_Ten

* @since Twenty Ten 1.0

*/



get_header('inner'); ?>



<div class="on-going complete-pbimg">
    <div class="over"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php the_title();?></h2>
            </div>

        </div>
    </div>
</div>

<!-- <div class="video-bg">
<div class="container">
<div class="row">

<div class="col-md-12 text-center">
<div id="carousel-example-generic9" class="carousel slide" data-ride="carousel">
 Indicators 
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic9" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic9" data-slide-to="1"></li>
</ol>

Wrapper for slides 
<div class="carousel-inner com-sc" role="listbox">
<?php 

$i=0;

global $wpdb;

$posts = $wpdb->prefix . "huge_it_reslider_slides"; 	

$postmeta = $wpdb->prefix . "postmeta";

$homeslider = "SELECT  * FROM $posts  where  sliderid=3 and published=1  order by ordering ASC";

$himages=$wpdb->get_results($homeslider);

foreach ($himages as $image) {



$link=$image->image_link;
$new=$image->image_link_new_tab;


if($i==0)

{

?> 

<div class="item active">

<?php } else{?>

<div class="item">

<?php }?>

<?php 
if($new==1)
{
$target='target="_blank"';
$class='';
}
else{
$target="";
$class='fancybox-youtube';
}


if($link!='')
{
?>
<a href="<?php echo $link;?>" <?php echo $target;?> class="<?php echo $class; ?>" ><img src="<?php echo $image->thumbnail; ?>" alt="<?php echo $image->description; ?>" /></a>
<?php } else {?>
<img src="<?php echo $image->thumbnail; ?>" alt="<?php echo $image->description; ?>" />
<?php }?>
</div>

<?php $i++; }?>

</div>


</div>
</div>

</div>
</div>
</div>
</div> -->

<div class="event-bg">
    <div class="container">
        <!-- <div class="row">
            <div class="l-scroll">
            <div> -->
                <div class="gallery-grids row">

                <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="https://nandedcitypune.com/republi-day-celebrations-2023/" data-title="Republi Day Celebrations">
                                    <img src="https://nandedcitypune.com/wp-content/uploads/2023/03/Republi_Day_Celebrations.jpg"
                                        title="Republic Day Celebrations" alt="Republic Day Celebrations" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="https://nandedcitypune.com/republi-day-celebrations-2023/"
                                        data-title="Republic Day Celebrations">Republic Day <br>Celebrations</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="https://nandedcitypune.com/deepotsav-celebrations-2022/" data-title="Deepotsav">
                                    <img src="https://nandedcitypune.com/wp-content/uploads/2022/11/deepotsav_thumbnail.jpg"
                                        title="Deepotsav" alt="Deepotsav" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="https://nandedcitypune.com/deepotsav-celebrations-2022/"
                                        data-title="Deepotsav">Deepotsav <br>Celebrations</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="https://nandedcitypune.com/dandiya-celebrations-2022/" data-title="Dandiya">
                                    <img src="https://nandedcitypune.com/wp-content/uploads/2022/10/dandiya_celebrations.jpg"
                                        title="Dandiya" alt="Dandiya" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="https://nandedcitypune.com/dandiya-celebrations-2022/"
                                        data-title="Dandiya">Dandiya <br>Celebrations</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="https://nandedcitypune.com/ganesh-festival-2022/"
                                    data-title="Ganesh Festival Celebrations">
                                    <img src="https://nandedcitypune.com/wp-content/uploads/2022/09/ganesh_festival_celebrations.jpg"
                                        title="Ganesh Festival Celebrations" alt="Ganesh Festival Celebrations" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href=" https://nandedcitypune.com/ganesh-festival-2022/"
                                        data-title="Ganesh Festival Celebrations">Ganesh Festival <br>Celebrations</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="?page_id=1533" data-title="Independence Day Celebrations ">
                                    <img src="https://nandedcitypune.com/wp-content/uploads/2022/08/independence-day-celebrations-2022.jpg"
                                        title="Independence Day Celebrations " alt="Independence Day Celebrations " />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="?page_id=1533" data-title="Independence Day Celebrations 2022">Independence
                                        Day <br>Celebrations</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="?page_id=1410" data-title="Pulse polio">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pulse-polio-cover.jpg"
                                        title="Pulse polio" alt="Pulse polio" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="?page_id=1410" data-title="We Care Kit Distribution">Pulse polio</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- <div class="gallery-grids row">
                    <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo effect-apollo2"><a class="example-image-link"
                                    href="?page_id=1398" data-title="Blood Donation Camp 2021">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blood-donation-cover-2021.jpg"
                                        title="Blood Donation Camp 2021" alt="Blood Donation Camp 2021" />
                                </a>
                                <figcaption class="gr-head">
                                    <a href="?page_id=1398" data-title="We Care Kit Distribution">Blood Donation
                                        Camp</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div> -->


                    <!-- 

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1307"  data-title="Ganesh Visarjan 2020">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ganesh-cover-2020.jpg" title="Ganesh Visarjan 2020" 
alt="Ganesh Visarjan 2020"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1307" data-title="We Care Kit Distribution">Ganesh Visarjan 2020</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1274"  data-title="We Care Kit Distribution">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/we-care-kit.jpg" title="We Care Kit Distribution" 
alt="We Care Kit Distribution"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1274" data-title="We Care Kit Distribution">We Care Kit Distribution</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1213"  data-title="covid containment program">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/covid-cover.jpg" title="covid containment program" 
alt="covid containment program"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1213" data-title="covid containment program">covid containment program</a></figcaption>
</figure>
</div>
</div>


<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1204"  data-title="Shot by resident of Nanded City">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resident-ncp-smallt-2020.jpg" title="Shot by resident of Nanded City" 
alt="Shot by resident of Nanded City"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1204" data-title="resident 2020">Prajakta Chiplunkar - Shot by resident of Nanded City</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1149"  data-title="Marathon Event 2020">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/marathon-event-smallt-2020.jpg" title="Marathon Event 2020" 
alt="Marathon Event 2020"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1149" data-title="Holi 2019">Marathon Event 2020</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1118"  data-title="Republic Day 2020">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/republic-dayl-small1-2020.jpg" title="Republic Day 2020" 
alt="Republic Day 2020"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1118" data-title="Holi 2019">Republic Day 2020</a></figcaption>
</figure>
</div>
</div>
<div class="clearfix"></div>
  <div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1028"  data-title="Walk for Health 2020">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kite-festival-small1-2020.jpg" title="Kite Festival 2020" 
alt="Walk for Health 2020"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1028" data-title="Holi 2019">Kite Festival 2020</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=1026"  data-title="Walk for Health 2020">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/walkhealth-small1-2020.jpg" title="Walk for Health 2020" 
alt="Walk for Health 2020"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=1026" data-title="Holi 2019"> Walk for Health 2020</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=958"  data-title="Ganesh Festival 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ganesh-small1-2019.jpg" title="Ganesh Festival 2019" 
alt="Ganesh Festival 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=958" data-title="Holi 2019">Ganesh Festival 2019</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=942"  data-title="international yoga day 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/yoga-small-2019.jpg" title="international yoga day 2019" 
alt="international yoga day 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=942" data-title="Holi 2019">International Yoga day 2019</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=944"  data-title="World Environment day 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/even-small1.jpg" title="World Environment day 2019" 
alt="World Environment day 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=944" data-title="World Environment day 2019">World Environment day 2019</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=946"  data-title="Cricket, Volley ball & Lawn Tennis Tournament 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ncp-tr-small1.jpg" title="Cricket, Volley ball & Lawn Tennis Tournament 2019" 
alt="Cricket, Volley ball & Lawn Tennis Tournament 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=946" data-title="Cricket, Volley ball & Lawn Tennis Tournament 2019">Cricket, Volley ball & Lawn <br>Tennis Tournament 2019</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=933"  data-title="Holi 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/holi1-small.jpg" title="Holi 2019" 
alt="Holi 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=933" data-title="Holi 2019">Holi 2019</a></figcaption>
</figure>
</div>
</div>

<div class="col-md-3 col-xs-6 col-sm-4 gallery-grid">
<div class="grid">
<figure class="effect-apollo effect-apollo2"><a class="example-image-link" href="?page_id=893"  data-title="Marathon event 2019">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mar-small-1.jpg" title="Marathon event 2019" 
alt="Marathon event 2019"/>
</a>
<figcaption class="gr-head">
  <a href="?page_id=893" data-title="Marathon event 2019">Marathon Event 2019</a></figcaption>
</figure>
</div>
</div> -->



                    <?php //echo do_shortcode('[ngg_images album_ids="2" display_type="photocrati-nextgen_basic_extended_album"]');?>
                <!-- </div>
            </div>
        </div> -->
    </div>
</div>






<?php get_footer(); ?>