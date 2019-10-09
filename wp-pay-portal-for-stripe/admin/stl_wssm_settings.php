<div class="stl-col-md-12 stl-col-sm-12 stl-col-xs-12 sppage">
    <div class="stl-row">
        <p class="sp_title"><?php _e( 'Settings', 'wp_stripe_submang' ); ?></p>
        <div class="stl-container-fluid">
            <div class="stl-row ors-columns-outer">
                <?php
                if(isset($_POST['stlwssm_submit']))
                {
                    $wssm_test_client_id = (isset($_POST['wssm_test_client_id']))?$_POST['wssm_test_client_id']:'';
                    $wssm_test_public_key = (isset($_POST['wssm_test_public_key']))?$_POST['wssm_test_public_key']:'';
                    $wssm_test_secret_key = (isset($_POST['wssm_test_secret_key']))?$_POST['wssm_test_secret_key']:'';
                    $wssm_test_product_id = (isset($_POST['wssm_test_product_id']))?$_POST['wssm_test_product_id']:'';
                    update_option( 'wssm_test_client_id', $wssm_test_client_id );
                    update_option( 'wssm_test_public_key', $wssm_test_public_key );
                    update_option( 'wssm_test_secret_key', $wssm_test_secret_key );
                    update_option( 'wssm_test_product_id', $wssm_test_product_id );

                    $wssm_live_client_id = (isset($_POST['wssm_live_client_id']))?$_POST['wssm_live_client_id']:'';
                    $wssm_live_public_key = (isset($_POST['wssm_live_public_key']))?$_POST['wssm_live_public_key']:'';
                    $wssm_live_secret_key = (isset($_POST['wssm_live_secret_key']))?$_POST['wssm_live_secret_key']:'';
                    $wssm_live_product_id = (isset($_POST['wssm_live_product_id']))?$_POST['wssm_live_product_id']:'';
                    update_option( 'wssm_live_client_id', $wssm_live_client_id );
                    update_option( 'wssm_live_public_key', $wssm_live_public_key );
                    update_option( 'wssm_live_secret_key', $wssm_live_secret_key );
                    update_option( 'wssm_live_product_id', $wssm_live_product_id );

                    $wssm_stripe_mode = (isset($_POST['wssm_stripe_mode']))?$_POST['wssm_stripe_mode']:'test';
                    update_option( 'wssm_stripe_mode', $wssm_stripe_mode );

                    $wssm_stripe_cancel = (isset($_POST['wssm_stripe_cancel']))?$_POST['wssm_stripe_cancel']:'immediately';
                    update_option( 'wssm_stripe_cancel', $wssm_stripe_cancel );

                    $wssm_stripe_cancel_msg = (isset($_POST['wssm_stripe_cancel_msg']))?$_POST['wssm_stripe_cancel_msg']:'immediately';
                    update_option( 'wssm_stripe_cancel_msg', $wssm_stripe_cancel_msg );

                    $wssm_stripe_pay_duedays = (isset($_POST['wssm_stripe_pay_duedays']))?$_POST['wssm_stripe_pay_duedays']:'30';
                    update_option( 'wssm_stripe_pay_duedays', $wssm_stripe_pay_duedays );

                    $page_actinfo = (isset($_POST['page_actinfo']))?$_POST['page_actinfo']:'';
                    $page_card = (isset($_POST['page_card']))?$_POST['page_card']:'';
                    $page_invoice = (isset($_POST['page_invoice']))?$_POST['page_invoice']:'';
                    $page_sub = (isset($_POST['page_sub']))?$_POST['page_sub']:'';
                    $page_addsub = (isset($_POST['page_addsub']))?$_POST['page_addsub']:'';

                    update_option( 'wssm_stripe_page_acounttinfo', $page_actinfo );
                    update_option( 'wssm_stripe_page_card', $page_card );
                    update_option( 'wssm_stripe_page_invoice', $page_invoice );
                    update_option( 'wssm_stripe_page_subscription', $page_sub );
                    update_option( 'wssm_stripe_page_addsubscription', $page_addsub );

                }
                $wssm_test_client_id = get_option('wssm_test_client_id','');
                $wssm_test_public_key = get_option('wssm_test_public_key','');
                $wssm_test_secret_key = get_option('wssm_test_secret_key','');
                $wssm_test_product_id = get_option('wssm_test_product_id','');

                $wssm_live_client_id = get_option('wssm_live_client_id','');
                $wssm_live_public_key = get_option('wssm_live_public_key','');
                $wssm_live_secret_key = get_option('wssm_live_secret_key','');
                $wssm_live_product_id = get_option('wssm_live_product_id','');

                $wssm_stripe_mode = get_option('wssm_stripe_mode','test');
                $wssm_stripe_cancel = get_option('wssm_stripe_cancel','immediately');
                $wssm_stripe_cancel_msg = get_option('wssm_stripe_cancel_msg','Subscription canceled');
                $wssm_stripe_pay_duedays = get_option('wssm_stripe_pay_duedays','30');

                $page_actinfo = get_option('wssm_stripe_page_acounttinfo','');
                $page_card = get_option('wssm_stripe_page_card','');
                $page_invoice = get_option('wssm_stripe_page_invoice','');
                $page_sub = get_option('wssm_stripe_page_subscription','');
                $page_addsub = get_option('wssm_stripe_page_addsubscription','');
                // $wssm_stripe_mode = ($wssm_stripe_mode =='')?'test':$wssm_stripe_mode;
                ?>
                <form action="" class="form-horizontal" method="post" id="stl_save_infdata">
                    <div class="stl-col-md-6">
                        <h4 class="sp_subtitle"><?php _e( 'Stripe Test Information', 'wp_stripe_management' ); ?></h4>
                        
                        <div class="stl-col-md-12 stl-form-group">
                            <label for="departmentReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Client ID', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_test_client_id" type="text" id="wssm_test_client_id" value="<?php echo $wssm_test_client_id; ?>">
                            </div>
                        </div>
                        
                       
                        <div class="stl-col-md-12 stl-form-group">
                            <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Public Key', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_test_public_key" type="text" id="wssm_test_public_key" value="<?php echo $wssm_test_public_key; ?>">
                            </div>
                        </div>
                        
                        
                        <div class="stl-col-md-12 stl-form-group">
                            <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Secret Key', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_test_secret_key" type="password" id="wssm_test_secret_key" value="<?php echo $wssm_test_secret_key; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="stl-col-md-6">
                        <h4 class="sp_subtitle"><?php _e( 'Stripe Live Information', 'wp_stripe_management' ); ?></h4>
                        <div class="stl-col-md-12 stl-form-group">
                            <label for="departmentReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Client ID', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_live_client_id" type="text" id="wssm_live_client_id" value="<?php echo $wssm_live_client_id; ?>">
                            </div>
                        </div>

                        <div class="stl-col-md-12 stl-form-group">
                            <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Public Key', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_live_public_key" type="text" id="wssm_live_public_key" value="<?php echo $wssm_live_public_key; ?>">
                            </div>
                        </div>

                        <div class="stl-col-md-12 stl-form-group">
                            <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Secret Key', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input class="stl-form-control" name="wssm_live_secret_key" type="password" id="wssm_live_secret_key" value="<?php echo $wssm_live_secret_key; ?>">
                            </div>
                        </div>
                    </div>
 
                    <div class="stl-col-md-6">
                        <div class="stl-col-md-12 stl-form-group">
                            <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Stripe Mode', 'wp_stripe_management' ); ?></label>
                            <div class="stl-col-md-9">
                                <input name="wssm_stripe_mode" id="wssm_stripe_mode_test" type="radio" value="test" <?php echo ($wssm_stripe_mode == 'test')?'checked':''; ?> > <labe for="wssm_stripe_mode_test"><?php _e( 'Test', 'wp_stripe_management' ); ?></labe>
                                <input name="wssm_stripe_mode" id="wssm_stripe_mode_live" type="radio" value="live" <?php echo ($wssm_stripe_mode == 'live')?'checked':''; ?> > <labe for="wssm_stripe_mode_live"><?php _e( 'Live', 'wp_stripe_management' ); ?></labe>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="stl-col-md-12" style="clear: both;">
                        <h4 class="sp_subtitle"><?php _e( 'Subscription Cancel', 'wp_stripe_management' ); ?></h4>
                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="jobTitleReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Cancel type', 'wp_stripe_management' ); ?></label>
                                <div class="stl-col-md-9">
                                    <input name="wssm_stripe_cancel" id="wssm_stripe_cancel1" type="radio" value="immediately" <?php echo ($wssm_stripe_cancel == 'immediately')?'checked':''; ?> > <labe for="wssm_stripe_cancel1"><?php _e( 'Cancelled immediately', 'wp_stripe_management' ); ?></labe>
                                    <input name="wssm_stripe_cancel" id="wssm_stripe_cancel2" type="radio" value="endofcycle" <?php echo ($wssm_stripe_cancel == 'endofcycle')?'checked':''; ?> > <labe for="wssm_stripe_cancel2"><?php _e( 'End of the billing cycle', 'wp_stripe_management' ); ?></labe>
                                </div>
                            </div>
                        </div>
                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Cancellation Message', 'wp_stripe_management' ); ?></label>
                                <div class="stl-col-md-9">
                                    <input class="stl-form-control" name="wssm_stripe_cancel_msg" type="text" id="wssm_stripe_cancel_msg" value="<?php echo $wssm_stripe_cancel_msg; ?>">
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="stl-col-md-12" style="clear: both;">
                        <h4 class="sp_subtitle"><?php _e( 'Invoicing', 'wp_stripe_management' ); ?></h4>
                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-3 control-label"><?php _e( 'Due days', 'wp_stripe_management' ); ?></label>
                                <div class="stl-col-md-4">
                                    <input class="stl-form-control" name="wssm_stripe_pay_duedays" type="number" id="wssm_stripe_pay_duedays" value="<?php echo $wssm_stripe_pay_duedays; ?>">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="stl-col-md-12" style="clear: both;">
                        <h4 class="sp_subtitle"><?php _e( 'Pages', 'wp_stripe_management' ); ?></h4>
                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-4 control-label"><?php _e( 'Account Info', 'wp_stripe_management' ); ?>
                                        <span class="stl-small">[WSSM_STRIPE_MANAGRMENT]</span>
                                </label>
                                <div class="stl-col-md-8">
                                    <select name="page_actinfo" class="stl-form-control">
                                        <option value=""><?php _e( 'Choose page', 'wp_stripe_management' ); ?></option>
                                        <?php
                                            $args = array('sort_order' => 'asc','sort_column' => 'post_title','post_type' => 'page','post_status' => 'publish'); 
                                            $wppages = get_pages();
                                            if($wppages){
                                                foreach($wppages as $wppage)
                                                {
                                                    $selected = ($wppage->post_name == $page_actinfo)?'selected':'';
                                                    echo "<option value='".$wppage->post_name."' ".$selected.">".$wppage->post_title."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-4 control-label"><?php _e( 'Payment Methods', 'wp_stripe_management' ); ?>
                                        <span class="stl-small">[WSSM_STRIPE_CARD]</span>
                                </label>
                                <div class="stl-col-md-8">
                                    <select name="page_card" class="stl-form-control">
                                        <option value=""><?php _e( 'Choose page', 'wp_stripe_management' ); ?></option>
                                        <?php
                                            $args = array('sort_order' => 'asc','sort_column' => 'post_title','post_type' => 'page','post_status' => 'publish'); 
                                            $wppages = get_pages();
                                            if($wppages){
                                                foreach($wppages as $wppage)
                                                {
                                                    $selected = ($wppage->post_name == $page_card)?'selected':'';
                                                    echo "<option value='".$wppage->post_name."' ".$selected.">".$wppage->post_title."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-4 control-label"><?php _e( 'Invoices', 'wp_stripe_management' ); ?>
                                    <span class="stl-small">[WSSM_STRIPE_INVOICE]</span>
                                </label>
                                <div class="stl-col-md-8">
                                    <select name="page_invoice" class="stl-form-control">
                                        <option value=""><?php _e( 'Choose page', 'wp_stripe_management' ); ?></option>
                                        <?php
                                            $args = array('sort_order' => 'asc','sort_column' => 'post_title','post_type' => 'page','post_status' => 'publish'); 
                                            $wppages = get_pages();
                                            if($wppages){
                                                foreach($wppages as $wppage)
                                                {
                                                    $selected = ($wppage->post_name == $page_invoice)?'selected':'';
                                                    echo "<option value='".$wppage->post_name."' ".$selected.">".$wppage->post_title."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-4 control-label"><?php _e( 'Subscriptions', 'wp_stripe_management' ); ?>
                                    <span class="stl-small">[WSSM_STRIPE_SUBSCRIPTION]</span>
                                </label>
                                <div class="stl-col-md-8">
                                    <select name="page_sub" class="stl-form-control">
                                        <option value=""><?php _e( 'Choose page', 'wp_stripe_management' ); ?></option>
                                        <?php
                                            $args = array('sort_order' => 'asc','sort_column' => 'post_title','post_type' => 'page','post_status' => 'publish'); 
                                            $wppages = get_pages();
                                            if($wppages){
                                                foreach($wppages as $wppage)
                                                {
                                                    $selected = ($wppage->post_name == $page_sub)?'selected':'';
                                                    echo "<option value='".$wppage->post_name."' ".$selected.">".$wppage->post_title."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="stl-col-md-6">
                            <div class="stl-col-md-12 stl-form-group">
                                <label for="departmentReg" id="label" class="stl-col-md-4 control-label"><?php _e( 'Add Subscriptions', 'wp_stripe_management' ); ?>
                                    <span class="stl-small">[WSSM_STRIPE_ADDSUBSCRIPTION]</span>
                                </label>
                                <div class="stl-col-md-8">
                                    <select name="page_addsub" class="stl-form-control">
                                        <option value=""><?php _e( 'Choose page', 'wp_stripe_management' ); ?></option>
                                        <?php
                                            $args = array('sort_order' => 'asc','sort_column' => 'post_title','post_type' => 'page','post_status' => 'publish'); 
                                            $wppages = get_pages();
                                            if($wppages){
                                                foreach($wppages as $wppage)
                                                {
                                                    $selected = ($wppage->post_name == $page_addsub)?'selected':'';
                                                    echo "<option value='".$wppage->post_name."' ".$selected.">".$wppage->post_title."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stl-form-group stl-col-md-12 stl-text-center">
                        <br><input type="submit" name="stlwssm_submit" class="stl-btn stl-btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
