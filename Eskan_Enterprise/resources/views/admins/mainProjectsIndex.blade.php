@extends('layouts.adminPanelApp')

@section('content')
@if (!isset($_GET['do']))
@include('admins.mainProjects.mainProjectsTable')
@elseif ($_GET['do'] == 'addMainProject')
@include('admins.mainProjects.addMainProject')
@else
I don't have any records!
@endif

@endsection