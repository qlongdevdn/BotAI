@extends('layouts/header')
@if ($page == 'login')
@section('title','Đăng nhập - Chat Box')
@section('main')
@parent
<main class="main">
  <section class="login-section">
    <div class="login-box">
      <h2>Đăng nhập</h2>
      <form autocomplete="off">
        <div class="user-box">
          <input type="text" name="name" required autocomplete="off">
          <label>Tên đăng nhập</label>
        </div>
        <div class="user-box">
          <input type="password" name="pass" required autocomplete="off">
          <label>Mật khẩu</label>
        </div>
        <div class="btn-login">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đăng nhập
          </a>
          <a href="/register">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đăng ký
          </a>
        </div>
      </form>
    </div>
  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{ URL::asset('../js/app.js'); }}"></script>
@stop
@elseif ($page == 'register')
@section('title' , 'Đăng ký - Chat Box')
@section('main')

<main class="main">
  <section class="login-section">
    <div class="login-box">
      <h2>Đăng ký</h2>
      <form autocomplete="off">
        <div class="user-box">
          <input type="text" name="name" required autocomplete="off">
          <label>Tên đăng nhập</label>
        </div>
        <div class="user-box">
          <input type="email" name="name" required autocomplete="off">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="password" name="pass" required autocomplete="off">
          <label>Mật khẩu</label>
        </div>
        <div class="user-box">
          <input type="password" name="pass2" required autocomplete="off">
          <label>Mật khẩu nhập lại</label>
        </div>
        <div class="btn-login">
          <a href="/loginup">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đăng nhập
          </a>
          <a href="/register">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đăng ký
          </a>
        </div>
      </form>
    </div>
  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{ URL::asset('../js/app.js'); }}"></script>
@stop

@endif