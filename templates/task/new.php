{% extends "layout.html" %} 
{% block content %}
<form class="form-horizontal" action="create" method="POST">
    	<fieldset>
		<legend>New Task</legend>
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
	    <div class="control-group">
		    <div class="controls">
			    <input type="submit" name="submit" value="save" class="btn btn-primary">
		    </div>
	    </div>
	</fieldset>
    </form>
{% endblock%}