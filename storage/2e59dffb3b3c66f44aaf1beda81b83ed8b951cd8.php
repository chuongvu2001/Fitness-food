<?php $__env->startSection('title','Danh sách danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
    <?php $index = 1; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Show_menu</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id_grade==0): ?>
                        <tr>
                            <td><?php echo e($index++); ?></td>
                            <td><?php echo e($item->cate_name); ?></td>
                            <td><?php echo e($item->show_menu == 1 ? 'Hiển thị' : 'Không hiển thị'); ?></td>
                            <td><?php echo e($item->created_at); ?></td>
                            <td><?php echo e(isset($item->updated_at) ? $item->updated_at : 'Chưa được cập nhật'); ?></td>
                            <td><a href="<?php echo e(BASE_URL."cate-detail?cate=".$item->id); ?>">Chi tiết</a></td>
                            <td>
                                <a href="<?php echo e(BASE_URL."cate-edit?cate=".$item->id); ?>" class="btn btn-primary btn-circle btn-sm">
                                    <i class="far fa-edit "></i>
                                </a>

                                <a onclick="confirm('Bạn có chắc muốn xoá?')" href="<?php echo e(BASE_URL."cate-remove?cate=".$item->id); ?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/admin/categories/cate-list.blade.php ENDPATH**/ ?>