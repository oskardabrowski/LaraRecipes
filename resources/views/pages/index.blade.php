@props(['recipes'])
<x-body>
    @if (session()->has('message'))
        <div class="d-flex align-items-center justify-content-center fadeOutAnim"
            style="color: white; position:fixed; top: 0; left: 0; background-color:red; width: 100%;">
            {{ session('message') }}
        </div>
    @endif
    <x-nav />
    <div class="w-100 position-relative d-flex justify-content-center align-items-center">
        <img class="w-75 position-absolute" src="img/LogoLong.png" alt="Logo long" />
        <img class="w-100" src="img/Background.png" alt="background" />
    </div>
    <div class="w-100 mt-5" style="display: grid; grid-template-columns: 25% 25% 25% 25%;">

        @foreach ($recipes as $r)
            <a href="/recipe/{{ $r['id'] }}"
                class="w-100 h-100 p-5 d-flex align-items-center justify-content-center flex-column text-decoration-none"
                style="">
                <div style="width: 15rem; height: 15rem;"
                    class="overflow-hidden d-flex justify-content-center align-items-center">
                    <img class="h-100"
                        src="{{ $r['image'] != '' ? '/storage/' . $r['image'] : asset('https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80') }}"
                        alt="background" />
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <span class="text-decoration-none"
                        style="font-size: 1.5rem; font-weight: bold; color: black;">{{ $r['title'] }}</span>
                    <span class="text-decoration-none" style="font-size: 1rem; color: black;">{{ $r['type'] }}</span>
                </div>
            </a>
        @endforeach


    </div>


    <x-footer />
</x-body>
