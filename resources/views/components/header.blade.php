<!-- Header Start -->
<header id="header" class="mxd-header">
    <!-- header logo -->
    <div class="mxd-header__logo loading-fade">
        <a class="mxd-logo" href="{{ route('home') }}">

            <img
                src="{{ asset('assets/img/logo/green.png') }}"
                alt="Blitz Elements"
                class="logo--main logo--light"
            >

            <img
                src="{{ asset('assets/img/logo/bright.png') }}"
                alt="Blitz Elements"
                class="logo--main logo--dark"
            >

            <div class="mxd-logo__text">
                <span class="mxd-scramble">Blitz</span>
                <span class="mxd-scramble">Elements</span>
            </div>

        </a>
    </div>
    <!-- header controls -->
    <div class="mxd-header__controls loading-fade">
        <a class="btn mxd-header__link slide-right-up" href="contact.html" aria-label="Say Hello">
            <span class="btn-caption mxd-scramble">Say Hello</span>
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                    <path d="M18,0v14.4h-3.6v-7.2h-3.6v-3.6H3.6V0h14.4ZM7.2,10.8h3.6v-3.6h-3.6s0,3.6,0,3.6ZM3.6,14.4h3.6v-3.6h-3.6v3.6ZM0,18h3.6v-3.6H0v3.6Z"/>
                </svg>
            </i>
            <!-- Phosphor icon -->
            <!-- <i class="ph-bold ph-arrow-up-right"></i> -->
        </a>
        <button id="color-switcher" class="btn mxd-color-switcher" type="button" role="switch" aria-label="light/dark mode" aria-checked="true"></button>
    </div>
</header>
<!-- Header End -->
