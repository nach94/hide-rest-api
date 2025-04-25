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

$options = get_option('hide_rest_api_options', []);

?>



<div class=" flex-column gap-s bg-dark-grey-2 text-white padding-l">
    <img class="max-width-10" src="https://helloeveryone.me/wp-content/uploads/HelloEveryone-Logo-300x79.webp" alt="Logo Hello Everyone">
    <address class="text-xs flex-row items-middle gap-xs">
        Desarrollado por&nbsp;<a class="text-white transition-global" href="https://helloeveryone.me" rel="noreferrer" target="_blank">Hello Everyone</a>
    </address>
</div>
<div class="padding-l text-black">
    <h1 class="text-l font-700"> Opciones de <span class="underline">Hide REST API</span></h1>
    <p class="margin-top-s text-s">El plugin oculta toda la REST API de WordPress por defecto. Pero puedes habilitar algunos endpoints si así lo necesitas.</p>
    <div class="notice notice-warning margin-left-zero margin-top-s">
        <p><strong>Aún así, por seguridad, siempre es recomendable ocultar toda la API</strong></p>
    </div>
    <hr class="margin-vertical-m">
    <form id="_hide_rest_api_form" method="post" action="options.php">
        <table class="form-table widefat striped">
            <thead>
                <tr>
                    <th>Endpoint</th>
                    <th>¿Mostrar?</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th colspan="2" style="background: #e9e9e9; font-weight: bold; text-transform: uppercase;">API Full</th>
                </tr>

                <tr>
                    <th scope="row" class="text-center">
                        <label for="_hide_full_api">Hacer pública toda mi API</label>
                    </th>
                    <td class="text-center">
                        <input type="checkbox" name="hide_rest_api_options[_show_full_api]" id="_show_full_api" value="1" <?php checked(isset($options['_show_full_api']), 1); ?>>
                    </td>
                </tr>

                <!-- POST TYPES -->
                <tr>
                    <th colspan="2" style="background: #e9e9e9; font-weight: bold; text-transform: uppercase;">Post Types</th>
                </tr>

                <!-- Usuarios -->
                <tr>
                    <th scope="row">
                        <label for="_show_users_api">Usuarios <code>/users</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_users_api]" id="_show_users_api" value="1" <?php checked(isset($options['_show_users_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Entradas -->
                <tr>
                    <th scope="row">
                        <label for="_show_posts_api">Entradas <code>/posts</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_posts_api]" id="_show_posts_api" value="1" <?php checked(isset($options['_show_posts_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Páginas -->
                <tr>
                    <th scope="row">
                        <label for="_show_pages_api">Páginas <code>/pages</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_pages_api]" id="_show_pages_api" value="1" <?php checked(isset($options['_show_pages_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Medios -->
                <tr>
                    <th scope="row">
                        <label for="_show_media_api">Medios <code>/media</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_media_api]" id="_show_media_api" value="1" <?php checked(isset($options['_show_media_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Comentarios -->
                <tr>
                    <th scope="row">
                        <label for="_show_comments_api">Comentarios <code>/comments</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_comments_api]" id="_show_comments_api" value="1" <?php checked(isset($options['_show_comments_api']), 1); ?>>
                    </td>
                </tr>

                <!-- TAXONOMÍAS -->
                <tr>
                    <th colspan="2" style="background: #e9e9e9; font-weight: bold; text-transform: uppercase;">Taxonomías</th>
                </tr>

                <!-- Categorías -->
                <tr>
                    <th scope="row">
                        <label for="_show_categories_api">Categorías <code>/categories</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_categories_api]" id="_show_categories_api" value="1" <?php checked(isset($options['_show_categories_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Etiquetas -->
                <tr>
                    <th scope="row">
                        <label for="_show_tags_api">Etiquetas <code>/tags</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_tags_api]" id="_show_tags_api" value="1" <?php checked(isset($options['_show_tags_api']), 1); ?>>
                    </td>
                </tr>

                <!-- OTROS ENDPOINTS -->
                <tr>
                    <th colspan="2" style="background: #e9e9e9; font-weight: bold; text-transform: uppercase;">Otros endpoints</th>
                </tr>

                <!-- Tipos de post -->
                <tr>
                    <th scope="row">
                        <label for="_show_types_api">Tipos de post <code>/types</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_types_api]" id="_show_types_api" value="1" <?php checked(isset($options['_show_types_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Estados de posts -->
                <tr>
                    <th scope="row">
                        <label for="_show_statuses_api">Estados de posts <code>/statuses</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_statuses_api]" id="_show_statuses_api" value="1" <?php checked(isset($options['_show_statuses_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Ajustes de WordPress -->
                <tr>
                    <th scope="row">
                        <label for="_show_settings_api">Ajustes <code>/settings</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_settings_api]" id="_show_settings_api" value="1" <?php checked(isset($options['_show_settings_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Tipos de Bloques de Gutenberg -->
                <tr>
                    <th scope="row">
                        <label for="_show_block_types_api">Tipos de bloques de Gutenberg <code>/block-types</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_block_types_api]" id="_show_block_types_api" value="1" <?php checked(isset($options['_show_block_types_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Themes -->
                <tr>
                    <th scope="row">
                        <label for="_show_themes_api">Temas <code>/themes</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_themes_api]" id="_show_themes_api" value="1" <?php checked(isset($options['_show_themes_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Búsqueda -->
                <tr>
                    <th scope="row">
                        <label for="_show_search_api">Búsqueda <code>/search</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_search_api]" id="_show_search_api" value="1" <?php checked(isset($options['_show_search_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Ubicaciones de menú -->
                <tr>
                    <th scope="row">
                        <label for="_show_menu_locations_api">Ubicaciones de menús <code>/menu-locations</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_menu_locations_api]" id="_show_menu_locations_api" value="1" <?php checked(isset($options['_show_menu_locations_api']), 1); ?>>
                    </td>
                </tr>

                <!-- Menús -->
                <tr>
                    <th scope="row">
                        <label for="_show_menus_api">Menús <code>/menus</code></label>
                    </th>
                    <td>
                        <input type="checkbox" name="hide_rest_api_options[_show_menus_api]" id="_show_menus_api" value="1" <?php checked(isset($options['_show_menus_api']), 1); ?>>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <?php
                        settings_fields('hide_rest_api_options_group');
                        do_settings_sections('hide-rest-api');
                        submit_button();
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>

    </form>
</div>

<style>
    #wpcontent {
        padding-left: 0;
    }

    .form-table td,
    .form-table th {
        padding-left: 10px;
    }
</style>