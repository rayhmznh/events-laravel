<script src="{{ url('frontend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ url('frontend/js/waves.js') }}"></script>
<script src="{{ url('frontend/js/sidebarmenu.js') }}"></script>
<script src="{{ url('frontend/js/custom.js') }}"></script>
<script src="{{ url('frontend/plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ url('frontend/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ url('frontend/js/pages/dashboards/dashboard1.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
          .create( document.querySelector( '#description' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
