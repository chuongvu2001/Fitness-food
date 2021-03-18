<?php $__env->startSection('title','Sửa danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="">
        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="edit-save?cate=<?php echo e($item->id); ?>" method="POST" class="user" enctype="multipart/form-data" >

            <div class="form-group">
                <input type="text" class="form-control " value="<?php echo e($item->cate_name); ?>" name="cate_name"  placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <select name="id_grade" class="form-control">
                    <option value="0">Danh mục cha</option>
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cate_id != $value->id && $value->id_grade ==0): ?>
                        <option value="<?php echo e($value->id); ?>">
                            <?php echo e($value->cate_name); ?>

                        </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" name="show_menu" value="1" <?php echo e($item->show_menu == 1 ? "checked" : ""); ?> class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Hiển thị ngoài menu</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Sửa danh mục</button>
            <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/admin/categories/cate-edit.blade.php ENDPATH**/ ?>