@include('adpanel.rectra.header')
@include('adpanel.rectra.menu')
@include('adpanel.rectra.sidemenu')
<div class="content-page">

    <!-- Start content -->
    <div class="content">
        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Add Faculty</h4></div>
        </div>
       <div class="page-content-wrapper">
            <div class="container-fluid">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
                @endif
                    @if(count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @yield('content')
            </div>
            <!-- container -->
        </div>
        <!-- Page content Wrapper -->
    </div>
</div>

@include('adpanel.rectra.footer')
@yield('javascript')
</body>
</html>
