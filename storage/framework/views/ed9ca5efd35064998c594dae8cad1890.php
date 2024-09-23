<!--begin::Card-->
<div class="card card-flush">
    <!--begin::Card body-->
    <div class="pt-0 card-body">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <div id="kt_project_users_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                <div id="" class="table-responsive">
                    <table id="kt_project_users_table"
                        class="table align-middle table-row-bordered table-row-dashed gy-4 fw-bold dataTable"
                        style="width: 0px;">
                        <colgroup>
                            <col style="width: 0px;">
                            <col style="width: 0px;">
                            <col style="width: 0px;">
                            <col style="width: 0px;">
                            <col style="width: 0px;">
                        </colgroup>
                        <thead class="text-gray-500 fs-7 text-uppercase">
                            <tr role="row" class="text-gray-800 border-gray-200 fw-semibold fs-6 border-bottom">
                                <th class="text-gray-800 border-gray-200 fw-semibold fs-6 border-bottom"
                                    data-dt-column="0" rowspan="1" colspan="1" aria-label="Manager: Activate to sort"
                                    tabindex="0"><span class="dt-column-title" role="button">Doctors</span><span
                                        class="dt-column-order"></span></th>
                                <th class="min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="1"
                                    rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0"><span
                                        class="dt-column-title" role="button">Created at</span><span
                                        class="dt-column-order"></span></th>
                                <th class="min-w-90px dt-type-numeric dt-orderable-asc dt-orderable-desc"
                                    data-dt-column="2" rowspan="1" colspan="1" aria-label="Amount: Activate to sort"
                                    tabindex="0"><span class="dt-column-title" role="button">
                                        <datagrid>Department</datagrid>
                                    </span><span class="dt-column-order"></span></th>
                                <th class="min-w-90px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1"
                                    colspan="1" aria-label="Status: Activate to sort" tabindex="0"><span
                                        class="dt-column-title" role="button">Status</span><span
                                        class="dt-column-order"></span></th>
                                <th class="min-w-50px text-end dt-orderable-none" data-dt-column="4" rowspan="1"
                                    colspan="1" aria-label="Details"><span class="dt-column-title">Actions</span><span
                                        class="dt-column-order"></span></th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <?php if(count($data) > 0): ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-gray-800 border-gray-200 fw-semibold fs-6 border-bottom">
                                <td>
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Wrapper-->
                                        <div class="me-5 position-relative">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <?php if($d->doctor_image): ?>
                                                <img src="<?php echo e(AvatarImagePath($d->doctor_image)); ?>" alt="Pic">
                                                <?php endif; ?>
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column justify-content-center">
                                            <a href=""
                                                class="mb-1 text-gray-800 text-hover-primary"><?php if(isset($d->doctor_name)): ?>
                                                <?php echo e($d->doctor_name); ?>

                                                <?php endif; ?> </a>
                                            <div class="text-gray-500 fw-semibold fs-6"><?php if(isset($d->email)): ?>
                                                <?php echo e($d->email); ?>

                                                <?php endif; ?></div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </td>
                                <td data-order="2024-06-20T00:00:00+05:00"><?php echo e(getBasicDateTimeFormat($d->created_at)); ?>

                                </td>
                                <td class="dt-type-numeric"><?php if(isset($d->department_name)): ?>
                                    <?php echo e($d->department_name); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($d->status == 1): ?>
                                    <span class="mr-2 badge badge-success font-weight-lighter">Active</span>
                                    <?php else: ?>
                                    <span class="mr-2 badge badge-danger font-weight-lighter">In-Active</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end">

                                    <a href="<?php echo e(route($page.'.edit',$d->id)); ?>"><button
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                            <i class="ki-duotone ki-setting-3 fs-3 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </a>

                                    <a href="<?php echo e(route($page.'.delete', ['id' => $d->id])); ?>" data-id="<?php echo e($d->id); ?>"
                                        class="btn btn-icon btn-active-light-primary w-30px h-30px delete-<?php echo e($page); ?>"
                                        data-kt-permissions-table-filter="delete_row">
                                        <i class="ki-duotone ki-trash fs-3 text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                        </button>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>

                </div>
                <div id="" class="row">
                    <div id=""
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                        <div>
                            
                        </div>
                    </div>
                    <div id=""
                        class="col-sm-12 col-md-7 d-flex align-items-start justify-content-start justify-content-md-end">
                        <div class="dt-paging paging_simple_numbers">
                            <?php echo e($data->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card--><?php /**PATH D:\hms_temp\resources\views/modules/doctors/include/list_partial.blade.php ENDPATH**/ ?>