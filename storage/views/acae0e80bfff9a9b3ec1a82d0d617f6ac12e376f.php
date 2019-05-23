<?php

echo '<?xml version="1.0" encoding="UTF-8"?>';

/* @var $urlset \Flagrow\Sitemap\Sitemap\UrlSet */

?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php $__currentLoopData = $urlset->urls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url>
        <loc><?php echo htmlspecialchars($url->location, ENT_XML1); ?></loc>
<?php if($url->lastModified): ?>
        <lastmod><?php echo $url->lastModified->toW3cString(); ?></lastmod>
<?php endif; ?>
<?php if($url->changeFrequency): ?>
        <changefreq><?php echo htmlspecialchars($url->changeFrequency, ENT_XML1); ?></changefreq>
<?php endif; ?>
<?php if($url->priority): ?>
        <priority><?php echo htmlspecialchars($url->priority, ENT_XML1); ?></priority>
<?php endif; ?>
    </url>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>
