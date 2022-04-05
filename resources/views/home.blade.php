@extends('layout')

@section('mainwindow')

<div class="books">
@foreach($cardDatas as $cardData) 
 
<x-bookcard bookid="{{$cardData['book_id']}}"/>

@endforeach

</div>

@stop