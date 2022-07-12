<?php
// Instantiate CBook Class
$cbook = new CBookAPI($_ENV['CBOOK_API_CLIENT_KEY'], $_ENV['CBOOK_API_CLIENT_SECRET']);

echo '<div class="py-4">';
    echo '<h2 class="text-3xl font-bold mb-5">Friends</h2>';
    echo '<div class="grid lg:grid-cols-3 gap-5 md:grid-cols-1">';
        // Loop through Friends data from API
        foreach ($cbook->getFriends() as $friends) {
            foreach ($friends as $friend) {
                include('templates/friend.php');
            }
        }
    echo '</div>';
echo '</div>';