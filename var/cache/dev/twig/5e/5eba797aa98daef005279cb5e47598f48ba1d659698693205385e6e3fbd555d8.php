<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_11922dd79145dbeff8613106a1523ddafa24cd3f1922420a983e1e104ec71037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d244d0d8f84bee89d7a44a50c636df75fb80f2145eeeb4eb5445e95d7c4791a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d244d0d8f84bee89d7a44a50c636df75fb80f2145eeeb4eb5445e95d7c4791a4->enter($__internal_d244d0d8f84bee89d7a44a50c636df75fb80f2145eeeb4eb5445e95d7c4791a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b357f41f7f3a1c739b23461e70b24316704f98e4c9a1e2a6d79861a79087b3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b357f41f7f3a1c739b23461e70b24316704f98e4c9a1e2a6d79861a79087b3cb->enter($__internal_b357f41f7f3a1c739b23461e70b24316704f98e4c9a1e2a6d79861a79087b3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d244d0d8f84bee89d7a44a50c636df75fb80f2145eeeb4eb5445e95d7c4791a4->leave($__internal_d244d0d8f84bee89d7a44a50c636df75fb80f2145eeeb4eb5445e95d7c4791a4_prof);

        
        $__internal_b357f41f7f3a1c739b23461e70b24316704f98e4c9a1e2a6d79861a79087b3cb->leave($__internal_b357f41f7f3a1c739b23461e70b24316704f98e4c9a1e2a6d79861a79087b3cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
