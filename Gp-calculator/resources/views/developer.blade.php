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
            <div class="row">
                <div class="col-12 d-lg-flex d-block bg-warning">
                    <div class="col-lg-6 bg-danger d-flex justify-content-center p-5">
                        <img src="images/dev.png" alt="Developer" class="img"/>
                    </div>
                    <div class="col-lg-6 bg-dark text-center text-light p-5">
                        <h1>Ezeche Lanre Samuel</h1>
                        <p>
                            A current 300L Computer Science student at the prestigious Olabisi Onabanjo University (O.O.U)
                            as at the time of development of this application.
                        </p>
                        <a href="https://lanresam.ml" target="_blank" class="btn btn-info px-5 py-3">My Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
