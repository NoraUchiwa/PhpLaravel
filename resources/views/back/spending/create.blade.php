@extends("layouts.app")
@section('scripts')
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection
@section('content')
    <form action="{{Route('spending.store')}}" method="post">
        {{ csrf_field() }}
        <input type="submit" value="Sauvegarder la dépense">
        <h1>Faire une nouvelle dépense</h1>

        <label>Titre</label> <input type="text" name="title" value="{{old('title')}}">
        <label>Prix</label> <input type="text" name="price" value="{{old('price')}}">
        <label>Description</label><input type="text" name="description" value="{{old('description')}}">

        <br>

        <h1>Partager la dépense avec : </h1>
        @foreach($users as $id => $user)
            <input type="checkbox" name="users[]" value="{{$id}}" {{ (is_array(old('users')) && in_array($id, old('users'))) ? ' checked' : '' }}>
            <label>{{$user}}</label> <br>
        @endforeach

    </form>
@endsection