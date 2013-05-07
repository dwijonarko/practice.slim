{% extends "layout.html" %} 
{% block content %}
<div class="row home">
    <h2># Tasks</h2>
    <table class="table table-condensed  table-striped">
    	<tr><th>id</th><th>name</th><th>Done</th><th>Edit</th><th>Delete</th></tr>
    {% for task in tasks %}
    	<tr>
    		<td>{{task.id}}</td>
    		<td>{{ task.name }}</td>
    		<td>{% if task.done == 0 %} Not Yet {% else %} Done {% endif%}</td>
    		<td><a href="{{ urlFor('task_edit', {'id': task.id}) }}">{{ task.name }}</a></td>
    		<td><a href="{{ urlFor('task_delete', {'id': task.id}) }}">Delete</a></td>
    	</tr>
	{% endfor %}
	</table>
    <form action="{{urlFor('task_new') }}">
        <input type="submit" value="Add Task" class="btn btn-primary"/>
    </form>
</div>
{% endblock %}