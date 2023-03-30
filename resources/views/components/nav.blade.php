<div class="w-100 h-10 p-2 border-bottom d-flex justify-content-between">
    <img style="height: 3rem;" src="/img/logo.png" alt="logo" />
    <nav class="nav">
        {{-- prettier-ignore --}}
            <a class="nav-link" href="/"><i style="margin-right: .5rem;" class="fa-solid fa-house ml-2"></i>Home</a>

        {{-- prettier-ignore --}}
            <a class="nav-link" href="/create"><i style="margin-right: .5rem;" class="bi bi-plus"></i>Create</a>
        @auth
            {{-- prettier-ignore --}}
        <form action="/logout" method="POST">
            @csrf
            <button class="nav-link" type="submit"><i style="margin-right: .5rem;"
                    class="fa-sharp fa-solid fa-door-closed"></i>Log out</button>
            </form>
        @else
            {{-- prettier-ignore --}}
            <a class="nav-link" href="/register"><i style="margin-right: .5rem;" class="bi bi-box-arrow-in-right"></i>Register</a>
            {{-- prettier-ignore --}}
            <a class="nav-link" href="/login"><i style="margin-right: .5rem;" class="fa-solid fa-door-open"></i>Login</a>
        @endauth
        {{-- prettier-ignore --}}
        @auth
        <a class="nav-link" href="/profile"><i style="margin-right: .5rem;" class="fa-solid fa-user"></i>My account</a>
    @endauth
</nav>
</div>
