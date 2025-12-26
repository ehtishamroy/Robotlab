<!-- contact-sec -->
<div class="contact-sec ibt-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-content">
                    <div class="sec-title white">
                        <span class="sub-title"><span class="sub-text"
                                style="overflow: hidden; display: inline-block; width: 77px;">{{ setting('contact_subtitle', 'Get Started') }}</span></span>
                        <h2 class="title animated-heading">
                            {{ setting('contact_title', 'Ready to Transform Your Restaurant Service?') }}
                        </h2>
                        <p>{{ setting('contact_description', 'Contact our knowledgeable professionals to see how service robots can increase efficiency, reduce labor costs, and elevate your guest experience.') }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <div class="call-center">
                                    <h4 class="title">{{ setting('contact_phone_title', 'Sales & Support') }}</h4>
                                    @if(setting('contact_phone'))
                                        <a href="tel:{{ str_replace(['(', ')', ' ', '-'], '', setting('contact_phone')) }}"
                                            class="nmbr">{{ setting('contact_phone', '(630) 809-9698') }}</a>
                                    @endif
                                    @if(setting('contact_whatsapp'))
                                        <a href="https://wa.me/{{ setting('contact_whatsapp') }}" class="nmbr">WhatsApp</a>
                                    @endif
                                </div>
                                <div class="call-center mb-0">
                                    <h4 class="title">{{ setting('contact_email_title', 'Email') }}</h4>
                                    <a href="mailto:{{ setting('contact_email', 'info@spectrumrobotics.ai') }}"
                                        class="gmail">{{ setting('contact_email', 'info@spectrumrobotics.ai') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <div class="call-center">
                                    <h4 class="title">{{ setting('contact_schedule_title', 'Schedule Demo') }}</h4>
                                    <a href="{{ setting('contact_schedule_link', 'https://calendly.com/spectrumrobotics') }}"
                                        class="nmbr"
                                        target="_blank">{{ setting('contact_schedule_text', 'Book Online') }}</a>
                                </div>
                                <div class="call-center mb-0">
                                    <h4 class="title">{{ setting('contact_social_title', 'Follow Us') }}</h4>
                                    <ul class="social-icon">
                                        @if(setting('facebook_link'))
                                            <li><a href="{{ setting('facebook_link') }}" target="_blank" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if(setting('linkedin_link'))
                                            <li><a href="{{ setting('linkedin_link') }}" target="_blank" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                        @if(setting('youtube_link'))
                                            <li><a href="{{ setting('youtube_link') }}" target="_blank" title=""><i
                                                        class="fab fa-youtube"></i></a></li>
                                        @endif
                                        @if(setting('instagram_link'))
                                            <li><a href="{{ setting('instagram_link') }}" target="_blank" title=""><i
                                                        class="fab fa-instagram"></i></a></li>
                                        @endif
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
                        <h2>{{ setting('contact_form_title', 'Request a Service Robot Demo') }}</h2>
                        <input type="text" id="name" name="name" placeholder="Full name" required="">
                        <input type="email" id="email" name="email" placeholder="Email" required="">
                        <input type="text" id="company" name="company" placeholder="Restaurant/Company Name">
                        <input type="text" id="location" name="location" placeholder="Location/City">
                        <select id="venue_type" name="venue_type"
                            style="width: 100%; padding: 15px; margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: #fff; border-radius: 5px;">
                            <option value="">Select Venue Type</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="casino">Casino Restaurant</option>
                            <option value="senior">Senior Living Facility</option>
                            <option value="university">University Dining</option>
                            <option value="corporate">Corporate Cafeteria</option>
                            <option value="other">Other</option>
                        </select>
                        <textarea id="message" name="message" rows="3" placeholder="Tell us about your operation..."
                            required=""></textarea>

                        <button type="submit" class="ibt-btn ibt-btn-outline">
                            <span>Request Demo</span>
                            <i class="icon-arrow-top"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End contact-sec -->