<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_4cc9a5f08f57a560c59a2ff0dba9b861e585d9fe882cd5fbd3e53cace86b3eff extends Twig_Template
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
        $__internal_f298ded21e4404388f2f6cf17985dd18a816a8f8615dfb6e9d44a9fd0b221104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f298ded21e4404388f2f6cf17985dd18a816a8f8615dfb6e9d44a9fd0b221104->enter($__internal_f298ded21e4404388f2f6cf17985dd18a816a8f8615dfb6e9d44a9fd0b221104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_187cba31bd2ce455ece794d47acb3ea3686f7be6258715ac465caba935630443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187cba31bd2ce455ece794d47acb3ea3686f7be6258715ac465caba935630443->enter($__internal_187cba31bd2ce455ece794d47acb3ea3686f7be6258715ac465caba935630443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f298ded21e4404388f2f6cf17985dd18a816a8f8615dfb6e9d44a9fd0b221104->leave($__internal_f298ded21e4404388f2f6cf17985dd18a816a8f8615dfb6e9d44a9fd0b221104_prof);

        
        $__internal_187cba31bd2ce455ece794d47acb3ea3686f7be6258715ac465caba935630443->leave($__internal_187cba31bd2ce455ece794d47acb3ea3686f7be6258715ac465caba935630443_prof);

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
