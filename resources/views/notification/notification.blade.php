<div class="notifications top-right"></div>
<script>
    @if (Session::has('success'))
      $('.top-right').notify({
        message:{ text: "{{ Session::get('success') }}"}
      }).show();
      @php
          Session::forget('success');
      @endphp        
    @endif

</script>