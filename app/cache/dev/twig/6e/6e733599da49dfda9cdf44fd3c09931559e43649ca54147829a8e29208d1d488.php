<?php

/* employees/new.html.twig */
class __TwigTemplate_a5165cddb49c335550b3b2138bbeddfb69f380d318bea9c59cc7d63254164681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employees/new.html.twig", 1);
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
        $__internal_b7f38c759dcbefed6ce7f924456d12ab53911a867a91b5ba1937a3cf32702a02 = $this->env->getExtension("native_profiler");
        $__internal_b7f38c759dcbefed6ce7f924456d12ab53911a867a91b5ba1937a3cf32702a02->enter($__internal_b7f38c759dcbefed6ce7f924456d12ab53911a867a91b5ba1937a3cf32702a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employees/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f38c759dcbefed6ce7f924456d12ab53911a867a91b5ba1937a3cf32702a02->leave($__internal_b7f38c759dcbefed6ce7f924456d12ab53911a867a91b5ba1937a3cf32702a02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ae0eb44604f077e6f03c0cd6ae76ae09d6671d80142b0515337a0c913ab4261 = $this->env->getExtension("native_profiler");
        $__internal_7ae0eb44604f077e6f03c0cd6ae76ae09d6671d80142b0515337a0c913ab4261->enter($__internal_7ae0eb44604f077e6f03c0cd6ae76ae09d6671d80142b0515337a0c913ab4261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employees creation</h1>

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
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("employees_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7ae0eb44604f077e6f03c0cd6ae76ae09d6671d80142b0515337a0c913ab4261->leave($__internal_7ae0eb44604f077e6f03c0cd6ae76ae09d6671d80142b0515337a0c913ab4261_prof);

    }

    public function getTemplateName()
    {
        return "employees/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Employees creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         */
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('employees_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
