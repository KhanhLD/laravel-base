@if (isset($errors) && ($errors->has('errors') || session()->has('message') || session()->has('error')))
    <div class="alert alert-dismissible {{ session()->has('message') ? 'alert-success' : 'alert-danger' }}" id="alert-message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @foreach ($errors->all() as $message)
            <p>{{ $message }}</p>
        @endforeach
        @if (session()->has('message'))
            <p>{{ session('message') }}</p>
        @endif
        @if (session()->has('error'))
            <p>{{ session('error') }}</p>
        @endif
    </div>
@endif
<div id="alert-message">
</div>
