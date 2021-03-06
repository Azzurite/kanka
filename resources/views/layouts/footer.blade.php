<!-- Main Footer -->
<footer id="footer" class="main-footer">
    <div class="footer">

        <div class="row">
            <div class="col-sm-4 col-xs-4">
                <span><i class="fa fa-envelope hidden-xs"></i> hello@kanka.io</span>
            </div>
            <div class="col-sm-4 col-xs-4">
                <span>{!! __('footer.copyright', ['year' => date('Y')]) !!}</span>
            </div>
            <div class="col-sm-4 col-xs-4">
                <ul class="social">
                    <li>
                        <a href="{{ config('patreon.url') }}" target="patreon" title="Patreon" rel="noreferrer">
                            <i class="fab fa-patreon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.discord') }}" target="discord" title="Discord" rel="noreferrer">
                            <i class="fab fa-discord"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.facebook') }}" target="facebook" title="Facebook" rel="noreferrer">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.instagram') }}" target="instagram" title="Instagram" rel="noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.reddit') }}" target="reddit" title="Reddit" rel="noreferrer"><i class="fab fa-reddit"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h4>{{ __('front.footer.navigation') }}</h4>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ trans('front.menu.home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('front.public_campaigns') }}">{{ trans('front.menu.campaigns') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h4>{{ __('front.footer.resources') }}</h4>
                <ul>
                    <li>
                        <a href="{{ route('front.community') }}">{{ trans('front.menu.community') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('faq.index') }}">{{ trans('front.menu.faq') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('front.help') }}">{{ trans('front.menu.help') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('front.privacy') }}">{{ trans('front.menu.privacy') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <h4>{{ __('front.footer.app') }}</h4>
                <ul>
                    <li>
                        <a href="{{ route('front.about') }}">{{ trans('front.menu.about') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('releases.index') }}">{{ trans('front.menu.releases') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('front.roadmap') }}">{{ trans('front.menu.roadmap') }}</a>
                    </li>
                    <li>
                        <a href="/docs/1.0">{{ trans('front.menu.api') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
