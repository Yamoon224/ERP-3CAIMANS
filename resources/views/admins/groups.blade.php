<x-app-layout>
    @push('links')
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/css/select2.min.css" rel="stylesheet"/>
    @endpush
    <div class="az-content-left az-content-left-components">
        <div class="component-item">
            <label>@lang('locale.management')</label>
            <nav class="nav flex-column">
                <a class="nav-link {{ Route::is('groups.index') ? 'active' : '' }}" href="{{ route('groups.index') }}">
                    @lang('locale.group', ['prefix'=>'', 'suffix'=>'s'])
                </a>
                <a class="nav-link {{ Route::is('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">
                    @lang('locale.user', ['prefix'=>'', 'suffix'=>'s'])
                </a>
            </nav>
        </div>
    </div>
    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="az-content-breadcrumb">
            <span>@lang('locale.management')</span>
            <span>@lang('locale.group', ['prefix'=>'', 'suffix'=>'s'])</span>
        </div>

        <div class="az-content-label mg-b-5">@lang('locale.group', ['prefix'=>'', 'suffix'=>'s'])</div>
        <p class="mg-b-20">Add borders on all sides of the table and cells.</p>
        <div class="table-responsive">
            <table class="datatable table table-bordered table-striped mg-b-0">
                <thead>
                    <th>#</th>
                    <th>@lang('locale.name')</th>
                    <th>@lang('locale.action', ['suffix'=>'s'])</th>
                </thead>
                <tbody>
                    @foreach($groups as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
    <x-datatable></x-datatable>
    @endpush
</x-app-layout>
