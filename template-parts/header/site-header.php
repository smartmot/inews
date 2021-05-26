<header role="banner">
    <div class="p_r w_f h_150" id="bannerx">
        <div class="w_f lh_150 box-s1 zx_4 bc_b" id="hdz">
            <div class="bc_w w_f mobihi">
                <div class="h_25 lh_25" style="background-color: #f6f6f6">
                    <div class="cw lh_25 lh_20">
                        <div class="ds_f">
                            <div class="flx"></div>
                            <div>
                                <a class="td_n pr_5 pl_5 fs_13 c_b ac_l hc_l ds_b" href="<?php echo site_url()."/privacy-policy" ; ?>">Privacy Policy</a>
                            </div>
                            <div>
                                <a class="td_n pr_5 pl_5 fs_13 c_b ac_l hc_l ds_b" href="<?php echo site_url()."/terms" ; ?>">Terms of service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h_75 lh_75 w_f cw">
                    <div class="pr_15 pl_15">
                        <a href="<?php echo site_url(); ?>" class="h_75 fs_20 fw_b td_n"><?php echo explode(" ", get_bloginfo("name"))[0]; ?>&nbsp;<span class="pr_5 pl_5 pt_5 pb_5 bc_r c_w"><?php echo explode(" ", get_bloginfo("name"))[1]; ?></span></a>
                    </div>
                </div>
            </div>
            <div class="cw h_50">
                <div class="w_f h_50">
                    <div class="pr_10 pl_10 h_50">
                        <div class="w_f h_50 ds_f">
                            <div class="lh_50 mobieff">
                                <div class="ds_ib menux">
                                    <div class="menux_i">
                                        <a href="<?php echo site_url(); ?>">
                                            <span class="fa fa-home"></span>
                                        </a>
                                        <?php
                                        foreach (get_categories() as $cat){
                                            ?>
                                            <a href="<?php echo site_url()."/category/".$cat->slug; ?>" class="<?php echo inews_first_slug(4) == $cat->slug ? "active" : ""; ?>">
                                                <?php echo $cat->name; ?>
                                            </a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo site_url()."/about" ; ?>" class="<?php echo inews_first_slug(3) == "about" ? "active" : ""; ?>">เกี่ยวกับ</a>
                                        <a href="<?php echo site_url()."/contact" ; ?>" class="<?php echo inews_first_slug(3) == "contact" ? "active" : ""; ?>">ติดต่อโฆษณา</a>
                                        <div class="mobshow">
                                            <div class="pr_10 pl_10">
                                                <div class="h_1 bc_g"></div>
                                            </div>
                                            <a href="<?php echo site_url()."/privacy-policy" ; ?>" class="<?php echo inews_first_slug(3) == "privacy-policy" ? "active" : ""; ?>">Privacy Policy</a>
                                            <a href="<?php echo site_url()."/terms" ; ?>" class="<?php echo inews_first_slug(3) == "terms" ? "active" : ""; ?>">Terms of service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flx t_a_c mobshow">
                                <a href="<?php echo site_url(); ?>" class="h_50 fs_20 fw_b td_n lh_50"><span class="c_w"><?php echo explode(" ", get_bloginfo("name"))[0]; ?></span>&nbsp;<span class="pr_5 pl_5 pt_5 pb_5 bc_r c_w"><?php echo explode(" ", get_bloginfo("name"))[1]; ?></span></a>
                            </div>
                            <div class="w_40 csr_p p-r" id="menuer">
                                <div class="h_10 w_40"></div>
                                <div class="h_5 w_40 bc_w p-a xyz1"></div>
                                <div class="h_7 w_40"></div>
                                <div class="h_5 w_40 bc_w p-a xyz2"></div>
                                <div class="h_7 w_40"></div>
                                <div class="h_5 w_40 bc_w p-a xyz3"></div>
                                <div class="h_10 w_40"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100){
            $("#hdz").addClass("_fixed");
        }else{
            $("#hdz").removeClass("_fixed");
        }
    });
    $("#menuer").click(function (){
        $(this).children(".h_5.w_40.bc_w").toggleClass("rte");
        $(".menux").slideToggle("fast");
    });
</script>