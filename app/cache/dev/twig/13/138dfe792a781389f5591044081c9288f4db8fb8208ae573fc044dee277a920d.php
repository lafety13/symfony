<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d7a98c0de1ff00e52ac6e239e260e840820261e8fea837e2b56de3e4947aa8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee563e84f4e1a60211b2dd4509998b7121e361849da239b2a3858160b3ad27dd = $this->env->getExtension("native_profiler");
        $__internal_ee563e84f4e1a60211b2dd4509998b7121e361849da239b2a3858160b3ad27dd->enter($__internal_ee563e84f4e1a60211b2dd4509998b7121e361849da239b2a3858160b3ad27dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee563e84f4e1a60211b2dd4509998b7121e361849da239b2a3858160b3ad27dd->leave($__internal_ee563e84f4e1a60211b2dd4509998b7121e361849da239b2a3858160b3ad27dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c69d865da9b4228ccecb3b2447c10fb636f7afc3dcb7e0ea1b6cca1ddd7812d8 = $this->env->getExtension("native_profiler");
        $__internal_c69d865da9b4228ccecb3b2447c10fb636f7afc3dcb7e0ea1b6cca1ddd7812d8->enter($__internal_c69d865da9b4228ccecb3b2447c10fb636f7afc3dcb7e0ea1b6cca1ddd7812d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c69d865da9b4228ccecb3b2447c10fb636f7afc3dcb7e0ea1b6cca1ddd7812d8->leave($__internal_c69d865da9b4228ccecb3b2447c10fb636f7afc3dcb7e0ea1b6cca1ddd7812d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ade908eec3f6e15c98d145d910b36e0b43a64d3b3b20e33f01e35275ac540590 = $this->env->getExtension("native_profiler");
        $__internal_ade908eec3f6e15c98d145d910b36e0b43a64d3b3b20e33f01e35275ac540590->enter($__internal_ade908eec3f6e15c98d145d910b36e0b43a64d3b3b20e33f01e35275ac540590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ade908eec3f6e15c98d145d910b36e0b43a64d3b3b20e33f01e35275ac540590->leave($__internal_ade908eec3f6e15c98d145d910b36e0b43a64d3b3b20e33f01e35275ac540590_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_933adbfabf3f692beb0a9a6bf64302291dae8994fd80438559860bc5f5c685dc = $this->env->getExtension("native_profiler");
        $__internal_933adbfabf3f692beb0a9a6bf64302291dae8994fd80438559860bc5f5c685dc->enter($__internal_933adbfabf3f692beb0a9a6bf64302291dae8994fd80438559860bc5f5c685dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_933adbfabf3f692beb0a9a6bf64302291dae8994fd80438559860bc5f5c685dc->leave($__internal_933adbfabf3f692beb0a9a6bf64302291dae8994fd80438559860bc5f5c685dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
