<?php

/* employees/index.html.twig */
class __TwigTemplate_3e1d0bf8cac5ff3bc1926fb3d6d6c551a7f36bca18f36f610651a3656380c520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employees/index.html.twig", 1);
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
        $__internal_2dbbbb1111e392bfd9a1c49c577ee18e50febb6beb88c84c5b4d11c231b00f63 = $this->env->getExtension("native_profiler");
        $__internal_2dbbbb1111e392bfd9a1c49c577ee18e50febb6beb88c84c5b4d11c231b00f63->enter($__internal_2dbbbb1111e392bfd9a1c49c577ee18e50febb6beb88c84c5b4d11c231b00f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employees/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dbbbb1111e392bfd9a1c49c577ee18e50febb6beb88c84c5b4d11c231b00f63->leave($__internal_2dbbbb1111e392bfd9a1c49c577ee18e50febb6beb88c84c5b4d11c231b00f63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0216b49d4ac664f0e9c3f2e79fc79a619ec96278b867b86a98413da67879c93f = $this->env->getExtension("native_profiler");
        $__internal_0216b49d4ac664f0e9c3f2e79fc79a619ec96278b867b86a98413da67879c93f->enter($__internal_0216b49d4ac664f0e9c3f2e79fc79a619ec96278b867b86a98413da67879c93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employees list</h1>

 ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        
        <input type=\"submit\" value=\"Go\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <table .table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employees_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "department", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employees_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employees_edit", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("employees_new");
        echo "\">Create a new employee</a>
        </li>

        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("department_new");
        echo "\">Create a new department</a>
        </li>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("department_index");
        echo "\">All departments</a>
        </li>
    </ul>
";
        
        $__internal_0216b49d4ac664f0e9c3f2e79fc79a619ec96278b867b86a98413da67879c93f->leave($__internal_0216b49d4ac664f0e9c3f2e79fc79a619ec96278b867b86a98413da67879c93f_prof);

    }

    public function getTemplateName()
    {
        return "employees/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 51,  125 => 48,  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employees list</h1>*/
/* */
/*  {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         */
/*         <input type="submit" value="Go" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <table .table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Department</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('employees_show', { 'id': employee.id }) }}">{{ employee.id }}</a></td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.department }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('employees_show', { 'id': employee.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('employees_edit', { 'id': employee.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employees_new') }}">Create a new employee</a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <a href="{{ path('department_new') }}">Create a new department</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('department_index') }}">All departments</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
