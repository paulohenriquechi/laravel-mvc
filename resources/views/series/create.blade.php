<x-layout title="New Serie">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="">Name: </label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</x-layout>