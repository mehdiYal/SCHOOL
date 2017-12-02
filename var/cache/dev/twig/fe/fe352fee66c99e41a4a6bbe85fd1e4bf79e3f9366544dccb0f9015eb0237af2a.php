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
        $__internal_95e2c3d735b39082bedd0c94a76ebe00d190ebe7deb43e082498cd4cfa7408bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e2c3d735b39082bedd0c94a76ebe00d190ebe7deb43e082498cd4cfa7408bb->enter($__internal_95e2c3d735b39082bedd0c94a76ebe00d190ebe7deb43e082498cd4cfa7408bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_643aaa7a085c6d518b483270df7328c97ba4aae11b86e6a0a2210f27956d1cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643aaa7a085c6d518b483270df7328c97ba4aae11b86e6a0a2210f27956d1cab->enter($__internal_643aaa7a085c6d518b483270df7328c97ba4aae11b86e6a0a2210f27956d1cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_95e2c3d735b39082bedd0c94a76ebe00d190ebe7deb43e082498cd4cfa7408bb->leave($__internal_95e2c3d735b39082bedd0c94a76ebe00d190ebe7deb43e082498cd4cfa7408bb_prof);

        
        $__internal_643aaa7a085c6d518b483270df7328c97ba4aae11b86e6a0a2210f27956d1cab->leave($__internal_643aaa7a085c6d518b483270df7328c97ba4aae11b86e6a0a2210f27956d1cab_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
