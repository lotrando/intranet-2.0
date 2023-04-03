<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
      <section>
        @include('layout.partials.header')
      </section>
      <section>
        @include('layout.partials.nav')
      </section>
      <section>
        @include('layout.partials.searcher')
      </section>
      <div class="page-wrapper">
        <div class="container-fluid">
          {{-- Page title --}}
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                {{-- Page pre-title --}}
                <div class="page-pretitle">
                  {{ $title }}
                </div>
                <h2 class="page-title">
                  {{ $title }}
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="ms-auto d-print-none col-auto">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span>
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <line x1="12" y1="5" x2="12" y2="19" />
                      <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Create new report
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <line x1="12" y1="5" x2="12" y2="19" />
                      <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
        <section>
          @include('layout.partials.footer')
        </section>
      </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tabler.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script>
    $(document).ready(function() {
      $('#version').html($.fn.jquery)
    });

    </script>
  </body>

</html>
