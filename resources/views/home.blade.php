<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Welcome to my site
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, eius omnis magni
                            quasi doloribus necessitatibus? Neque, ab laudantium. In distinctio maxime architecto
                            mollitia possimus. Dolore distinctio molestiae quis facere reprehenderit.
                        </p>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos non
                            expedita voluptatibus. Quia quasi eum voluptates aspernatur deleniti necessitatibus soluta!
                            Vel accusamus maiores, illum ipsam architecto omnis autem adipisci.
                        </p>
                        <a href="/tasks" class="btn btn-primary">Go Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
