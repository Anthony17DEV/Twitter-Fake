<?php
header('location: TwitterFakeTonin/index.html');
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
  <script type="text/javascript">
    funcition postar(){
      tweet = $('#tweet').val();
      $('<p>'+tweet+'</p>').insertBefore('.tweets:first');

    }