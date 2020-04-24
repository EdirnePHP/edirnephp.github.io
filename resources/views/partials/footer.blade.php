
<!-- Go To Top -->
    <a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>


    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.1.js"></script>
    <!-- jQuery Easing -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Easy Responsive Tabs -->
    <script src="/assets/js/easyResponsiveTabs.js"></script>
    <!-- FastClick for Mobile/Tablets -->
    <script src="/assets/js/fastclick.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <script type="text/javascript">

        function copy(){
            let btc = $("#btc-val")[0];
            console.log(btc);
            btc.select();
            document.execCommand("Copy");
            let btn = $("#kopyala")[0];
            btn.innerHTML = "Kopyalandı";
        };
    </script>
    @yield('js')

    </body>
</html>
