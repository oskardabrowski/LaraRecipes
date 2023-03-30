<x-body>
    <x-nav />
    <div>
        <table>
            <tbody>
                @if (count($recipes) > 0)
                    @foreach ($recipes as $r)
                        <tr>
                            <td>{{ $r['title'] }}</td>
                            <td><a href="/recipe/{{ $r->id }}/edit">Edit</a></td>
                            <td>
                                <form action="/recipe/{{ $r->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>No recipes found</tr>
                @endif
            </tbody>
        </table>
    </div>
    <x-footer />
</x-body>
