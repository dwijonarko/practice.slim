<tr id="{{task.id}}">
    		<td>{{task.id}}</td>
    		<td>{{ task.name }}</td>
    		<td>{% if task.done == 0 %} Not Yet {% else %} Done {% endif%}</td>
    		<td><a href="{{ urlFor('task_edit', {'id': task.id}) }}" id="{{task.id}}" class="link-edit"><i class="icon-edit" ></i></a>
                <a href="{{ urlFor('task_delete', {'id': task.id}) }}"><i class="icon-trash"></i></a></td>
</tr>