<?php

if (!defined('ABSPATH')) {
    exit;
}

class Hide_Rest_Api_Functions
{
    public function __construct()
    {
        add_filter('rest_endpoints', [$this, 'hide_rest_api_conditionally']);
    }

    public function hide_rest_api_conditionally($endpoints)
    {
        $options = get_option('hide_rest_api_options', []);
        $routes_map = [
            '_show_users_api'         => '/wp/v2/users',
            '_show_posts_api'         => '/wp/v2/posts',
            '_show_pages_api'         => '/wp/v2/pages',
            '_show_media_api'         => '/wp/v2/media',
            '_show_comments_api'      => '/wp/v2/comments',
            '_show_categories_api'    => '/wp/v2/categories',
            '_show_tags_api'          => '/wp/v2/tags',
            '_show_types_api'         => '/wp/v2/types',
            '_show_statuses_api'      => '/wp/v2/statuses',
            '_show_settings_api'      => '/wp/v2/settings',
            '_show_block_types_api'   => '/wp/v2/block-types',
            '_show_themes_api'        => '/wp/v2/themes',
            '_show_search_api'        => '/wp/v2/search',
            '_show_menu_locations_api'=> '/wp/v2/menu-locations',
            '_show_menus_api'         => '/wp/v2/menus',
        ];

        $allowed = [];

        foreach ($routes_map as $option_key => $endpoint_prefix) {
            if (!empty($options[$option_key])) {
                $allowed[] = $endpoint_prefix;
            }
        }

        foreach ($endpoints as $route => $details) {
            $keep = false;
            foreach ($allowed as $allowed_route) {
                if (strpos($route, $allowed_route) === 0) {
                    $keep = true;
                    break;
                }
            }
            if (!$keep) {
                unset($endpoints[$route]);
            }
        }

        return $endpoints;
    }
}

new Hide_Rest_Api_Functions();