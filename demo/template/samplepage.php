<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    <div class="input-group">
    <input type="text" class="form-control" placeholder="JSON URL" id="url">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  <br>
  <pre>
  <div id="result"></div>
  </pre>

</body>
</html>
<script>
    jQuery(document).on('click', '.btn-default', function(e){
        e.preventDefault();
        
        if(result) {
            var jsonUrl = jQuery('#url').val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'demo_api',
                    'url' : jsonUrl,
                },
                success:function(response) {
                    $("#result").text(response);
                }
            });
        }
    });
</script>