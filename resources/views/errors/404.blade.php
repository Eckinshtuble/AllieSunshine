@extends('master')

@section('content')
    <title>Be right back.</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        .content {
            text-align: center;
            padding: 15% 0;
        }

        .title {
            font-size: 50px;
            margin-bottom: 30px;
        }

        .link-index {
            font-size: 40px;
        }

        .content a {
            text-decoration: none;
            padding-bottom: 4px;
        }

        .content a:hover {
            color: red;
        }

    </style>
<section class="section-features" id="#features">
    <div class="content">
        <div class="title">The page you are looking for could not be found.</div>
        <a href="{{ url('index') }}"><div class="link-index">Back to Home</div></a>
    </div>
</section>

@endsection

