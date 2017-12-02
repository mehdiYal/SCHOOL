<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4431d3246a1597bbcf36746cce7b8a08e28dac04de05108f7dd2ec60749a75cd extends Twig_Template
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
        $__internal_35b614d80620ff333f68af4f81fdae06f3255ef650dd9e4e18ad68bbedafdb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b614d80620ff333f68af4f81fdae06f3255ef650dd9e4e18ad68bbedafdb21->enter($__internal_35b614d80620ff333f68af4f81fdae06f3255ef650dd9e4e18ad68bbedafdb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_aab012158f1cc62cd0ed40d79e610d4671d4b3218eb8356265283ea9aea810be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab012158f1cc62cd0ed40d79e610d4671d4b3218eb8356265283ea9aea810be->enter($__internal_aab012158f1cc62cd0ed40d79e610d4671d4b3218eb8356265283ea9aea810be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_35b614d80620ff333f68af4f81fdae06f3255ef650dd9e4e18ad68bbedafdb21->leave($__internal_35b614d80620ff333f68af4f81fdae06f3255ef650dd9e4e18ad68bbedafdb21_prof);

        
        $__internal_aab012158f1cc62cd0ed40d79e610d4671d4b3218eb8356265283ea9aea810be->leave($__internal_aab012158f1cc62cd0ed40d79e610d4671d4b3218eb8356265283ea9aea810be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
