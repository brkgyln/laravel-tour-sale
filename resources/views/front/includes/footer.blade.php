<footer class="footer mt-3">
    <p>This software developed.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
    <script src="{{asset('js/lightslider.min.js')}}"></script>
    <script src="{{asset('css/summernote/summernote-bs4.js')}}"></script>
    {{--  <script src="{{asset('css/summernote/summernote.css')}}"></script>  --}}
    @stack('footer_js')
    <script >
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
    
</body>
</html>