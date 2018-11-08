<div class="wrap">

    <div id="icon-options-general" class="icon32"></div>
    <!-- <h1><?php// esc_attr_e( 'Heading', 'WpAdminStyle' ); ?></h1> -->
    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">

                        <button type="button" class="handlediv" aria-expanded="true">
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
                        <!-- Toggle -->

                        <h2 class="hndle"><span><?php esc_attr_e( 'Email Verifier', 'WpAdminStyle' ); ?></span>
                        </h2>

                        <div class="inside">
                            <!-- <p><?php //esc_attr_e( 'Email spam control.', 'WpAdminStyle' ); ?></p> -->
                            <!-- Insert table  -->
                            <!-- <h2><?php //esc_attr_e( 'Tables', 'WpAdminStyle' ); ?></h2> -->
                            <form method="POST" action="" name="adddomain_restrict_form">
                                <input type="hidden" name="adddomain_form_submitted" value="Y">
                                <table class="form-table">
                                    <tr valign="top">
                                        <label for="adddomain">
                   <td scope="row"><?php esc_attr_e('Add domain', 'WpAdminStyle'); ?> </td>
                 </label>
                                        <td scope="row"><input type="text" name="adddomain" id="adddomain" value="" class="regular-text" /><br></td>
                                    </tr>
                                </table>
                                <input class="button-primary" type="submit" name="adddomain_submit" value="save" />
                            </form>
                            <br class="clear" />
                            <!-- end of insert -->
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">

                    <div class="postbox">

                        <button type="button" class="handlediv" aria-expanded="true">
							<span class="screen-reader-text">Toggle panel</span>
							<span class="toggle-indicator" aria-hidden="true"></span>
						</button>
                        <!-- Toggle -->

                        <h2 class="hndle"><span><?php esc_attr_e(
									'Sidebar Content Header', 'WpAdminStyle'
								); ?></span></h2>

                        <div class="inside">
                            <p>
                                <?php esc_attr_e( 'Everything you see here, are freedoms.',
							                     'WpAdminStyle' ); ?>
                            </p>
                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables -->

            </div>
            <!-- #postbox-container-1 .postbox-container -->

        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div>
<!-- .wrap -->