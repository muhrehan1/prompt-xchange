@extends('front/partials/header')
@section('content')
<!-- <section class="banner_sec"></section> -->
<section class="pricing_sec" style="background:url('front/assets/img/banner_back.png');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="left_cont">
                    <strong>WELCOME TO Prompt Xchange!</strong>
                    <h5>Select Your Subscription Plan</h5>
                    <div class="pricing_acc">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                        Can I switch between different subscription plans?
                                        <div class="icon">
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, our platform provides the flexibility for users to switch between
                                        different subscription plan.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        How do I cancel my subscription if I am not interested anymore?
                                        <div class="icon">
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum..
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Can I get refund after cancelling subscription?
                                        <div class="icon">
                                            <i class="fa-solid fa-plus"></i>
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum..
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 pricing_col">
                <div class="pricing_cont">
                    <div class="price_div">
                        <div>
                            <input id="radio-1" class="radio-custom" name="radio-group" type="radio">
                            <label for="radio-1" class="radio-custom-label">
                                <strong>Free</strong>
                                <ul>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Become Prompt Xchange community member</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Build your brand & portfolio online</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="price_div">
                        <div>
                            <input id="radio-2" class="radio-custom" name="radio-group" type="radio">
                            <label for="radio-2" class="radio-custom-label">
                                <strong>Expert<span>$ 4.99<small>/month</small></span></strong>
                                <ul>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Everything in Free Tier</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to analytics</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Receive job proposal from brand and marketers</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Include 50 image generations.</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="price_div">
                        <div>
                            <input id="radio-3" class="radio-custom" name="radio-group" type="radio">
                            <label for="radio-3" class="radio-custom-label">
                                <strong>Expert<span>$ 9.99<small>/month</small></span></strong>
                                <ul>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Everything in Free Tier</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to analytics</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Receive job proposal from brand and marketers</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Include 100 image generations.</li>
                                    <li><i class="fa-solid fa-check fa-fw"></i>Access to SD Voice & Video A1 Tools</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection