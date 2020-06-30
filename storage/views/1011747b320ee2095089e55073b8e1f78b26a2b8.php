Hey <?php echo $user->username; ?>!

<?php echo $blueprint->post->user->username; ?> mentioned you in a post in <?php echo $blueprint->post->discussion->title; ?>.

<?php echo app()->url(); ?>/d/<?php echo $blueprint->post->discussion_id; ?>/<?php echo $blueprint->post->number; ?>


---

<?php echo strip_tags($blueprint->post->contentHtml); ?>

