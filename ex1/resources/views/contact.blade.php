@extends('master')
@section('title', 'Contact')
@section('content')       
        
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Contact Template</h1>
                @isset($data)
                    <p><strong>Name: </strong>{{ $data->name ?? '' }}</p>
                    <p><strong>Phone: </strong>{{ $data->phone }}</p>
                    <p><strong>Email: </strong>{{ $data->email }}</p>
                    <p><strong>Message: </strong>{{ $data->message }}</p>
                @else   
                <form method="post">
                @csrf
                <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input name="phone" type="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <br>
                        <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else. Exept our advertiser</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <input name="message" type="text" class="form-control" id="message" aria-describedby="messageHelp" placeholder="What do you want?">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endisset
            </div>
        </div>

@endsection
