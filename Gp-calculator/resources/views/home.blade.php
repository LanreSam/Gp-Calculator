@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <section style="margin-top: 10rem">
        <div class="container-fluid">
            <div class="row">
                <h1>Welcome SCI/17/18/0494</h1>
                 <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>course_code</th>
                            <th>score</th>
                            <th>course_unit</th>
                            <th>grade</th>
                            <th>points</th>
                            <th>quality_points</th>
                            <th>semester</th>
                            <th>level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>course_code</td>
                            <td>Score</td>
                            <td>course_unit</td>
                            <td>Grade</td>
                            <td>Points</td>
                            <td>Quality_points</td>
                            <td>Semester</td>
                            <td>Level</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
