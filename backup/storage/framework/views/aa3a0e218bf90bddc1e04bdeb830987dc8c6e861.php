<?php $__env->startSection('title','View Categories'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    View Products
                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#importModal">
                        <i class="fas fa-plus"></i>
                        Import Excel
                    </a>
                </div>
                <div class="card-body">
                    <?php if( Session::has('flash_message') ): ?>
                        <div class="alert alert-<?php echo e(Session::get('flash_type')); ?> alert-dismissible fade show" role="alert">
                            <b><?php echo e(Session::get('flash_message')); ?></b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(url('/admin/products/view/search')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="pname" class="form-control" placeholder="Enter Product" required>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <button type="submit" class="btn btn-outline-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php if(count($products)>0): ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Visual Aids</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php $__currentLoopData = $item->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="badge badge-primary"><?php echo e($item2->name); ?></span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><img src="/<?php echo e($item->image); ?>" width="100px" alt=""></td>
                                            <td><?php echo e($item->price); ?></td>
                                            <td><?php echo e($item->slug); ?></td>
                                            <td>
                                                <?php if($item->status): ?>
                                                    <a href="/admin/products/change-status/<?php echo e($item->id); ?>" onclick="return confirm('Are you sure you want to change status of this Product?')" class="badge badge-success">Active</a>
                                                <?php else: ?>
                                                    <a href="/admin/products/change-status/<?php echo e($item->id); ?>" onclick="return confirm('Are you sure you want to change status of this Product?')" class="badge badge-danger">Inactive</a>
                                                <?php endif; ?>    
                                            </td>
                                            <td>
                                                <a href="/admin/products/edit/<?php echo e($item->id); ?>" class="badge badge-primary"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($products->links()); ?>

                    <?php else: ?>
                        <h6>No Products Found.</h6>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Products</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(url('/admin/products/view/import')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="document" class="col-md-4 col-form-label text-md-right">Select Excel*</label>
                            <div class="col-md-6">
                                <input id="document" type="file" name="document" required>
                            </div>
                        </div>
                        <h6 style="color:red;">
                            Excel File:<br>
                            Order - Category, Name, Description, Packing, Price, Composition, Slug.<br>
                            Do Not add any heading line.<br>
                            Incase of no value add null in the column.<br>
                        </h6>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Import Products
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/cardiacdiabeticm/public_html/pharmapcdbazaar.com/resources/views/Product/view.blade.php ENDPATH**/ ?>