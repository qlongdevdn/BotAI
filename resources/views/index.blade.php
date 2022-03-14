@extends('layouts/header')
@section('main')
@parent
<main class="main">
  <section class="intro">
    <div class="box-intro">
      <div class="box-title">
        <h2 class="title" id="title">Nền tảng xây dựng Chatbot thông minh</h2>

      </div>
      <p class="desc">Tạo và triển khai trợ lý ảo thông minh hỗ trợ dịch vụ khách hàng và kết quả bán hàng của bạn bằng cách mang lại một cấp độ tự động hóa, tốc độ và tính khả dụng mới.</p>
      <div class="box-img">
        <img src="./data/img/img2.png" alt="REALBOT" title="REALBOT" class="img">
      </div>
    </div>
  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{ URL::asset('../js/app.js'); }}"></script>
@stop
