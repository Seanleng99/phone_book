@extends('layout.master')

@section('content')
<div class="container">
    <div class="index-header">
        <div class="left">
            <h3>Contact List</h3>
        </div>
        <div class="right">
            <a href="{{route('phone.create')}}"><span class="fas fa-plus"></span> New Contact </a>
        </div>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone Number</td>
                </tr>
            </thead>
            <tbody>
                @foreach($phonebooks as $phonebook)
                <tr>
                    <td>{{$phonebook->name}}</td>
                    <td>{{$phonebook->phone_number}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection