@extends('front/partials/header')
@section('content')
<section class="profile_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="profile_cover">
                <img src="{{asset('front/assets/img/prof_banner.png')}}" alt="">
            </div>
            <div class="profile_cont">
                <img src="{{asset('front/assets/img/1.png')}}" alt="Star">
                <h3 class="text-center">Ashley Gonzalez</h3>
                <ul class="view_list d-flex p-0">
                    <li><i class="fa-regular fa-heart"></i>5K</li>
                    <li><i class="fa-thin fa-eye"></i>1.8M</li>
                    <li><i class="fa-solid fa-message"></i>14K</li>
                    <li><i class="fa-solid fa-user-group"></i>1.2M Followers</li>
                </ul>
                <a href="" class="gradient_btn icon_btn">Hire Me <i class="fa-solid fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section>
<section class="gallery_sec profile_feeds">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" class="active" href="#Trending">Trending </a></li>
                    <li><a data-toggle="pill" href="#Collections">Collections </a></li>
                    <li><a data-toggle="pill" href="#Videos">Videos </a></li>
                    <li><a data-toggle="pill" href="#Audio">Audio </a></li>
                </ul>

                <div class="tab-content">
                    <div id="Trending" class="tab-pane fade in active show">
                        <div class=" ">
                            <div class="feed_row row">
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/1.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/2.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/3.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/4.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/5.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/6.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/7.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/8.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/9.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/10.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/11.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/12.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/13.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/14.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/15.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/16.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Collections" class="tab-pane fade in ">
                        <div class=" ">
                            <div class="feed_row row">
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/1.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/2.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/3.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/4.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/5.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/6.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/7.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/8.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/9.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/10.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/11.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/12.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/13.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/14.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/15.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/16.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Videos" class="tab-pane fade in ">
                        <div class=" ">
                            <div class="feed_row row">
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/1.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/2.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/3.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/4.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/5.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/6.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/7.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/8.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/9.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/10.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/11.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/12.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/13.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/14.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/15.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/16.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Audio" class="tab-pane fade in ">
                        <div class=" ">
                            <div class="feed_row row">
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/1.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/2.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/3.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/4.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/5.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/6.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/7.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/8.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/9.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/10.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/11.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/12.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/13.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/14.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/15.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="prof_feed_item">
                                    <img src="{{asset('front/assets/img/feed/16.png')}}" alt="Random Image">
                                    <div class="prof_feed_cont d-flex">
                                        <strong>Sed Ut Perspiciatis
                                            Unde Omnis</strong>
                                        <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:;" class="trans_btn">Load More</a>
            </div>
        </div>
    </div>
</section>
@endsection