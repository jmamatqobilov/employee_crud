@extends('index')
@section('application')

<div class="m-3">
  <div class="d-flex align-items-center" style="width: 100%;justify-content:space-between">
    <h4>Application Employees</h4>
    <div class="d-flex" style="align-items: center">
      <div  style="margin-right:12px;">
        <form action="{{route('get-excel')}}" method="POST">
          @csrf
          @method('GET')
          <button class="" type="submit" style="background-color: Transparent;background-repeat:no-repeat;border:none;overflow:hidden">
            <img src="./download2.svg" style="width: 20px" />
          </button>
         </form>
      </div>
      <div class="d-flex"
        style="background-color: #fff;align-items:center;border-radius:16px;padding:4px;cursor: pointer;box-shadow:1px 2px 2px rgba(197, 197, 197, 0.3)">
        <div class="">
          <img src="./add.svg" style="" />
        </div>
        <div class="" style="font-size: 12px;color:#000">
          <a href="{{route('application-create')}}" style="text-decoration: none;color:#000">Add Employee</a>
        </div>
      </div>
    </div>
  </div>
  <div class="" style="padding-top: 10px">
    <table class="table align-middle mb-0 bg-white">
      <thead class="bg-light">
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>phone</th>
          <th>created date</th>
          <th>status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody style="">
        @foreach ($applications as $item)
        <tr style="align-items: center;">
          <td>
            <div class="d-flex align-items-center">
              <img src="./photo.svg" class="rounded-circle" alt="" style="width: 30px; height: 30px" />
              <div class="ms-3">
                <p class="fw-bold mb-1">{{$item->firstname}}</p>
                <p class="text-muted mb-0">{{$item->email}}</p>
              </div>
            </div>
          </td>
          <td>
            <p class="fw-normal mb-1">{{$item->position}}</p>
          </td>
          <td>
            <p class="fw-normal mb-1">+{{$item->phone}}</p>
          </td>
          <td>
            <p class="fw-normal mb-1">{{$item->created_at}} </p>
          </td>
          <td>
            <span class="c-pill c-pill--warning">panding</span>
          </td>
          <td>
            <div class="d-flex" style="align-items: center;">
             
              <div class="">
                <form action="{{route('application-edit', ['id' => $item->id])}}" method="POST">
                  @csrf
                  @method('GET')
                  <button class="" type="submit" style="background-color: Transparent;background-repeat:no-repeat;border:none;overflow:hidden">
                    <img src="./edit.svg" style="width: 20px" />
                  </button>
                 </form>
              </div>

              <div class="" style="padding-left: 20px">
                <form action="{{route('application-delete', ['id' => $item->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="" type="submit" style="background-color: Transparent;background-repeat:no-repeat;border:none;overflow:hidden">
                    <img src="./delete1.svg" style="width: 20px" />
                  </button>
                 </form>
              </div>  
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{-- @endforeach --}}
</div>
@endsection

<style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
tr{
  background-color: #ffffff;
  border-radius:20px;
  box-shadow:1px 4px 5px rgba(225, 238, 244, 0.3)
}


.c-pill {
  align-items: center;
	font-family: "Open Sans", Arial, Verdana, sans-serif;
	font-weight: bold;
	font-size: 11px;
  display: inline-block;
  height: 100%;
  white-space: nowrap;
  width: auto;

  position: relative;
  border-radius: 100px;
  line-height: 1;
  overflow: hidden;
  padding: 0px 12px 0px 20px;
  text-overflow: ellipsis;
	line-height: 1.25rem;
	color: #ff7300;
	
    word-break: break-word;

  &:before {
    border-radius: 50%;
    content: '';
    height: 10px;
    left: 6px;
    margin-top: -5px;
    position: absolute;
    top: 50%;
    width: 10px;
  }
  
 
}


  .c-pill--success {
    background: #b4eda0; }
    .c-pill--success:before {
      background: #6BC167; }
  .c-pill--warning {
    background: #ffebb6; }
    .c-pill--warning:before {
      background: #ffc400; }
  .c-pill--danger {
    background: #ffd5d1; }
    .c-pill--danger:before {
      background: #ff4436; 
    }


</style>