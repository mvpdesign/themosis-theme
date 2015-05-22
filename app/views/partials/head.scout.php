<head>
    <!-- Meta Data -->
    @section('metaData')
    @show

    <!-- Prefetch DNS for external assets -->
    @section('dnsPrefetch')
    @show

    <!-- Favicons -->
    @section('favicons')
    @show

    <!-- Behavioral Meta Data -->
    @section('behavioralMetaData')
    @show

    <!-- WordPress Head -->
    @section('beforeWPHead')
    @show
    {{ $wpHead }}
    @section('afterWPHead')
    @show
</head>
