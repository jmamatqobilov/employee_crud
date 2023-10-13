@extends('index')
@section('application') 
    <div class="container">
        <div class="row pt-4">
            <div class="col-8 offset-2">
                <h3>Add Employee</h3>
                <form action="{{route('all-index')}}" method="POST">
                  @csrf
                  @method('GET')
                  <button class="" type="submit" style="background-color: Transparent;background-repeat:no-repeat;border:none;overflow:hidden">
                    <img src="./arrow.svg" style="width: 20px"/>
                    Back
                  </button>
                 </form>
                {{-- <form action="{{ route('application-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="sub">Title</label>
                    <input class="form-control" type="text" name="title"><br>
                    <label for="sub">Note</label>
                    <input class="form-control" type="text" name="note"><br>

                    <label for="sub">Description</label>
                    <input class="form-control" type="text" name="description"><br>
                    <input class="form-control" type="file" name="user-image"><br>
                    <button class="btn btn-primary">Save</button>
                </form> --}}
                <form action="{{ route('application-store') }}" method="POST" enctype="multipart/form-data"  class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">First name</label>
                      <input type="text" class="form-control" name="firstname" placeholder="firstname" required>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Last name</label>
                      <input type="text" class="form-control" name="lastname" placeholder="lastname" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Position</label>
                        <select id="inputState" class="form-select" name="position">
                          <option selected>Director</option>
                          <option>Director o'rinbosari</option>
                          <option>Iqtisodchi</option>
                          <option>Yurist</option>
                          <option>Hodim</option>
                        </select>
                      </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">City</label>
                      <select id="inputState" class="form-select" name="city">
                        <option selected>Tashkent</option>
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
                      <input type="email" class="form-control" name="email" id="inputZip" required>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" id="inputAddress" required placeholder="for example Tashkent ....">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Phone number</label>
                      <input type="number" class="form-control" name="phone" id="inputAddress2" required placeholder="+9989 ( )">
                    </div>
                    
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" name="title" for="gridCheck">
                          Проверить меня
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Save</button>
                      
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection

<style>
   @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
</style>