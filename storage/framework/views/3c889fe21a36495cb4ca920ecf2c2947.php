    
    <?php $__env->startSection('content'); ?>
    <div class="container py-3 fs-5">
        <h1 class="text-center display-5">Akciós pizzák</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <h2><a href="/adatlap/<?php echo e($row->id); ?>"><?php echo e($row->nev); ?></a></h2>
                    <p><?php echo e($row->feltet); ?></p>
                    <p>
                        <b>Akciós ár (24 cm):</b><br>
                        <s><?php echo e($row->ar); ?> Ft</s> helyett
                        <span class="text-danger fw-bold"><?php echo e($row->ar * 0.9); ?> Ft</span>
                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\_13AB3\pizza\resources\views/welcome.blade.php ENDPATH**/ ?>