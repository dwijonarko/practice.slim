<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3>New Task</h3>
</div>
<div class="modal-body">
	<form class="form-horizontal" action="create" method="POST">
	<div class="control-group">
	    <label class="control-label" for="taskName">Task Name</label>
	    <div class="controls">
		    <input type="text" id="taskName" placeholder="Task Name" name="name" value="">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="taskStatus">Status</label>
		<div class="controls">
			<input type="checkbox" name="done" value=1 > Done<br>	
		</div>
	</div>
</div>
<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	<button class="btn btn-primary" aria-hidden="true" id="btn-submit">Submit</button>
	</form>
</div>
<script>
	$("#btn-submit").click(function(){
		$.ajax({
			type: 'POST',
			url: $('form').attr('action'),
			data: $('form').serialize(),
			success: function(data) {
				$('#response > tbody:last').append(data);
				$('#ajax-modal').modal('hide');
			}
		})
		
	});
</script>