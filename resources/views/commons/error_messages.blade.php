@if (count($errors) > 0)
    <ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-warning">{{ $error }}</li>
    @endforeach
    </ul>
@endif
