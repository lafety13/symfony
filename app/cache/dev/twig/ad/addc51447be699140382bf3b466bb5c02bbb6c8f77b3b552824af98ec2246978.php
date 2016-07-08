<?php

/* department/edit.html.twig */
class __TwigTemplate_7f1256635669bd4af31b4e03f2801ab9eeca5f4865a8a1a4e61046332e3668f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "department/edit.html.twig", 1);
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
        $__internal_a1621829e45eec60afe804c91fe387f028b7008428dcffb81aa02709db7f5df1 = $this->env->getExtension("native_profiler");
        $__internal_a1621829e45eec60afe804c91fe387f028b7008428dcffb81aa02709db7f5df1->enter($__internal_a1621829e45eec60afe804c91fe387f028b7008428dcffb81aa02709db7f5df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1621829e45eec60afe804c91fe387f028b7008428dcffb81aa02709db7f5df1->leave($__internal_a1621829e45eec60afe804c91fe387f028b7008428dcffb81aa02709db7f5df1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bae0cddb96f4354f6ed9c3643e7d3824fa442e7dbf06ab66f1351a334ed7a07b = $this->env->getExtension("native_profiler");
        $__internal_bae0cddb96f4354f6ed9c3643e7d3824fa442e7dbf06ab66f1351a334ed7a07b->enter($__internal_bae0cddb96f4354f6ed9c3643e7d3824fa442e7dbf06ab66f1351a334ed7a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Department edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("department_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("employees_index");
        echo "\">Back to the employees list</a>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bae0cddb96f4354f6ed9c3643e7d3824fa442e7dbf06ab66f1351a334ed7a07b->leave($__internal_bae0cddb96f4354f6ed9c3643e7d3824fa442e7dbf06ab66f1351a334ed7a07b_prof);

    }

    public function getTemplateName()
    {
        return "department/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  72 => 19,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Department edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('department_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the employees list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
