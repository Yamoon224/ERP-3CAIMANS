<x-app-layout>
    <x-slot name="dash"></x-slot>
    <div class="row">
        <div class="az-content-left az-content-left-profile">
            <div class="az-profile-overview">
                <div class="az-img-user">
                    <img alt="" src="{{ asset( !$article->images->isEmpty() ? $article->images->first()->path : 'images/article.png' ) }}"/>
                </div>
                <div class="d-flex justify-content-between mg-b-20">
                    <div>
                        <h5 class="az-profile-name">{{ $article->category->name }}</h5>
                        <p class="az-profile-name-text">{{ $article->name }}</p>
                    </div>
                    <div class="btn-icon-list">
                        <button type="button" class="btn btn-indigo btn-icon" data-target="#add-image" data-toggle="modal">
                            <i class="typcn typcn-image"></i>
                        </button>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-icon">
                            <i class="typcn typcn-edit"></i>
                        </a>
                    </div>
                </div>
                <div class="az-profile-bio">{{ $article->description ?? 'Aucune description' }}</div>
                <hr class="mg-y-10"/>
                <label class="az-content-label tx-13 mg-b-20">@lang('locale.article_details')</label>
                <div class="az-profile-social-list">
                    <div class="media">
                        <div class="media-body">
                            <span>@lang('locale.brand')</span>
                            <a href="">{{ $article->brand }}</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <span>@lang('locale.unitary_price')</span>
                            <a href="">{{ moneyFormat($article->price) }}</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <span>@lang('locale.stock_qty')</span>
                            <a href="">{{ $article->qty. ' ' .$article->quantity->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="az-content-body az-content-body-profile">
            <nav class="nav az-nav-line">
                <a class="nav-link active" data-toggle="tab" href="">@lang('locale.image', ['suffix'=>'s'])</a>
            </nav>
            <div class="az-profile-body">
                <div class="row mg-b-20">
                    <div class="wd-lg-80p">
                        <div class="carousel slide" data-ride="carousel" id="carouselExample4">
                            <ol class="carousel-indicators">
                                @foreach ($article->images as $key => $item)
                                <li class="{{ $key == 0 ? 'active' : '' }}" data-slide-to="{{ $key }}" data-target="#carouselExample4"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner bg-dark">
                                @foreach ($article->images as $item)
                                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                    <img alt="..." class="d-block w-100 op-3" src="{{ asset($item->path) }}" height="400"/>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->title }}</h5>
                                        <p class="tx-14"></p>
                                    </div>
                                </div>
                                @endforeach                                
                            </div>
                            <a class="carousel-control-prev" data-slide="prev" href="#carouselExample4" role="button">
                                <span aria-hidden="true" class="carousel-control-prev-icon">
                                    <i data-feather="chevron-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-slide="next" href="#carouselExample4" role="button">
                                <span aria-hidden="true" class="carousel-control-next-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>

    <div class="modal" id="add-image">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">@lang('locale.image', ['suffix'=>''])</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('articleimages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">@lang('locale.title') <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input class="form-control" placeholder="@lang('locale.title')" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">@lang('locale.image', ['suffix'=>'']) <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="typcn typcn-image"></i></span>
                                </div>
                                <input class="form-control" type="file" accept=".png, .jpg, .jpeg" name="path" required>
                            </div>
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
