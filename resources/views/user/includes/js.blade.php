

        <!-- jquery -->
        <script src="{{ asset('userbackend/panel/assets/js/jquery.min.js') }}"></script>
        <!-- popper Min Js -->
        <script src="{{ asset('userbackend/panel/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{ asset('userbackend/panel/assets/js/bootstrap.min.js') }}"></script>
        <!-- Fontawesome-->
        <script src="{{ asset('userbackend/panel/assets/js/all.min.js') }}"></script>
        <!-- metis menu -->
        <script src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
        <script src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
        <!-- nice scroll bar -->
        <script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
        <!-- counter -->
        <script src="{{ asset('userbackend/panel/assets/plugins/counter/js/counter.js') }}"></script>
        <!-- chart -->
   <script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
        <script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
        <!-- pie chart -->
        <script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
        <script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/pie.active.js') }}"></script>


        <!-- Main js -->
        <script src="{{ asset('userbackend/panel/assets/js/main.js') }}"></script>

        {{-- toster --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            @if (Session::has('message'))
            var type="{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                    toastr.info('{{ Session::get("message") }}');
                    break;

                case 'success':
                    toastr.success('{{ Session::get("message") }}');
                    break;

                case 'error':
                    toastr.error('{{ Session::get("message") }}');
                    break;

                case 'warning':
                    toastr.warning('{{ Session::get("message") }}');
                    break;

            }

            @endif
        </script>
