<input type="text" name="email" id="email" class="form-control">


<script type="text/javascript">
  $(document).ready(function(){

    $('#email').autocomplete({
      source: "<?php echo site_url('blog/get_autocomplete');?>",
      
      select: function (event, ui) {
        $('[name="title"]').val(ui.item.label); 
        $('[name="description"]').val(ui.item.description); 
      }
    });

  });
</script>