<?php
/*
Plugin Name: Example Plugin
Plugin URI: 
Description: Example Plugin for youtube
Author: MTT
Author URI: http://github.com/harmamiika
Version: 0.1
*/

add_action("admin_menu", "addMenu");

function addMenu()
{
    add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu" );
    add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}
// add icon and bar placement by adding more arguments

function exampleMenu()
{
    echo "Hello world!";
}
function option1()
{
    echo "Walrus";
}