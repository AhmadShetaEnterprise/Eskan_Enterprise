@extends('layouts.adminPanelApp')

@section('content')
@if (!isset($_GET['do']))
@include('admins.main_projects.main_projectsTable')

@else
I don't have any records!
@endif

@endsection
