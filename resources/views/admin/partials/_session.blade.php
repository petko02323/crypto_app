@if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
