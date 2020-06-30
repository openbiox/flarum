<?php echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>'; ?>


<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:atom="http://www.w3.org/2005/Atom">

    <channel>
        <title><![CDATA[<?php echo $title; ?>]]></title>
        <?php if(!empty($description)): ?><description><![CDATA[<?php echo $description; ?>]]></description><?php endif; ?>
        <link><![CDATA[<?php echo $link; ?>]]></link>
        <pubDate><?php echo e($pubDate->format(DateTime::RSS)); ?></pubDate>
        <atom:link href="<?php echo e($self_link); ?>" rel="self" type="application/rss+xml" />

        <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <item>
            <title><![CDATA[<?php echo $entry['title']; ?>]]></title>
            <description><![CDATA[<?php echo $entry['description']; ?>]]></description>
            <content:encoded><![CDATA[<?php echo $entry['content'] or $entry['description']; ?>]]></content:encoded>
            <link><?php echo e($entry['permalink']); ?></link>
            <guid isPermaLink="<?php echo e(!isset($entry['id'])); ?>"><?php echo e($entry['id'] or $entry['permalink']); ?></guid>
            <pubDate><?php echo e($entry['pubdate']->format(DateTime::RSS)); ?></pubDate>
        </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </channel>

</rss>
