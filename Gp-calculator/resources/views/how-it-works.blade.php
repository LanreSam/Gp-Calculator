@extends('layouts.master')
@section('title', 'How It Works')
@section('content')
@php
    $active = 'active';
@endphp
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
        <div class="container bg-white shadow text-center p-5">
            <div class="row">
                <h1>OOU's Accessment System</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non inventore nam suscipit! Illo pariatur ex hic quibusdam nesciunt
                    repellat iure eius asperiores! Eaque odio nulla velit voluptatum consequuntur voluptatem alias dolorum ea? Nulla aut esse ex
                    repellat. Excepturi exercitationem aliquam corrupti, suscipit nulla labore itaque dolorem maxime amet fugit voluptatum.
                </p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-lg-flex d-block">
                    <div class="col-lg-6  text-center text-light p-5">
                        <div class="p-4">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Grade Description</th>
                                        <th>Scale</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A</td>
                                        <td>First class Honours (5)</td>
                                        <td>70.00 - 100.00</td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td>First class Honours (5)</td>
                                        <td>70.00 - 100.00</td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td>First class Honours (5)</td>
                                        <td>70.00 - 100.00</td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td>First class Honours (5)</td>
                                        <td>70.00 - 100.00</td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td>First class Honours (5)</td>
                                        <td>70.00 - 100.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white shadow d-flex justify-content-center p-5">
                        <img src="images/dev.png" alt="Developer" class="img"/>
                    </div>
                </div>
            </div>
    </section>

@endsection
