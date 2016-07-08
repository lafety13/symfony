<?php

/* base.html.twig */
class __TwigTemplate_76690816d6d0401fad4099f0a90feada122f951ec8c1b925c4462a3599a4a1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ae40d5f00513dabde997b579618f9eba7d961f19e4cfb37b63e6b9a6353eb8 = $this->env->getExtension("native_profiler");
        $__internal_a9ae40d5f00513dabde997b579618f9eba7d961f19e4cfb37b63e6b9a6353eb8->enter($__internal_a9ae40d5f00513dabde997b579618f9eba7d961f19e4cfb37b63e6b9a6353eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a9ae40d5f00513dabde997b579618f9eba7d961f19e4cfb37b63e6b9a6353eb8->leave($__internal_a9ae40d5f00513dabde997b579618f9eba7d961f19e4cfb37b63e6b9a6353eb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c92b0f100d3ce87e21105cf8d026eaa88d9f01aab05f522b745dc76dbd7c07bd = $this->env->getExtension("native_profiler");
        $__internal_c92b0f100d3ce87e21105cf8d026eaa88d9f01aab05f522b745dc76dbd7c07bd->enter($__internal_c92b0f100d3ce87e21105cf8d026eaa88d9f01aab05f522b745dc76dbd7c07bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c92b0f100d3ce87e21105cf8d026eaa88d9f01aab05f522b745dc76dbd7c07bd->leave($__internal_c92b0f100d3ce87e21105cf8d026eaa88d9f01aab05f522b745dc76dbd7c07bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50a870d3831c24bf108f2a7f8741f5c72424235f15fd113be8d3728b05f42174 = $this->env->getExtension("native_profiler");
        $__internal_50a870d3831c24bf108f2a7f8741f5c72424235f15fd113be8d3728b05f42174->enter($__internal_50a870d3831c24bf108f2a7f8741f5c72424235f15fd113be8d3728b05f42174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_50a870d3831c24bf108f2a7f8741f5c72424235f15fd113be8d3728b05f42174->leave($__internal_50a870d3831c24bf108f2a7f8741f5c72424235f15fd113be8d3728b05f42174_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_983890fc5aaebd8490770c17d8336beb418d1a137f62b6a396556dc35bd798a2 = $this->env->getExtension("native_profiler");
        $__internal_983890fc5aaebd8490770c17d8336beb418d1a137f62b6a396556dc35bd798a2->enter($__internal_983890fc5aaebd8490770c17d8336beb418d1a137f62b6a396556dc35bd798a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_983890fc5aaebd8490770c17d8336beb418d1a137f62b6a396556dc35bd798a2->leave($__internal_983890fc5aaebd8490770c17d8336beb418d1a137f62b6a396556dc35bd798a2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f24334cf45b6c1e47feec76874621b011170104f5edefa8cdd69a67f24d28a51 = $this->env->getExtension("native_profiler");
        $__internal_f24334cf45b6c1e47feec76874621b011170104f5edefa8cdd69a67f24d28a51->enter($__internal_f24334cf45b6c1e47feec76874621b011170104f5edefa8cdd69a67f24d28a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f24334cf45b6c1e47feec76874621b011170104f5edefa8cdd69a67f24d28a51->leave($__internal_f24334cf45b6c1e47feec76874621b011170104f5edefa8cdd69a67f24d28a51_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
