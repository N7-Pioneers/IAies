@extends('adminlte::page')

@section('title', 'Safe Guard')

<style>
.match-info {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.1); /* Bleu vif */

    border-radius: 5px;
    padding: 50px;
    margin: 10px auto;
    max-width: 800px;
    overflow: hidden;

}

.team {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.team-name {
    font-weight: bold;
    color: #000; /* Texte blanc */
}

.scoreboard {
    display: flex;
    align-items: center;
    color: #000; /* Texte blanc */
}

.score {
    font-size: 2em;
    font-weight: bold;
    margin: 0 10px;
}

.divider {
    font-size: 1.5em;
    color: #000; /* Texte blanc */
}

.match-details {
    text-align: center;
}

.time {
    font-size: 1.2em;
    color: #000; /* Texte blanc */
}

.status {
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 10px;
    background-color: #2ecc71; /* Vert clair */
    color: #000; /* Texte blanc */
}


.status.in-progress {
    background-color: #f39c12; /* Orange */
}

</style>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
@section('content')

<div >
    <!-- Content Header (Page header) -->
    <div class="content-header">
 
        <div class="match-info">
        <div class="team team-left">
            
            <span class="team-name">Team 1</span>
        </div>
        <div class="scoreboard">
            <span class="score team-left-score">2</span>
            <span class="divider">-</span>
            <span class="score team-right-score">1</span>
        </div>
        <div class="team team-right">
           
            <span class="team-name">Team 2</span>
        </div>
        <div class="match-details">
            <span class="time">45:00</span>
            <span>&nbsp;&nbsp;</span>
            <span class="status"> En cours</span>
        </div>
    </div>
        </div><!-- /.row -->
     
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6 p-6">
            <!-- small box -->
            <div class="small-box bg-info"   style="padding:20px">
              <div class="inner">
                <h3>150</h3>

                <p>Audience</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success"  style="padding:20px" >
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Security agents</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
          
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-danger"  style="padding:20px"  >
              <div class="inner">
                <h3>44</h3>

                <p>Suspects</p>
              </div>
              <div class="icon">
                <i class="ion ion-alert"></i>
              </div>
       
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6 ">
            <!-- small box -->
            <div class="small-box bg-warning " style="padding:20px">
              <div class="inner">
                <h3>65</h3>

                <p>Actif cameras</p>
              </div>
              <div class="icon">
                <i class="ion ion-camera"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection


