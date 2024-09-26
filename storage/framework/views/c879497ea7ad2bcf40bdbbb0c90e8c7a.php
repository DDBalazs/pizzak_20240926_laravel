<?php $__env->startSection('content'); ?>
<div class="container py-3 fs-5">
    <h1 class="text-center display-5"><?php echo e($result -> nev); ?></h1>
    <p><?php echo e($result -> feltet); ?></p>
    <?php if($result->akcios == 1): ?>
        <p><b>Ez a pizza a készlet ereéig akciós! - 10%</b></p>
    <?php else: ?>
        <p><b>Ez a pizza nem akciós, lehet, hogy jövőhéten az lesz.</b></p>
    <?php endif; ?>
    <p>Árak:</p>
    <ul>
        <li>24 cm: <?php if($result->akcio == 1): ?>
            <s><?php echo e($result->ar); ?> Ft</s> helyett <span class="text-danger"><b><?php echo e($result->ar*0.9); ?> Ft</b></span>
        <?php else: ?>
        <?php echo e($result -> ar); ?> Ft
        <?php endif; ?></li>
        <li>32 cm: <?php if($result->akcio == 1): ?>

        <?php else: ?>
        <?php echo e($result->ar*1.25); ?> Ft
        <?php endif; ?></li>

        <li>45 cm: <?php if($result->akcio == 1): ?>

        <?php else: ?>
        <?php echo e($result->ar*1.50); ?> Ft
        <?php endif; ?></li>
    </ul>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\csoke.balazs\Desktop\szonja\resources\views/adatlap.blade.php ENDPATH**/ ?>