<video
    class="video-js col-md-12"
    preload="none"
    controls
    height="{{$height??200}}"
    poster="{{$poster??asset('assets/img/image.png')}}"
    data-setup="{}"
    >
    <source src="{{$src}}" type="video/mp4">
    <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a>
    </p>
</video>