@if (auth()->user()->is_admin)
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('admin.pages.index')}}"><span class="c-sidebar-nav-icon"></span>
        Pages
    </a>
</li>

<li class="c-sidebar-nav-title">{{ __('Manage Checklists') }}</li>
@foreach (\App\Models\ChecklistGroup::with('checklists')->get() as $group)
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown c-show">
    <a class="c-sidebar-nav-link" href="{{ route('admin.checklist_groups.edit', $group->id) }}">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
        </svg> {{ $group->name }}</a>
    <ul class="c-sidebar-nav-dropdown-items">
        @foreach ($group->checklists as $checklist)
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link"
                href="{{ route('admin.checklist_groups.checklists.edit', [$group, $checklist]) }}">
                <span class="c-sidebar-nav-icon"></span>
                {{ $checklist->name }}</a>
        </li>
        @endforeach
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link"
                href="{{ route('admin.checklist_groups.checklists.create', $group) }}">{{ __('New checklist') }}</a>
        </li>
    </ul>
</li>







@endforeach
<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-link"
        href="{{ route('admin.checklist_groups.create') }}">{{ __('New checklist group') }}</a>
</li>
@endif











<li class="c-sidebar-nav-item c-sidebar-nav-dropdown "><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
        href="#">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Base</a>
    <ul class="c-sidebar-nav-dropdown-items">



        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.pages.index')}}"><span
                    class="c-sidebar-nav-icon"></span> Pages</a></li>




    </ul>
</li>
