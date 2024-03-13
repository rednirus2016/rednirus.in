<?php $__env->startSection('title','View Categories'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    View Categories
                </div>
                <div class="card-body">
                    <?php if(count($errors) > 0): ?>
                        <div class = "alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if( Session::has('flash_message') ): ?>
                        <div class="alert alert-<?php echo e(Session::get('flash_type')); ?> alert-dismissible fade show" role="alert">
                            <b><?php echo e(Session::get('flash_message')); ?></b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if(count($categories)>0): ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>change  keywords</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->name); ?></td>
                                            <td>
                                                <?php if($item->type==1): ?>
                                                    <span class="badge badge-primary">Product</span>
                                                <?php elseif($item->type==2): ?>
                                                    <span class="badge badge-primary">Blog</span>
                                                <?php elseif($item->type==3): ?>
                                                    <span class="badge badge-primary">Site Pages</span>
                                                <?php elseif($item->type==4): ?>
                                                    <span class="badge badge-primary">Gallery</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($item->slug); ?></td>
                                            <td>
                                                <?php if($item->status == 1): ?>
                                                    <a class="badge badge-success">product</a>
                                                <?php elseif($item->status == 2): ?>
                                                    <a  class="badge badge-danger">keywords</a>
                                                    <?php else: ?>
                                                    <a  class="badge badge-warning">city</a>
                                                <?php endif; ?>    
                                            </td>
                                            <td>
                                                <form action="/admin/categories/change-status/<?php echo e($item->id); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                 <select id="type" class="form-control" name="type" required>
                                                    <option value=""> --Select Type*-- </option>
                                                    <option value="product">Product</option>
                                                    <option value="blog">Blog</option>
                                                    <option value="keywords">keywords</option>
                                                </select>
                                                <button type="submit">change</button>
                                            </form>
                                            </td>
                                            <td><img width="100px" src="/<?php echo e($item->image); ?>"></td>
                                            <td>
                                                <?php if($item->type!=3): ?>
                                                    <a href="/admin/categories/edit/<?php echo e($item->id); ?>" id="<?php echo e($item->id); ?>" class="badge badge-primary categories"><i class="fas fa-pencil-alt"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                      
                    <?php else: ?>
                        <h6>No Category Found.</h6>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/Category/view.blade.php ENDPATH**/ ?>