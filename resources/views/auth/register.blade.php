@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registrese') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <!--Name-->
          <div class="card-body ">
            <p class="card-description text-center">{{ __('Introduzca sus datos') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">supervisor_account</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Rol...') }}" value="{{ old('name') }}" required autocomplete="name">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
            <!--Type_Document-->
            <div class="bmd-form-group{{ $errors->has('document_type') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">contact_page</i>
                  </span>
                </div>
                <input type="text" name="document_type" class="form-control" placeholder="{{ __('Tipo de Documento...') }}" value="{{ old('document_type') }}" required autocomplete="document_type">
              </div>
              @if ($errors->has('document_type'))
                <div id="document_type-error" class="error text-danger pl-3" for="document_type" style="display: block;">
                  <strong>{{ $errors->first('document_type') }}</strong>
                </div>
              @endif
            </div>
            <!--Document_number-->
            <div class="bmd-form-group{{ $errors->has('document_number') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">notes</i>
                  </span>
                </div>
                <input type="text" name="document_number" class="form-control" placeholder="{{ __('Numero de Documento...') }}" value="{{ old('document_number') }}" required autocomplete="document_number">
              </div>
              @if ($errors->has('document_number'))
                <div id="document_number-error" class="error text-danger pl-3" for="document_number" style="display: block;">
                  <strong>{{ $errors->first('document_number') }}</strong>
                </div>
              @endif
            </div>
              <!--full_name-->
              <div class="bmd-form-group{{ $errors->has('full_name') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="full_name" class="form-control" placeholder="{{ __('Nombre Completo...') }}" value="{{ old('full_name') }}" required autocomplete="full_name">
              </div>
              @if ($errors->has('full_name'))
                <div id="full_name-error" class="error text-danger pl-3" for="full_name" style="display: block;">
                  <strong>{{ $errors->first('full_name') }}</strong>
                </div>
              @endif
            </div>
              <!--city-->
              <div class="bmd-form-group{{ $errors->has('city') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">location_city</i>
                  </span>
                </div>
                <input type="text" name="city" class="form-control" placeholder="{{ __('Ciudad...') }}" value="{{ old('city') }}" required autocomplete="city">
              </div>
              @if ($errors->has('city'))
                <div id="city-error" class="error text-danger pl-3" for="city" style="display: block;">
                  <strong>{{ $errors->first('city') }}</strong>
                </div>
              @endif
            </div>
              <!--state-->
              <div class="bmd-form-group{{ $errors->has('state') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">apartment</i>
                  </span>
                </div>
                <input type="text" name="state" class="form-control" placeholder="{{ __('Departamento...') }}" value="{{ old('state') }}" required autocomplete="state">
              </div>
              @if ($errors->has('city'))
                <div id="state-error" class="error text-danger pl-3" for="state" style="display: block;">
                  <strong>{{ $errors->first('state') }}</strong>
                </div>
              @endif
            </div>
              <!--address-->
              <div class="bmd-form-group{{ $errors->has('address') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">home</i>
                  </span>
                </div>
                <input type="text" name="address" class="form-control" placeholder="{{ __('Dirección...') }}" value="{{ old('address') }}" required autocomplete="address">
              </div>
              @if ($errors->has('address'))
                <div id="address-error" class="error text-danger pl-3" for="address" style="display: block;">
                  <strong>{{ $errors->first('address') }}</strong>
                </div>
              @endif
            </div>
              <!--age-->
              <div class="bmd-form-group{{ $errors->has('age') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">person</i>
                  </span>
                </div>
                <input type="text" name="age" class="form-control" placeholder="{{ __('Edad...') }}" value="{{ old('age') }}" required autocomplete="age">
              </div>
              @if ($errors->has('age'))
                <div id="age-error" class="error text-danger pl-3" for="age" style="display: block;">
                  <strong>{{ $errors->first('age') }}</strong>
                </div>
              @endif
            </div>
              <!--gender-->
              <div class="bmd-form-group{{ $errors->has('gender') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">male</i>
                  </span>
                </div>
                <input type="text" name="gender" class="form-control" placeholder="{{ __('Genero...') }}" value="{{ old('gender') }}" required autocomplete="gender">
              </div>
              @if ($errors->has('gender'))
                <div id="gender-error" class="error text-danger pl-3" for="gender" style="display: block;">
                  <strong>{{ $errors->first('gender') }}</strong>
                </div>
              @endif
            </div>
              <!--phone-->
              <div class="bmd-form-group{{ $errors->has('phone') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">phone_iphone</i>
                  </span>
                </div>
                <input type="text" name="phone" class="form-control" placeholder="{{ __('Telefono...') }}" value="{{ old('phone') }}" required autocomplete="phone">
              </div>
              @if ($errors->has('phone'))
                <div id="phone-error" class="error text-danger pl-3" for="phone" style="display: block;">
                  <strong>{{ $errors->first('phone') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correo...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmación de Contraseña...') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('Estoy de acuerdo con la  ') }} <a href="#">{{ __('Política de privacidad') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Crear cuenta') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
