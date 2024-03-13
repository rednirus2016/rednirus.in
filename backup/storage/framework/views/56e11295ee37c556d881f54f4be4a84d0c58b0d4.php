<?php $__env->startSection('meta_title',$category->meta_title); ?>
<?php $__env->startSection('meta_keywords',$category->meta_keyword); ?>
<?php $__env->startSection('meta_description',$category->meta_description); ?>
<?php $__env->startSection('meta_image'); ?>
<?php if($category->image): ?>
content="<?php echo e(Request::root()); ?>/storage/<?php echo e($category->image); ?>"
<?php else: ?>
content="<?php echo e(Request::root()); ?>/images/logo-2.png"
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class=" pb-80">
   <div class="container top">
      <div class="row">
        
         <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="table-responsives">
               <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                  <thead>
                     <tr>
                        <th>Composition</th>
                        <th>Packing Size</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><a href="<?php echo e($item->slug); ?>"><?php echo e($item->name); ?> in <?php echo e($category->name); ?></a></td>
                        <td><?php echo e($item->composition); ?></td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="query-form">
            <form name="registerForm" class="row register-form pt-2">
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> </div>
								<!-- Form Input -->
								<div id="input-email" class="col-md-12">
									<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required> </div>
								<!-- Form Input -->
								<div id="input-phone" class="col-md-12">
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> </div>
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="state" class="form-control name" placeholder="Enter Your State*" required> </div>
								<!-- Form Input -->
								<div id="input-name" class="col-md-12">
									<input type="text" name="city" class="form-control name" placeholder="Enter Your City*" required> </div>
								<!-- Form Input -->
								<div id="input-phone" class="col-md-12">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Message"></textarea>
								</div>
								<!-- Form Button -->
								<div class="col-md-12 form-btn d-flex">
									<button type="submit" class="btn btn-md btn-rose tra-black-hover submit mr-auto ml-auto">Submit Now</button>
								</div>
								<!-- Form Message -->
								<div class="col-md-12 register-form-msg text-center"> <span class="loading"></span> </div>
							</form>
            </div>
          <div class="keylists">
            <h4>Search Terms</h4>
            <ul>
               <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><a href="<?php echo e($k->slug); ?>"><?php echo e($k->name); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="widget">
                    	<h5 class="widget_title">City</h5>
                        <div class="tags">
                           <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<a href="<?php echo e($c->slug); ?>"><?php echo e($c->name); ?></a>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
              <h4><b><?php echo e($category->name); ?></b></h4>
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
               <ul>
                  <li>General <?php echo e($category->name); ?> </li>
                  <li>Orthopaedic <?php echo e($category->name); ?> </li> 
                  <li>Gynaecological <?php echo e($category->name); ?> </li>
                  <li>ENT <?php echo e($category->name); ?> </li>
                  <li>Cardiac & Diabetic <?php echo e($category->name); ?> </li>
                  <li>Derma <?php echo e($category->name); ?> </li>
                  <li>Child Care <?php echo e($category->name); ?> </li>
                  <li>Pediatric <?php echo e($category->name); ?> </li> 
                  <li>Cosmetic <?php echo e($category->name); ?> </li>
                  <li>Nutraceutical <?php echo e($category->name); ?> </li>
                  <li>Herbal <?php echo e($category->name); ?> </li>
                  <li>Urology <?php echo e($category->name); ?> </li>
                  <li>Critical Care <?php echo e($category->name); ?> </li>
                  <li>Neurology <?php echo e($category->name); ?> </li>
                  <li>Ophthalmic <?php echo e($category->name); ?> </li>
                  <li>Intensive care <?php echo e($category->name); ?> </li>
                  <li>Cardiac & Diabetic <?php echo e($category->name); ?> </li>
                  <li>Veterinary <?php echo e($category->name); ?> </li>
                  <li>Nephrology <?php echo e($category->name); ?> </li>
                  <li>Ayurvedic <?php echo e($category->name); ?> </li>
                  <li>Antibiotics <?php echo e($category->name); ?> </li>
                  <li>Antimicrobials <?php echo e($category->name); ?> </li>
                  <li>Analgesics <?php echo e($category->name); ?> </li>
                  <li>Anti-inflammatory <?php echo e($category->name); ?> </li>
                  <li>Antacids <?php echo e($category->name); ?> </li>
                  <li>Anti-allergic <?php echo e($category->name); ?> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/PublicPages/category.blade.php ENDPATH**/ ?>