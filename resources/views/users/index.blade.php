<x-app-layout>
    <div class="container">

        <h1>All Users</h1>

        <ul>
            @foreach ($users as $user)
                <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
            @endforeach
        </ul>

    </div>
</x-app-layout>
