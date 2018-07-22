<?php

get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>

    <form id="login" action="login" method="post">
        <h1>Site Login</h1>
        <p class="status"></p>
        <label for="username">Username</label>
        <input id="username" type="text" name="username">
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
        <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
        <input class="submit_button" type="submit" value="Login" name="submit">
        <a class="close" href="">(close)</a>
        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
    </form>

<?php if (is_user_logged_in()) { ?>
    <a class="login_button" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php } else { ?>
    <a class="login_button" id="show_login" href="#">Login</a>
<?php } ?>

    <div class="vb-registration-form">
        <form class="form-horizontal registraion-form" role="form">
            <div class="form-group">
                <label for="vb_name" class="sr-only">Your Name</label>
                <input type="text" name="vb_name" id="vb_name" value="" placeholder="Your Name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="vb_email" class="sr-only">Your Email</label>
                <input type="email" name="vb_email" id="vb_email" value="" placeholder="Your Email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="vb_nick" class="sr-only">Your Nickname</label>
                <input type="text" name="vb_nick" id="vb_nick" value="" placeholder="Your Nickname" class="form-control" />
            </div>
            <div class="form-group">
                <label for="vb_username" class="sr-only">Choose Username</label>
                <input type="text" name="vb_username" id="vb_username" value="" placeholder="Choose Username" class="form-control" />
                <span class="help-block">Please use only a-z,A-Z,0-9,dash and underscores, minimum 5 characters</span>
            </div>
            <div class="form-group">
                <label for="vb_pass" class="sr-only">Choose Password</label>
                <input type="password" name="vb_pass" id="vb_pass" value="" placeholder="Choose Password" class="form-control" />
                <span class="help-block">Minimum 8 characters</span>
            </div>
            <?php wp_nonce_field('vb_new_user','vb_new_user_nonce', true, true ); ?>
            <input type="submit" class="btn btn-primary" id="btn-new-user" value="Register" />
        </form>
        <div class="indicator">Please wait...</div>
        <div class="alert result-message"></div>
    </div>

<?php
get_footer();
