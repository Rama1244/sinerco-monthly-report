<?php $__env->startSection('title', 'Input Remarks'); ?>
<?php $__env->startSection('header-icon'); ?>
    <i data-feather="file-text"></i>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('desc', 'Halaman untuk mengirim laporan Remarks harian'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xl px-4 mt-n10">
    <!-- Example DataTable for Dashboard Demo-->
    <div class="row">
        <div class="col-xl-4 col-lg-4 mb-4">
            <div class="card">
                <div class="card-header">Remarks</div>
                <div class="card-body">
                    <div class="form-mr sico-overlay-y sico-height-auto sico-mh-400 mb-4">
                        <form action="<?php echo e(route('remarks.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <label for="condition">Condition</label>
                            <div class="form-check">
                                <input class="form-check-input" id="sd" type="radio" value="SD" name="condition">
                                <label class="form-check-label" for="sd">SD</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="stby" type="radio" value="STBY" name="condition" required>
                                <label class="form-check-label" for="stby">STBY</label>
                            </div>
                            <div class="condition-check"  id="condition-check" style="display: none">
                                <div class="mb-3"><label for="source-press">Start</label>
                                    <input class="form-control remarks" id="time-start" name="remarks_start" type="time">
                                </div>
                                <div class="mb-3"><label for="source-press">End</label>
                                    <input class="form-control remarks" id="time-end" name="remarks_end" type="time">
                                </div>
                                <div class="mb-3"><label for="source-press">Remarks</label>
                                    <input class="form-control remarks" id="remarks" name="remarks" type="text" placeholder="Ketik Remarks...">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-header">Remarks Report</div>
                <div class="card-body sico-overlay-y sico-height-auto sico-mh-400">
                    <table class="table" style=" font-size: 10pt">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Condition</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $remarksReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($rr->condition); ?></td>
                                <td><?php echo e($rr->remarks_start); ?></td>
                                <td><?php echo e($rr->remarks_end); ?></td>
                                <td><?php echo e($rr->remarks); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Checkbox Condition -->
<script>
    //jika radio dengan name condition dipilih pada value SD atau STBY maka condtion-check akan muncul
    var condition = document.getElementsByName('condition');
    var conditionCheck = document.getElementById('condition-check');

    for (var i = 0; i < condition.length; i++) {
        condition[i].addEventListener('change', function() {
            if (this.value == 'SD' || this.value == 'STBY') {
                conditionCheck.style.display = 'block';

                //mengisi required pada input dengan id time-start, time-end, dan remarks
                document.getElementById('time-start').setAttribute('required', '');
                document.getElementById('time-end').setAttribute('required', '');
                document.getElementById('remarks').setAttribute('required', '');

            } else {
                conditionCheck.style.display = 'none';
                //mengosongkan value pada input dengan id time-start, time-end, dan remarks
                document.getElementById('time-start').value = '';
                document.getElementById('time-end').value = '';
                document.getElementById('remarks').value = '';

                //menghilangkan required pada input dengan id time-start, time-end, dan remarks
                document.getElementById('time-start').removeAttribute('required');
                document.getElementById('time-end').removeAttribute('required');
                document.getElementById('remarks').removeAttribute('required');

            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinerco-monthly-report\resources\views/pages/remarks.blade.php ENDPATH**/ ?>