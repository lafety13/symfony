<?php

/* employees/show.html.twig */
class __TwigTemplate_e08a0c17d847ccb220645071df73a23732fd09ed55804d4f7dad8ba15d5d7780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employees/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6d599cdef4a3ac879dd2bfe81c5a2d462ee0f160b8f50651caf6b0d3fc3780 = $this->env->getExtension("native_profiler");
        $__internal_9d6d599cdef4a3ac879dd2bfe81c5a2d462ee0f160b8f50651caf6b0d3fc3780->enter($__internal_9d6d599cdef4a3ac879dd2bfe81c5a2d462ee0f160b8f50651caf6b0d3fc3780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employees/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6d599cdef4a3ac879dd2bfe81c5a2d462ee0f160b8f50651caf6b0d3fc3780->leave($__internal_9d6d599cdef4a3ac879dd2bfe81c5a2d462ee0f160b8f50651caf6b0d3fc3780_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc2bd51744addc9c544a14552bd2317775690deefbb3667fd99a3f648884cce = $this->env->getExtension("native_profiler");
        $__internal_afc2bd51744addc9c544a14552bd2317775690deefbb3667fd99a3f648884cce->enter($__internal_afc2bd51744addc9c544a14552bd2317775690deefbb3667fd99a3f648884cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employees</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "department", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("employees_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employees_edit", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_afc2bd51744addc9c544a14552bd2317775690deefbb3667fd99a3f648884cce->leave($__internal_afc2bd51744addc9c544a14552bd2317775690deefbb3667fd99a3f648884cce_prof);

    }

    public function getTemplateName()
    {
        return "employees/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employees</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ employee.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ employee.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Department</th>*/
/*                 <td>{{ employee.department }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('employees_edit', { 'id': employee.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
