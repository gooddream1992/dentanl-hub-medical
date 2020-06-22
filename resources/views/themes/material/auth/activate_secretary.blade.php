@extends('theme::layouts.app', ['activePage' => 'registerpage for secreatary', 'titlePage' => __('registerpage for
secreatary')])

@section('content')
<div class="uk-section">
    <div class="uk-container uk-container-center">

        <form class="uk-form-stacked" id="@if(setting('billing.card_upfront')){{ 'payment-form' }}@endif" role="form"
            method="POST"
            action="@if(setting('billing.card_upfront')){{ route('wave.register-subscribe') }}@else{{ route('employe_register') }}@endif">
            <div uk-grid>

                <div class="uk-width-3-4 uk-align-center">


                    <div class="uk-padding uk-box-shadow-large">
                        @if(setting('billing.card_upfront'))
                        <h2>Select A Plan</h2>

                        @include('theme::partials.plans')
                        <hr>
                        @endif

                        @if(setting('billing.card_upfront'))
                        <h2>Profile Information</h2>
                        @else
                        <h2>Activation for Secretary</h2>
                        @endif

                        {{ csrf_field() }}
                        <input id="user" type="text" class="" name="name" value="{{$name}}" style="display:none">
                        <input id="username" type="text" class="" name="username" value="{{$username}}"
                            style="display:none">
                        <input id="role_id" type="text" class="" name="account_type" value="{{$role_id}}"
                            style="display:none">
                        <div class="uk-grid-match uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@m">
                                <label class="uk-form-label">Mobile Number</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="mobile_number" value="" required>
                            </div>
                            <div class="uk-width-1-4@m">
                                <div class=""></div>
                            </div>
                            <div class="uk-width-1-4@m">
                                <div class=""></div>
                            </div>
                            <div class="uk-width-1-3@m">
                                <label class="uk-form-label">Password</label>
                                <input class="uk-input uk-form-width-medium" id="" type="password"
                                    name="password" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                            <label class="uk-form-label">Confirm Password</label>
                                <input class="uk-input uk-form-width-medium" id="" type="password"
                                    name="confirm_password" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                            <label class="uk-form-label">For Email</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="email" value="{{$email}}" required>
                            </div>
                            <div class="uk-width-1-1@m">
                            <label class="uk-form-label">Patients Contact me on</label>
                            </div>
                            <div class="uk-width-1-3@m">
                            <label class="uk-form-label">Skype</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="skype" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                            <label class="uk-form-label">Whatsapp</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="whatsapp" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                            </div>

                        </div>
                        <div class="uk-margin uk-align-center uk-text-center">
                            <button class="uk-align-center uk-button uk-button-primary" type="submit"
                                name="button">Activate</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>

</div>
</div>
@endsection