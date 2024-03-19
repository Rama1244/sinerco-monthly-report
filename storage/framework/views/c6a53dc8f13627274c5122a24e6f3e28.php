<?php $__env->startSection('title', 'Input Daily Report'); ?>
<?php $__env->startSection('header-icon'); ?>
    <i data-feather="file-text"></i>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('desc', 'Halaman untuk mengirim laporan harian hasil yang ada di lapangan'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xl px-4 mt-n10">
    <!-- Example DataTable for Dashboard Demo-->
    <div class="row">
        <div class="col-xl-3 col-lg-3 mb-4">
            <div class="card">
                <div class="card-header">Form Daily Report</div>
                <div class="card-body">
                    <div class="form-mr sico-overlay-y sico-height-auto sico-mh-500 mb-4">
                        <form action="<?php echo e(route('dailyreport.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            
                            <div class="mb-3">
                                <label for="periode-jam">Jam</label>
                                <select class="form-control" id="periode-jam" name="periode_jam">
                                    <option value="">Pilih Jam</option>
                                    <option value="01:00">01</option>
                                    <option value="02:00">02</option>
                                    <option value="03:00">03</option>
                                    <option value="04:00">04</option>
                                    <option value="05:00">05</option>
                                    <option value="06:00">06</option>
                                    <option value="07:00">07</option>
                                    <option value="08:00">08</option>
                                    <option value="09:00">09</option>
                                    <option value="10:00">10</option>
                                    <option value="11:00">11</option>
                                    <option value="12:00">12</option>
                                    <option value="13:00">13</option>
                                    <option value="14:00">14</option>
                                    <option value="15:00">15</option>
                                    <option value="16:00">16</option>
                                    <option value="17:00">17</option>
                                    <option value="18:00">18</option>
                                    <option value="19:00">19</option>
                                    <option value="20:00">20</option>
                                    <option value="21:00">21</option>
                                    <option value="22:00">22</option>
                                    <option value="23:00">23</option>
                                    <option value="00:00">24</option>
                                </select>
                            </div>
                            <div class="mb-3"><label for="tanggal">Tanggal Periode</label>
                                <!-- beri value hari ini -->
                                <input class="form-control" id="tanggal" name="periode_tanggal" type="date" placeholder="" value="<?php echo e(date('Y-m-d')); ?>" required>
                            </div>
                            <hr>
                            <div class="mb-3"><label for="desimal">Source press.</label>
                                <input class="form-control desimal-1" id="desimal" name="source_press" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Discharge Header press.</label>
                                <input class="form-control desimal-1" id="desimal" name="disch_head_press" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Suction press.</label>
                                <input class="form-control desimal-minus-2" id="desimal" name="suct_press" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Discharge press.</label>
                                <input class="form-control desimal-1" id="desimal" name="disch_press" type="text" placeholder="000.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Speed</label>
                                <input class="form-control bil-bulat-speed" id="desimal" name="speed" type="text" placeholder="0000" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Manifold press.</label>
                                <input class="form-control desimal-minus" id="desimal" name="mani_press" type="text" placeholder="-0.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Oil press.</label>
                                <input class="form-control desimal-1" id="desimal" name="oil_press" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Oil Diff.</label>
                                <input class="form-control desimal-1" id="desimal" name="oil_diff" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Running Hours</label>
                                <input class="form-control bil-bulat" id="desimal" name="run_hours" type="text" placeholder="00000" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Voltage</label>
                                <input class="form-control desimal-1" id="desimal" name="voltage" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Water Temp.</label>
                                <input class="form-control desimal-1" id="desimal" name="water_temp" type="text" placeholder="000.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Discharge Temp. Bef. Cooler</label>
                                <input class="form-control desimal-1" id="desimal" name="disch_temp_bef_cooler" type="text" placeholder="000.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Discharge Temp. Aft. Cooler</label>
                                <input class="form-control desimal-1" id="desimal" name="disch_temp_aft_cooler" type="text" placeholder="000.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Static Press. Reading</label>
                                <input class="form-control desimal-1" id="desimal" name="static_press_read" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Diff. Press. Reading</label>
                                <input class="form-control desimal-1" id="desimal" name="diff_press_reading" type="text" placeholder="00.0" required>
                            </div>
                            <div class="mb-3"><label for="desimal">Flowrate</label>
                                <input class="form-control desimal-flowrate-1" id="desimal" name="flowrate" type="text" placeholder="000.0000" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="card">
                <div class="card-header">Daily Report</div>
                <div class="card-body sico-overlay-y sico-height-auto sico-mh-600">
                    <table class="table" style="width: auto; font-size: 10pt">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah format menjadi dd-mm-yyyy -->
                                    <th>
                                        <?php echo e(date('d-m-Y', strtotime($dr->periode_tanggal))); ?>

                                    </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Jam</th>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah format menjadi hh:mm -->
                                    <th>
                                        <?php echo e(date('H:i', strtotime($dr->periode_jam))); ?>

                                    </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Source press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->source_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Discharge Header press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->discharge_header_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Suction press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->suction_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Discharge press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->discharge_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Speed</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($dr->speed); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Manifold press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->manifold_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Oil press.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->oil_pressure, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Oil Diff.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->oil_differential, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Running Hours</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($dr->running_hours); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Voltage</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->voltage, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Water Temp.</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->water_temperature, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Discharge Temp. Bef. Cooler</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->discharge_temperature_before_cooler, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Discharge Temp. Aft. Cooler</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->discharge_temperature_after_cooler, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Static Press. Reading</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->static_pressure_reading, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Diff. Press. Reading</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0 dan jika tidak ada angkah dibelakang . akan muncul 0 -->
                                    <td>
                                        <?php echo e(number_format($dr->differential_pressure_reading, 1, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <th>Flowrate</td>
                                <?php $__currentLoopData = $dailyReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ubah dengan format 0.0000 dan jika tidak ada angkah dibelakang . akan muncul 0000 -->
                                    <td>
                                        <?php echo e(number_format($dr->flowrate, 4, '.', '')); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sinerco-monthly-report\resources\views/pages/input-mr.blade.php ENDPATH**/ ?>