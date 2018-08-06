
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('main_content'); ?>



    <div class="prtm-content">


        <div class="row">



            <div class="col-sm-4">
                <?php echo Form::open(['url' => 'new_class', 'method' => 'post']); ?>

                <label> Class Name:  </label>
                <input type="text" class="form-control" name="name">
                <br/>
                <label> Select sections with <span style="background-color: yellow"> Ctrl+ mouse click </span>  </label>

                <select class="form-control" multiple name="sections[]" style="height: 200px">
                    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sec->id); ?>"><?php echo e($sec->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <br>
                <input type="submit" class="form-control btn btn-success" value="Add New Class">
                <?php echo Form::close(); ?>

            </div>


            <div class="col-sm-8">
                <div class="table-style">
                    <div class="prtm-block pos-relative">
                        <div class="prtm-block-title mrgn-b-lg">
                            <div class="caption">
                                <h3 class="text-capitalize">All Classes</h3>
                            </div>
                        </div>
                        <div class="prtm-block-content">
                            <div class="table-responsive">
                                <div class="">
                                    <table class="table table-hover table-bordered table-striped">
                                        <thead >
                                        <tr class="bg-primary" >
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Class Name</th>
                                            <th class="text-center">Sections</th>
                                            <th class="text-center" colspan="2">Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($class_id_edit == $class->id): ?>
                                                <?php echo Form::open(['url' => 'update_class', 'method' => 'post']); ?>

                                                <tr>
                                                    <td>
                                                        <?php echo e($class->id); ?>

                                                        <input type="hidden" value="<?php echo e($class->id); ?>" name="id" class="form-control" >
                                                    </td>


                                                    <td>
                                                        <input type="text" class="form-control" value="<?php echo e($class->name); ?>" name="name">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="sections[]" multiple style="display: none">
                                                            <?php $__currentLoopData = $class->db_secs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($sec->id); ?>"><?php echo e($sec->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <select class="form-control" name="sections[]" multiple style="display: ">
                                                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($sec->id); ?>"><?php echo e($sec->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        

                                                    </td>
                                                    <td colspan="2">
                                                        <button type="submit"  class=" btn-success">
                                                            <i class="material-icons">update</i>
                                                        </button>
                                                    </td>

                                                </tr>
                                                <?php echo Form::close(); ?>

                                            <?php else: ?>
                                                <tr>
                                                    <td><?php echo e($class->id); ?></td>
                                                    <td><?php echo e($class->name); ?></td>

                                                    <td>
                                                        <?php $__currentLoopData = $class->db_secs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php echo e($sec->name); ?>,
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(URL::to('/edit_class/'.$class->id)); ?>" class="">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(URL::to('/delete_class/'.$class->id)); ?>" class="">
                                                            <i class="material-icons">delete</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>

    <script>
        function chengeDisplay(elem){
            elem.style.display = "node";
        }
    </script>

<?php $__env->stopSection(); ?>

