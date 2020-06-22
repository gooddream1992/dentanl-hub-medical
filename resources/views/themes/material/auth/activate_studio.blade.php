@extends('theme::layouts.app', ['activePage' => 'registerpage for patient', 'titlePage' => __('registerpage for
patient')])

@section('content')
<div class="uk-section">
    <div class="uk-container uk-container-center">

        <form class="uk-form-stacked" id="@if(setting('billing.card_upfront')){{ 'payment-form' }}@endif" role="form"
            method="POST" action="{{route('studio_register')}}">
            <div uk-grid>
                <div class="uk-width-3-4 uk-align-center">
                    <div class="uk-padding uk-box-shadow-large">
                        <h2>Activation for Studio</h2>

                        {{ csrf_field() }}
                        <input id="email" type="email" class="" name="email" value="{{$email}}" style="display:none">
                        <input id="user" type="text" class="" name="name" value="{{$name}}" style="display:none">
                        <input id="username" type="text" class="" name="username" value="{{$username}}"
                            style="display:none">
                        <input id="role_id" type="text" class="" name="account_type" value="{{$role_id}}"
                            style="display:none">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-align-left">
                                <label class="uk-form-label">Legal Address</label>
                                <input class="uk-input uk-form-width-medium" id="address" type="text"
                                    name="legal_address" value="" required>
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">City</label>
                                <input class="uk-input uk-form-width-medium" id="city" type="text"
                                    name="legal_city" value="" required>
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">Country</label>
                                <input class="uk-input uk-form-width-medium" id="country" type="text"
                                    name="legal_country" value="" required>
                            </div>
                            <div class="uk-align-left">
                                <label class="uk-form-label">Address</label>
                                <input class="uk-input uk-form-width-medium" id="address" type="text"
                                    name="std_address" value="" required>
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">City</label>
                                <input class="uk-input uk-form-width-medium" id="city" type="text"
                                    name="std_city" value="" required>
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">Country</label>
                                <input class="uk-input uk-form-width-medium" id="country" type="text"
                                    name="std_country" value="" required>
                            </div>
                            <div class="uk-align-left">
                                <label class="uk-form-label">Studio Phone Number</label>
                                <input class="uk-input uk-form-width-medium" id="phone_number" type="text"
                                    name="phone_number" value="" required>
                            </div>
                            <div class="uk-align-left">
                                <label class="uk-form-label">Referent Mobile Number</label>
                                <input class="uk-input uk-form-width-medium" id="mobile_number" type="text"
                                    name="mobile_number" value="" required>
                            </div>
                            
                            <div class="uk-align-left">
                                <label class="uk-form-label">SDI Code</label>
                                <input class="uk-input uk-form-width-large" id="mobile_number" type="text"
                                    name="sdi_code" value="" required>
                            </div>
                            <div class="uk-align-left">
                                <label class="uk-form-label">VAT Code</label>
                                <input class="uk-input uk-form-width-medium" id="mobile_number" type="text"
                                    name="vat_code" value="" required>
                            </div>
                            <div class="uk-align-left">
                                <label class="uk-form-label">Email:</label>
                                <input class="uk-input uk-form-width-medium" id="mobile_number" type="email"
                                    name="sdi_code" value="{{$email}}" required>
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">Password</label>
                                <input class="uk-input uk-form-width-medium" id="password" type="password"
                                    name="password" value="" required>

                                @if ($errors->has('password'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                            </div>

                            <div class="uk-align-left">
                                <label class="uk-form-label">Confirm Password</label>
                                <input class="uk-input uk-form-width-medium" id="password_confirmation" type="password"
                                     name="password_confirmation" value="{{ old('password_confirmation') }}"
                                    required>

                                @if ($errors->has('password_confirmation'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        @if(!setting('billing.card_upfront'))
                        <div class="uk-margin uk-align-center uk-text-center">
                            <button class="uk-align-center uk-button uk-button-primary" type="submit"
                                name="button">Activate</button>
                        </div>
                        @endif
                    </div>

                </div>

            </div>
        </form>

    </div>
</div>
@endsection
