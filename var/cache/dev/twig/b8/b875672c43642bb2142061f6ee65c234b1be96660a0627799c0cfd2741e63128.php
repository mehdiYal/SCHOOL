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
        $__internal_cda8e1a3bd12bae2b16e0d3dc836faa5850b7dea378f4e08b15d04de35bc4fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda8e1a3bd12bae2b16e0d3dc836faa5850b7dea378f4e08b15d04de35bc4fe1->enter($__internal_cda8e1a3bd12bae2b16e0d3dc836faa5850b7dea378f4e08b15d04de35bc4fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c6707f4428dd4300811c1fc5e9a46b4fe4519052bd0d5f582155bafcc81d806b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6707f4428dd4300811c1fc5e9a46b4fe4519052bd0d5f582155bafcc81d806b->enter($__internal_c6707f4428dd4300811c1fc5e9a46b4fe4519052bd0d5f582155bafcc81d806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cda8e1a3bd12bae2b16e0d3dc836faa5850b7dea378f4e08b15d04de35bc4fe1->leave($__internal_cda8e1a3bd12bae2b16e0d3dc836faa5850b7dea378f4e08b15d04de35bc4fe1_prof);

        
        $__internal_c6707f4428dd4300811c1fc5e9a46b4fe4519052bd0d5f582155bafcc81d806b->leave($__internal_c6707f4428dd4300811c1fc5e9a46b4fe4519052bd0d5f582155bafcc81d806b_prof);

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
