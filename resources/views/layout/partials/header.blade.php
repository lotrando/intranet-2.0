      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="navbar-nav order-md-last flex-row">
            <a href="?theme=dark" class="nav-link hide-theme-dark m-1 px-0" title="{{ __('Enable dark mode') }}" data-bs-toggle="tooltip"
              data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
              </svg>
            </a>
            <a href="?theme=light" class="nav-link hide-theme-light m-1 px-0" title="{{ __('Enable light mode') }}" data-bs-toggle="tooltip"
              data-bs-placement="bottom">
              <svg class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="12" cy="12" r="4" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
            </a>
            <div class="nav-item dropdown me-2">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="icon">
                  <svg class="icon icon-tabler icon-tabler-language" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 5h7"></path>
                    <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
                    <path d="M5 9c0 2.144 2.952 3.908 6.7 4"></path>
                    <path d="M12 20l4 -9l4 9"></path>
                    <path d="M19.1 18h-6.2"></path>
                  </svg></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">{{ __('Eng') }}</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">{{ __('Cze') }}</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm text-blue">{{ substr($last_name, 0, 1) }}{{ substr($first_name, 0, 1) }}</span>
                <div class="d-none d-xl-block ps-2">
                  <div>{{ $last_name }} {{ $first_name }}</div>
                  <div class="small text-blue mt-1">{{ $personal_number }} - {{ $funkce }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">{{ __('Settings') }}</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">{{ __('Logout') }}</a>
              </div>
            </div>
          </div>
        </div>
      </header>
