<form action="/customers/{{ $customer->id }}" method="post">
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
    @csrf
</form>
