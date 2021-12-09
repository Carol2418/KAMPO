@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <p class="card-title"><strong><p>¿Olvidaste tu contraseña? No hay problema. <br>
              Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace <br> para restablecer la contraseña</p></strong></p>
            </div>
            <div class="card-body">
              <p class="card-description text-center"></p>
              <p>
              @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>

            <div class="flex items-center justify-end mt-4">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Restablecer') }}</button>
            </div>
            <div class="flex items-center justify-end mt-3">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Solicitar vinculo nuevo') }}</button>.
            </div>
        </form>
              </p>
              </p>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection