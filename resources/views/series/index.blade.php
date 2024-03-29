<x-layout title="Series">
    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Insert</a>
    
    @isset($successMessage)
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>        
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->name }}
            <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>