<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo $__env->yieldContent('title'); ?> - SINERCO</title>
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/sico-style.css')); ?>" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/sinerco-logo.png')); ?>" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-img-cover pb-10" style="background-image: url(<?php echo e(asset('assets/img/sinerco-bg.png')); ?>)">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon">
                                                <?php echo $__env->yieldContent('header-icon'); ?>
                                            </div>
                                            <?php echo $__env->yieldContent('title'); ?>
                                        </h1>
                                        <div class="page-header-subtitle"><?php echo $__env->yieldContent('desc'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script> <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('assets/demo/chart-area-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/demo/chart-bar-demo.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/datatables/datatables-simple-demo.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/litepicker.js')); ?>"></script>

        <!-- Autocomplete  Remarks -->
        <script>
            $(document).ready(function() {
                $("#remarks").autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: "<?php echo e(route('remarksautocomplete')); ?>", // Replace with your actual route name
                            dataType: "json",
                            data: {
                                term: request.term
                            },
                            success: function(data) {
                                response(data);
                            }
                        });
                    },
                    minLength: 2,
                });
            });
        </script>

        <!-- Desimal -->
        <script>
            $(".desimal-minus-2").on("keyup", function(){
                var valid = /^(\-)?\d{0,2}(\.\d{0,1})?$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".desimal-minus").on("keyup", function(){
                var valid = /^(\-)?\d{0,1}(\.\d{0,1})?$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".bil-bulat").on("keyup", function(){
                var valid = /^\d{0,5}$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".bil-bulat-speed").on("keyup", function(){
                var valid = /^\d{0,4}$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".desimal-1").on("keyup", function(){
                var valid = /^\d{0,3}(\.\d{0,1})?$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".desimal-flowrate-1").on("keyup", function(){
                var valid = /^\d{0,3}(\.\d{0,4})?$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            $(".desimal-flowrate-2").on("keyup", function(){
                var valid = /^\d{0,1}(\.\d{0,5})?$/.test(this.value),
                    val = this.value;
                if(!valid){
                    console.log("Invalid input!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
        </script>

    </body>
</html>
<?php /**PATH C:\laragon\www\sinerco-monthly-report\resources\views/master.blade.php ENDPATH**/ ?>