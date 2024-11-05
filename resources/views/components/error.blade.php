@if (Session::has('error'))
    <div class="alert alert-danger d-flex align-items-center mx-10" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            {{ Session::get('error') }}
        </div>
    </div>
@endif
