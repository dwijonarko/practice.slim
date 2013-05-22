<?php

/* task/response.php */
class __TwigTemplate_a4341b55c02a79e4ad29feb633819133 extends Twig_Template
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
        echo "<tr id=\"";
        echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
        echo "\">
    \t\t<td>";
        // line 2
        echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
        echo "</td>
    \t\t<td>";
        // line 3
        echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "name");
        echo "</td>
    \t\t<td>";
        // line 4
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "done") == 0)) {
            echo " Not Yet ";
        } else {
            echo " Done ";
        }
        echo "</td>
    \t\t<td><a href=\"";
        // line 5
        echo $this->env->getExtension('slim')->urlFor("task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id")));
        echo "\" id=\"";
        echo $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id");
        echo "\" class=\"link-edit\"><i class=\"icon-edit\" ></i></a>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('slim')->urlFor("task_delete", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id")));
        echo "\" class=\"link-delete\" data-confirm=\"Are you sure you want to delete?\"><i class=\"icon-trash\"></i></a></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "task/response.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  40 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
