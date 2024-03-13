<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
            <loc>https://www.pharmapcdbazaar.com/</loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>1.00</priority>
        </url>
    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($page->id !=5): ?>
        <url>
            <loc><?php echo e(url($page->slug)); ?></loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>0.80</priority>
        </url>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url($category->slug)); ?></loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>0.9</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url($product->slug)); ?></loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>0.64</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url($blog->slug)); ?></loc>
              <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>0.51</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/sitemap/index.blade.php ENDPATH**/ ?>