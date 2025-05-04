
<div class="az-navbar az-navbar-two az-navbar-dashboard-eight">
    <div class="container">
        <div class="az-navbar-header">
            <a class="az-logo" href="{{ route('dashboard') }}">
                <x-application-logo />
            </a>
        </div>
        <div class="az-navbar-search">
        <input class="form-control" placeholder="Search for anything..." type="search"/>
        <button class="btn">
        <i class="fas fa-search">
        </i>
        </button>
        </div>
        <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }} show">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="typcn typcn-clipboard"></i> @lang('locale.dashboard')
                </a>
            </li>
            <li class="nav-item {{ Route::is('articles.index') ? 'active' : '' }} show">
                <a class="nav-link" href="{{ route('articles.index') }}">
                    <i class="typcn typcn-folder"></i> @lang('locale.article', ['prefix'=>'', 'suffix'=>'s'])
                </a>
            </li>
            <li class="nav-item {{ Route::is('sales.index') ? 'active' : '' }} show">
                <a class="nav-link" href="{{ route('sales.index') }}">
                    <i class="typcn typcn-folder"></i> @lang('locale.sale', ['prefix'=>'', 'suffix'=>'s'])
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link with-sub" href="">
                    <i class="typcn typcn-book"></i> @lang('locale.component', ['prefix'=>'', 'suffix'=>'s'])
                </a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link {{ Route::is('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">
                            @lang('locale.category', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])
                        </a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link {{ Route::is('quantities.index') ? 'active' : '' }}" href="{{ route('quantities.index') }}">
                            @lang('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'ie' : 'e') .'s'])
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link with-sub" href="">
                    <i class="typcn typcn-edit"></i> @lang('locale.management')
                </a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link {{ Route::is('groups.index') ? 'active' : '' }}" href="{{ route('groups.index') }}">
                            @lang('locale.group', ['suffix'=>'s', 'prefix'=>''])
                        </a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link {{ Route::is('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">
                            @lang('locale.user', ['suffix'=>'s', 'prefix'=>''])
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>