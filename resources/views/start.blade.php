@extends('master')
@section('title','Start Exampage')

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
            <h3 class="text-color">Are you ready?</h3>
            <a href="startquiz"><button class="btn btn-primary button-margin ">Start Quiz</button></a>
            <a href="/"><button class="btn btn-secondary button-margin ">Back</button></a>
        </div>
    </div>   
</div>
@endsection