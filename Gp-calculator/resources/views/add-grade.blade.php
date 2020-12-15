@extends('layouts.master')
@section('title', 'Add-grade')
@section('content')
    <section style="margin-top: 10rem">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex">
                            <a href="/gp"><i class="fa fa-arrow-left pt-1 mr-4" aria-hidden="true"></i></a>
                            Add new grade
                        </div>
                        <div class="card-body">
                            @if(Session::has('msg'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('msg') }}
                                </div>
                            @endif
                            <form method="POST" action="" class="p-3">
                                @csrf
                                <div class="form-group">
                                    <label for="course_code">Course code</label>
                                    <input type="text" name="course_code" class="form-control" placeholder="Enter course code" required/>

                                    @error('course_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="score">Score</label>
                                    <input type="text" name="score" class="form-control" placeholder="Enter score" required/>

                                    @error('score')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="course_unit">Course unit</label>
                                    <input type="text" name="course_unit" class="form-control" placeholder="Enter course unit" required/>

                                    @error('course_unit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="d-flex">
                                    <div class="form-group">
                                        <select name="semester" class="btn btn-dark">
                                            <option value="" disabled selected>Choose semester</option>
                                            <option value="HARMATTAN">HARMATTAN</option>
                                            <option value="RAIN">RAIN</option>
                                        </select>

                                        @error('semester')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group ml-3">
                                        <select name="level" class="btn btn-dark">
                                            <option value="" disabled selected>Choose level</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                            <option value="700">700</option>
                                            <option value="800">800</option>
                                            <option value="900">900</option>
                                        </select>

                                        @error('level')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-success mt-4"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
