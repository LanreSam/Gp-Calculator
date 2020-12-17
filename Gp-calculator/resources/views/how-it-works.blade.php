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
    </section>

@endsection
