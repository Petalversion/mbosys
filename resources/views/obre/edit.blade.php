@extends('layouts.app')

@section('content')

<h1>Edit Obre</h1>

<form method ="post" action="/obre/{{$obre->id}}">
    {{csrf_field()}}    
    <label for="obre_num">OBRE #:&nbsp;</label>
    <input type="hidden" name="_method" value="PUT">
    <input type="number" name="obre_num" value="{{$obre->obre_num}}" ><br>
    <label for="office_code">Office :&nbsp;</label>
    <input type="text" name="office_code" id="office" value="{{$obre->office_code}}" ><div id="officeList"></div>
    <label for="acct_code">Account Code :&nbsp;</label>
    <input type="text" name="acct_code" id="code" value="{{$obre->acct_code}}" ><div id="codeList"></div>
    <label for="obre_payee">Payee :&nbsp;</label>
    <input type="text" name="obre_payee" value="{{$obre->obre_payee}}" ><br>
    <label for="obre_amount">Amount :&nbsp;</label>
    <input type="text" name="obre_amount" value="{{$obre->obre_amount}}" ><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>

<form method ="post" action="/obre/{{$obre->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">
</form>
@endsection