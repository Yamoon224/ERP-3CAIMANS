<x-app-layout>
    @push('links')
    <link href="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/css/select2.min.css" rel="stylesheet"/>
    @endpush
    <x-slot name="dash"></x-slot>
    <div class="content-wrapper w-100">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> @lang('locale.article', ['prefix'=>'', 'suffix'=>'s'])</h4>
                        <div class="d-flex flex-column wd-md-400 pd-30 pd-sm-40 bg-gray-200 w-100">
                            <form action="{{ route('articles.update', $article->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="name">@lang('locale.name') <span class="text-danger">*</span></label>
                                            <input class="form-control" id="name" value="{{ $article->name }}" placeholder="@lang('locale.name')" type="text" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">@lang('locale.price') <span class="text-danger">*</span></label>
                                            <input class="form-control" id="price" value="{{ $article->price }}" placeholder="@lang('locale.price')" type="number" name="price" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="brand">@lang('locale.brand') <span class="text-danger">*</span></label>
                                            <input class="form-control" id="brand" value="{{ $article->brand }}" placeholder="@lang('locale.brand')" type="text" name="brand" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="qty">@lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : 'e')]) <span class="text-danger">*</span></label>
                                            <input class="form-control" id="qty" value="{{ $article->qty }}" placeholder="@lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])" type="number" name="qty" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="slWrapper">@lang('locale.category', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s']) <span class="text-danger">*</span></label>
                                            <select class="form-control select2" name="category_id" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required>
                                                <option label="@lang('locale.choose')"></option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $article->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="slWrapper">@lang('locale.unity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : 'e')]) <span class="text-danger">*</span></label>
                                            <select class="form-control select2" name="quantity_id" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required>
                                                <option label="@lang('locale.choose')"></option>
                                                @foreach ($quantities as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $article->quantity_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">@lang('locale.description')</label>
                                            <textarea class="form-control" id="description" name="description" style="resize: none">{{ $article->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <x-button class="btn btn-az-primary btn-block">@lang('locale.submit')</x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/js/select2.min.js"></script>
    <script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/parsleyjs/parsley.min.js"></script>
    <script>
        $(function() {
            'use strict'   
    
            $(document).ready(function() {
                $('.select2').select2({ placeholder: 'Choose one' });
            });
        })
    @endpush
</x-app-layout>
