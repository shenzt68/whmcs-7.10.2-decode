<?php
/*
 * @ https://EasyToYou.eu - IonCube v10 Decoder Online
 * @ PHP 5.6
 * @ Decoder version: 1.0.4
 * @ Release: 02/06/2020
 *
 * @ ZendGuard Decoder PHP 5.6
 */

function twitter_getTwitterIntents($username, $version)
{
    require_once ROOTDIR . "/modules/social/twitter/twitterIntents.php";
    $twitter = new twitterIntents($username, $version);
    $tweets = $twitter->getTweets();
    return $tweets;
}

?>