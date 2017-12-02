<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5a1144d2a97ff8b5fbe77968f7bece0aa5b4ba021073dc8d44ebe2ecb7e40bbb extends Twig_Template
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
        $__internal_8b923d9751d54415370e8cb745fe1a627a81f66ae5bbb7bd8941ea72c113f265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b923d9751d54415370e8cb745fe1a627a81f66ae5bbb7bd8941ea72c113f265->enter($__internal_8b923d9751d54415370e8cb745fe1a627a81f66ae5bbb7bd8941ea72c113f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_58cd6b0b9b6c836fae3efdbe6c55a2a05b905a98a872ac87aaf72e67b0041205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cd6b0b9b6c836fae3efdbe6c55a2a05b905a98a872ac87aaf72e67b0041205->enter($__internal_58cd6b0b9b6c836fae3efdbe6c55a2a05b905a98a872ac87aaf72e67b0041205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8b923d9751d54415370e8cb745fe1a627a81f66ae5bbb7bd8941ea72c113f265->leave($__internal_8b923d9751d54415370e8cb745fe1a627a81f66ae5bbb7bd8941ea72c113f265_prof);

        
        $__internal_58cd6b0b9b6c836fae3efdbe6c55a2a05b905a98a872ac87aaf72e67b0041205->leave($__internal_58cd6b0b9b6c836fae3efdbe6c55a2a05b905a98a872ac87aaf72e67b0041205_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
