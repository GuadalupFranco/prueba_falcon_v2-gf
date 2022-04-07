@isset($navs)
@php($i=1)
<nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        @foreach ($navs as $nav)
            @if(count($navs) != $i)
                <li class="breadcrumb-item"><a href="{{ ($nav["link"]) != '/' ? route($nav['link']) : '/' }}">{{ $nav['name'] }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $nav['name'] }}</li>
            @endif
            @php($i++)
        @endforeach
    </ol>
</nav>
@endisset