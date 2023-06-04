@extends('layouts.app')

@section('content')

<form method ="post" action="/obre">
    <input type="number" name="obre_num" placeholder="Enter Obre Number" >
    <input type="text" name="office_code" id="office" placeholder="Office Number" >
    <div id="officeList"></div>
    <input type="text" name="acct_code" id="code" placeholder="Account Code" >
    <div id="codeList"></div>
    <input type="text" name="obre_payee" placeholder="Payee" >
    <input type="text" name="obre_amount" placeholder="Amount" >
    {{csrf_field()}}
    <input type="submit" name="submit">
</form>










@endsection