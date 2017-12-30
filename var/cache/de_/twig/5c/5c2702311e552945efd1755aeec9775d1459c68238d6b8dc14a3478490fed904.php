<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ebd80fb490069ffbec81c7faa3fbd9975e9e7a4c46ae066cea82414bd5d78efb extends Twig_Template
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
        $__internal_06e17e08701c111c92d2529acff03f1aa49eb0ed342ba7887291005cfdb29ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e17e08701c111c92d2529acff03f1aa49eb0ed342ba7887291005cfdb29ba2->enter($__internal_06e17e08701c111c92d2529acff03f1aa49eb0ed342ba7887291005cfdb29ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_258685834438baa041734c393e103f274725629655e4ded88a7b8fe9be0fe216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258685834438baa041734c393e103f274725629655e4ded88a7b8fe9be0fe216->enter($__internal_258685834438baa041734c393e103f274725629655e4ded88a7b8fe9be0fe216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_06e17e08701c111c92d2529acff03f1aa49eb0ed342ba7887291005cfdb29ba2->leave($__internal_06e17e08701c111c92d2529acff03f1aa49eb0ed342ba7887291005cfdb29ba2_prof);

        
        $__internal_258685834438baa041734c393e103f274725629655e4ded88a7b8fe9be0fe216->leave($__internal_258685834438baa041734c393e103f274725629655e4ded88a7b8fe9be0fe216_prof);

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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
