<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d5d5c9478f6a7efb4becdbcb83c5fffc9f9cce152af00565758d2bb3549e1d99 extends Twig_Template
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
        $__internal_d45b3d8ca216e230f772e7605cfb1f69216ad97a976b341cdcca16e1325fb24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45b3d8ca216e230f772e7605cfb1f69216ad97a976b341cdcca16e1325fb24d->enter($__internal_d45b3d8ca216e230f772e7605cfb1f69216ad97a976b341cdcca16e1325fb24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e36ad490d327d392386737c9ca3e3a433fc88d3b888adc104c0714b4738a28f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36ad490d327d392386737c9ca3e3a433fc88d3b888adc104c0714b4738a28f7->enter($__internal_e36ad490d327d392386737c9ca3e3a433fc88d3b888adc104c0714b4738a28f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d45b3d8ca216e230f772e7605cfb1f69216ad97a976b341cdcca16e1325fb24d->leave($__internal_d45b3d8ca216e230f772e7605cfb1f69216ad97a976b341cdcca16e1325fb24d_prof);

        
        $__internal_e36ad490d327d392386737c9ca3e3a433fc88d3b888adc104c0714b4738a28f7->leave($__internal_e36ad490d327d392386737c9ca3e3a433fc88d3b888adc104c0714b4738a28f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
