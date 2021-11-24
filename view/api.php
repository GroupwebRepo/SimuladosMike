<script>
	function apiRequest(action, data){
		return jQuery.ajax({
		  url:"<?php echo API_URL ?>",
			dataType: "json",
		  method:'POST',
		  data:{action:action, data:data}
		})
	}
</script>
