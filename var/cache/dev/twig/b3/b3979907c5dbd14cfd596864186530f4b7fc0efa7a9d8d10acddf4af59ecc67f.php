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
        $__internal_4bd680512f096045c58d669e3fcbf480f06309d61c8dfb715286d1f180a1a120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd680512f096045c58d669e3fcbf480f06309d61c8dfb715286d1f180a1a120->enter($__internal_4bd680512f096045c58d669e3fcbf480f06309d61c8dfb715286d1f180a1a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_33fdfbf55ef481cfe3e015973b1c81d7072e227ad434bf26c0dc1dfd8bde27b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fdfbf55ef481cfe3e015973b1c81d7072e227ad434bf26c0dc1dfd8bde27b3->enter($__internal_33fdfbf55ef481cfe3e015973b1c81d7072e227ad434bf26c0dc1dfd8bde27b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4bd680512f096045c58d669e3fcbf480f06309d61c8dfb715286d1f180a1a120->leave($__internal_4bd680512f096045c58d669e3fcbf480f06309d61c8dfb715286d1f180a1a120_prof);

        
        $__internal_33fdfbf55ef481cfe3e015973b1c81d7072e227ad434bf26c0dc1dfd8bde27b3->leave($__internal_33fdfbf55ef481cfe3e015973b1c81d7072e227ad434bf26c0dc1dfd8bde27b3_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
