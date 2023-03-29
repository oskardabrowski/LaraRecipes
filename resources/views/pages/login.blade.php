@props(['recipes'])
<x-body>
    <x-nav />
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div style="height: auto; padding: 1rem; border: 1px solid black; width: 25rem;">
            <form class="d-flex flex-column mb-3" action="/login" method="POST">
                @csrf
                <h2 style="color: #EF3B2D">Login</h2>
                <input name="email" type="email" style="margin: .75rem 0rem;" required placeholder="Email" />
                <input name="password" type="password" style="margin: .75rem 0rem;" required placeholder="Password" />
                <button type="submit" style="margin: .75rem 0rem;">Log in</button>
            </form>
            <a href="/register">Don't have an account? Register!</a>
        </div>
    </div>
    <x-footer />
</x-body>
