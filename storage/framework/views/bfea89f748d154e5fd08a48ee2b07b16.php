<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <h1>KIT COLLECTIONS</h1>

    <?php $__currentLoopData = $Kits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h3><?php echo e($kit->title); ?></h3>
        <p><?php echo e($kit->description); ?></p>
        <hr>
        <br>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </span-->
</body>

</html><?php /**PATH C:\day-1\resources\views/kit.blade.php ENDPATH**/ ?>