@props(['recipes'])
<x-body>
    <x-nav />
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div>
            <form style="d-flex flex-column" action="" method="POST">
                @csrf
                <input type="email" required />
                <input type="password" required />
                <input type="password" required />
                <button type="submit">Sign in</button>
            </form>
            <a href="#">You have an account? Log in!</a>
        </div>
    </div>
    <x-footer />
</x-body>
