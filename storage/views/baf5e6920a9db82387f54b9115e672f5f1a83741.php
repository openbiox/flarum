Hey <?php echo $user->display_name; ?>!

<?php echo $blueprint->post->user->display_name; ?> made a post in a discussion you're following: <?php echo $blueprint->post->discussion->title; ?>


To view the new activity, check out the following link:
<?php echo app()->url(); ?>/d/<?php echo $blueprint->post->discussion_id; ?>/<?php echo $blueprint->post->number; ?>


---

<?php echo strip_tags($blueprint->post->contentHtml); ?>


---

You won't receive any more notifications about this discussion until you're up-to-date.
