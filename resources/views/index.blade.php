@extends('layout.app')

@section('title')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center">
            @auth
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Options') }}</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">{{ __('Edit') }}</a>
                    <a class="dropdown-item" href="#">{{ __('Delete') }}</a>
                  </div>
                </div>
              </div>
            @endauth
          </div>
          <div class="h2 mb-23">Nadpis 2</div>
          <div class="d-flex mb-1">
            <div>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nemo nesciunt repudiandae illum in quasi placeat saepe perspiciatis
              fugit ipsa?
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
