<div class="wrap">
<h2>Lytiks Web Analytics Plugin Configuration</h2>

<form method="post" action="options.php">
<?php settings_fields( 'lwp_options_group' ); ?>
<p>
The Lytiks Plugin will automatically insert your tracking code into your Wordpress website.  You just need to provide the unique tracking code from the Lytiks system.  Click <a href="http://go.lytiks.com/website/wordpress">here</a> to retreive the code or select "Get Tracking Code" from the Manage Account menu in <a href="http://go.lytiks.com/">Lytiks</a>.
</p
<table class="form-table">

<tr valign="top">
<th scope="row">Lytiks Tracking Code</th>
<td><input type="text" name="lwp_tracking_code" value="<?php echo get_option('lwp_tracking_code'); ?>" /></td>
</tr>
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="lwp_tracking_code" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>