<?php

get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>

<?php if (is_user_logged_in()) { ?>
    <a type="button" class="btn btn-info btn-lg login_button" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php } else { ?>
    <button type="button" id="show_login" class="btn btn-info btn-lg login_button" data-toggle="modal" data-target="#login">Login</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button>
<?php } ?>


    <div id="login" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Log in</h4>
                </div>
                <div class="modal-body">
                    <form id="login" action="login" method="post">
                        <h1>Site Login</h1>
                        <p class="status"></p>
                        <label for="username">Username</label>
                        <input id="username" type="text" name="username" required>
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                        <input class="submit_button" type="submit" value="Login" name="submit">
                        <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
                        <a class="close" href="">(close)</a>
                        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sign Up</h4>
                </div>
                <div class="modal-body" style="padding: 75px;">
                    <div class="vb-registration-form">
                        <form class="form-horizontal registration-form" role="form">
                            <div class="form-group">
                                <label for="vb_name" class="sr-only">Your Name</label>
                                <input type="text" name="vb_name" id="vb_name" value="" placeholder="Your Name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="vb_email" class="sr-only">Your Email</label>
                                <input type="email" name="vb_email" id="vb_email" value="" placeholder="Your Email" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="vb_nick" class="sr-only">Your Nickname</label>
                                <input type="text" name="vb_nick" id="vb_nick" value="" placeholder="Your Nickname" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="vb_username" class="sr-only">Choose Username</label>
                                <input type="text" name="vb_username" id="vb_username" value="" placeholder="Choose Username" class="form-control" required/>
                                <span class="help-block">Please use only a-z,A-Z,0-9,dash and underscores, minimum 5 characters</span>
                            </div>
                            <div class="form-group">
                                <label for="vb_pass" class="sr-only">Choose Password</label>
                                <input type="password" name="vb_pass" id="vb_pass" value="" placeholder="Choose Password" class="form-control" minlength="8" required/>
                                <span class="help-block">Minimum 8 characters</span>
                            </div>
                            <?php wp_nonce_field('vb_new_user','vb_new_user_nonce', true, true ); ?>
                            <input type="submit" class="btn btn-primary" id="btn-new-user" value="Register" />
                        </form>
<!--                        <div class="indicator">Please wait...</div>-->
                        <div class="alert result-message"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<?php
get_footer();
