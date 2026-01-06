@extends('layouts.frontend')

@section('title', 'Careers | ' . setting('site_name', 'Spectrum Robotics'))

@push('styles')
    <style>
        .careers-section {
            padding: 80px 0;
        }

        .careers-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .careers-header h2 {
            font-size: 42px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 15px;
        }

        .careers-header p {
            color: #666;
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .careers-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        @media (max-width: 991px) {
            .careers-grid {
                grid-template-columns: 1fr;
            }
        }

        .career-card {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 20px;
            padding: 35px;
            color: #fff;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .career-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .career-title {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .career-content {
            flex: 1;
        }

        .career-section {
            margin-bottom: 20px;
        }

        .career-section-title {
            color: #448e91;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .career-section p {
            color: #ffffff;
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
        }

        .career-section ul {
            color: #ffffff;
            font-size: 14px;
            line-height: 1.8;
            margin: 0;
            padding-left: 20px;
        }

        .career-section ul li {
            margin-top: 10px;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .career-footer {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .apply-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #448e91 0%, #2d6a6c 100%);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .apply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(68, 142, 145, 0.4);
            color: #fff;
        }

        .no-careers {
            text-align: center;
            padding: 60px;
            background: #f8f9fa;
            border-radius: 20px;
        }

        .no-careers h3 {
            color: #1a1a2e;
            margin-bottom: 15px;
        }

        .no-careers p {
            color: #666;
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner9">
        @include('partials.banner-dynamic', ['key' => 'careers', 'class' => 'page-banner9'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Careers</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Join Our Team /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Careers</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Careers Section -->
    <section class="careers-section">
        <div class="container">
            <div class="careers-header">
                <h2>Join Our Team</h2>
                <p>Spectrum Robotics is at the forefront of innovation, revolutionizing industries with state-of-the-art
                    robotic solutions.</p>
            </div>

            @if($careers->count() > 0)
                <div class="careers-grid">
                    @foreach($careers as $career)
                        <div class="career-card">
                            <h3 class="career-title">{{ $career->title }}</h3>

                            <div class="career-content">
                                @if($career->about)
                                    <div class="career-section">
                                        <div class="career-section-title">About</div>
                                        <p>{{ $career->about }}</p>
                                    </div>
                                @endif

                                @if($career->overview)
                                    <div class="career-section">
                                        <div class="career-section-title">General Overview</div>
                                        <p>{{ $career->overview }}</p>
                                    </div>
                                @endif

                                @if($career->responsibilities)
                                    <div class="career-section">
                                        <div class="career-section-title">Responsibilities</div>
                                        <ul>
                                            @foreach(explode(PHP_EOL, str_replace('\n', PHP_EOL, $career->responsibilities)) as $item)
                                                @if(trim($item))
                                                    <li>{{ trim($item) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if($career->qualifications)
                                    <div class="career-section">
                                        <div class="career-section-title">Qualifications</div>
                                        <ul>
                                            @foreach(explode(PHP_EOL, str_replace('\n', PHP_EOL, $career->qualifications)) as $item)
                                                @if(trim($item))
                                                    <li>{{ trim($item) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="career-footer">
                                <a href="mailto:{{ $career->apply_email }}?subject=Application for {{ urlencode($career->title) }}&body=I am interested in the posted position and attaching my resume for consideration."
                                    class="apply-btn">
                                    <i class="fas fa-paper-plane"></i>
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-careers">
                    <h3>No Open Positions</h3>
                    <p>There are no open positions at the moment. Please check back later or send your resume to <a
                            href="mailto:support@spectrumrobotics.co">support@spectrumrobotics.co</a></p>
                </div>
            @endif
        </div>
    </section>
    <!-- End Careers Section -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection