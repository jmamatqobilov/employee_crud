@extends('index')
@section('application')

<div class="">
  @php
$path = asset('files/'.$name);
@endphp
{{-- @dd($path)  --}}

<div class="" style="padding: 20px">
  <div class="row">
    <div class="col-2" style="background-color: rgb(255, 255, 255);border-radius:8px;padding:10px;box-shadow:1px 10px 15px rgba(123, 119, 119, 0.3)">
      <h2 style="text-align:start">Document view</h2>
      <span style="display: flex;align-items:center"><h4>types:</h4>(*docx *xlsx *pptx *pdf)</span>
      <div class="d-flex" style="align-items:center;padding-top:30px">
        <img src="{{url('/file-link.svg')}}" width="30px">
        <span style="color: green;font-size:14px;font-weight:500">{{$name}}</span>
      </div>
    </div>
    <div class="col-10" style="display:flex;justify-content:space-between">
      <iframe style="width: 80%" height="1000vh" src="//docs.google.com/gview?url={{$path}}&embedded=true"></iframe>
    </div>
    </div>
  </div>
</div>
@endsection