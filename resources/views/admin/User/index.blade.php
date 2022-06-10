@include('layouts.master')

<body class="dark-edition">
    <div class="wrapper ">
        @include('layouts.sidebar')

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">User Details</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    @include('layouts.action')

                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="ajax-msg"></div>

                <div class="container-fluid">



                    <div class="table-responsive"><br>
                        {!! $dataTable->table(['class' => 'table table-bordered dt-responsive nowrap']) !!}
                    </div>

                </div>
            </div>
            @push('page_scripts')

                {!! $dataTable->scripts() !!}

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


                </script>
            @endpush

            @include('layouts.footer')
