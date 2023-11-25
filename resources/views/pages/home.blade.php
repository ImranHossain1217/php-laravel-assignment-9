@extends('layout.app')
@section('content')
<header>
  <div class="container header-container">
    <div class="header-left">
      <img src="images/hero.jpg" alt="">
    </div>
    <div class="header-right">
      <p><b>Hello, I'm</b></p>
      <h1>Imran Hossain</h1>
      <h2>Fullstack Developer</h2>
      <div class="header-action-aria">
        <a href="" class="btn" download="/">Download CV</a>
        <a href="/Contact" class="btn btn-dark">Contact info</a>
      </div>
      <div class="header-social">
        <a href=""><img src="images/linkedin.png" class="icon1"></a>
        <a href=""><img src="images/github.png" class="icon1"></a>
      </div>
    </div>
  </div>
</header>
@endsection