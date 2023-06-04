@extends('layouts.app')

@section('content')
    <div>
        <form action="{{ route('obre.search') }}" method="GET">
            <input id="searchInput" type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>

<table class="table">
    <thead>
        <th>DATE/TIME</th>
        <th>OBRE #</th>
        <th>PAYEE</th>
        <th>PARTICULARS</th>
        <!-- <th>OFFICE</th>
        <th>ACCOUNT CODE</th>
        <th>ACCOUNT TITLE</th> -->
        <th>AMOUNT</th>
    </thead>
@foreach($obres as $obre)
        <tr>
            <td>{{$obre->created_at}}</td>
            <td><a href="{{route('obre.show', $obre->id)}}">{{$obre->obre_num}}</a></td>
            <td>{{$obre->obre_payee}}</td>
            <td>{{$obre->obre_part}}</td>
            <!-- <td>{{$obre->offices->office_title}}</td>
            <td>{{$obre->acct_code}}</td>
            <td>{{$obre->accounts->acct_title}}</td> -->
            @php
            $formattedAmount = number_format($obre->obre_amount, 2);
            @endphp
            <td>{{$formattedAmount}}</td>
            <td>
            @if (Auth::check())
            <a href="{{route('obre.edit', $obre->id)}}">EDIT</a>
            @endif
            </td>
        </tr>
@endforeach
</table>
{{$obres->links()}}

<!-- <ul>
    @foreach($obres as $obre)
        <li><a href="{{route('obre.show', $obre->id)}}">{{$obre->obre_payee}}</a></li>
    @endforeach
</ul> -->

@endsection