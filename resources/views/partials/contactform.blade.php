<div class=""contactform-outer-box>
    <p id="show-cf-btn">Click to send us a message</p>
    <p id="cf-note"></p>
    <p id="cf-errors" class="text-danger"></p>
    <div id="contactform-inner-box" class="contactform-inner-box">
    <form id="contact-form">
        <div class="row">
            <div class="col-md-5">
                <!-- text input for sender_name -->
                <div class="form-group{{ $errors->has('sender_name') ? ' has-error' : '' }}">
                    <label for="sender_name">Your name: </label>
                    @if($errors->has('sender_name'))
                    <span class="error-message">{{ $errors->first('sender_name') }}</span>
                    @endif
                    <input id="sender-name" type="text" name="sender_name" value="{{ old('sender_name') }}" class="form-control">
                </div>
            </div>
            <div class="col-md-offset-2 col-md-5">
                <!-- form input for sender_email -->
                <div class="form-group{{ $errors->has('sender_email') ? ' has-error' : '' }}">
                    <label for="sender_email">Your email address: </label>
                    @if($errors->has('sender_email'))
                    <span class="error-message">{{ $errors->first('sender_email') }}</span>
                    @endif
                    <input id="sender-email" type="text" name="sender_email" value="{{ old('sender_email') }}" class="form-control">
                </div>
            </div>
        </div>
        <!-- textarea for sender_message -->
        <div class="form-group{{ $errors->has('sender_message') ? ' has-error' : '' }}">
            <label for="sender_message">Your enquiry: </label>
            @if($errors->has('sender_message'))
            <span class="error-message">{{ $errors->first('sender_message') }}</span>
            @endif
            <textarea id="sender-message" name="sender_message" class="form-control">{{ old('sender_message') }}</textarea>
        </div>
        <div class="row">
            <div id="cf-send-btn" class="col-md-offset-5 col-md-2"><i id="fa-send-icon" class="fa fa-send"></i> Send</div>
        </div>
    </form>
    <div class="gratitude-banner" id="gratitude-banner">
        <p>Thanks <span id="name-to-thank"></span>. We'll be in touch.</p>
    </div>
    </div>
</div>