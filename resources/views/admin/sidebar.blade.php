<!-- Main Menu -->
<div class="admin-menu__one crancy-sidebar-padding mg-top-20">
    <h4 class="admin-menu__title">{{ __('translate.Main Menu') }}</h4>
    <!-- Nav Menu -->
    <div class="menu-bar">
        <ul id="CrancyMenu" class="menu-bar__one crancy-dashboard-menu">
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.dashboard') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Dashboard') }}</span></span></a>
            </li>

            <li class="{{ Route::is('admin.car.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.car.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Car') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.heavy.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.heavy.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Heavy') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.commercial.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.commercial.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Commercial') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.small-heavy.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.small-heavy.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Small heavy') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.models.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.models.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Models') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.categories.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.categories.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Categories') }}</span></span></a>
            </li>

            <li class="{{ Route::is('admin.general-setting') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.general-setting') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.7155 16.134L21.0758 15.7423L21.7155 16.134ZM20.6548 17.866L21.2945 18.2577V18.2577L20.6548 17.866ZM2.28455 7.86602L1.64493 7.47436L1.64493 7.47436L2.28455 7.86602ZM3.34516 6.13397L3.98477 6.52563H3.98477L3.34516 6.13397ZM6.2428 5.40192L6.60138 4.74319L6.60138 4.74319L6.2428 5.40192ZM3.06097 10.5981L2.70238 11.2568H2.70238L3.06097 10.5981ZM17.7572 18.5981L17.3986 19.2568H17.3986L17.7572 18.5981ZM20.939 13.4019L20.5805 14.0606L20.939 13.4019ZM3.34515 17.866L2.70554 18.2577H2.70554L3.34515 17.866ZM2.28454 16.134L2.92415 15.7423L2.92415 15.7423L2.28454 16.134ZM20.6548 6.13398L21.2945 5.74232V5.74232L20.6548 6.13398ZM21.7155 7.86603L21.0758 8.25769V8.25769L21.7155 7.86603ZM20.939 10.5981L21.2976 11.2568H21.2976L20.939 10.5981ZM17.7572 5.40193L18.1158 6.06066V6.06066L17.7572 5.40193ZM3.06096 13.4019L3.41955 14.0607H3.41955L3.06096 13.4019ZM6.24279 18.5981L5.88422 17.9394L5.88421 17.9394L6.24279 18.5981ZM17.6445 5.46331L17.2859 4.80458V4.80458L17.6445 5.46331ZM6.35556 5.4633L5.99697 6.12202H5.99697L6.35556 5.4633ZM17.6445 18.5367L18.003 17.878L18.003 17.878L17.6445 18.5367ZM6.35556 18.5367L6.71413 19.1954L6.71414 19.1954L6.35556 18.5367ZM10.9394 2.75H13.0606V1.25H10.9394V2.75ZM13.0606 21.25H10.9394V22.75H13.0606V21.25ZM10.9394 21.25C10.1399 21.25 9.56817 20.6494 9.56817 20H8.06817C8.06817 21.5598 9.39585 22.75 10.9394 22.75V21.25ZM14.4318 20C14.4318 20.6494 13.8601 21.25 13.0606 21.25V22.75C14.6042 22.75 15.9318 21.5598 15.9318 20H14.4318ZM13.0606 2.75C13.8601 2.75 14.4318 3.35061 14.4318 4H15.9318C15.9318 2.44025 14.6041 1.25 13.0606 1.25V2.75ZM10.9394 1.25C9.39585 1.25 8.06817 2.44025 8.06817 4H9.56817C9.56817 3.35061 10.1399 2.75 10.9394 2.75V1.25ZM21.0758 15.7423L20.0152 17.4744L21.2945 18.2577L22.3551 16.5256L21.0758 15.7423ZM2.92416 8.25768L3.98477 6.52563L2.70554 5.74231L1.64493 7.47436L2.92416 8.25768ZM3.98477 6.52563C4.35198 5.92594 5.20337 5.69002 5.88421 6.06064L6.60138 4.74319C5.25309 4.00924 3.50985 4.42882 2.70554 5.74231L3.98477 6.52563ZM3.41955 9.93934C2.7621 9.58146 2.57418 8.82922 2.92416 8.25768L1.64493 7.47436C0.823397 8.81599 1.3307 10.5101 2.70238 11.2568L3.41955 9.93934ZM20.0152 17.4744C19.648 18.074 18.7966 18.31 18.1158 17.9393L17.3986 19.2568C18.7469 19.9907 20.4902 19.5712 21.2945 18.2577L20.0152 17.4744ZM22.3551 16.5256C23.1766 15.184 22.6693 13.4899 21.2976 12.7432L20.5805 14.0606C21.2379 14.4185 21.4258 15.1708 21.0758 15.7423L22.3551 16.5256ZM3.98476 17.4744L2.92415 15.7423L1.64493 16.5256L2.70554 18.2577L3.98476 17.4744ZM20.0152 6.52564L21.0758 8.25769L22.3551 7.47437L21.2945 5.74232L20.0152 6.52564ZM21.0758 8.25769C21.4258 8.82923 21.2379 9.58147 20.5805 9.93936L21.2976 11.2568C22.6693 10.5101 23.1766 8.816 22.3551 7.47437L21.0758 8.25769ZM18.1158 6.06066C18.7966 5.69004 19.648 5.92596 20.0152 6.52564L21.2945 5.74232C20.4902 4.42884 18.7469 4.00926 17.3986 4.74321L18.1158 6.06066ZM2.92415 15.7423C2.57417 15.1708 2.7621 14.4185 3.41955 14.0607L2.70238 12.7432C1.3307 13.4899 0.823395 15.184 1.64493 16.5256L2.92415 15.7423ZM2.70554 18.2577C3.50985 19.5712 5.25309 19.9908 6.60138 19.2568L5.88421 17.9394C5.20337 18.31 4.35198 18.0741 3.98476 17.4744L2.70554 18.2577ZM18.003 6.12203L18.1158 6.06066L17.3986 4.74321L17.2859 4.80458L18.003 6.12203ZM5.88421 6.06064L5.99697 6.12202L6.71414 4.80457L6.60138 4.74319L5.88421 6.06064ZM18.1158 17.9393L18.003 17.878L17.2859 19.1954L17.3986 19.2568L18.1158 17.9393ZM5.99698 17.878L5.88422 17.9394L6.60137 19.2568L6.71413 19.1954L5.99698 17.878ZM2.70238 11.2568C3.2912 11.5773 3.29121 12.4227 2.70238 12.7432L3.41955 14.0607C5.05215 13.1719 5.05215 10.8281 3.41955 9.93934L2.70238 11.2568ZM6.71414 19.1954C7.32456 18.8631 8.06817 19.305 8.06817 20H9.56817C9.56817 18.167 7.60692 17.0016 5.99697 17.878L6.71414 19.1954ZM15.9318 20C15.9318 19.305 16.6755 18.8631 17.2859 19.1954L18.003 17.878C16.3931 17.0016 14.4318 18.167 14.4318 20H15.9318ZM21.2976 12.7432C20.7088 12.4227 20.7088 11.5773 21.2976 11.2568L20.5805 9.93936C18.9479 10.8281 18.9479 13.1719 20.5805 14.0606L21.2976 12.7432ZM5.99697 6.12202C7.60692 6.99841 9.56817 5.83303 9.56817 4H8.06817C8.06817 4.695 7.32456 5.13686 6.71414 4.80457L5.99697 6.12202ZM17.2859 4.80458C16.6755 5.13687 15.9318 4.69501 15.9318 4H14.4318C14.4318 5.83303 16.3931 6.99842 18.003 6.12203L17.2859 4.80458ZM14.5833 12C14.5833 13.4267 13.4267 14.5833 12 14.5833V16.0833C14.2552 16.0833 16.0833 14.2552 16.0833 12H14.5833ZM12 14.5833C10.5733 14.5833 9.41668 13.4267 9.41668 12H7.91668C7.91668 14.2552 9.74485 16.0833 12 16.0833V14.5833ZM9.41668 12C9.41668 10.5733 10.5733 9.41667 12 9.41667V7.91667C9.74485 7.91667 7.91668 9.74484 7.91668 12H9.41668ZM12 9.41667C13.4267 9.41667 14.5833 10.5733 14.5833 12H16.0833C16.0833 9.74484 14.2552 7.91667 12 7.91667V9.41667Z" fill="#fff"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Setting') }}</span></span></a>
            </li>
            
            <li class="{{ Route::is('admin.delivery-charges.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.delivery-charges.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Delivery Charge') }}</span></span></a>
            </li>

            <li class="{{ Route::is('admin.import.*') || Route::is('admin.commission') ? 'active' : ''}}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__car_list"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Imports') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.import*') || Route::is('admin.commission') ? 'show' : '' }}" id="menu-item__car_list"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">
                        <li><a href="{{ route('admin.import.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Imports') }}</span></span></a></li>
                        <li><a href="{{ route('admin.commission') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Imported List') }}</span></span></a></li>
                    </ul>
                </div>
            </li>
            <li class="{{ Route::is('admin.terms-and-conditions') || Route::is('admin.privacy-policy') || Route::is('admin.faq.*') || Route::is('admin.custom-page.*') || Route::is('admin.contact-us') || Route::is('admin.about-us') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__pages"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 15V6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V15M2 15C2 17.2091 3.79086 19 6 19H18C20.2091 19 22 17.2091 22 15M2 15H22M12 19V22M12 22H9M12 22H15M7 7H12M7 11H17" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Manage Pages') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.terms-and-conditions') || Route::is('admin.privacy-policy') || Route::is('admin.faq.*') || Route::is('admin.custom-page.*') || Route::is('admin.contact-us') || Route::is('admin.about-us') ? 'show' : '' }}" id="menu-item__pages"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.terms-and-conditions', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Terms and Conditions') }}</span></span></a></li>

                        <li><a href="{{ route('admin.privacy-policy', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Privacy Policy') }}</span></span></a></li>

                        <li><a href="{{ route('admin.faq.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.FAQ') }}</span></span></a></li>

                        <li><a href="{{ route('admin.custom-page.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Custom Page') }}</span></span></a></li>

                        <li><a href="{{ route('admin.contact-us', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Contact Us') }}</span></span></a></li>

                        <li><a href="{{ route('admin.about-us', ['lang_code' => admin_lang()]) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.About Us') }}</span></span></a></li>


                    </ul>
                </div>
            </li>

            <li class="{{ Route::is('admin.language.*') || Route::is('admin.theme-language') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__languages"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1444_12299)">
                        <path d="M7.50753 9.196C7.40053 8.732 7.10453 8.31 6.66553 8.126C6.45953 8.04 6.25253 8 6.05253 8C5.36353 8 4.76553 8.475 4.60953 9.147L3.13453 15.399C3.06253 15.706 3.29453 16 3.61053 16C3.83653 16 4.03253 15.845 4.08553 15.625L4.47453 14H7.58953L7.96353 15.621C8.01453 15.843 8.21253 16 8.43953 16H8.45153C8.76553 16 8.99753 15.708 8.92753 15.402L7.50553 9.196H7.50753ZM4.71453 13L5.58353 9.373C5.63453 9.154 5.82753 9 6.05253 9C6.12553 9 6.20153 9.016 6.27853 9.049C6.38953 9.095 6.49153 9.246 6.53153 9.42L7.35853 13H4.71453ZM19.5195 4H4.51953C2.03753 4 0.0195312 6.019 0.0195312 8.5V15.5C0.0195312 17.981 2.03853 20 4.51953 20H19.5195C22.0005 20 24.0195 17.981 24.0195 15.5V8.5C24.0195 6.019 22.0005 4 19.5195 4ZM1.01953 15.5V8.5C1.01953 6.57 2.58953 5 4.51953 5H11.5195V19H4.51953C2.58953 19 1.01953 17.43 1.01953 15.5ZM23.0195 15.5C23.0195 17.43 21.4495 19 19.5195 19H12.5195V5H19.5195C21.4495 5 23.0195 6.57 23.0195 8.5V15.5ZM22.0195 9.491V9.509C22.0195 9.78 21.7995 10 21.5285 10H20.9825C20.8755 10.917 20.4655 12.904 18.8975 14.341C19.5985 14.695 20.4715 14.936 21.5555 14.989C21.8155 15.002 22.0195 15.218 22.0195 15.479V15.497C22.0195 15.778 21.7845 16.002 21.5035 15.988C20.0345 15.917 18.8985 15.54 18.0195 15.002C17.1405 15.54 16.0045 15.917 14.5355 15.988C14.2555 16.002 14.0195 15.778 14.0195 15.497V15.479C14.0195 15.219 14.2235 15.002 14.4835 14.989C15.5685 14.935 16.4405 14.694 17.1425 14.341C16.6025 13.846 16.1995 13.286 15.8995 12.727C15.7235 12.398 15.9585 12 16.3315 12C16.5125 12 16.6765 12.1 16.7635 12.259C17.0545 12.793 17.4585 13.325 18.0205 13.778C19.4945 12.593 19.8825 10.853 19.9845 10.001H14.5115C14.2405 10.001 14.0205 9.781 14.0205 9.51V9.492C14.0205 9.221 14.2405 9.001 14.5115 9.001H17.5205V8.492C17.5205 8.221 17.7405 8.001 18.0115 8.001H18.0295C18.3005 8.001 18.5205 8.221 18.5205 8.492V9.001H21.5295C21.8005 9.001 22.0205 9.221 22.0205 9.492L22.0195 9.491Z" fill="#fff"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.92831 15.4018C8.99831 15.7078 8.76631 15.9998 8.45231 15.9998H8.44031C8.21331 15.9998 8.01531 15.8428 7.96431 15.6208L7.59031 13.9998H4.47531L4.08631 15.6248C4.03331 15.8448 3.83731 15.9998 3.61131 15.9998C3.29531 15.9998 3.06331 15.7058 3.13531 15.3988L4.61031 9.1468C4.76631 8.4748 5.36431 7.9998 6.05331 7.9998C6.25331 7.9998 6.46031 8.0398 6.66631 8.1258C7.0412 8.28293 7.3118 8.61362 7.44948 8.9958C7.47203 9.05841 7.49102 9.1224 7.50631 9.18723C7.50695 9.18994 7.50759 9.19265 7.50821 9.19537C7.50818 9.19522 7.50824 9.19551 7.50821 9.19537L7.50641 9.19624L8.92831 15.4018ZM7.75732 9.3958H7.75968L7.7032 9.15086C7.58517 8.63903 7.25479 8.1556 6.74362 7.94135C6.51372 7.84537 6.28031 7.7998 6.05331 7.7998C5.27133 7.7998 4.5927 8.33886 4.41557 9.10127C4.41554 9.10137 4.41559 9.10117 4.41557 9.10127L2.94066 15.3529C2.83932 15.785 3.166 16.1998 3.61131 16.1998C3.93018 16.1998 4.20621 15.981 4.28075 15.6716L4.63309 14.1998H7.4312L7.76939 15.6656M7.75732 9.3958L9.12326 15.3571C9.22182 15.788 8.89518 16.1998 8.45231 16.1998H8.44031C8.12039 16.1998 7.84138 15.9785 7.76939 15.6656M5.58431 9.3728L4.71531 12.9998H7.35931L6.53231 9.4198C6.49231 9.2458 6.39031 9.0948 6.27931 9.0488C6.20231 9.0158 6.12631 8.9998 6.05331 8.9998C5.82831 8.9998 5.63531 9.1538 5.58431 9.3728ZM7.10784 12.7998L6.33744 9.46482C6.32267 9.40056 6.29666 9.3423 6.26706 9.29878C6.23571 9.25268 6.20996 9.23656 6.20274 9.23357L6.20052 9.23265C6.14597 9.20927 6.09669 9.1998 6.05331 9.1998C5.92175 9.1998 5.80912 9.28928 5.7791 9.41817L5.77881 9.4194L4.96889 12.7998H7.10784ZM22.0213 9.48981C22.0213 9.48948 22.0213 9.49014 22.0213 9.48981C22.0207 9.32807 21.9417 9.18467 21.8203 9.09566C21.739 9.03603 21.6388 9.0008 21.5303 9.0008H18.5213V8.4918C18.5213 8.2208 18.3013 8.0008 18.0303 8.0008H18.0123C17.7413 8.0008 17.5213 8.2208 17.5213 8.4918V9.0008H14.5123C14.2413 9.0008 14.0213 9.2208 14.0213 9.4918V9.5098C14.0213 9.7808 14.2413 10.0008 14.5123 10.0008H19.9853C19.9779 10.0629 19.9689 10.1298 19.9581 10.2008C19.8209 11.1036 19.3878 12.6792 18.0213 13.7778C17.4593 13.3248 17.0553 12.7928 16.7643 12.2588C16.6773 12.0998 16.5133 11.9998 16.3323 11.9998C15.9593 11.9998 15.7243 12.3978 15.9003 12.7268C16.171 13.2312 16.5256 13.7364 16.989 14.194C17.0391 14.2435 17.0906 14.2925 17.1433 14.3408C17.08 14.3726 17.0153 14.4035 16.9493 14.4335C16.2823 14.7357 15.4715 14.9397 14.4843 14.9888C14.2243 15.0018 14.0203 15.2188 14.0203 15.4788V15.4968C14.0203 15.7778 14.2563 16.0018 14.5363 15.9878C16.0053 15.9168 17.1413 15.5398 18.0203 15.0018C18.8993 15.5398 20.0353 15.9168 21.5043 15.9878C21.7853 16.0018 22.0203 15.7778 22.0203 15.4968V15.4788C22.0203 15.2178 21.8163 15.0018 21.5563 14.9888C20.57 14.9406 19.7584 14.7367 19.0921 14.4337C19.0261 14.4037 18.9615 14.3727 18.8983 14.3408C18.951 14.2925 19.0024 14.2436 19.0526 14.1941C20.4935 12.7714 20.8799 10.886 20.9833 9.9998H21.5293C21.7231 9.9998 21.8909 9.88727 21.9707 9.72402C22.0025 9.65902 22.0203 9.58598 22.0203 9.5088V9.4908L22.0213 9.4918C22.0213 9.49147 22.0213 9.49014 22.0213 9.48981ZM22.1178 9.87109L22.2213 9.97465V9.4918C22.2213 9.11035 21.9118 8.80081 21.5303 8.80081H18.7213V8.4918C18.7213 8.11035 18.4118 7.80081 18.0303 7.80081H18.0123C17.6309 7.80081 17.3213 8.11035 17.3213 8.4918V8.80081H14.5123C14.1309 8.80081 13.8213 9.11035 13.8213 9.4918V9.5098C13.8213 9.89126 14.1309 10.2008 14.5123 10.2008H19.7558C19.6218 11.0553 19.2197 12.4821 18.0215 13.5174C17.5475 13.107 17.1981 12.6369 16.9399 12.1631C16.8189 11.9419 16.5886 11.7998 16.3323 11.7998C15.8058 11.7998 15.4778 12.361 15.724 12.8211C15.9923 13.3212 16.3417 13.8239 16.7952 14.2831C16.1668 14.5566 15.4035 14.7428 14.4744 14.7891C14.1067 14.8074 13.8203 15.1135 13.8203 15.4788V15.4968C13.8203 15.8922 14.152 16.2071 14.546 16.1876C15.9885 16.1179 17.1254 15.7583 18.0203 15.2349C18.9152 15.7583 20.0522 16.1179 21.4947 16.1876C21.8899 16.2071 22.2203 15.8919 22.2203 15.4968V15.4788C22.2203 15.1122 21.9337 14.8074 21.5663 14.7891C20.638 14.7437 19.8739 14.5576 19.2461 14.2834C20.6023 12.9104 21.0261 11.1486 21.1592 10.1998H21.5293C21.7779 10.1998 21.996 10.0683 22.1178 9.87109ZM4.52031 3.7998H19.5203C22.1118 3.7998 24.2203 5.90835 24.2203 8.4998V15.4998C24.2203 18.0913 22.1118 20.1998 19.5203 20.1998H4.52031C1.92886 20.1998 -0.179688 18.0913 -0.179688 15.4998V8.4998C-0.179688 5.90838 1.92783 3.7998 4.52031 3.7998ZM1.22031 8.4998V15.4998C1.22031 17.3193 2.70077 18.7998 4.52031 18.7998H11.3203V5.1998H4.52031C2.70077 5.1998 1.22031 6.68026 1.22031 8.4998ZM19.5203 18.7998C21.3399 18.7998 22.8203 17.3193 22.8203 15.4998V8.4998C22.8203 6.68026 21.3399 5.1998 19.5203 5.1998H12.7203V18.7998H19.5203ZM4.52031 3.9998H19.5203C22.0013 3.9998 24.0203 6.0188 24.0203 8.4998V15.4998C24.0203 17.9808 22.0013 19.9998 19.5203 19.9998H4.52031C2.03931 19.9998 0.0203125 17.9808 0.0203125 15.4998V8.4998C0.0203125 6.0188 2.03831 3.9998 4.52031 3.9998ZM1.02031 8.4998V15.4998C1.02031 17.4298 2.59031 18.9998 4.52031 18.9998H11.5203V4.9998H4.52031C2.59031 4.9998 1.02031 6.5698 1.02031 8.4998ZM19.5203 18.9998C21.4503 18.9998 23.0203 17.4298 23.0203 15.4998V8.4998C23.0203 6.5698 21.4503 4.9998 19.5203 4.9998H12.5203V18.9998H19.5203Z" fill="#fff"></path>
                        </g>

                        </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Language') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.language.*') || Route::is('admin.theme-language') ? 'show' : '' }}" id="menu-item__languages"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.language.index') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Languages') }}</span></span></a></li>

                        <li><a href="{{ route('admin.theme-language', ['lang_code' => 'en']) }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Theme Languages') }}</span></span></a></li>

                    </ul>
                </div>
            </li>

            <li class="{{ Route::is('admin.user-list') || Route::is('admin.pending-user') || Route::is('admin.user-show') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__users"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="11.7778" cy="18.1111" rx="7.77778" ry="3.88889" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"></ellipse>
                        <circle cx="11.7775" cy="6.44444" r="4.44444" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"></circle>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.Manage User') }}</span></span> <span class="crancy__toggle"></span></a></span>
                <!-- Dropdown Menu -->
                <div class="collapse crancy__dropdown {{ Route::is('admin.user-list') || Route::is('admin.pending-user')  || Route::is('admin.user-show') ? 'show' : '' }}" id="menu-item__users"  data-bs-parent="#CrancyMenu">
                    <ul class="menu-bar__one-dropdown">

                        <li><a href="{{ route('admin.user-list') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.User List') }}</span></span></a></li>

                        <li><a href="{{ route('admin.pending-user') }}"><span class="menu-bar__text"><span class="menu-bar__name">{{ __('translate.Pending User') }}</span></span></a></li>
                    </ul>
                </div>
            </li>

            <li class="{{ Route::is('admin.brand.index') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.brand.index') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg class="crancy-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M14 21V17C14 14.7909 12.2091 13 10 13C7.79086 13 6 14.7909 6 17V21M19 9.15033V16.9668C19 19.1943 17.2091 21 15 21H5C2.79086 21 1 19.1943 1 16.9668V9.15033C1 7.93937 1.53964 6.7925 2.46986 6.02652L7.46986 1.90935C8.9423 0.696886 11.0577 0.696883 12.5301 1.90935L17.5301 6.02652C18.4604 6.7925 19 7.93937 19 9.15033Z" stroke-width="1.5"></path>
                    </svg>
                </span>
                <span class="menu-bar__name">{{ __('translate.Brand') }}</span></span></a>
            </li>
            <li class="{{ Route::is('admin.seo-setup') ? 'active' : '' }}"><a class="collapsed" href="{{ route('admin.seo-setup') }}"><span class="menu-bar__text">
                <span class="crancy-menu-icon crancy-svg-icon__v1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 11.5C2.75 16.3325 6.66751 20.25 11.5 20.25C16.3325 20.25 20.25 16.3325 20.25 11.5C20.25 6.66751 16.3325 2.75 11.5 2.75C6.66751 2.75 2.75 6.66751 2.75 11.5ZM11.5 21.75C5.83908 21.75 1.25 17.1609 1.25 11.5C1.25 5.83908 5.83908 1.25 11.5 1.25C17.1609 1.25 21.75 5.83908 21.75 11.5C21.75 14.0605 20.8111 16.4017 19.2589 18.1982L22.5303 21.4697C22.8232 21.7626 22.8232 22.2374 22.5303 22.5303C22.2374 22.8232 21.7626 22.8232 21.4697 22.5303L18.1982 19.2589C16.4017 20.8111 14.0605 21.75 11.5 21.75Z" fill="#fff"></path>
                    </svg>

                </span>
                <span class="menu-bar__name">{{ __('translate.SEO Setup') }}</span></span></a>
            </li>

          
        </ul>
    </div>
    <!-- End Nav Menu -->
</div>


