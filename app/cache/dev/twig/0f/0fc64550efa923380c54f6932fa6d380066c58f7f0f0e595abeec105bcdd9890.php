<?php

/* department/new.html.twig */
class __TwigTemplate_046544815e655fd5c565c39b7d01c6051d44f4456682f55779b86c5f818327f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "department/new.html.twig", 1);
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
        $__internal_4e49450c78634b4e154cf5422c0fb9f24d910266007fd283cb1b2908a188c0b6 = $this->env->getExtension("native_profiler");
        $__internal_4e49450c78634b4e154cf5422c0fb9f24d910266007fd283cb1b2908a188c0b6->enter($__internal_4e49450c78634b4e154cf5422c0fb9f24d910266007fd283cb1b2908a188c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e49450c78634b4e154cf5422c0fb9f24d910266007fd283cb1b2908a188c0b6->leave($__internal_4e49450c78634b4e154cf5422c0fb9f24d910266007fd283cb1b2908a188c0b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68895ab5ec2c6cea31491d7be31a73923b36eeed47b63b1ac250ba939f4ef93a = $this->env->getExtension("native_profiler");
        $__internal_68895ab5ec2c6cea31491d7be31a73923b36eeed47b63b1ac250ba939f4ef93a->enter($__internal_68895ab5ec2c6cea31491d7be31a73923b36eeed47b63b1ac250ba939f4ef93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Department creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
    </ul>
";
        
        $__internal_68895ab5ec2c6cea31491d7be31a73923b36eeed47b63b1ac250ba939f4ef93a->leave($__internal_68895ab5ec2c6cea31491d7be31a73923b36eeed47b63b1ac250ba939f4ef93a_prof);

    }

    public function getTemplateName()
    {
        return "department/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Department creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('department_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the employees list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
