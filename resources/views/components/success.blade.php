@if (Session::has('success'))
<div class="alert alert-success d-flex align-items-center mx-10" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
    </svg>
    <div>
        {{ Session::get('success') }}
    </div>
</div>
@endif