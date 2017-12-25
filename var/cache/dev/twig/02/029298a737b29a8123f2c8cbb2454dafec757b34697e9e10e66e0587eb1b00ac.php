<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_06bf7abd870e59d0b825b8a9b67d0560509d1c88830d6753364528aec4b616e7 extends Twig_Template
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
        $__internal_326f54697d16e1d206e6535be89992b9575e6c193fe4030c07f1801a094d8696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326f54697d16e1d206e6535be89992b9575e6c193fe4030c07f1801a094d8696->enter($__internal_326f54697d16e1d206e6535be89992b9575e6c193fe4030c07f1801a094d8696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a7e516262a4558d89506dcfd7b1e4a3e66219e531c48a01f9541c94d5836268e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e516262a4558d89506dcfd7b1e4a3e66219e531c48a01f9541c94d5836268e->enter($__internal_a7e516262a4558d89506dcfd7b1e4a3e66219e531c48a01f9541c94d5836268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_326f54697d16e1d206e6535be89992b9575e6c193fe4030c07f1801a094d8696->leave($__internal_326f54697d16e1d206e6535be89992b9575e6c193fe4030c07f1801a094d8696_prof);

        
        $__internal_a7e516262a4558d89506dcfd7b1e4a3e66219e531c48a01f9541c94d5836268e->leave($__internal_a7e516262a4558d89506dcfd7b1e4a3e66219e531c48a01f9541c94d5836268e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
