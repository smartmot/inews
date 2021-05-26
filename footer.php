<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #page -->

<div class="bc_b">
    <div class="cw mt_10 pb_20 pt_20">
        <div class="row">
            <div class="xl-4 lg-4 md-6 sm-12 fx_12">
                <div class="pr_15 pl_15 c_w pt_15">
                    <div class=""><?php echo get_bloginfo("name"); ?></div>
                    <div class="fs_12">Copyright &copy;2020-<?php echo date("Y"); ?></div>
                </div>
            </div>
            <div class="xl-4 lg-4 md-6 sm-12 fx_12">
                <div class="pr_15 pl_15 c_w">
                    <div class="fs_18 pt_15">ติดต่อ</div>
                    <div class="fs_14">
                        <div class="ds_f">
                            <div class="w_30 t_a_c">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="flx">
                                info@hoolynews.com
                            </div>
                        </div>
                        <div class="ds_f">
                            <div class="w_30 t_a_c">
                                <span class="fa fa-facebook"></span>
                            </div>
                            <div class="flx">
                                @hoolynews.com
                            </div>
                        </div>
                        <div class="ds_f">
                            <div class="w_30 t_a_c">
                                <span class="fa fa-instagram"></span>
                            </div>
                            <div class="flx">
                                @hoolynews
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl-4 lg-4 md-6 sm-12 fx_12">
                <div class="pr_15 pl_15 c_w">
                    <div class="fs_18 pt_15">เกี่ยวกับเรา</div>
                    <div class="fs_14">
                        <div class="ds_f">
                            <div class="w_30">
                                <span class=""></span>
                            </div>
                            <div class="flx">
                                <a class="c_w hc_l ac_l td_n" href="<?php echo site_url()."/about"; ?>">เกี่ยวกับ</a>
                            </div>
                        </div>
                        <div class="ds_f">
                            <div class="w_30">
                                <span class=""></span>
                            </div>
                            <div class="flx">
                                <a class="c_w hc_l ac_l td_n" href="<?php echo site_url()."/privacy-policy"; ?>">นโยบายความเป็นส่วนตัว</a>
                            </div>
                        </div>
                        <div class="ds_f">
                            <div class="w_30">
                                <span class=""></span>
                            </div>
                            <div class="flx">
                                <a class="c_w hc_l ac_l td_n" href="<?php echo site_url()."/contact"; ?>">ติดต่อโฆษณา</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
