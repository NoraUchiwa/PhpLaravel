@extends('layouts.app')
@section('scripts')
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection
@section('content')

    <table>

        <tr>
            <th>Name</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>

        @foreach($users as $user)
            <tr>

                <td>

                        {{$user->name}}

                </td>
                <td>

                    <form class="show" action="{{route('user.show', $user->id)}}">
                        {{ csrf_field() }}

                        <input class="btn btn-default" type="submit" value="Show" >
                    </form>
                </td>
                <td>
                    <!-- Pour delete, il faut créer un formulaire -->
                    <form class="delete" method="post" action="{{route('user.destroy', $user->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input class="btn btn-default" type="submit" value="delete" >
                    </form>


                </td>

            </tr>


        @endforeach
        {{ $users->links() }}

    </table>
@endsection
