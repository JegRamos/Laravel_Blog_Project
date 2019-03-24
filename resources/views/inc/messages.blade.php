@if(session()->has('message'))
<div class="col-sm-6 m-auto">
    <div class="alert {{ session('alert-class') }}
        text-center alert-dismissible fade show" role="alert">
        <strong>Alright!</strong>
        <br>
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
