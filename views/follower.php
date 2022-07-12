<?php
// Instantiate Critter Class
$critter = new CritterAPI($_ENV['CRITTER_API_KEY']);

echo '<div class="py-4">';
    echo '<h2 class="text-3xl font-bold mb-5">Followers</h2>';
    echo '<div class="grid lg:grid-cols-3 gap-5 md:grid-cols-1">';
        // Loop through Followers' data from API
        foreach ($critter->getFollowers() as $followers) {
            foreach ($followers as $follower){
                include('templates/follower.php');
            }
        }
    echo '</div>';
echo '</div>';