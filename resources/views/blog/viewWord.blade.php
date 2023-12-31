@extends('index')
@section('application')

<div class="">
  @php
$path = config('app.media_server') . '/files/'.$name;
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
      <iframe src='https://view.officeapps.live.com/op/embed.aspx?src={{$path}}' width='100%' height='1000vh' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
      
    </div>
    </div>
  </div>
</div>
@endsection