<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Student Portal
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="">





  <div class="wrapper ">
    <div class="sidebar" data-color="black">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo ">
        <a href="/admin" class="simple-text logo-normal now-ui-icons arrows-1_minimal-left ">
           &nbsp; GO BACK
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="/studentprofile/{{$user->id}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Student Profile</p>
            </a>
          </li>
          <!-- <li>
            <a href="/notifications">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li> -->
          
          <li>
            <a href="/studentperformance/{{$user->id}}">
              <i class="now-ui-icons education_atom"></i>
              <p>View Performance</p>
            </a>
          </li>
          <!-- <li>
            <a href="/studentrecommend/{{$user->id}}">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Recommend Student</p>
            </a>
          </li> -->
          <li >
            <a href="/studentupload/{{$user->id}}">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>View Uploads</p>
            </a>
          </li>
          <!-- <li>
            <a href="/studentdata/{{$user->id}}">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>View Student Data</p>
            </a>
          </li>
           -->
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
    @yield('data')
    </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>