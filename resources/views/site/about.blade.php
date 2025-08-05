@extends('site.template')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ asset('site/assets/img/bg/breadcrumb-bg.jpg') }});">
        <div class="container">
            <h2>About Us</h2>
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> About Us</span> <span><i class="fa fa-angle-double-right"></i> Company Profile</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>Welcome to <span>Miracle Institute</span></h2>
                        <p>The institute was established in 2009 and since then it has achieved many notable successes of worth mentioning</p>
                    </div>
                    <p>Miracle Institute Pvt. Ltd. is a leading educational consultancy in Pokhara, Nepal. The institute has been duly registered in the Ministry of Education and a certified agency by ICEF. We are the member of ECAN, an umbrella organization of educational consultancies of Nepal and NAFSA. The institute was established in 2009 and since then it has achieved many notable successes of worth mentioning. We provide personal and professional services to our students. We have developed necessary infrastructures to run the consultancy with ease and success. Perhaps, this is the reason why we have been way ahead of other consultancies.</p>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="{{ asset('site/assets/img/banner/banner-1.jpg') }}" alt="">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                        <img class="animated" src="{{ asset('site/assets/img/icon-img/video.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection