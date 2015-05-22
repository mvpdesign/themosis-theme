<?php

/**
 * application.php - Write your custom code below.
 */

//add_action('admin_menu', 'removeMenus');
function removeMenus()
{
    remove_menu_page('edit-comments.php');
}
