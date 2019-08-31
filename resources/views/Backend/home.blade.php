@extends('Backend.layouts.dashboard.app')
@section('content')
  <div class="content-wrapper">

        <section class="content-header">

            <h1>{{@$pagename}}</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active">{{@$pagename}}</li>
            </ol>
        </section>

        <section class="content">

            content here

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
