<?php

/* employees/edit.html.twig */
class __TwigTemplate_cb40bf43df570e3b40dedc015a2b58ca1465a30dc19d88ed26245ab8d2963f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employees/edit.html.twig", 1);
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
        $__internal_cf4f928a4706f47bcc1e22fcbec1f5c66c3b087ae3783054e2d3965fffcb44c3 = $this->env->getExtension("native_profiler");
        $__internal_cf4f928a4706f47bcc1e22fcbec1f5c66c3b087ae3783054e2d3965fffcb44c3->enter($__internal_cf4f928a4706f47bcc1e22fcbec1f5c66c3b087ae3783054e2d3965fffcb44c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employees/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf4f928a4706f47bcc1e22fcbec1f5c66c3b087ae3783054e2d3965fffcb44c3->leave($__internal_cf4f928a4706f47bcc1e22fcbec1f5c66c3b087ae3783054e2d3965fffcb44c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_487edf0e4df8ee2e373132f26e9577450accb3de6b69b670237fd644121f0f23 = $this->env->getExtension("native_profiler");
        $__internal_487edf0e4df8ee2e373132f26e9577450accb3de6b69b670237fd644121f0f23->enter($__internal_487edf0e4df8ee2e373132f26e9577450accb3de6b69b670237fd644121f0f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employees edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("employees_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_487edf0e4df8ee2e373132f26e9577450accb3de6b69b670237fd644121f0f23->leave($__internal_487edf0e4df8ee2e373132f26e9577450accb3de6b69b670237fd644121f0f23_prof);

    }

    public function getTemplateName()
    {
        return "employees/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employees edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
