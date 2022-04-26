@extends('layouts.adminPanelApp')

@section('content')
@if (!isset($_GET['do']))
@include('admins.projects.propertiesTable')
@elseif ($_GET['do'] == 'allDetails')
@include('admins.allDetails')

@else
I don't have any records!
@endif

@endsection