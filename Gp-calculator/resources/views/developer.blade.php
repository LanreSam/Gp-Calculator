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
        <div class="container d-lg-flex d-block">
            <div class="row">
                <div class="col-6 col-md-12 d-flex justify-content-center">
                    <img src="images/dev.png" alt="Developer" class="img"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-12">
                    <h1>Developer</h1>
                </div>
            </div>
        </div>
    </section>

@endsection
