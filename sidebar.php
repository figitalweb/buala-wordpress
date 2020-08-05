<?php
/*
* Archivo de sidebar del sitio
*
*
*
*
* @package Buala
* @subpackage Buala sidebar
* @since 1.0
*/
?>

<aside class="sidebar">
    
    <?php 

        if( is_active_sidebar('main_sidebar') ){

            dynamic_sidebar('main_sidebar');

        } 

     ?>

</aside>