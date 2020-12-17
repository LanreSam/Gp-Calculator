@extends('layouts.master')
@section('title', 'Developer')
@section('content')
    <style>
        .img{
            width: 100%;
        }
        @media screen and (min-width: 769px){
            .img{
                width: 70%;
            }
        }
    </style>
    <section style="margin-top: 10rem">
        <div class="container">
            {{-- <div class="row">
                <div class="col-6 col-md-12 d-flex justify-content-center">
                    <img src="images/dev.png" alt="Developer" class="img"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12">
                    <h1>Developer</h1>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12 d-lg-flex d-block bg-warning">
                    <div class="col-lg-6 bg-danger d-flex justify-content-center">
                        <img src="images/dev.png" alt="Developer" class="img"/>
                    </div>
                    <div class="col-lg-6 bg-success text-center">
                        <h1>Developer</h1>
                        <h2>jagdjsig</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
