@section('behavioralMetaData')
@parent
    <!-- Run in full-screen mode. -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Customize home screen title. -->
    <meta name="mobile-web-app-title" content="{{ $siteTitle }}">
    <meta name="apple-mobile-web-app-title" content="{{ $siteTitle }}">

    <!-- Make the status bar black translucent. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- IE10 and IE11 on Windows Phone have a small tap highlight when you tap an element. Adding this meta tag removes this. -->
    <meta name="msapplication-tap-highlight" content="no" />

    <!-- Set viewport. -->
    @if ( $isResponsive )
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    @else
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @endif

    <!-- Icons -->

    <!-- Startup images -->
@stop
