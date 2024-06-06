<?php $__env->startSection('content'); ?>

    <div class="pc-container">
        <div class="pc-content">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger my-4">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger mt-2">
                    <?php echo e(session()->get('error')); ?>

                </div>
            <?php endif; ?>


            <div class="dashboard-body__content">
                <div class="dashboard-body__item-wrapper">
                    <div class="">
                        <div>
                            <h5 class="d-flex justify-content-start">Explore Product 👌</h5>
                        </div>
                        <div class="col-12">
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    $products = $category->products;
                                ?>
                                <div class="catalog-item-wrapper mb-2">
                                    <div class="d-grid gap-2 mb-2">
                                        <strong>
                                            <p style="font-size: 11px; background: linear-gradient(90deg, #20ccb4 0%, #3f8a7f 100%); border-radius:10px; color: white"
                                               class="p-2"><?php echo e(__($category->name)); ?></p>
                                        </strong>
                                    </div>

                                </div>




                                <div class="col-12">

                                    <?php $__currentLoopData = $products->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make($activeTemplate . 'partials/products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>


                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <a style="background: linear-gradient(90deg, #000000 0%, #000000 100%); border-radius:10px; color: white"
                                       href="<?php echo e(route('category.products', ['search' => request()->search, 'slug' => slug($category->name), 'id' => $category->id])); ?>"
                                       class="btn btn-main btn-lg w-100 pill">
                                        <?php echo app('translator')->get('View All'); ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                        </svg>
                                    </a>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="empty-data text-center">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset($activeTemplateTrue . 'images/not-found.png')); ?>">
                                    </div>

                                    <h4 class="title"><?php echo app('translator')->get('No result found for "' . request()->search . '"'); ?></h4>
                                </div>
                            <?php endif; ?>
                            <?php echo e(paginateLinks($categories)); ?>

                        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make($activeTemplate . 'layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/fadded/core/resources/views/templates/basic/products.blade.php ENDPATH**/ ?>