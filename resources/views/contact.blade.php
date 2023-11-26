@extends('master');
@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <h1>This Is Contact Page</h1>

                <form action="" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Type Your Name" ><br><br>
                    <input type="email" name="email" placeholder="Type Your Email" ><br><br>
                    <input type="number" name="number" placeholder="Type Your Number" ><br><br>
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Type your Message"></textarea><br><br>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
                
                <a href="{{url('/')}}" >Back To Home</a>
            </div>
        </div>
    </div>
@endsection