@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="lock-box"><img class="rounded-circle user-image" src="../../s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
        <h4 class="text-center user-name">John Doe</h4>
        <p class="text-center text-muted">Account Locked</p>
        <form class="unlock-form" action="https://pratikborsadiya.in/vali-admin/index.html">
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>UNLOCK </button>
          </div>
        </form>
        <p><a href="page-login.html">Not John ? Login Here.</a></p>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
@endsection