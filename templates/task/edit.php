{% extends "layout.html" %} 
{% block content %}
    <form class="form-horizontal" action="/{{task.id}}/edit" method="POST">
    	<fieldset>
		<legend>Edit</legend>
	    <div class="control-group">
		    <label class="control-label" for="taskName">Task Name</label>
	    	<div class="controls">
			    <input type="text" id="taskName" placeholder="Task Name" name="name" value="{{task.name}}">
	    	</div>
	    </div>
	    <div class="control-group">
		    <label class="control-label" for="taskStatus">Status</label>
		    <div class="controls">
			    {% if (task.done==1) %}
					<input type="checkbox" name="done" value=1 checked="true">Done<br>	
				{% else %}
					<input type="checkbox" name="done" value=1 > Done<br>	
				{% endif %}
				
		    </div>
	    </div>
	    <div class="control-group">
		    <div class="controls">
			    <input type="submit" name="submit" value="save" class="btn btn-primary">
		    </div>
	    </div>
	</fieldset>
    </form>
{% endblock %}