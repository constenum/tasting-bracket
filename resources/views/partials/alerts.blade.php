@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
    </div>
@endif

@if(session('waring'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
    </div>
@endif
