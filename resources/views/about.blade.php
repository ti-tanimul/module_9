@extends('master');
@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <h1>This Is About Page</h1>
                <p>My Name Is Tanvir Ahmed. I Am Graduatiation From City University. My Home town is Patuakhali.</p>
                <ul>
                    <h3>Skil</h3>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Mysql</li>
                    <li>OOP</li>
                </ul>
                <a href="{{url('/')}}" >Back To Home</a>
            </div>
        </div>
    </div>
@endsection