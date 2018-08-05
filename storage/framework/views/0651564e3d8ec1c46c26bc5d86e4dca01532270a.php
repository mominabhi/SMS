
<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body>
<div class="prtm-wrapper">

    <?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="prtm-main">

        <?php echo $__env->make('partials._sideNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="prtm-content-wrapper">

            <?php echo $__env->yieldContent('main_content'); ?>

            <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make('partials._script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
