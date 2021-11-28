@extends('master')
@section('title','Exam page')

@section('pagestyle')
<style>
  
</style>

@section('pagesection')
<div class="container">
    <div class="card">
        <div class="card-body ">
            <form method="post" action="/submitans">
                @csrf
                <div class="row">
                    @foreach ($qs as $q)
                    <div>
                       <h4># {{$q->question}}</h4>
                    </div>
                    <div>
                       <input name="ans" value="a" type="radio">(A){{$q->a}}<br/>
                       <input name="ans" value="b" type="radio">(B) {{$q->b}}<br/>
                       <input name="ans" value="c" type="radio">(C) {{$q->c}}<br/>
                       <input name="ans" value="d" type="radio">(D) {{$q->d}}<br/>
                       <input name="dbans" value={{$q->ans}} style="visibility:hidden;" >
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection