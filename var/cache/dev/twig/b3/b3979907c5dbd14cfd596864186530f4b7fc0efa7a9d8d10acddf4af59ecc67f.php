<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c82e0f923a09d5d74bde703d6cb581b8b05c5024446be4bfe71c85f42b0edf66 extends Twig_Template
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
        $__internal_a651a682fae0996a20fa2a9ed635e163520fae020b65ca7e711293f13c979b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a651a682fae0996a20fa2a9ed635e163520fae020b65ca7e711293f13c979b73->enter($__internal_a651a682fae0996a20fa2a9ed635e163520fae020b65ca7e711293f13c979b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6b738b4dfa72f6d3461f9fe1d352a948f49b25ddeac0c95c0679a5fea87a8a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b738b4dfa72f6d3461f9fe1d352a948f49b25ddeac0c95c0679a5fea87a8a79->enter($__internal_6b738b4dfa72f6d3461f9fe1d352a948f49b25ddeac0c95c0679a5fea87a8a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a651a682fae0996a20fa2a9ed635e163520fae020b65ca7e711293f13c979b73->leave($__internal_a651a682fae0996a20fa2a9ed635e163520fae020b65ca7e711293f13c979b73_prof);

        
        $__internal_6b738b4dfa72f6d3461f9fe1d352a948f49b25ddeac0c95c0679a5fea87a8a79->leave($__internal_6b738b4dfa72f6d3461f9fe1d352a948f49b25ddeac0c95c0679a5fea87a8a79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
