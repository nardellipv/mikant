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

@if (count($errors) > 0)
    <div id="message">
        <div style="padding: 20px; text-align: center;">
            <div id="inner-message" class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <h4>{{ $error }}</h4><br>
                @endforeach
            </div>
        </div>
    </div>
@endif