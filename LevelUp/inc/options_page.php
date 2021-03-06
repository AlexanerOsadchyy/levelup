<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
    register_setting( 'levelup_options', 'levelup_theme_options');
}

function theme_options_add_page() {
add_theme_page( __( 'Настройки Темы', 'WP-Unique' ), __( 'Настройки Темы', 'WP-Unique' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>




<div class="wrap">
<h2>Основные настройки сайта</h2>

    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>



<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong><?php _e( 'Настройки сохранены', 'WP-Unique' ); ?></strong></p>
</div>
<?php endif; ?>

</div>
 <div class="wrap">
<form method="post" action="options.php" id="form">
<?php settings_fields( 'levelup_options' ); ?>
<?php $options = get_option( 'levelup_theme_options' ); ?>


        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">


<div class="postbox">
<div class="inside">
<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>

    <tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Google Tag Manager</label>
        </th>
        <td>
            <textarea name="levelup_theme_options[gtm_code]" id="levelup_theme_options[gtm_code]" style="width: 100%;" class="large-text code" rows="7" placeholder="Вставьте код Google Tag Manager"><?php echo $options['gtm_code'];?></textarea>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Google Tag Manager (noscript)</label>
        </th>
        <td>
            <textarea name="levelup_theme_options[gtm_code_n]" id="levelup_theme_options[gtm_code_n]" style="width: 100%;" class="large-text code" rows="4" placeholder="Вставьте код Google Tag Manager (noscript)"><?php echo $options['gtm_code_n'];?></textarea>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Код JivoSite</label>
        </th>
        <td>
            <textarea name="levelup_theme_options[jivosite_code]" id="levelup_theme_options[jivosite_code]" style="width: 100%;" class="large-text code" rows="7" placeholder="Вставьте код JivoSite"><?php echo $options['jivosite_code'];?></textarea>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 0px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Код Binotel</label>
        </th>
        <td>
            <textarea name="levelup_theme_options[binotel_code]" id="levelup_theme_options[binotel_code]" style="width: 100%;" class="large-text code" rows="8" placeholder="Вставьте код Binotel"><?php echo $options['binotel_code'];?></textarea>
        </td>
    </tr>



<!--
    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Стоимость от <strong>58</strong> до <strong>60</strong> размера</label>
        </th>
        <td>
           <input id="levelup_theme_options[price_4]" name="levelup_theme_options[price_4]" type="text" style="width: 95%" value="<?php echo $options['price_4'];?>" size="50" class="code" placeholder="Введите стоимость" required="">
        </td>
    </tr> -->


    </tbody>
    </table>
    </div>
    </div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения"></p>


                </div>
            </div>
        </div>



</form>
 </div>
<?php
}
?>
