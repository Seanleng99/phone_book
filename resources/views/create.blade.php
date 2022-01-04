@extends('layout.master')

@section('content')
<div class="create-header">
    <h3>Add New Contact</h3>
</div>
<form class="form-vertical" method="post" action="{{route('phone.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="e.g. Tan Sean Leng" required/>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" name="phone_number" placeholder="e.g. +60168772499" required/>
    </div>
    <button type="submit" class="btn">Create</button>
</form>
@endsection