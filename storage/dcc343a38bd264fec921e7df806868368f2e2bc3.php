<?php $__env->startSection('title','Thêm sản phẩm'); ?>
<?php $__env->startSection('main-content'); ?>
        <form action="product-save" method="POST" class="user" enctype="multipart/form-data" >
            <div class="form-group">
                <input type="text" class="form-control " name="name" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <select name="cate_id" class="form-control">
                    <option>-----Sản phẩm thuộc danh mục-----</option>
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
                <input type="number" class="form-control " name="price" placeholder="Giá sản phẩm">
            </div>

            <div class="form-group">
                <label>Miêu tả</label>
                <textarea name="short_desc" id="ckeditor_desc" placeholder="Miêu tả"></textarea>
            </div>
            <div class="form-group">
                <label>Chi tiết</label>
                <textarea name="detail" id="ckeditor_detail" placeholder="Detail"></textarea>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Thêm sản phẩm</button></div>
            <hr>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/admin/products/product-add.blade.php ENDPATH**/ ?>