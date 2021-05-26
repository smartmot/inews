<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="pb_10 pt_10 box-s1">
    <div class="pt_20 pr_10 pl_10">
        <div class="row">
            <?php
            $page = 0; $offset = 0;$ppp = 12;
            if (isset($_GET["page"]) && is_numeric($_GET["page"]) && $_GET["page"] > 0){
                $offset = $ppp * $_GET["page"] - $ppp;
                $page = $_GET["page"];
            }
            $blog_items = array(
                'post_type'=> 'post',
                'posts_per_page'=> $ppp,
                'status' => 'publish',
                'offset' => $offset
            );
            $sele_posts = get_posts($blog_items);
            foreach ($sele_posts as $posts){
                ?>
                <div class="xl-3 lg-4 md-6 sm-12 fx_12 p_r ts_010 post_i">
                    <div class="pb_20 pr_10 pl_10 h_f p-a w_f">
                        <div class="bc_w h_f box-s2">
                            <a href="<?php echo site_url()."/post/".$posts->ID; ?>" class="ds_b td_n p_r">
                                <div class="">
                                    <img class="w_f thumbn" src="<?php echo get_the_post_thumbnail_url($posts->ID); ?>" alt="">
                                    <div class="pr_10 pl_10 pb_15">
                                        <div>
                                            <span class="fs_12"><?php echo thai_date($posts->post_date); ?></span>
                                            <div class="h_1 bc_g"></div>
                                        </div>
                                        <div class="fs_16">
                                            <?php echo $posts->post_title; ?>
                                        </div>
                                    </div>
                                    <div class="p_a t_0 l_10 ts_b c_w">
                                        <span class="fs_14"><span class="fa fa-tag"></span></span> <span class="fs_14"><?php echo get_the_category($posts->ID)[0]->name; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="cw">
            <!---- Pagination -->
            <div class="w_f">
                <div class="pagin pt_10 pb_20">
                    <div class="pagin_i"><a href="<?php echo get_home_url() . ($page <= 2 ? "" : "?page=" . ($page -1)); ?>" class="t_d_n fm-koc"><span class="fa fa-angle-double-left"></span>&nbsp;ก่อนหน้านี้</a></div>
                    <div class="pagin_i">...</div>
                    <div class="pagin_i">
                        <?php
                        if (isset($_GET["page"]) && $_GET["page"] == 2){
                            ?>
                            <a href="<?php echo get_home_url(); ?>">
                                <?php echo $page == 0 ? "2" : ($page - 1); ?>
                            </a>
                            <?php
                        }else{
                            ?>
                            <a href="<?php echo get_home_url() . "?page=" . ($page == 0 ? 2 : ($page - 1)); ?>">
                                <?php echo $page == 0 ? "2" : ($page - 1); ?>
                            </a>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="pagin_i">
                        <?php
                        if (isset($_GET["page"]) && $_GET["page"] >= 2){
                            ?>
                            <a href="javascript:void(0)" class="cl_act t_d_n">
                                <?php echo $page == 0 ? "3" : ($page); ?>
                            </a>
                            <?php
                        }else{
                            ?>
                            <a href="<?php echo get_home_url() . "?page=" . ($page==0?$page+3:$page+1); ?>" class="<?php echo isset($_GET["page"]) ? "cl_act" : ""; ?>">
                                <?php echo $page == 0 ? "3" : ($page); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    if (count($sele_posts) < $ppp){

                    }else{
                        ?>
                        <div class="pagin_i">
                            <a href="<?php echo get_home_url() . "?page=" . ($page==0?$page+4:$page+1); ?>">
                                <?php echo $page == 0 ? "4" : ($page + 1); ?>
                            </a>
                        </div>
                        <div class="pagin_i">...</div>
                        <div class="pagin_i"><a href="<?php echo get_home_url() . "?page=" . ($page==0?2:$page+1); ?>" class="t_d_n">ต่อไป&nbsp;<span class="fa fa-angle-double-right"></span></a></div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
