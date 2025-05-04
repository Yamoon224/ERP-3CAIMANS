<div class="az-header az-header-primary">
    <div class="container">
        <div class="az-header-left">
            <a class="az-logo" href="{{ route('dashboard') }}">
                <x-application-logo />
            </a>
            <a class="az-header-menu-icon d-lg-none" href="" id="azNavShow">
                <span></span>
            </a>
        </div>
        <div class="az-header-center">
            <input class="form-control" placeholder="Search for anything..." type="search"/>
            <button class="btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="az-header-right">
            <div class="az-header-message">
                <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div>
            <div class="dropdown az-header-notification">
                <a class="new" href=""><i class="typcn typcn-bell"></i></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header mg-b-20 d-sm-none">
                        <a class="az-header-arrow" href="">
                            <i class="icon ion-md-arrow-back"></i>
                        </a>
                    </div>
                    <h6 class="az-notification-title">Notifications</h6>
                    <p class="az-notification-text">You have 2 unread notification</p>
                    <div class="az-notification-list">
                        <div class="media new">
                            <div class="az-img-user">
                                <img alt="" src="{{ asset('images/faces/face2.jpg') }}"/>
                            </div>
                            <div class="media-body">
                                <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                <span>Mar 15 12:32pm</span>
                            </div>
                        </div>
                        <div class="media new">
                            <div class="az-img-user online">
                                <img alt="" src="{{ asset('images/faces/face3.jpg') }}"/>
                            </div>
                            <div class="media-body">
                                <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                <span>Mar 13 04:16am</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="az-img-user">
                                <img alt="" src="{{ asset('images/faces/face4.jpg') }}"/>
                            </div>
                            <div class="media-body">
                                <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                <span>Mar 13 02:56am</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="az-img-user">
                                <img alt="" src="{{ asset('images/faces/face5.jpg') }}"/>
                            </div>
                            <div class="media-body">
                                <p><strong>Adrian Monino</strong>added new comment on your photo</p>
                                <span>Mar 12 10:40pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-footer">
                        <a href="">View All Notifications</a>
                    </div>
                </div>
            </div>
            <div class="dropdown az-profile-menu">
                <a class="az-img-user" href="">
                    <img alt="" src="{{ asset('images/faces/face1.jpg') }}"/>
                </a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a class="az-header-arrow" href="">
                            <i class="icon ion-md-arrow-back"></i>
                        </a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img alt="" src="{{ asset('images/faces/face1.jpg') }}"/>
                        </div>
                        <h6>{{ auth()->user()->firstname.' '.auth()->user()->name }}</h6>
                        <span class="text-capitalize">{{ auth()->user()->group->name }}</span>
                    </div>
                    <a class="dropdown-item" href="">
                        <i class="typcn typcn-user-outline"></i> @lang('locale.my_profile')
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="typcn typcn-edit"></i> Edit Profile
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="typcn typcn-time"></i> Activity Logs
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="typcn typcn-cog-outline"></i> Account Settings
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="typcn typcn-power-outline"></i> @lang('locale.logout')
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>