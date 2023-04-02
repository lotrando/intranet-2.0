<footer class="footer footer-transparent d-print-none">
  <div class="container-fluid">
    <div class="row align-items-center flex-row-reverse text-center">
      <div class="col-lg-auto ms-lg-auto">
        <ul class="list-inline list-inline-dots mb-0">
          <li class="list-inline-item">
            {{ __('Copyright') }} &copy; 2023 -
            {{ __('Created for hospital employees by') }}
            <a href="mailto:{{ env('APP_AUTOR_EMAIL') }}" target="_blank" class="link-secondary" rel="noopener">
              {{ env('APP_AUTOR') }}
            </a>
            {{ __('in ') }}
            <svg class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5z"></path>
              <path d="M11 18v4"></path>
              <path d="M7 15.5l7 -4"></path>
              <path d="M14 7.5v4"></path>
              <path d="M14 11.5l4 2.5"></path>
              <path d="M11 13v-7.5l-4 -2.5l-4 2.5"></path>
              <path d="M7 8l4 -2.5"></path>
              <path d="M18 10l4 -2.5"></path>
            </svg>
            Laravel v{{ App::VERSION() }}
            and
            <svg class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
              stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z"></path>
              <path d="M7.5 8h3v8l-2 -1"></path>
              <path d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5"></path>
            </svg>
            jQuery v<span id="version"></span>
          </li>
          <li class="list-inline-item">
            dev v2.0
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-auto mt-lg-0 mt-3">
        <ul class="list-inline list-inline-dots mb-0">
          <li class="list-inline-item">
            {{ __('Copyright') }} &copy; 2023. {{ __(' All rights reserved') }} -
            <a href="https://www.khn.cz" class="link-primary" target="_blank">KHN a.s.</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
