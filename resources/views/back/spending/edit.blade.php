@extends("layouts.app")
@section('scripts')
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection
@section('content')
    <form method="post" action="{{Route('spending.update', $spending->id)}}">
        {{ csrf_field() }}
        <input type="submit" value="Modifier la dépense">
        <h1>Faire une nouvelle dépense</h1>

        <label>Titre</label> <input type="text" name="title" value="{{$spending->title}}">
        <label>Prix</label> <input type="text" name="price" value="{{$spending->price}}">
        <label>Description</label><input type="text" name="description" value="{{$spending->description}}">

        <br>

        <h1>Partager la dépense avec : </h1>

        @foreach($users as $id => $name)

            <input type="checkbox" name="users[]" value="{{$id}}"   @if(in_array($id, $checkedUsers) )  checked
                    @endif >
            <label>{{$name}}</label> <br>




        @endforeach



    </form>
@endsection