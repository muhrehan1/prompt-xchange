@extends('front/partials/header')
@section('content')
<section class="blog_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12" style="background:url('front/assets/img/blogs/bg_det.png');">
                <div class="banner_cont">
                    <a href="javascript:;">Consectetur Ex Co</a>
                    <h2>Tempor Consectetur Est Elit</h2>
                    <div class="date">Dec 24, 2023 <div class="dura">5 mins read</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_det_sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="blogs_det_cont">
                    <p>Veniam voluptate ea enim fugiat elit dolor deserunt anim cillum officia tempor laborum fugiat quis cupidatat. Nisi enim ipsum cillum duis labore et voluptate pariatur. Sit dolor incididunt Lorem laborum officia mollit. Aliqua magna esse officia duis culpa aute tempor eu laboris sunt laborum Lorem reprehenderit veniam nisi nisi est minim aliquip. Adipisicing minim aliquip do occaecat do commodo sint consectetur nisi nisi cillum commodo officia dolor sint cillum cupidatat nisi.</p>
                    <img src="{{asset('front/assets/img/blogs/car.png')}}">
                    <p>Veniam voluptate ea enim fugiat elit dolor deserunt anim cillum officia tempor laborum fugiat quis cupidatat. Nisi enim ipsum cillum duis labore et voluptate pariatur.</p>
                    <img src="{{asset('front/assets/img/blogs/carr.png')}}">
                    <p>Veniam voluptate ea enim fugiat elit dolor deserunt anim cillum officia tempor laborum fugiat quis cupidatat. Nisi enim ipsum cillum duis labore et voluptate pariatur. Sit dolor incididunt Lorem laborum officia mollit.</p>

                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="blog_det_sidebar">
                    <h3>The Latest</h3>
                    @for($i=1;$i<=5;$i++) <div class="blogs_link">
                        <strong>Startup Journey Insights For Female
                            Entrepreneurs</strong>
                        <div class="dur">5 min read</div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>
</section>
<section class="blog_btm blog_det_btm">
    <div class="container-fluid">
        <div class="row" style="background:url('front/assets/img//blogs/btm.png');">
            <div class="col-md-7 col-sm-12">
                <p>FURTHER INFO</p>
                <strong>
                    <a href="javascript:;">
                        <span>www.sebastiankoseda.com</span>
                        <img src="{{asset('front/assets/img/blogs/arrow.png')}}">
                    </a>
                </strong>
            </div>
            <div class="col-md-5 col-sm-12">
                <h6>ABOUT THE AUTHOR</h6>
                <h4>Olivia Hingley</h4>
                <p>Focused on advising companies on long-
                    term strategy, growth plans, and market
                    positioning.</p>
            </div>
        </div>
    </div>
</section>
@endsection