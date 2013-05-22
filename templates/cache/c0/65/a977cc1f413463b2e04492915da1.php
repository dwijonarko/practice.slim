<?php

/* task/index.php */
class __TwigTemplate_c065a977cc1f413463b2e04492915da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <h2># Tasks</h2>
    <table class=\"table table-striped table-bordered table-condensed\" id=\"response\">
        <thead>
    \t<tr><th>id</th><th>name</th><th>Done</th><th >Action</th></tr>
        </thead>
    <tbody >
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 11
            echo "    \t<tr id=\"";
            echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
            echo "\">
    \t\t<td>";
            // line 12
            echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
            echo "</td>
    \t\t<td>";
            // line 13
            echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "name");
            echo "</td>
    \t\t<td>";
            // line 14
            if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "done") == 0)) {
                echo " Not Yet ";
            } else {
                echo " Done ";
            }
            echo "</td>
    \t\t<td><a href=\"";
            // line 15
            echo $this->env->getExtension('slim')->urlFor("task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id")));
            echo "\" id=\"";
            echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
            echo "\" class=\"link-edit\"><i class=\"icon-edit\" ></i></a>
                <a href=\"";
            // line 16
            echo $this->env->getExtension('slim')->urlFor("task_delete", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id")));
            echo "\" id=\"";
            echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
            echo "\" class=\"link-delete\" data-confirm=\"Are you sure you want to delete?\"><i class=\"icon-trash\"></i></a></td>
    \t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </tbody>
\t</table>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('slim')->urlFor("task_new");
        echo "\" id=\"btn_new\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#new\">New task</a>
</div>
<div id=\"ajax-modal\" class=\"modal hide fade\" tabindex=\"-1\"></div>

";
    }

    public function getTemplateName()
    {
        return "task/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  82 => 19,  71 => 16,  65 => 15,  57 => 14,  53 => 13,  49 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 2,);
    }
}
