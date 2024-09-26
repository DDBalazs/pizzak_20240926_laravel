<?php $__env->startSection('content'); ?>
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Összes pizzánk</h1>

    <p>
        Rendezés:
        <a href="/all/1">Név szerint növekvő</a>
        <a href="/all/2">Név szerint csökkenő</a>
        <a href="/all/3">Ár szerint növekvő</a>
        <a href="/all/4">Ár szerint csökkenő</a>
    </p>
    <table class="table table-striped">
        <tr>
            <th>Név</th>
            <th>Feltét</th>
            <th>24 cm</th>
            <th>32 cm</th>
            <th>45 cm</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($all->nev); ?></td>
            <td><?php echo e($all->feltet); ?></td>
            <td>
                <?php if($all->akcios == 1): ?>
                <span class="text-danger"><b><?php echo e($all->ar*0.9); ?> Ft</b></span>
                <?php else: ?>
                <?php echo e($all->ar); ?> Ft
                <?php endif; ?>
            </td>
            <td>
                <?php if($all->akcios == 1): ?>
                <span class="text-danger"><b><?php echo e($all->ar*1.25); ?> Ft</b></span>
                <?php else: ?>
                <?php echo e($all->ar*1.25); ?> Ft
                <?php endif; ?>
            </td>
            <td>
                <?php if($all->akcios == 1): ?>
                <span class="text-danger"><b><?php echo e($all->ar*0.9*1.50); ?> Ft</b></span>
                <?php else: ?>
                <?php echo e($all->ar*1.50); ?> Ft
                <?php endif; ?>
            </td>
            <td>
                <?php if($all->akcios == 1): ?>
                <span class="text-danger"><b>Akciós</b></span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\csoke.balazs\Desktop\szonja\resources\views/osszes.blade.php ENDPATH**/ ?>