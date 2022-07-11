<div class="shadow sm:rounded-md sm:overflow-hidden friend">
    <div class="px-4 py-3 bg-gray-100 text-left sm:px-6">
        <h3 class="text-2xl font-bold"><?php echo $friend->friend_name ?></h3>
    </div>
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        <div class="friend__image">
            <img class="mx-auto" src="<?php echo $friend->friend_image; ?>" alt="<?php echo $friend->friend_name ?>">
        </div>
        <div class="friend__bio">
            <p><strong>Biography:</strong></p>
            <p><?php echo $friend->friend_bio; ?></p>
        </div>
        <div class="friend__count">
            <p><strong>Number of Friends: </strong><?php echo number_format($friend->number_of_friends); ?></p>
        </div>
        <div class="friend__email">
            <p><strong>Email Address: </strong><a class="underline hover:text-blue-500" href="mailto:<?php echo $friend->email; ?>"><?php echo $friend->email; ?></a></p>
        </div>
    </div>
</div>