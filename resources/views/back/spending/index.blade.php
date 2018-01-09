@extends('layouts.app')
@section('scripts')
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection
@section('content')

<table>

    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Associate</th>
        <th>Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($spendings as $spending)
    <tr>
        <td><a href="{{route('spending.show', $spending->id)}}">{{$spending->title}}</a></td>
        <td>{{$spending->price}}</td>
        <td>
            @foreach($spending->users as $user)
                {{$user->name}}
            @endforeach
        </td>
        <td>{{$spending->created_at}}</td>
        <td>

            <form class="edit" action="{{route('spending.edit', $spending->id)}}">
                {{ csrf_field() }}

                <input class="btn btn-default" type="submit" value="Edit" >
            </form>
        </td>
        <td>
            <!-- Pour delete, il faut créer un formulaire -->
            <form class="delete" method="post" action="{{route('spending.destroy', $spending->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input class="btn btn-default" type="submit" value="delete" >
            </form>


        </td>

    </tr>


    @endforeach

    {{ $spendings->links() }}

</table>
@endsection
