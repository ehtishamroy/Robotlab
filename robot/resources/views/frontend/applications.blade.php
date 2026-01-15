@extends('layouts.frontend')

@section('title', 'Applications | ' . setting('site_name', 'Spectrum Robotics'))

@push('styles')
    <style>
        /* Increase banner height on desktop to show full staff-text watermark */
        @media (min-width: 992px) {
            .page-banner11 {
                padding: 366px 0 265px !important;
            }
        }

        .applications-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .applications-grid {
            display: grid;
            gap: 30px;
        }

        .application-card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .application-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .application-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .application-title {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a2e;
            margin: 0;
            flex: 1;
            min-width: 200px;
        }

        .application-meta {
            display: flex;
            gap: 15px;
            align-items: center;
            color: #666;
            font-size: 14px;
        }

        .application-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .application-pricing {
            color: #448e91;
            font-weight: 600;
        }

        .application-description {
            color: #666;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .application-description.collapsed {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .toggle-desc {
            color: #448e91;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            border: none;
            background: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .toggle-desc:hover {
            text-decoration: underline;
        }

        .application-footer {
            display: flex;
            justify-content: flex-end;
        }

        .speak-to-staff-btn {
            background: linear-gradient(135deg, #448e91 0%, #2d6a6c 100%);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .speak-to-staff-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(68, 142, 145, 0.4);
            color: #fff;
        }

        /* Consultation Popup Styles */
        .consultation-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .consultation-popup-overlay.active {
            display: flex;
        }

        .consultation-popup {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 20px;
            padding: 40px;
            max-width: 500px;
            width: 100%;
            position: relative;
            max-height: 90vh;
            overflow-y: auto;
        }

        .consultation-popup-close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 28px;
            color: #fff;
            cursor: pointer;
            background: none;
            border: none;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .consultation-popup-close:hover {
            opacity: 1;
        }

        .consultation-popup h2 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .consultation-popup .selected-app {
            color: #448e91;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .consultation-popup input,
        .consultation-popup textarea,
        .consultation-popup select {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border-radius: 8px;
            font-size: 14px;
        }

        .consultation-popup input::placeholder,
        .consultation-popup textarea::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .consultation-popup input:focus,
        .consultation-popup textarea:focus {
            outline: none;
            border-color: #448e91;
        }

        .consultation-popup select {
            color: #000;
            background-color: #fff;
        }

        .consultation-popup select:focus {
            outline: none;
            border-color: #448e91;
        }

        .consultation-popup label {
            color: rgba(255, 255, 255, 0.8);
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row>div {
            flex: 1;
        }

        .consultation-popup .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #448e91 0%, #2d6a6c 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .consultation-popup .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(68, 142, 145, 0.4);
        }

        .consultation-popup .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .form-message {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            display: none;
        }

        .form-message.success {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
            display: block;
        }

        .form-message.error {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
            display: block;
        }

        @media (max-width: 768px) {
            .application-header {
                flex-direction: column;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .consultation-popup {
                padding: 25px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        @include('partials.banner-dynamic', ['key' => 'applications', 'class' => 'page-banner11'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Applications</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Applications /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Applications</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Applications Section -->
    <section class="applications-section">
        <div class="container">
            <div class="sec-title text-center" style="margin-bottom: 50px;">
                <span class="sub-title">Our Solutions</span>
                <h2 class="title animated-heading">Explore Our Robot Applications</h2>
                <p style="color: #666; max-width: 600px; margin: 20px auto 0;">Schedule a consultation with our team to
                    learn how these innovative solutions can transform your business.</p>
            </div>

            <div class="applications-grid">
                @forelse($applications as $app)
                    <div class="application-card">
                        <div class="application-header">
                            <h3 class="application-title">{{ $app->title }}</h3>
                            <div class="application-meta">
                                <span><i class="far fa-clock"></i> {{ $app->duration }}</span>
                                <span>|</span>
                                <span class="application-pricing">{{ $app->pricing }}</span>
                            </div>
                        </div>
                        <p class="application-description">{{ $app->description }}</p>
                        <div class="application-footer">
                            <button type="button" class="speak-to-staff-btn" data-app-title="{{ $app->title }}">
                                <i class="fas fa-comments"></i>
                                Speak To Staff
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <p>No applications available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Applications Section -->

    <!-- Consultation Booking Popup -->
    <div class="consultation-popup-overlay" id="consultationPopup">
        <div class="consultation-popup">
            <button type="button" class="consultation-popup-close" id="closePopupBtn">&times;</button>
            <h2>Book a Consultation</h2>
            <p class="selected-app" id="selectedAppTitle"></p>

            <div class="form-message" id="formMessage"></div>

            <form id="consultationForm">
                @csrf
                <input type="hidden" name="application_type" id="applicationTypeInput">

                <input type="text" name="name" placeholder="Your Name *" required>
                <input type="email" name="email" placeholder="Email Address *" required>
                <input type="tel" name="phone" placeholder="Phone Number">
                <input type="text" name="company" placeholder="Company Name">

                <div class="form-row">
                    <div>
                        <label>Preferred Date *</label>
                        <input type="date" name="preferred_date" required min="{{ date('Y-m-d') }}">
                    </div>
                    <div>
                        <label>Preferred Time *</label>
                        <select name="preferred_time" required>
                            <option value="">Select Time</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="4:00 PM">4:00 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                        </select>
                    </div>
                </div>

                <textarea name="message" rows="3" placeholder="Additional message or questions..."></textarea>

                <button type="submit" class="submit-btn" id="submitBtn">
                    <span>Submit Booking Request</span>
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Speak to Staff buttons
            document.querySelectorAll('.speak-to-staff-btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var appTitle = this.getAttribute('data-app-title');
                    document.getElementById('selectedAppTitle').textContent = appTitle;
                    document.getElementById('applicationTypeInput').value = appTitle;
                    document.getElementById('consultationPopup').classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close button
            document.getElementById('closePopupBtn').addEventListener('click', function () {
                closeConsultationPopup();
            });

            // Close popup when clicking outside
            document.getElementById('consultationPopup').addEventListener('click', function (e) {
                if (e.target === this) {
                    closeConsultationPopup();
                }
            });

            // Form submission
            document.getElementById('consultationForm').addEventListener('submit', function (e) {
                e.preventDefault();

                var form = this;
                var submitBtn = document.getElementById('submitBtn');
                var formMessage = document.getElementById('formMessage');
                var formData = new FormData(form);

                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Submitting...</span>';

                fetch('{{ route("consultation.booking") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                    .then(function (response) { return response.json(); })
                    .then(function (data) {
                        if (data.success) {
                            formMessage.className = 'form-message success';
                            formMessage.textContent = data.message;
                            form.reset();
                            document.getElementById('applicationTypeInput').value = document.getElementById('selectedAppTitle').textContent;

                            setTimeout(function () {
                                closeConsultationPopup();
                            }, 3000);
                        } else {
                            formMessage.className = 'form-message error';
                            formMessage.textContent = data.message || 'Something went wrong. Please try again.';
                        }
                    })
                    .catch(function (error) {
                        formMessage.className = 'form-message error';
                        formMessage.textContent = 'An error occurred. Please try again.';
                    })
                    .finally(function () {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Submit Booking Request</span>';
                    });
            });

            function closeConsultationPopup() {
                document.getElementById('consultationPopup').classList.remove('active');
                document.body.style.overflow = '';
                document.getElementById('consultationForm').reset();
                document.getElementById('formMessage').className = 'form-message';
                document.getElementById('formMessage').textContent = '';
            }

            // Make closeConsultationPopup available globally
            window.closeConsultationPopup = closeConsultationPopup;
        });
    </script>
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection