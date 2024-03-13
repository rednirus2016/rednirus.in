<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
            <loc>https://www.pharmapcdbazaar.com/</loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>1.00</priority>
        </url>
   
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url($category->slug)); ?></loc>
             <lastmod><?php echo e(date('Y-m-d\Th:i:s'.'+00:00')); ?></lastmod>
            <priority>0.9</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
</urlset><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/sitemap/categories.blade.php ENDPATH**/ ?>