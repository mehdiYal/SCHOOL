<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe6b53e5eec613050f162a9691fd7dfc714f7e828fef0245e71f9a36a6886608 extends Twig_Template
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
        $__internal_1503fb507e165e295e005f6ac18241762ba4e457b9afb7cfb9e9a719c764a94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1503fb507e165e295e005f6ac18241762ba4e457b9afb7cfb9e9a719c764a94b->enter($__internal_1503fb507e165e295e005f6ac18241762ba4e457b9afb7cfb9e9a719c764a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8c7bf3e3a0f27d9c9a026071e8e87008b8f9ee5d3185a2eb5e4032cf1d84c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7bf3e3a0f27d9c9a026071e8e87008b8f9ee5d3185a2eb5e4032cf1d84c5d6->enter($__internal_8c7bf3e3a0f27d9c9a026071e8e87008b8f9ee5d3185a2eb5e4032cf1d84c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1503fb507e165e295e005f6ac18241762ba4e457b9afb7cfb9e9a719c764a94b->leave($__internal_1503fb507e165e295e005f6ac18241762ba4e457b9afb7cfb9e9a719c764a94b_prof);

        
        $__internal_8c7bf3e3a0f27d9c9a026071e8e87008b8f9ee5d3185a2eb5e4032cf1d84c5d6->leave($__internal_8c7bf3e3a0f27d9c9a026071e8e87008b8f9ee5d3185a2eb5e4032cf1d84c5d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
