<?php

/* department/show.html.twig */
class __TwigTemplate_3a5665ef6209d65cb610ddc9b74e347fcd47b61874b51621d5dfce688ae1c261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "department/show.html.twig", 1);
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
        $__internal_78479f3e90cb1cff18efc9a49b7558849d6da9f456b95bb2599a881416acdbd8 = $this->env->getExtension("native_profiler");
        $__internal_78479f3e90cb1cff18efc9a49b7558849d6da9f456b95bb2599a881416acdbd8->enter($__internal_78479f3e90cb1cff18efc9a49b7558849d6da9f456b95bb2599a881416acdbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78479f3e90cb1cff18efc9a49b7558849d6da9f456b95bb2599a881416acdbd8->leave($__internal_78479f3e90cb1cff18efc9a49b7558849d6da9f456b95bb2599a881416acdbd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20754c98aed2029066d34f7458d938bf6efa0d0943575dc3e3772b08844e7875 = $this->env->getExtension("native_profiler");
        $__internal_20754c98aed2029066d34f7458d938bf6efa0d0943575dc3e3772b08844e7875->enter($__internal_20754c98aed2029066d34f7458d938bf6efa0d0943575dc3e3772b08844e7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Department</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departmentname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("department_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("department_edit", array("id" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_20754c98aed2029066d34f7458d938bf6efa0d0943575dc3e3772b08844e7875->leave($__internal_20754c98aed2029066d34f7458d938bf6efa0d0943575dc3e3772b08844e7875_prof);

    }

    public function getTemplateName()
    {
        return "department/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Department</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ department.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Departmentname</th>*/
/*                 <td>{{ department.departmentName }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('department_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('department_edit', { 'id': department.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
