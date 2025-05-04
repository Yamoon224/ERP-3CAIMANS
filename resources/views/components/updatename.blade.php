<div class="modal" id="edit{{ $item->id }}">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">@lang('locale.'.$title, ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route($route.'.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="name">@lang('locale.name') <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input class="form-control" placeholder="@lang('locale.name')" value="{{ $item->name }}" type="text" name="name" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <x-button class="btn btn-indigo">@lang('locale.submit')</x-button>
                </div>
            </form>
        </div>
    </div>
</div>