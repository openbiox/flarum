Hey <?php echo $user->username; ?>!

<?php echo $blueprint->reply->user->username; ?> replied to your post (#<?php echo $blueprint->post->number; ?>) in <?php echo $blueprint->post->discussion->title; ?>.

<?php echo app()->url(); ?>/d/<?php echo $blueprint->reply->discussion_id; ?>/<?php echo $blueprint->reply->number; ?>


---

<?php echo strip_tags($blueprint->reply->contentHtml); ?>

