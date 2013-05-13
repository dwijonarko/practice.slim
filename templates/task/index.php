{% extends "layout.html" %} 
{% block content %}
<div class="row">
    <h2># Tasks</h2>
    <table class="table table-striped table-bordered table-condensed" id="response">
        <thead>
    	<tr><th>id</th><th>name</th><th>Done</th><th >Action</th></tr>
        </thead>
    <tbody >
    {% for task in tasks %}
    	<tr id="{{task.id}}">
    		<td>{{task.id}}</td>
    		<td>{{ task.name }}</td>
    		<td>{% if task.done == 0 %} Not Yet {% else %} Done {% endif%}</td>
    		<td><a href="{{ urlFor('task_edit', {'id': task.id}) }}" id="{{task.id}}" class="link-edit"><i class="icon-edit" ></i></a>
                <a href="{{ urlFor('task_delete', {'id': task.id}) }}" id="{{task.id}}" class="link-delete" data-confirm="Are you sure you want to delete?"><i class="icon-trash"></i></a></td>
    	</tr>
	{% endfor %}
    </tbody>
	</table>
    <a href="{{urlFor('task_new') }}" id="btn_new" class="btn btn-primary" data-toggle="modal" data-target="#new">New task</a>
</div>
<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>

{% endblock %}
