@extends('layouts.frontend')

@section('title', 'FAQ | Spectrum Robotics')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        @include('partials.banner-dynamic', ['key' => 'faq', 'class' => 'page-banner9'])
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
                <div class="col-12">
                    <div class="faq-content5">
                        <h2 class="title">Frequently Asked Questions</h2>
                        <div class="faq-content4">
                            <div class="accordion4" id="accordionExample">
                                @forelse($faqs as $index => $faq)
                                    <div class="accordion-item @if($loop->last) mb-0 @endif">
                                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $faq->id }}">
                                                <span class="accordion-title">
                                                    <span
                                                        class="accordion-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                                    {{ $faq->question }}
                                                </span>
                                                <i class="fontello icon-button-arrow-down"></i>
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $faq->id }}"
                                            class="accordion-collapse collapse @if($loop->first) show @endif"
                                            aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center">
                                        <p>No FAQs available at the moment.</p>
                                    </div>
                                @endforelse
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
    @include('partials.contact')
@endsection