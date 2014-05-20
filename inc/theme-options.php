<?php

/*
*  Create an advanced sub page called 'Footer' that sits under the General options menu
*/

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page(array(
        'title' => 'Header',
        'capability' => 'manage_options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Footer',
        'capability' => 'manage_options'
    ));
}