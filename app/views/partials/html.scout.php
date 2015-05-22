<!doctype html>
<!--[if lt IE 10]><html {{ $languageAttributes }} class="no-js lt-ie10{{ $isAdminBarShowing ? ' WP-adminBar': '' }}"><![endif]-->
<!--[if gt IE 9]><!--><html {{ $languageAttributes }} class="no-js{{ $isAdminBarShowing ? ' WP-adminBar': '' }}"><!--<![endif]-->
    @include('partials.head')

    @include('partials.body')
</html>
