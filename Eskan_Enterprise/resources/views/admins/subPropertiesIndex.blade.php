@extends('layouts.adminPanelApp')

@section('content')
@if (!isset($_GET['do']))
@include('admins.projects.subPropertiesTable')
@elseif ($_GET['do'] == 'allDetails')
@include('admins.allDetails')
@else
I don't have any records!
@endif

@endsection