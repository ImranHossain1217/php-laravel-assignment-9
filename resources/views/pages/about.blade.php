@extends('layout.app')

@section('content')
<section>
  <p class="heading-p">Get To Know More</p>
  <h1 class="heading">About Me</h1>
  <div class="container about-container">
    <div class="about-left">
      <img src="images/about.jpg" alt="">
    </div>
    <div class="about-right">
      <div class="basic-edu">
        <div class="edu-box">
          <img src="images/experience.png" class="icon1">
          <h4>Experience</h4>
          <p>
            2+ years <br>
            Fullstack Development
          </p>
        </div>
        <div class="edu-box">
          <img src="images/education.png" class="icon1">
          <h4>Education</h4>
          <p>
            Bachelors Degree <br>
            Computer Science & Engineering
          </p>
        </div>
      </div>
      <p>
        Hi, I am a Full Stack Developer. I have an interactive experience in HTML5, CSS3, Bootstrap, Tailwind, React JS,
        React-Router-Dom, JavaScript, ES6, Firebase, Express, MongoDB, Node js, PHP and Laravel. I love to learn new
        technologies that can help to create new and innovative ways to solve problems. My goal is to always build
        products that provide pixel-perfect, performant experiences.
      </p>
    </div>
  </div>
</section>
@endsection