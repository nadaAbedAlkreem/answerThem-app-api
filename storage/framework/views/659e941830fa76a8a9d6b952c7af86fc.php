

<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="../../../">
    <title>gaweb7om </title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="gaweb7om control panel " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
    <!--begin::Fonts-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .chart-container {
            width: 80%;
            margin: auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
     <!-- Icons -->
     <!-- CSS -->



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Add SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Add SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include Bar Rating plugin JS -->
    <script src="https://cdn.rawgit.com/antennaio/jquery-bar-rating/master/dist/jquery.barrating.min.js"></script>

    <!-- Include FontAwesome CSS (for the stars) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Include Bar Rating plugin CSS for the stars -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/antennaio/jquery-bar-rating/master/dist/themes/fontawesome-stars.css">

            <?php echo $__env->make('dashboard.asset.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">


 <?php echo $__env->yieldContent('content'); ?>
 </body>


<?php echo $__env->make('dashboard.asset.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;









<?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/layout/app.blade.php ENDPATH**/ ?>