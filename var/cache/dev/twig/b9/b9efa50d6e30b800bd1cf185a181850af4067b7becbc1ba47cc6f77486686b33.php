<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_69985cf482752280b1e5aea3393b9b7e9721d66d33c11882fedd1dfc0127a4bf extends Twig_Template
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
        $__internal_a5261c82a31047db12bd23ce5a0f53a5cc41d535be3839faafa3aef0ce4fefa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5261c82a31047db12bd23ce5a0f53a5cc41d535be3839faafa3aef0ce4fefa5->enter($__internal_a5261c82a31047db12bd23ce5a0f53a5cc41d535be3839faafa3aef0ce4fefa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_80380d48e74472bab8f7ab3c275abb37120d20f5772be00fb95cd9cfb534c034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80380d48e74472bab8f7ab3c275abb37120d20f5772be00fb95cd9cfb534c034->enter($__internal_80380d48e74472bab8f7ab3c275abb37120d20f5772be00fb95cd9cfb534c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_a5261c82a31047db12bd23ce5a0f53a5cc41d535be3839faafa3aef0ce4fefa5->leave($__internal_a5261c82a31047db12bd23ce5a0f53a5cc41d535be3839faafa3aef0ce4fefa5_prof);

        
        $__internal_80380d48e74472bab8f7ab3c275abb37120d20f5772be00fb95cd9cfb534c034->leave($__internal_80380d48e74472bab8f7ab3c275abb37120d20f5772be00fb95cd9cfb534c034_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
