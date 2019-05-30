<?php echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>'; ?>


<feed xmlns="http://www.w3.org/2005/Atom">

    <title><![CDATA[<?php echo $title; ?>]]></title>
    <subtitle><![CDATA[<?php echo $description; ?>]]></subtitle>
    <link href="<?php echo e($self_link); ?>" rel="self" />
    <link href="<?php echo e($link); ?>" />
    <id><![CDATA[<?php echo $link; ?>]]></id>
    <updated><?php echo e($pubDate->format(DateTime::ATOM)); ?></updated>

    <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <entry>
        <title><![CDATA[<?php echo $entry['title']; ?>]]></title>
        <link rel="alternate" type="text/html" href="<?php echo e($entry['permalink']); ?>"/>
        <id><?php echo e(isset($entry['id']) ? $entry['id'] : $entry['permalink']); ?></id>
        <updated><?php echo e($entry['pubdate']->format(DateTime::ATOM)); ?></updated>
        <summary><![CDATA[<?php echo $entry['description']; ?>]]></summary>
        <content type="html"><![CDATA[<?php echo isset($entry['content']) ? $entry['content'] : $entry['description']; ?>]]></content>
        <author>
            <name><?php echo e($entry['author']); ?></name>
        </author>
    </entry>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</feed>
