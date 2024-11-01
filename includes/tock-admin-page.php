<?php
  if (isset($_POST['BtnSubmit'])) {
    $domainName = !empty($_POST['tock-domain']) ? sanitize_text_field($_POST['tock-domain']) : '';

    // Global domain name used to initialize tock widget
    $is_save_successful = update_option('tock_domain_name', $domainName);

    if ($is_save_successful) {
      show_message('Successfully updated domain to: ' . $domainName);
    } else {
      show_message('An error occurred please try again or contact hospitality@tockhq.com');
    }
  } else {
?>

<div class="wrap" style="width:800px;">
  <h1>Configure the Tock widget</h1>
  <p>To use the widget you will need to add your Tock business name. This can be found in the url of your public Tock page. For example, www.exploretock.com/roister, the Tock business name is the name after the “/ “, in this case it would be <b>roister</b>. Copy your Tock business name directly from your URL and add it below. </p>
  <img style="width:800px;" src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/roister.jpg'; ?>">

  <form action="" method="POST">

  <label for="tock-domain">Enter Tock business name: <input id="tock-domain" type="text" name="tock-domain" placeholder="domain" value='<?php echo get_option('tock_domain_name') ?>' /> </label>
  <input type="hidden" name="action" value="add_tock_domain">
  <input type="submit" name="BtnSubmit" value="Save" />

  </form>
</div>
<?php
}
?>
