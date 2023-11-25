@extends('layout.app')

@section('content')
<section id="Projects">
    <a href="#Projects" class="arrow"><img src="./img/arrow.png" class="icon1"></a>
    <p class="heading-p">Browse My Recent</p>
    <h1 class="heading">Projects</h1>
    <div class="container project-container">
        <div class="project">
            <img src="images/project-1.png" alt="">
            <h3>Social Media App</h3>
            <div class="header-action-aria">
                <a href="" class="btn">Github</a>
                <a href="" class="btn">Live Demo</a>
            </div>
        </div>
        <div class="project">
            <img src="images/project-2.png" alt="">
            <h3>Massenger App</h3>
            <div class="header-action-aria">
                <a href="" class="btn">Github</a>
                <a href="" class="btn">Live Demo</a>
            </div>
        </div>
        <div class="project">
            <img src="images/project-3.png" alt="">
            <h3>Food Order App</h3>
            <div class="header-action-aria">
                <a href="" class="btn">Github</a>
                <a href="" class="btn">Live Demo</a>
            </div>
        </div>
    </div>
</section>
@endsection