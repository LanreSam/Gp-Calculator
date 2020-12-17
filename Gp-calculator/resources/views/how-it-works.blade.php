@extends('layouts.master')
@section('title', 'How It Works')
@section('content')
    <style>
        .txt{
            color: #000080;
            font-weight: 600;
        }
    </style>
    <section style="margin-top: 10rem">
        <div class="container bg-white shadow text-center p-5 mb-5">
            <div class="row">
                <h1 class="txt mb-4">OOU's Accessment System</h1>
                <p class="mb-5">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non inventore nam suscipit! Illo pariatur ex hic quibusdam nesciunt
                    repellat iure eius asperiores! Eaque odio nulla velit voluptatum consequuntur voluptatem alias dolorum ea? Nulla aut esse ex
                    repellat. Excepturi exercitationem aliquam corrupti, suscipit nulla labore itaque dolorem maxime amet fugit voluptatum.
                </p>
            </div>
            {{-- This is the second section --}}
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 d-lg-flex d-block">
                        <div class="col-lg-6  text-center">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h1 class="text-light p-1">University Grading System in Nigeria</h1>
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
                                                <td>Second class Honours, <b>Upper</b> (4)</td>
                                                <td>60.00 - 69.99</td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>Second class Honours, <b>Lower</b> (3)</td>
                                                <td>50.00 - 59.99</td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>Third class (2)</td>
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
                        <div class="mt-5"></div>
                        <div class="col-lg-6 text-center p-3 my-auto">
                            <h1 class="txt mb-4">How OOU calculates GPA</h1>
                            <p>
                                Every course in OOU has a Course unit <b>(CU)</b>. Therefore to get the Quality Point <b>(QP)</b> for a particular
                                course in any semester, OOU multiplies the Course Unit (CU) by the Grade Point <b>(GP)</b> earned by the student
                                in that particular course. <br/><br/>
                                <b>For Example:</b> Lanre signed up for 20 Course units in Rain Semester, and got a Quality Point of
                                85 for that Semester. Therefore, OOU calculates Lanre's Grade Point Average <b>GPA</b> for that particular semester using the formula
                                <b>GPA = QP/CU</b><br/>
                                <b>GPA = 85/20</b><br/>
                                <b>GPA = 4.25</b><br/>
                                Therefore Lanre's GPA for Rain Semester is <b>4.25</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
