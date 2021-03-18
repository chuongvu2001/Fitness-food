<?php $__env->startSection('title','Thêm danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="">
    <form action="cate-save" method="POST" class="user" enctype="multipart/form-data" >
        <div class="form-group">
            <input type="text" class="form-control " name="cate_name" placeholder="Tên danh mục">
        </div>
        <div class="form-group">
            <select name="id_grade" class="form-control">
                <option value="0">Danh mục cha</option>
                <?php if($cates): ?>
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>">
                    <?php echo e($item->cate_name); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" name="show_menu" value="1" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Hiển thị ngoài menu</label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Thêm danh mục</button>
        <hr>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/admin/categories/cate-add.blade.php ENDPATH**/ ?>