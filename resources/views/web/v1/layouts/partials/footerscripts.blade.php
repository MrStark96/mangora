<!-- Modal Popup End -->
<script src="{{ URL::asset('assets/js/responsive.menu.js') }}"></script>
<script src="{{ URL::asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('assets/js/chosen.js') }}"></script>
<script src="{{ URL::asset('assets/js/counter.js') }}"></script>
<script src="{{ URL::asset('assets/js/fliters.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.fitvids.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.growl.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ URL::asset('assets/js/masonry.pkgd.js') }}"></script>
<script src="{{ URL::asset('assets/js/skills-progress.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-slider.js') }}"></script>
<script src="{{ URL::asset('assets/js/wow.js') }}"></script>
<script src="{{ URL::asset('assets/js/functions-plugin.js') }}"></script>
<script src="{{ URL::asset('assets/js/functions.js') }}"></script>

<!-- Validate -->
<script src="{{ URL::asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/additional-methods.min.js') }}"></script>

<script type="text/javascript">
    
	    var url = "{{ route('changeLang') }}";
	  
	    $(".changeLang").change(function(){
	        window.location.href = url + "?lang="+ $(this).val();
	    });
	    
</script>
@stack('script')