<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8cf049e3351fe2a0712839082621756ef2a7800320a10efe50d9c85c82adc3ce extends Twig_Template
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
        $__internal_1debda33d22d6f18f97eef38cbbb444fc04204a494f131ef9651b7f6d0de3130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1debda33d22d6f18f97eef38cbbb444fc04204a494f131ef9651b7f6d0de3130->enter($__internal_1debda33d22d6f18f97eef38cbbb444fc04204a494f131ef9651b7f6d0de3130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_625cb3ceb9bc1cf56491a9f21f2a46d045cc2073294961cf730e8ba045401b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625cb3ceb9bc1cf56491a9f21f2a46d045cc2073294961cf730e8ba045401b2d->enter($__internal_625cb3ceb9bc1cf56491a9f21f2a46d045cc2073294961cf730e8ba045401b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_1debda33d22d6f18f97eef38cbbb444fc04204a494f131ef9651b7f6d0de3130->leave($__internal_1debda33d22d6f18f97eef38cbbb444fc04204a494f131ef9651b7f6d0de3130_prof);

        
        $__internal_625cb3ceb9bc1cf56491a9f21f2a46d045cc2073294961cf730e8ba045401b2d->leave($__internal_625cb3ceb9bc1cf56491a9f21f2a46d045cc2073294961cf730e8ba045401b2d_prof);

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
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
