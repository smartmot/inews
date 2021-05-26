<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$post = get_post();
get_header();
?>

<div class="cw pt_20 pb_20">
    <div class="row box-s1">
        <div class="x_content">
            <div class="pr_20 pl_20 pt_20 pb_20">
                <div>
                    <img class="w_f" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <div>
                        <div class="fw_b">
                            <?php
                            //echo $post->post_title;

                            ?>
                        </div>
                        <div class="pb_10">
                            <div class="fs_12 pb_10">
                                <span class="fa fa-calendar-o"></span>
                                <?php echo thai_date($post->post_date); ?>
                            </div>
                            <div class="h_1 bc_g"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="fs_12">Advertisement</div>
                    <img class="w_f" src="https://wordstream-files-prod.s3.amazonaws.com/s3fs-public/styles/simple_image/public/images/media/images/banner-ads-examples-disney%2B.jpg?so0uQt68ZOFb5FN0rSzSWtfGinew87_K&itok=kJxsCgPs" alt="">
                </div>
                <div>
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="pt_5">
                    <div class="fs_12">Advertisement</div>
                    <img class="w_f" src="https://tpc.googlesyndication.com/simgad/8358793537359577914?sqp=4sqPyQQ7QjkqNxABHQAAtEIgASgBMAk4A0DwkwlYAWBfcAKAAQGIAQGdAQAAgD-oAQGwAYCt4gS4AV_FAS2ynT4&rs=AOga4qkVsNGafiGZq0LlrADnHQDUCDw59A" alt="">
                </div>
                <div class="" style="height: 10px;"></div>
                <div>
                    <div>
                        <div>
                            <span class="bc_r c_w pb_5 pr_5 pl_5" style="border-radius: 6px 6px 0 0px;">
                                <span>ร่วมแสดงความคิดเห็นกับสิ่งนี้</span>&nbsp;<span class="fa fa-comment"></span>
                            </span>
                        </div>
                        <div class="h_1 bc_r"></div>
                    </div>
                    <div class="fb-comments" data-href="<?php echo site_url()."/post/".$post->ID; ?>" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
        </div>
        <div class="x_sitebar">
            <div class="pr_20 pl_20 pt_10">
                <div class="fs_12">Advertisement</div>
                <div class="mb_15">
                    <img class="w_f" src="https://gourmetads.com/wp-content/uploads/2019/02/300x250-barilla.jpg" alt="">
                </div>

                <div class="pb_5">
                    <span class="bc_r c_w pb_5 pr_5 pl_5" style="border-radius: 6px 6px 0 0px;">เนื้อหาข้อมูลที่เกี่ยวข้อง</span>
                    <div class="h_1 bc_r"></div>
                </div>
                <div>
                    <?php
                    $related_post = inews_related_post($post->ID,5);
                    foreach ($related_post as $r_post){
                        ?>

                        <div class="bc_w mb_15">
                            <a href="<?php echo site_url()."/post/".$r_post->ID; ?>" class="td_n c_l ac_r hc_r p_r ds_b box-s1 post_i">
                                <div>
                                    <img class="w_f" src="<?php echo inews_thumb($r_post,"home-feature"); ?>" alt="">
                                </div>
                                <div class="fs_14 pr_10 pl_10 pb_10">
                                    <div>
                                        <span class="fs_12"><?php echo thai_date($r_post->post_date); ?></span>
                                        <div class="h_1 bc_g"></div>
                                    </div>
                                    <?php
                                    echo $r_post->post_title;
                                    ?>
                                </div>
                                <div class="p_a t_5 l_10 ts_b c_w ds_i fs_12">
                                    <span class="fa fa-tag"></span>&nbsp;<?php echo get_the_category($r_post->ID)[0]->name; ?>
                                </div>
                            </a>
                        </div>

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
