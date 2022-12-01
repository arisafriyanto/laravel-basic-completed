<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card text-center border-info mb-3">
                    <div class="card-header">
                        Welcome to my site
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum soluta deserunt libero?
                            Voluptas laboriosam cumque fugit dolorum alias, commodi facere? Deleniti eius sed, suscipit
                            culpa quae eligendi dolorem enim tempore quas error. Asperiores dolor impedit dolores omnis
                            a provident distinctio quis, eaque eius, alias pariatur officia qui recusandae maxime quasi.
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
