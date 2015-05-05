<?php
add_action( 'admin_menu', 'dai_add_admin_menu' );
add_action( 'admin_init', 'dai_settings_init' );


function dai_add_admin_menu(  ) { 
  add_menu_page( 'DAI', 'Custom Settings', 'manage_options', 'dai', 'dai_options_page' );
}


function dai_settings_init(  ) { 

  register_setting( 'pluginPage', 'dai_settings' );

  add_settings_section(
    'dai_pluginPage_section', 
    __( 'Social Links', 'daintl.org' ), 
    'dai_settings_section_callback', 
    'pluginPage'
  );

  add_settings_field( 
    'facebook', 
    __( 'Facebook URL', 'daintl.org' ), 
    'facebook', 
    'pluginPage', 
    'dai_pluginPage_section' 
  );

  add_settings_field( 
    'twitter', 
    __( 'Twitter URL', 'daintl.org' ), 
    'twitter', 
    'pluginPage', 
    'dai_pluginPage_section' 
  );

  add_settings_field( 
    'linkedin', 
    __( 'LinkedIn URL', 'daintl.org' ), 
    'linkedin', 
    'pluginPage', 
    'dai_pluginPage_section' 
  );


}


function facebook(  ) { 

  $options = get_option( 'dai_settings' );
  ?>
  <input type='text' name='dai_settings[facebook]' value='<?php echo $options['facebook']; ?>' placeholder='https://www.facebook.com/user-name'>
  <?php

}


function twitter(  ) { 

  $options = get_option( 'dai_settings' );
  ?>
  <input type='text' name='dai_settings[twitter]' value='<?php echo $options['twitter']; ?>' placeholder='https://twitter.com/user-name'>
  <?php

}


function linkedin(  ) { 

  $options = get_option( 'dai_settings' );
  ?>
  <input type='text' name='dai_settings[linkedin]' value='<?php echo $options['linkedin']; ?>' placeholder='https://www.linkedin.com/company/user-name'>
  <?php

}


function dai_settings_section_callback(  ) { 

  echo __( '<div class="border-bottom">Please be sure to include the http:// in the URL.</div>', 'daintl.org' );

}


function dai_options_page(  ) { 

  ?>

  <style>

    form {
      background-color: #FFF;
      border: 1px solid #E5E5E5;
      border-radius: 5px;
      box-shadow: 0 0 15px rgba(0,0,0,0.15);
      margin: 10px 20px 0 2px;
      overflow: hidden;
    }

    form h2.header {
      background-color: #332D39;
      color: #FFF;
      line-height: 80px;
      margin: 0;
      padding: 0 20px;
    }

    h2.header img {
      height: 48px;
      vertical-align: middle;
    }

    form .container {
      padding: 0 20px;
    }

    form .pull-right {
      float: right;
      display:  inline-block;
      vertical-align:  middle;
    }

    form .custom-button {
      -webkit-appearance: none;
      appearance: none;
      background-color: #77cc6d;
      border: 0;
      color: #FFF;
      text-transform: uppercase;
      font-size: 12px;
      padding: 0;
      margin: 0;
      display: inline-block;
      line-height: 32px;
      padding: 0 20px;
      position: relative;
      top: -4px;
      border-radius: 2px;
    }

    form h3 {
      margin-bottom: 5px;
    }
    form .border-bottom {
      border-bottom: 1px solid #E5E5E5;
      padding-bottom: 5px;
    }

    form input {
      max-width: 300px;
      width: 100%;
    }

  </style>

  <form action='options.php' method='post'>
    
    <h2 class="header"><img src="<?php echo get_template_directory_uri(); ?>/public/images/DAI_logo.png" /><div class="pull-right"><input type="submit" name="submit" id="submit" class="custom-button" value="Save Changes"></div></h2>

    <div class="container">
    
      <?php
      settings_fields( 'pluginPage' );
      do_settings_sections( 'pluginPage' );
      // submit_button();
      ?>

    </div>
    
  </form>
  <?php

}

?>