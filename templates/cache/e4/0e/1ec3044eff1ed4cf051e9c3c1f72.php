<?php

/* task/new.php */
class __TwigTemplate_e40e1ec3044eff1ed4cf051e9c3c1f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal-header\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t<h3>New Task</h3>
</div>
<div class=\"modal-body\">
\t<form class=\"form-horizontal\" action=\"create\" method=\"POST\">
\t<div class=\"control-group\">
\t    <label class=\"control-label\" for=\"taskName\">Task Name</label>
\t    <div class=\"controls\">
\t\t    <input type=\"text\" id=\"taskName\" placeholder=\"Task Name\" name=\"name\" value=\"\">
\t    </div>
\t</div>
\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"taskStatus\">Status</label>
\t\t<div class=\"controls\">
\t\t\t<input type=\"checkbox\" name=\"done\" value=1 > Done<br>\t
\t\t</div>
\t</div>
</div>
<div class=\"modal-footer\">
\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
\t<button class=\"btn btn-primary\" aria-hidden=\"true\" id=\"btn-submit\">Submit</button>
\t</form>
</div>
<script>
\t\$(\"#btn-submit\").click(function(){
\t\t\$.ajax({
\t\t\ttype: 'POST',
\t\t\turl: \$('form').attr('action'),
\t\t\tdata: \$('form').serialize(),
\t\t\tsuccess: function(data) {
\t\t\t\t\$('#response > tbody:last').append(data);
\t\t\t\t\$('#ajax-modal').modal('hide');
\t\t\t}
\t\t})
\t\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "task/new.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
