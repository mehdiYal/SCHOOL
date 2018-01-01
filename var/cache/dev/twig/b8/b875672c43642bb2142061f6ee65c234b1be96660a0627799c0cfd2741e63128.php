<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_10df24904e4df5d497ffc02e13627d43f17f5225b3ff6ca90b5ff5e3cc14b5a5 extends Twig_Template
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
        $__internal_3c42be74a1df775a3ee648bc1c7f02b0ac43b3ca4619be1f7c67da53261784c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c42be74a1df775a3ee648bc1c7f02b0ac43b3ca4619be1f7c67da53261784c3->enter($__internal_3c42be74a1df775a3ee648bc1c7f02b0ac43b3ca4619be1f7c67da53261784c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ca62ea918818cc95e2b471009d48ccf1a0207a1e7be0640c1f5b3cf97dce9370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca62ea918818cc95e2b471009d48ccf1a0207a1e7be0640c1f5b3cf97dce9370->enter($__internal_ca62ea918818cc95e2b471009d48ccf1a0207a1e7be0640c1f5b3cf97dce9370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3c42be74a1df775a3ee648bc1c7f02b0ac43b3ca4619be1f7c67da53261784c3->leave($__internal_3c42be74a1df775a3ee648bc1c7f02b0ac43b3ca4619be1f7c67da53261784c3_prof);

        
        $__internal_ca62ea918818cc95e2b471009d48ccf1a0207a1e7be0640c1f5b3cf97dce9370->leave($__internal_ca62ea918818cc95e2b471009d48ccf1a0207a1e7be0640c1f5b3cf97dce9370_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
