<ul class="metismenu" id="menu-bar">
    {{-- <li class="menu-title">Navigation</li> --}}

    <li>
        <a href="/">
            <i data-feather="home"></i>
            {{-- <span class="badge badge-success float-right">1</span> --}}
            <span> Dashboard </span>
        </a>
    </li>
    {{-- <li class="menu-title">Apps</li> --}}
    <li>
        <a href="javascript: void(0);">
            <i data-feather="inbox"></i>
            <span> Assessments </span>
            <span class="menu-arrow"></span>
        </a>

        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{ route('assessments') }}">All</a>
            </li>
            <li>
                <a href="{{ route('assessments.mismatched') }}">Mismatched</a>
            </li>
            {{-- <li>
                <a href="{{route('assessments.individuals')}}">Individual</a>
            </li> --}}
        </ul>
    </li>
</ul>
