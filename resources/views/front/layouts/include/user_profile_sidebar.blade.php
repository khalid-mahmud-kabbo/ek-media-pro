<div class="section-wrap account-page-sidemenu user-profile-sidebar">
    <nav class="account-page-menu">
        <ul>
            <li class="{{$menu == 'profile' ? 'active' : ''}}"><a href="{{route('user.profile')}}"><i class="fas fa-user"></i>{{__('My Profile')}}</a></li>
            <li class="{{$menu == 'order' ? 'active' : ''}}"><a href="{{route('user.profile.myOrder')}}"><i class="fas fa-box-open"></i>{{__('My Order')}}</a></li>

            <li class="{{$menu == 'track' ? 'active' : ''}}"><a class="menu-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#trackOrderModal"><i class="fa-solid fa-truck-fast"></i>{{ __('Track Order') }}</a></li>

            <li class="{{$menu == 'review' ? 'active' : ''}}"><a href="{{route('user.profile.myReview')}}"><i class="fas fa-user-edit"></i>{{__('My Review')}}</a></li>
            <li class="{{$menu == 'logout' ? 'active' : ''}}"><a href="{{route('user.logout')}}" style="background-color: #ef1b27; color:#fff;"><i class="fas fa-lock text-white"></i>{{__('Logout')}}</a></li>
        </ul>
    </nav>
</div>

