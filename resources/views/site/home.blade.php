@extends('site.template')

@section('content')
    <div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-1 bg-img" style="background-image:url({{ asset('site/img/sliders/studyinUSA1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="assets/img/slider/single-slide-1.png" alt="">
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-1 bg-img" style="background-image:url({{ asset('site/img/sliders/study-in-uk1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="assets/img/slider/single-slide-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-light-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-yellow">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-3.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-4.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
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
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="">ABOUT US</a>
                    </div>
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
<div class="course-area bg-img pt-130 pb-10" style="background-image:url(assets/img/bg/bg-1.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Study </span> Abroad</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href=""><img class="animated" src="{{ asset('site/img/study_abroad/usa.jpg') }}" alt=""></a>
                    <span>Study in USA</span>
                </div>
                <div class="course-content">
                    <h4><a href="">Study in USA</a></h4>
                    <p>The US education system has sound academic and diverse social multicultural environment which boosts academic, professional and personal development of individuals for the best preparation for their future.</p>
                </div>
                <div class="course-position-content">
                    <div class="course-btn">
                        <a class="default-btn" href="#">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href=""><img class="animated" src="{{ asset('site/img/study_abroad/australia.jpg') }}" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="">Study in Australia</a></h4>
                    <p>Australia has the third largest number of international students’ enrolments all over the world. Australia is the leading global education power house with some of the world’s best facilities and range of quality study options.</p>
                </div>
                <div class="course-position-content">
                    
                    <div class="course-btn">
                        <a class="default-btn" href="#">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href=""><img class="animated" src="{{ asset('site/img/study_abroad/canada.jpg') }}" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="">Study in Canada</a></h4>
                    <p>Canada has been ranked as one of best places to live on the globe. The country is renowned for its access to education, high life expectancy and low crime rates. It has consistently been voted as the most stable economy on the planet.</p>
                </div>
                <div class="course-position-content">
                    <div class="course-btn">
                        <a class="default-btn" href="#">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href=""><img class="animated" src="{{ asset('site/img/study_abroad/uk.jpeg') }}" alt=""></a>
                    <span>Study in UK</span>
                </div>
                <div class="course-content">
                    <h4><a href="">Study in UK</a></h4>
                    <p>UK is one of the most popular country in the world .The UK has already been famous for art, culture and literature but the country is renowned for internationally acclaimed educational institutions.</p>
                </div>
                <div class="course-position-content">
                   
                    <div class="course-btn">
                        <a class="default-btn" href="#">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="assets/img/course/course-2.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="{{ asset('site/assets/img/icon-img/achieve-1.png') }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">890</h2>
                        <span>STUDENTS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="{{ asset('site/assets/img/icon-img/achieve-2.png') }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">670</h2>
                        <span>GRADUATE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="{{ asset('site/assets/img/icon-img/achieve-3.png') }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="{{ asset('site/assets/img/icon-img/achieve-4.png') }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('site/assets/img/testimonial/testi-b1.jpg') }}">
                    </div>
                   <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('site/assets/img/bg/testi.png') }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="{{ asset('site/assets/img/icon-img/testi-icon.png') }}">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="{{ asset('site/assets/img/testimonial/testi-b3.jpg') }}">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('site/assets/img/bg/testi.png') }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="{{ asset('site/assets/img/icon-img/testi-icon.png') }}">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('site/assets/img/testimonial/testi-b2.jpg') }}">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('site/assets/img/bg/testi.png') }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="{{ asset('site/assets/img/icon-img/testi-icon.png') }}">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="{{ asset('site/assets/img/testimonial/testi-b2.jpg') }}">
                    </div>
                    <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('site/assets/img/bg/testi.png') }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="{{ asset('site/assets/img/icon-img/testi-icon.png') }}">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="{{ asset('site/assets/img/testimonial/testi-s2.jpg') }}" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="{{ asset('site/assets/img/testimonial/testi-s1.jpg') }}" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="{{ asset('site/assets/img/testimonial/testi-s3.jpg') }}" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="{{ asset('site/assets/img/testimonial/testi-s3.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="{{ asset('site/assets/img/icon-img/testi-text.png') }}">
        </div>
    </div>
</div>

<div class="blog-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Test <span>Preparation</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href=""><img src="{{ asset('site/img/test_preparation/IELTS.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <a href="#"><span>Read More</span></a>
                        <div class="blog-content">
                            <h4><a href="">IELTS</a></h4>
                            <p>The International English Language Testing System (IELTS) is a test of English language proficiency that is required to be taken by non-native students for study in country where the medium of instruction is English.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href=""><img src="{{ asset('site/img/test_preparation/Toefl.png') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <a href="#"><span>Read More</span></a>
                        <div class="blog-content">
                            <h4><a href="">TOEFL</a></h4>
                            <p>TOEFL is a highly reliable and valid standardized test that evaluates the English Proficiency of people whose native language is not English. The TOEFL measures the ability to understand North American English.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href=""><img src="{{ asset('site/img/test_preparation/sat.png') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <a href="#"><span>Read More</span></a>
                        <div class="blog-content">
                            <h4><a href="">SAT</a></h4>
                            <p>The SAT tests students’ reasoning based on knowledge and skills developed through their course work. It measures their ability to analyze and solve problems by applying what they have learned in school.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href=""><img src="{{ asset('site/img/test_preparation/gre.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content-wrap">
                        <a href="#"><span>Read More</span></a>
                        <div class="blog-content">
                            <h4><a href="">GRE</a></h4>
                            <p>GRE is the most widely accepted examination by universities to determine a candidate's eligibility for a postgraduate program like MS, MBA, MEM or doctoral degree in USA, Canada and many European Universities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection