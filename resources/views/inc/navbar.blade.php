<nav class="navbar navbar-expand-md navbar-dark   shadow-sm" style="background-color: black ;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('Project Name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li><a class="p-2 text-white " href="/">{{ __('Home') }}</a></li>
                    <li><a class="p-2 text-white " href="/contact">{{ __('Contact') }}</a></li>
                    <li><a class="p-2  text-white" href="/about ">{{ __('About') }}</a></li>
                   
                </div>
            </div>
        </nav>