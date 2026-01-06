@php
    use Orchid\Attachment\Models\Attachment;

    // Retrieve settings
    // Image
    $bgImage = setting('banner_' . $key . '_image');

    // Uploaded Video (returns JSON string of IDs array)
    $uploadIds = json_decode(setting('banner_' . $key . '_video_file', '[]'), true);

    // YouTube URL
    $youtubeUrl = setting('banner_' . $key . '_youtube');

    // Resolve Uploaded Video URL
    $videoFileUrl = null;
    if (!empty($uploadIds) && is_array($uploadIds)) {
        $attachmentID = $uploadIds[0] ?? null;
        if ($attachmentID) {
            $attachment = Attachment::find($attachmentID);
            if ($attachment) {
                $videoFileUrl = $attachment->url();
            }
        }
    }

    // Resolve YouTube ID
    $youtubeId = null;
    if (!$videoFileUrl && $youtubeUrl) {
        // Regex to extract YouTube ID from standard, short, or embed URLs
        if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $youtubeUrl, $matches)) {
            $youtubeId = $matches[1];
        }
    }

    // Default class if not provided
    $bannerClass = $class ?? 'page-banner9';
@endphp

@if($videoFileUrl)
    <!-- Uploaded Video Logic -->
    <style>
        .{{ $bannerClass }} {
            position: relative;
            background: none !important;
            overflow: hidden;
            z-index: 1;
            /* Establish stacking context */
        }

        .{{ $bannerClass }} .video-bg-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            /* Behind content, inside banner */
            overflow: hidden;
            pointer-events: none;
        }

        .{{ $bannerClass }} .banner-video-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            object-fit: cover;
        }

        /* Overlay */
        .{{ $bannerClass }}::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
            /* Above video */
            pointer-events: none;
        }

        /* Content z-index adjustment */
        .{{ $bannerClass }}>*:not(.video-bg-wrapper) {
            position: relative;
            z-index: 2;
            /* Above overlay and video */
        }
    </style>

    <div class="video-bg-wrapper">
        <video autoplay muted loop playsinline class="banner-video-bg">
            <source src="{{ $videoFileUrl }}" type="video/mp4">
        </video>
    </div>

@elseif($youtubeId)
    <!-- YouTube Logic -->
    <style>
        .{{ $bannerClass }} {
            position: relative;
            background: none !important;
            overflow: hidden;
            z-index: 1;
            /* Establish stacking context */
        }

        .{{ $bannerClass }} .video-bg-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            /* Behind content */
            overflow: hidden;
            pointer-events: none;
        }

        .{{ $bannerClass }} .youtube-background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
            height: 56.25vw;
            /* 16:9 Aspect Ratio */
            min-height: 100vh;
            min-width: 177.77vh;
        }

        /* Overlay */
        .{{ $bannerClass }}::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
            /* Above video */
            pointer-events: none;
        }

        /* Content z-index adjustment */
        .{{ $bannerClass }}>*:not(.video-bg-wrapper) {
            position: relative;
            z-index: 2;
            /* Above overlay and video */
        }
    </style>

    <div class="video-bg-wrapper">
        <iframe class="youtube-background"
            src="https://www.youtube.com/embed/{{ $youtubeId }}?autoplay=1&mute=1&loop=1&playlist={{ $youtubeId }}&controls=0&showinfo=0&rel=0&start=0"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

@elseif($bgImage)
    <!-- Image Fallback Logic -->
    <style>
        .{{ $bannerClass }} {
            background-image: url('{{ $bgImage }}') !important;
            background-size: cover;
            background-position: center;
        }
    </style>
@endif