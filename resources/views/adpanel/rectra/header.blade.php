<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KU Admin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ URL::asset('adpanel/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('adpanel/plugins/morris/morris.css') }}">
    <!-- Dropzone css -->
    <link href="{{ URL::asset('adpanel/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('adpanel/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('adpanel/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('adpanel/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('adpanel/css/select2.min.css') }}" rel="stylesheet" type="text/css">
     @if(isset($editor))
	<link rel="stylesheet" href="{{ URL::asset('adpanel/plugins/summernote/summernote-bs4.css') }}">
    <!--bootstrap-wysihtml5-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('adpanel/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}">
    @endif
    @if(isset($datare))
        <link href="{{ URL::asset('adpanel/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('adpanel/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css">
    @endif
</head>
