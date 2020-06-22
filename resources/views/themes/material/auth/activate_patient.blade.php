@extends('theme::layouts.app', ['activePage' => 'registerpage for patient', 'titlePage' => __('registerpage for
patient')])

@section('content')
<div class="uk-section">
    <div class="uk-container uk-container-center">

        <form class="uk-form-stacked" id="@if(setting('billing.card_upfront')){{ 'payment-form' }}@endif" role="form"
            method="POST"
            action="@if(setting('billing.card_upfront')){{ route('wave.register-subscribe') }}@else{{ route('patient_register') }}@endif">
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
                        <h2>Activation for Patient</h2>
                        @endif

                        {{ csrf_field() }}
                        <input id="email" type="email" class="" name="email" value="{{$email}}" style="display:none">
                        <input id="user" type="text" class="" name="name" value="{{$name}}" style="display:none">
                        <input id="username" type="text" class="" name="username" value="{{$username}}"
                            style="display:none">
                        <input id="role_id" type="text" class="" name="account_type" value="{{$role_id}}"
                            style="display:none">
                        <div class="uk-grid-match uk-grid-small" uk-grid>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">Name</label><span>{{$username}}</span>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">SureName</label><span>{{$name}}</span>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">Birthday Date</label>
                                <input class="uk-input uk-form-width-medium" id="" type="date"
                                    name="birthday" value="" required>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">Sex</label>
                                <div class="uk-form-controls">
                                    <select class="uk-select" id="form-stacked-select" name="sex">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="N">Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">Address</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="address" value="" required>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">House Number</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="house_number" value="" required>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">City</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="city" value="" required>
                            </div>
                            <div class="uk-width-1-4@m">
                                <label class="uk-form-label">Country</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="country" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                                <label class="uk-form-label">Phone Number</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="phone" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">
                                <label class="uk-form-label">Mobile Number</label>
                                <input class="uk-input uk-form-width-medium" id="" type="text"
                                    name="mobile_phone" value="" required>
                            </div>
                            <div class="uk-width-1-3@m">

                            </div>
                            <div class="uk-width-1-1@m">
                                <label class="uk-form-label">Do you agree on the precompiled 730(Health Card
                                    System)?</label>
                            </div>
                            <div class="uk-width-1-4@m">
                            <div class="uk-form-controls">
                                    <select class="uk-select" id="form-horizontal-select" name="health_card">
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-width-3-4@m">

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
                                <span>{{$email}}</span>
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