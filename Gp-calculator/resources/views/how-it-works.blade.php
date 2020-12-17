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
                    <div class="col-lg-6  text-center p-5">
                        <div class="">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h1 class="text-light p-2">University Grading System in Nigeria</h1>
                                </div>
                                <div class="card-body">
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
                                                <td>B</td>
                                                <td>Second class Honours, Upper(4)</td>
                                                <td>60.00 - 69.99</td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>Second class Honours, Lower(3)</td>
                                                <td>50.00 - 59.99</td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>Third class (3)</td>
                                                <td>45.00 - 49.99</td>
                                            </tr>
                                            <tr>
                                                <td>E</td>
                                                <td>Pass (1)</td>
                                                <td>40.00 - 44.99</td>
                                            </tr>
                                            <tr>
                                                <td>F</td>
                                                <td></td>
                                                <td>00.00 - 39.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white shadow d-flex justify-content-center p-5">
                        <img src="images/dev.png" alt="Developer" class="img"/>
                    </div>
                </div>
            </div>
    </section>

@endsection
