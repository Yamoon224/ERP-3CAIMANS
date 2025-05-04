<x-app-layout>
    @push('links')
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet"/>
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/css/select2.min.css" rel="stylesheet"/>
    @endpush

    <x-slot name="dash"></x-slot>
    <div class="content-wrapper w-100">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> @lang('locale.sale', ['prefix'=>'', 'suffix'=>'s'])</h4>
                        <div class="row grid-margin mb-2">
                            @if (!empty(session('message')))
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <strong>Heads up!</strong>
                                    {{ session('message') }}
                                </div>
                            </div>
                            @endif
                            
                            <div class="col-12">
                                <a class="btn btn-light btn-with-icon btn-block" href="{{ route('sales.create') }}">
                                    <i class="typcn typcn-document-add text-success"></i> @lang('locale.add', ['param'=>__('locale.sale', ['prefix'=>'', 'suffix'=>''])])
                                </a>
                            </div>
                        </div>
                        <div class="row overflow-auto">
                            <div class="col-12">
                                <table cellspacing="0" class="table" id="order-listing" width="100%">
                                    <thead>
                                        <th>#</th>
                                        <th>@lang('locale.created_at')</th>
                                        <th>@lang('locale.customer_name')</th>
                                        <th>@lang('locale.customer_contact')</th>
                                        <th>@lang('locale.name')</th>
                                        <th>@lang('locale.brand')</th>
                                        <th>@lang('locale.price')</th>
                                        <th>@lang('locale.quantity', ['prefix'=>'', 'suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</th>
                                        <th>@lang('locale.created_by')</th>
                                        <th>@lang('locale.action', ['suffix'=>'s'])</th>
                                    </thead>
                                    <tbody>
                                        @foreach($sales as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->brand }}</td>
                                            <td>{{ moneyFormat($item->price) }}</td>
                                            <td>{{ $item->qty.' '.$item->quantity->name }}</td>
                                            <td>{{ $item->creator->firstname. ' ' .$item->creator->name }}</td>
                                            <td>
                                                <div style="display: inline-block">
                                                    <a class="btn btn-light" href="{{ route('sales.edit', $item->id) }}">
                                                        <i class="typcn icon typcn-edit text-primary"></i>
                                                    </a>
                                                    <a class="btn btn-light" href="{{ route('sales.show', $item->id) }}">
                                                        <i class="typcn icon typcn-eye text-secondary"></i>
                                                    </a>
                                                </div>
                                                <form action="{{ route('sales.destroy', $item->id) }}" style="display: inline-block" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-light" onclick="if(!confirm('@lang('locale.do_you_confirm')')){ return false }">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/js/select2.min.js"></script>
    <script>
        $(function(){
            'use strict'
    
            $('#order-listing').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                "iDisplayLength": 10,
            });
    
            $('#order-listing').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });
    
            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
        });
      </script> 
    @endpush
</x-app-layout>
