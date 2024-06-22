<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <!-- Contact -->
                <ul class="top-link">
                    <li><a href="#">{{ __('messages.about') }}</a></li>
                    <li><a href="#">{{ __('messages.doctors') }}</a></li>
                    <li><a href="#">{{ __('messages.contact') }}</a></li>
                    <li><a href="#">{{ __('messages.faq') }}</a></li>
                    <li>
                        <a  href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                    </li>
                    <li>
                        <a  href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                    </li>
                    {{-- <li>
                        <a href="#"  class="" >lang<i class="icofont-rounded-down"></i></a>
                        <ul class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <li>
                                <a  href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                            </li>
                            <li>
                                <a  href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                <!-- End Contact -->
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <!-- Top Contact -->
                <ul class="top-contact">
                    <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                </ul>
                <!-- End Top Contact -->
            </div>
        </div>
    </div>
</div>