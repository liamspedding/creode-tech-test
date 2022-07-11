<?php
    // Autoload Classes using Composer
    require 'vendor/autoload.php';

    // Import Dotenv
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    include_once('views/layout/header.php');
?>

<?php

    // Instantiate CBook Class
    $cbook = new CBookAPI($_ENV['CBOOK_API_CLIENT_KEY'], $_ENV['CBOOK_API_CLIENT_SECRET']);

    // Loop through Friends data from API
    echo '<h2 class="text-3xl font-bold mb-5">Friends</h2>';
    echo '<div class="grid lg:grid-cols-3 gap-5 md:grid-cols-1">';
    foreach ($cbook->getFriends() as $friends) {
        foreach ($friends as $friend) {
            include('views/friend.php');
        }
    }
    echo '</div>';

    // Instantiate Critter Class
    $critter = new CritterAPI($_ENV['CRITTER_API_KEY']);

    echo '<h2 class="text-3xl font-bold mb-5">Followers</h2>';
    echo '<div class="grid lg:grid-cols-3 gap-5 md:grid-cols-1">';
    foreach ($critter->getFollowers() as $followers) {
        foreach ($followers as $follower){
            include('views/follower.php');
        }
    }
    echo '</div>';

?>

<?php include_once('views/layout/footer.php'); ?>