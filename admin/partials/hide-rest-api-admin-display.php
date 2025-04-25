<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://helloeveryone.me/
 * @since      1.0.0
 *
 * @package    Hide_Rest_Api
 * @subpackage Hide_Rest_Api/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<style>
	#wpcontent {
		padding-left: 0;
	}
</style>

<div class=" flex-column gap-s bg-dark-grey-2 text-white padding-l">
<img class="max-width-10" src="https://helloeveryone.me/wp-content/uploads/HelloEveryone-Logo-300x79.webp" alt="Logo Hello Everyone">	
	<address class="text-xs flex-row items-middle gap-xs">
		Desarrollado por&nbsp;<a class="text-white transition-global" href="https://helloeveryone.me" rel="noreferrer" target="_blank">Hello Everyone</a>
	</address>
</div>
<div class="padding-l text-black">
	<h1 class="text-l font-700"> Opciones de <span class="underline">Hide REST API</span></h1>
    <p class="margin-top-s text-s">Aquí puedes configurar que endpoints te gustaría ocultar.</p>
	<hr class="margin-vertical-m">
	<form method="post" action="options.php">
		<p class="text-m">¿Ocultar toda la API?</p>
		<div class="flex-row gap-4xs items-middle margin-top-s">
			<input class="margin-auto" type="checkbox" name="_hide_full_api" id="_hide_full_api" value="1" <?php checked(get_option('_activate_for_products'), 1); ?>>
			<label for="_hide_full_api" class="text-s">Restringir todo</label>
		</div>
        <div class="notice notice-warning margin-left-zero margin-top-s">
            <p>
                <strong>Por seguridad, siempre es recomendable ocultar toda la API</strong>
            </p>
        </div>
		<hr class="margin-vertical-m">
		<p class="text-m">¿Ocultar solo usuarios?</p>
		<div class="flex-row gap-4xs items-middle margin-top-s">
			<input type="checkbox" name="_hide_users_api" id="_hide_users_api" value="1" <?php checked(get_option('_activate_for_posts'), 1); ?>>
			<label for="_hide_users_api" class="text-s">Restringir usuarios</label>
		</div>
		<hr class="margin-vertical-m">
		<p class="text-m">¿Ocultar solo entradas?</p>
		<div class="flex-row gap-4xs items-middle margin-top-s">
			<input type="checkbox" name="_hide_posts_api" id="_hide_posts_api" value="1" <?php checked(get_option('_activate_for_pages'), 1); ?>>
			<label for="_hide_posts_api" class="text-s">Restringir entradas</label>
		</div>
		<hr class="margin-vertical-m">
        <p class="text-m">¿Ocultar solo páginas?</p>
		<div class="flex-row gap-4xs items-middle margin-top-s">
			<input type="checkbox" name="_hide_pages_api" id="_hide_pages_api" value="1" <?php checked(get_option('_activate_for_pages'), 1); ?>>
			<label for="_hide_pages_api" class="text-s">Restringir páginas</label>
		</div>
		<hr class="margin-vertical-m">
		<?php
			settings_fields('hide_rest_api_options_group');
			do_settings_sections('hide-rest-api');
			submit_button();
		?>
	</form>
</div>