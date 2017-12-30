<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_648150bd7d4db9ac28ecc8d8d09dc91a2a491d51531eef203819d2f487116675 extends Twig_Template
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
        $__internal_9095818cabc1690883e2f8c72930826f1e65b8e74fb3de07fe3fb9c261d878fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9095818cabc1690883e2f8c72930826f1e65b8e74fb3de07fe3fb9c261d878fb->enter($__internal_9095818cabc1690883e2f8c72930826f1e65b8e74fb3de07fe3fb9c261d878fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_13a37f7adf844e01404d0b09747d7dfc4c210b62aa78b6f2f90bf5c7f8b336e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a37f7adf844e01404d0b09747d7dfc4c210b62aa78b6f2f90bf5c7f8b336e2->enter($__internal_13a37f7adf844e01404d0b09747d7dfc4c210b62aa78b6f2f90bf5c7f8b336e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_9095818cabc1690883e2f8c72930826f1e65b8e74fb3de07fe3fb9c261d878fb->leave($__internal_9095818cabc1690883e2f8c72930826f1e65b8e74fb3de07fe3fb9c261d878fb_prof);

        
        $__internal_13a37f7adf844e01404d0b09747d7dfc4c210b62aa78b6f2f90bf5c7f8b336e2->leave($__internal_13a37f7adf844e01404d0b09747d7dfc4c210b62aa78b6f2f90bf5c7f8b336e2_prof);

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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
