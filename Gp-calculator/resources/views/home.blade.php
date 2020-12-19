@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <section style="margin-top: 10rem">
        <div class="container-fluid">
            <div class="row">
                <h1>Welcome SCI/17/18/0494</h1>
            </div>
            <div class="container bg-white p-5 mt-5">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>CC</th>
                                <th>score</th>
                                <th>CU</th>
                                <th>grade</th>
                                <th>points</th>
                                <th>QP</th>
                                <th>semester</th>
                                <th>level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>mat101</td>
                                <td>70</td>
                                <td>2</td>
                                <td>A</td>
                                <td>5</td>
                                <td>10</td>
                                <td>Hamattan</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
