<?php $__env->startSection('title','Edit Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-pencil-alt"></i>
                    Edit Category
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('/admin/categories/update')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if(count($errors) > 0): ?>
                            <div class = "alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name*')); ?></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($category->name); ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
                            <div class="col-md-10">
                                <textarea name="description" id="description" required ><?php echo e($category->description); ?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>
                            <div class="col-md-6">
                                <input id="image" type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Meta Title*')); ?></label>
                            <div class="col-md-6">
                                <input id="meta_title" type="text" class="form-control" name="meta_title" value="<?php echo e($category->meta_title); ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_keyword" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Meta Keyword*')); ?></label>
                            <div class="col-md-6">
                                <input id="meta_keyword" type="text" class="form-control" name="meta_keyword" value="<?php echo e($category->meta_keyword); ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Meta Description*')); ?></label>
                            <div class="col-md-6">
                                <textarea id="meta_description" type="text" class="form-control" name="meta_description" value="<?php echo e($category->meta_description); ?>" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Slug*')); ?></label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" text-lowercase name="slug" value="<?php echo e($category->slug); ?>" required>
                            </div>
                        </div>
                        <input type="hidden" name="cid" id="cid" value="<?php echo e($category->id); ?>">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Edit Category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('JS'); ?>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description',{           
            fullPage: true,
            allowedContent: true,
            autoGrow_onStartup: true,
            enterMode: CKEDITOR.ENTER_BR});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/Category/edit.blade.php ENDPATH**/ ?>