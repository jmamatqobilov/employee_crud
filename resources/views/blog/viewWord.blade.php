@extends('index')
@section('application')

<div class="">
  @php
$path = asset('storage/files/'.$name);
@endphp
{{-- @dd($path)  --}}

<div class="d-flex" style="justify-content: center;flex-direction:column;align-items:center">
  <h2 style="text-align:center">Document file (*docx *xlsx *pptx)</h2>
  <div class="d-flex align-items-center">
    <img src="{{url('/file-link.svg')}}" width="30px">
    <span style="color: green;font-size:14px;font-weight:500">{{$name}}</span>
  </div>
  <iframe style="width: 80%" height="1000vh" src="//docs.google.com/gview?url={{$path}}&embedded=true"></iframe>
</div>
</div>
@endsection