@isset($navs)
<ul class="nav nav-pills">
    @foreach ($navs as $nav)
    <li class="nav-item"><a class="nav-link {{ (($nav["active"]) ?? false) ? 'active' : '' }}" href="{{ $nav["link"] }}">{{ $nav["name"] }}</a></li>
    @endforeach
</ul>
@endisset
