@extends('layouts.adminPanelApp')

@section('content')
@if (!isset($_GET['do']))
@include('admins.customerTable')
@elseif ($_GET['do'] == 'addCustomer')
@include('admins.addCustomer')
@elseif ($_GET['do'] == 'editCustomer')
@include('admins.editCustomer')
@elseif ($_GET['do'] == 'allDetails')
@include('admins.allDetails')
@elseif ($_GET['do'] == 'projects')
@include('admins.projects.projectsTable')
@else
I don't have any records!
@endif

@endsection
