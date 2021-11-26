@extends('master')
@section('title', 'Add Question Page')
@section('pagestyle')
<style>
  .text-color{
            color:rgb(0, 102, 255);
        }
</style>

@section('pagesection')
    <!-- Modal-Add -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/add">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-color" id="exampleModalLabel">Add Questions</h5>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <label><strong>Question</strong></label>
                    </div>
                    <div class="row">
                        <input name="question" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label><strong>A</strong></label></div>
                        <div class="col-md-6"><label><strong>B</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input name="opa" class="form-control"></div>
                        <div class="col-md-6"><input name="opb" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label><strong>C</strong></label></div>
                        <div class="col-md-6"><label><strong>D</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><input name="opc" class="form-control"></div>
                        <div class="col-md-6"><input name="opd" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label><strong>Answer</strong></label><br />
                            <select name="ans" class="form-control">
                                <option Value="a">A</option>
                                <option Value="b">B</option>
                                <option Value="c">C</option>
                                <option Value="d">D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <a href="questions"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                    <button type="Submit" class="btn btn-primary" data-dismiss="modal">Add questions</button>
                </div>
            </form>
        </div>
    </div>
@endsection
