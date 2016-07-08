<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_295f9be67fafdac01d1372b317834957de0665b195a75c886e89dae5b8c60c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4010f8ccf283efa0ebd25330ff17fb92b747fd87bbed267c39e71d1e8a15edd8 = $this->env->getExtension("native_profiler");
        $__internal_4010f8ccf283efa0ebd25330ff17fb92b747fd87bbed267c39e71d1e8a15edd8->enter($__internal_4010f8ccf283efa0ebd25330ff17fb92b747fd87bbed267c39e71d1e8a15edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4010f8ccf283efa0ebd25330ff17fb92b747fd87bbed267c39e71d1e8a15edd8->leave($__internal_4010f8ccf283efa0ebd25330ff17fb92b747fd87bbed267c39e71d1e8a15edd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65761ff6b115ab70f540404151cb81102b168fde5a86ff4fb070e7ad83814d96 = $this->env->getExtension("native_profiler");
        $__internal_65761ff6b115ab70f540404151cb81102b168fde5a86ff4fb070e7ad83814d96->enter($__internal_65761ff6b115ab70f540404151cb81102b168fde5a86ff4fb070e7ad83814d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65761ff6b115ab70f540404151cb81102b168fde5a86ff4fb070e7ad83814d96->leave($__internal_65761ff6b115ab70f540404151cb81102b168fde5a86ff4fb070e7ad83814d96_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11bef79545f2dcc5b7df9aa62f874adae3bed9dc9b209f4193442a40f4cfb063 = $this->env->getExtension("native_profiler");
        $__internal_11bef79545f2dcc5b7df9aa62f874adae3bed9dc9b209f4193442a40f4cfb063->enter($__internal_11bef79545f2dcc5b7df9aa62f874adae3bed9dc9b209f4193442a40f4cfb063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11bef79545f2dcc5b7df9aa62f874adae3bed9dc9b209f4193442a40f4cfb063->leave($__internal_11bef79545f2dcc5b7df9aa62f874adae3bed9dc9b209f4193442a40f4cfb063_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bced928f015a4d0a2f94c586a084a13e395d51a04bd30d139ba70d3849cd40a6 = $this->env->getExtension("native_profiler");
        $__internal_bced928f015a4d0a2f94c586a084a13e395d51a04bd30d139ba70d3849cd40a6->enter($__internal_bced928f015a4d0a2f94c586a084a13e395d51a04bd30d139ba70d3849cd40a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bced928f015a4d0a2f94c586a084a13e395d51a04bd30d139ba70d3849cd40a6->leave($__internal_bced928f015a4d0a2f94c586a084a13e395d51a04bd30d139ba70d3849cd40a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
