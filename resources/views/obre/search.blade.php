@extends('layouts.app')

@section('content')
<a href="{{ route('obre.index') }}">
    <button type="button">Go to Index</button>
</a>

    <h2>Search Results</h2>
    <div>
        <form action="{{ route('obre.search') }}" method="GET">
            <input id="searchInput" type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>DATE/TIME</th>
                <th>OBRE #</th>
                <th>PAYEE</th>
                <th>OFFICE</th>
                <th>ACCOUNT CODE</th>
                <th>ACCOUNT TITLE</th>
                <th>AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            @forelse($results as $obre)
                <tr>
                    <td>{{ $obre->created_at }}</td>
                    <td><a href="{{ route('obre.show', $obre->id) }}">{{ $obre->obre_num }}</a></td>
                    <td>{{ $obre->obre_payee }}</td>
                    <td>{{ $obre->offices->office_title }}</td>
                    <td>{{ $obre->acct_code }}</td>
                    <td>{{ $obre->accounts->acct_title }}</td>
                    <td>{{ $obre->obre_amount }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No results found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
