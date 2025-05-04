<x-app-layout>
    @push('links')
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/css/select2.min.css" rel="stylesheet"/>
    @endpush

    <div class="az-content-left az-content-left-components">
        <div class="component-item">
            <label>@lang('locale.component', ['prefix'=>'', 'suffix'=>'s'])</label>
            <nav class="nav flex-column">
                <a class="nav-link {{ Route::is('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                    @lang('locale.category', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])
                </a>
                <a class="nav-link {{ Route::is('quantities.index') ? 'active' : '' }}" href="{{ route('quantities.index') }}">
                    @lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])
                </a>
            </nav>
        </div>
    </div>
    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="az-content-breadcrumb">
            <span>@lang('locale.component', ['prefix'=>'', 'suffix'=>'s'])</span>
            <span>@lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])</span>
        </div>
    
        <div class="">
            <div class="float-left">
                <div class="az-content-label mg-b-5">@lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])</div>
                <p class="mg-b-20 text-{{ !empty(session('message')) ? 'success' : 'dark' }}">{{ session('message') ?? __('locale.quantity_listable') }}</p>
            </div>
            <div class="float-right">
                <a class="btn btn-light" data-target="#add" data-toggle="modal">
                    <i class="typcn typcn-document-add text-success"></i>
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="datatable table table-bordered table-striped mg-b-0">
                <thead>
                    <th>#</th>
                    <th>@lang('locale.created_at')</th>
                    <th>@lang('locale.name')</th>
                    <th>@lang('locale.created_by')</th>
                    <th>@lang('locale.action', ['suffix'=>'s'])</th>
                </thead>
                <tbody>
                    @foreach($quantities as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->creator->firstname. ' ' .$item->creator->name }}</td>
                        <td>
                            <div style="display: inline-block">
                                <a class="btn btn-sm btn-light" data-target="#edit{{ $item->id }}" data-toggle="modal">
                                    <i class="typcn typcn-edit text-primary"></i>
                                </a>
                                @php($title = 'quantity') @php($route = 'quantities')
                                <x-updatename :item="$item" :title="$title" :route="$route"></x-updatename>
                            </div>
                            <form action="{{ route('quantities.destroy', $item->id) }}" style="display: inline-block" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-light" onclick="if(!confirm('@lang('locale.do_you_confirm')')){ return false }">
                                    <i class="typcn typcn-trash text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
    <x-datatable></x-datatable>
    @endpush

    <div class="modal" id="add">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">@lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('quantities.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="name">@lang('locale.name') <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input class="form-control" placeholder="@lang('locale.name')" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <x-button class="btn btn-indigo">@lang('locale.submit')</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
