@props(['recipes'])
<x-body>
    <x-nav />
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div style="height: auto; padding: 1rem; border: 1px solid black; width: 25rem;">
            <form class="d-flex flex-column mb-3" action="/register" method="POST">
                @csrf
                <h2 style="color: #EF3B2D">Register</h2>
                <input name="email" type="email" style="margin: .75rem 0rem;" required placeholder="Email" />
                <input name="password" type="password" style="margin: .75rem 0rem;" required placeholder="Password" />
                <input name="password_confirmation" type="password" style="margin: .75rem 0rem;" required
                    placeholder="Repeat password" />
                <button type="submit" style="margin: .75rem 0rem;">Sign in</button>
            </form>
            <a href="/login">You have an account? Log in!</a>
        </div>
    </div>
    <x-footer />
</x-body>
