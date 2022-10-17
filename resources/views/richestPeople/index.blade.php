@if(session()->has('message'))
    <div>
        {{ session()->get('message') }}
    </div>
@endif

@foreach ($richestPeople as $person)
    <div>
        <h3>{{ $person->Name }}</h3>
        <p>{{ $person->Networth }}</p>
    </div>
    <form method="post" action="{{ route("delete", $person->Id) }}">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
    </form>
@endforeach
