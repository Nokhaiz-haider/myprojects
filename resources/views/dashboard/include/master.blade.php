<!DOCTYPE html>
<html lang="en">
	<head>

        @include('dashboard.include.head')
    
    </head>
	<body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!-- /Preloader -->
        <div class="wrapper theme-1-active box-layout pimary-color-red"> 
           
            @include('dashboard.include.top-menu-items')

            @include('dashboard.include.left-sidebar')
            
            @include('dashboard.include.right-sidebar')
            
            @yield('main-content')

        </div>
        <!-- /#wrapper -->  
        @yield('script')
	</body>
</html>