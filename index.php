<?php
    // Autoload Classes using Composer
    require 'vendor/autoload.php';

    // Import Dotenv
    use Dotenv\Dotenv;

    // Instantiate Dotenv class
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Add header for HTML boilerplate
    include_once('views/layout/header.php');

    // Include foreach loop for Friends
    include_once('views/friend.php');

    // Include foreach loop for Followers
    include_once('views/follower.php');

    // Add footer for HTML boilerplate
    include_once('views/layout/footer.php');