<?php
// Instantiate Critter Class
$critter = new CritterAPI($_ENV['CRITTER_API_KEY']);

echo '<h2 class="text-3xl font-bold mb-5">Followers</h2>';
echo '<div class="grid lg:grid-cols-3 gap-5 md:grid-cols-1">';
foreach ($critter->getFollowers() as $followers) {
    foreach ($followers as $follower){
        include('templates/follower.php');
    }
}
echo '</div>';