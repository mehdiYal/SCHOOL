<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d22126f7a9171352b0754978fad4dfc3fb81db35d5a32cafca6ef1b0e72b5314 extends Twig_Template
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
        $__internal_9c9aa66e91d2cb901345df4696479783464c8af3e04822fb6523ffca44dd3b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9aa66e91d2cb901345df4696479783464c8af3e04822fb6523ffca44dd3b08->enter($__internal_9c9aa66e91d2cb901345df4696479783464c8af3e04822fb6523ffca44dd3b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_46c99ebedcfad7c2f96da8788949fd72623c57e63b2a213373f29fdd21f1a234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c99ebedcfad7c2f96da8788949fd72623c57e63b2a213373f29fdd21f1a234->enter($__internal_46c99ebedcfad7c2f96da8788949fd72623c57e63b2a213373f29fdd21f1a234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9c9aa66e91d2cb901345df4696479783464c8af3e04822fb6523ffca44dd3b08->leave($__internal_9c9aa66e91d2cb901345df4696479783464c8af3e04822fb6523ffca44dd3b08_prof);

        
        $__internal_46c99ebedcfad7c2f96da8788949fd72623c57e63b2a213373f29fdd21f1a234->leave($__internal_46c99ebedcfad7c2f96da8788949fd72623c57e63b2a213373f29fdd21f1a234_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
