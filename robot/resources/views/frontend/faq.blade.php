@extends('layouts.frontend')

@section('title', 'FAQ || Aiero AI Agency & Technology HTML Template')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ FAQ /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>FAQ</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- faq-sec5 -->
    <section class="faq-sec5 ibt-section-gap">
        <button class="sidebar-toggle"></button>
        <!-- Overlay -->
        <div class="sidebar-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="side-bar2">
                        <button class="sidebar-close"></button>
                        <div class="ser-widget side-widget">
                            <a href='service-single.html' title>Network Integration</a>
                            <a href='service-single.html' title>Deep learning solutions</a>
                            <a href='service-single.html' title>Transfer learning</a>
                            <a href='service-single.html' title>Model evaluation</a>
                            <a href='service-single.html' title>Real-time prediction</a>
                        </div>
                        <div class="strategy-widget side-widget">
                            <img src="{{ asset('frontend/assets/images/event/shades.png') }}"
                                alt="AI Agency & Technology HTML Template">
                            <div class="strategy-content">
                                <h4 class="title">AI Strategy and Consulting</h4>
                                <p>Provide expert guidance on developing an AI strategy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="faq-content5">
                        <h2 class="title">What would you like to know?</h2>
                        <div class="faq-block5">
                            <h4 class="title2"><span>1.</span>How does Machine Learning relate to Artificial
                                Intelligence?</h4>
                            <p>Machine Learning is a subset of AI that focuses on developing algorithms and
                                models that allow computers to learn from data and improve their performance
                                over time. It plays a crucial role in enabling AI systems to recognize patterns,
                                make predictions, and adapt to new information.
                            </p>
                        </div>
                        <div class="faq-block5">
                            <h4 class="title2"><span>2.</span>What are the different types of Artificial Intelligence?
                            </h4>
                            <p>There are generally two types of AI: Narrow or Weak AI, which is designed to perform
                                specific tasks, and General or Strong AI, which possesses human-level intelligence
                                and can handle a wide range of tasks.
                            </p>
                        </div>
                        <div class="faq-block5 mb-0">
                            <h4 class="title2"><span>3.</span>What are the applications of Artificial Intelligence?</h4>
                            <p>AI has applications in various fields, including:</p>
                            <ul class="faq-list5">
                                <li><i class="fas fa-circle"></i>Natural Language Processing (NLP) for chatbots,
                                    language translation, and sentiment analysis.</li>
                                <li><i class="fas fa-circle"></i>Computer Vision for image recognition, object
                                    detection, and autonomous vehicles.</li>
                                <li><i class="fas fa-circle"></i>Machine Learning for predictive analytics, data mining,
                                    and pattern recognition.</li>
                                <li><i class="fas fa-circle"></i>Robotics for automation in industries such as
                                    manufacturing and healthcare.</li>
                                <li><i class="fas fa-circle"></i>AI-powered personal assistants, recommendation systems,
                                    and fraud detection, among others.</li>
                            </ul>
                        </div>
                        <div class="faq-content4 ibt-section-gapTop">
                            <div class="sec-title">
                                <h2 class="title animated-heading mb-0">Everything you need to know about</h2>
                            </div>
                            <div class="accordion4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="accordion-title">
                                                <span class="accordion-number">01</span> What is Artificial
                                                Intelligence?
                                            </span>
                                            <i class="fontello icon-button-arrow-down"></i>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Machine Learning is a subset of AI that focuses on developing algorithms and
                                            models
                                            that allow computers to learn from data and improve their performance over
                                            time. It
                                            plays a crucial role in enabling AI systems to recognize patterns, make
                                            predictions,
                                            and adapt to new information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="accordion-title">
                                                <span class="accordion-number">02</span> How does Machine Learning
                                                relate to Artificial Intelligence?
                                            </span>
                                            <i class="fontello icon-button-arrow-down"></i>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Machine Learning is a subset of AI that focuses on developing algorithms and
                                            models
                                            that allow computers to learn from data and improve their performance over
                                            time. It
                                            plays a crucial role in enabling AI systems to recognize patterns, make
                                            predictions,
                                            and adapt to new information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span class="accordion-title">
                                                <span class="accordion-number">03</span> Is Artificial Intelligence
                                                replacing human jobs?
                                            </span>
                                            <i class="fontello icon-button-arrow-down"></i>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Machine Learning is a subset of AI that focuses on developing algorithms and
                                            models
                                            that allow computers to learn from data and improve their performance over
                                            time. It
                                            plays a crucial role in enabling AI systems to recognize patterns, make
                                            predictions,
                                            and adapt to new information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-0">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapsefour">
                                            <span class="accordion-title">
                                                <span class="accordion-number">04</span> What are the different types of
                                                Artificial Intelligence?
                                            </span>
                                            <i class="fontello icon-button-arrow-down"></i>
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Machine Learning is a subset of AI that focuses on developing algorithms and
                                            models
                                            that allow computers to learn from data and improve their performance over
                                            time. It
                                            plays a crucial role in enabling AI systems to recognize patterns, make
                                            predictions,
                                            and adapt to new information.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq-sec5 -->
@endsection

@section('contact_section')
    <!-- contact-sec -->
    <div class="contact-sec ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="sec-title white">
                            <span class="sub-title">get in touch</span>
                            <h2 class="title animated-heading">We are always ready to help you and answer your
                                questions</h2>
                            <p>Pacific hake false trevally queen parrotfish black prickleback mosshead
                                warbonnet sweeper! Greenling sleeper.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Call Center</h4>
                                        <a href="tel:8003508431" class="nmbr">800 100 975 20 34</a>
                                        <a href="mailto:support@aiero.com" class="nmbr">+ (123)
                                            1800-234-5678</a>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Email</h4>
                                        <a href="mailto:support@aiero.com" class="gmail">aiero@mail.co</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Our Location</h4>
                                        <p>USA, New York - 1060 <br>Str. First Avenue 1</p>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Social network</h4>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                        class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="#" method="post" class="custom-form">
                            <h2>Get in Touch</h2>
                            <input type="text" id="name" name="name" placeholder="Full name" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            <textarea id="message" name="message" rows="5" placeholder="Write your message..."
                                required></textarea>

                            <button type="submit" class="ibt-btn ibt-btn-outline">
                                <span>Send message</span>
                                <i class="icon-arrow-top"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End contact-sec -->
@endsection