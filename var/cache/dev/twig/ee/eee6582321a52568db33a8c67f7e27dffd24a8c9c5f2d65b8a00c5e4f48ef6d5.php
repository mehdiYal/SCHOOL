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
        $__internal_78393d8e04b1a2000e1a84b468df5f74d126170d23878940767f9c7a895f4cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78393d8e04b1a2000e1a84b468df5f74d126170d23878940767f9c7a895f4cac->enter($__internal_78393d8e04b1a2000e1a84b468df5f74d126170d23878940767f9c7a895f4cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bd064a5a067b054cec3028714a0071c59c8f8b00f23fc706870131a119107f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd064a5a067b054cec3028714a0071c59c8f8b00f23fc706870131a119107f8d->enter($__internal_bd064a5a067b054cec3028714a0071c59c8f8b00f23fc706870131a119107f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_78393d8e04b1a2000e1a84b468df5f74d126170d23878940767f9c7a895f4cac->leave($__internal_78393d8e04b1a2000e1a84b468df5f74d126170d23878940767f9c7a895f4cac_prof);

        
        $__internal_bd064a5a067b054cec3028714a0071c59c8f8b00f23fc706870131a119107f8d->leave($__internal_bd064a5a067b054cec3028714a0071c59c8f8b00f23fc706870131a119107f8d_prof);

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
