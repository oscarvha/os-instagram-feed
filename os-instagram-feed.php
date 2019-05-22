<?php
/*
 * Plugin Name: OS instagram Feed
 * Plugin URI: bibliotecadeterminus.xyz
 * Description: Añade un Feed de instagram
 * Version: 1.0.0
 * Author: Oscar Sanchez
 * Author URI: bibliotecadeterminus.xyz
 * Requires at least: 4.0
 * Tested up to: 4.3
 *
 * Text Domain: wpos-additional
 * Domain Path: /languages/
 */
include 'Model/IntsagramScrap.php';

function getMediasInstagramByAccount($account, $limit = 16)
{
    $medias = get_transient($account.'_feed');

    if($medias) {

        return $medias;
    }

    $instagramScrapping = new InstagramScrap($account);
    $medias = $instagramScrapping->getMedias($limit);

   set_transient($account.'_feed',$medias,86400);

    return $medias;

}