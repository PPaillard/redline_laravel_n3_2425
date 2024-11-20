@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif
