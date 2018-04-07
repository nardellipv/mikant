<style>
    #message {
        background: yellow;
        top: 0;
        left: 0;
        width: 100%;

    }
    #inner-message {
        margin: 0 auto;
    }
</style>

@if (Session::has('message'))
    <div id="message">
        <div style="padding: 20px; text-align: center;">
            <div id="inner-message" class="alert alert-error">
                <b>{!! Session::get('message') !!}</b>
            </div>
        </div>
    </div>
@endif