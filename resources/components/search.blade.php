@vite('resources/css/app.css')


<div class="card">
    <div class="card-header pb-0 border-0">
        <h5>Search</h5>

    </div>
    <div>
        <form action="{{ route('empleado.index') }}" method="GET">
            <input name="search" placeholder="..."class="form-control w-100" type="text">
            <button class="btn btn-dark mt-2">Search</button>

        </form>
    </div>

</div>