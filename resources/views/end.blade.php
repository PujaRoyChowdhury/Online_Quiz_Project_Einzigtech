@extends('master')
@section('title','End Exampage')

@section('pagestyle')
    <style>
        .card-size {
            width: 400px;
            height: 300px;
            text-align: center;
            padding: 50px;
            margin: 150px 350px ;
        }
        .text-color{
            color:rgb(0, 102, 255);
        }
        .button-margin{
            margin-top: 50px;
        }
    </style>

@section('pagesection')
<div class="container">
    <div class="card card-size">
        <div class="card-body">
            <label><strong> Correct : </strong>{{$c}}</label>
            <label><strong>Incorrect :</strong> {{$w}}</label>
            <label><strong>Result :</strong> {{$c}}/{{$c+$w}}</label><br/>
            <a href="/"><button class="btn btn-primary button-margin">Finish Quiz</button></a>
        </div>
    </div>
</div>
@endsection