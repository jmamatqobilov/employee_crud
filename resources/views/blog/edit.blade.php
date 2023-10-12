@extends('index')
@section('application')
    <div class="container">
        <div class="row pt-5">
            <div class="col-8 offset-2">
              <div class="">
                <h3>Update Employe</h3>
                <form action="{{route('all-index')}}" method="POST">
                  @csrf
                  @method('GET')
                  <button class="" style="display: flex;align-items:center" type="submit" style="background-color: Transparent;background-repeat:no-repeat;border:none;overflow:hidden">
                    <img src="{{url('/arrow.svg')}}" style="width: 20px"/>
                    Back
                  </button>
                 </form>
              </div>
                <form action="{{ route('application-update',['id'=> $application->id]) }}" method="POST" enctype="multipart/form-data"  class="row g-3">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">First name</label>
                      <input type="text" class="form-control" name="firstname" value="{{$application->firstname}}" placeholder="firstname">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Last name</label>
                      <input type="text" class="form-control" name="lastname" value="{{$application->lastname}}" placeholder="lastname">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Position</label>
                        <select id="inputState" class="form-select" name="position" >
                          <option value="{{$application->position}}" selected>{{$application->position}}</option>
                          <option>Director o'rinbosari</option>
                          <option>Iqtisodchi</option>
                          <option>Yurist</option>
                          <option>Hodim</option>
                        </select>
                      </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">City</label>
                      <select id="inputState" class="form-select" name="city">
                        <option value="{{$application->city}}" selected>{{$application->city}}</option>
                        <option>Jizzakh</option>
                        <option>Namangan</option>
                        <option>Surkhandarya</option>
                        <option>Kashkadarya</option>
                        <option>Fergana</option>
                        <option>Andijan</option>
                        <option>Samarkand</option>
                        <option>Sirdarya</option>
                        <option>Xorazm</option>
                        <option>Navoiy</option>
                        <option>Bukhara</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="inputZip" class="form-label">Email</label>
                      <input type="email" class="form-control" value="{{$application->email}}" name="email" id="inputZip">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" id="inputAddress" value="{{$application->address}}" placeholder="for example Tashkent ....">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Phone number</label>
                      <input type="number" class="form-control" name="phone" value="{{$application->phone}}" placeholder="+9989 ( )">
                    </div>
                    
                    {{-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" name="title" for="gridCheck">
                          Проверить меня
                        </label>
                      </div>
                    </div> --}}
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection