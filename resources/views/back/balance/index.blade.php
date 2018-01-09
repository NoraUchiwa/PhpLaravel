@extends('layouts.app')
@section('scripts')
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection
@section('content')

    <table class="table">

        <tr>
            <th>User Name</th>
            <th>Part</th>
            <th>PriceStay prix de ton séjour</th>
            <th>PriceDebit tes dépenses</th>
            <th>Price paid</th>
            <th>Price Remaining</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>
                    {{$user->name}}
                </td>

                <td>
                    {{$user->part->day}}
                </td>

                <td>
                    {{ round($pricePart*$user->part->days, 2) }}
                </td>

                <td>
                    {{ $user->spendings()->sum('spending_user.price') }}
                </td>

                <td>
                    {{ round($pricePart*$user->part->days, 2) -  $user->spendings()->sum('spending_user.price') }}
                </td>


            </tr>


        @endforeach

    </table>
@endsection
