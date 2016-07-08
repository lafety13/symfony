<?php

/* department/index.html.twig */
class __TwigTemplate_c8d15fa34f74ac21a50998b79f5759f5e2223bb3a1f8e856724c89fe642d04e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "department/index.html.twig", 1);
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
        $__internal_f85aaaf535e5a95f149ef4ccc749c8d637b31fc758261a892ec127a906faf272 = $this->env->getExtension("native_profiler");
        $__internal_f85aaaf535e5a95f149ef4ccc749c8d637b31fc758261a892ec127a906faf272->enter($__internal_f85aaaf535e5a95f149ef4ccc749c8d637b31fc758261a892ec127a906faf272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85aaaf535e5a95f149ef4ccc749c8d637b31fc758261a892ec127a906faf272->leave($__internal_f85aaaf535e5a95f149ef4ccc749c8d637b31fc758261a892ec127a906faf272_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0e8ee0f21f8a60b3a14b23160823b4cbbb2f0c2fc429ef78ddf29a4bba9604 = $this->env->getExtension("native_profiler");
        $__internal_8f0e8ee0f21f8a60b3a14b23160823b4cbbb2f0c2fc429ef78ddf29a4bba9604->enter($__internal_8f0e8ee0f21f8a60b3a14b23160823b4cbbb2f0c2fc429ef78ddf29a4bba9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Department list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departmentname</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("department_show", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("department_show", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("department_edit", array("id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("department_new");
        echo "\">Create a new entry</a>
        </li>

        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("employees_index");
        echo "\">Back to the employees list</a>
        </li>
    </ul>
";
        
        $__internal_8f0e8ee0f21f8a60b3a14b23160823b4cbbb2f0c2fc429ef78ddf29a4bba9604->leave($__internal_8f0e8ee0f21f8a60b3a14b23160823b4cbbb2f0c2fc429ef78ddf29a4bba9604_prof);

    }

    public function getTemplateName()
    {
        return "department/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Department list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Departmentname</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for department in departments %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('department_show', { 'id': department.id }) }}">{{ department.id }}</a></td>*/
/*                 <td>{{ department.departmentName }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('department_show', { 'id': department.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('department_edit', { 'id': department.id }) }}">edit</a>*/
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
/*             <a href="{{ path('department_new') }}">Create a new entry</a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the employees list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
