<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4decaa62a9fefffa420466d6a7f1709cfd04be56ba8ed2274454b877b9305815 extends Twig_Template
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
        $__internal_f1a2eed250a5a0e64b997c0796ffe43facc85f67fb9d6e5adf4db985b3d424b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a2eed250a5a0e64b997c0796ffe43facc85f67fb9d6e5adf4db985b3d424b0->enter($__internal_f1a2eed250a5a0e64b997c0796ffe43facc85f67fb9d6e5adf4db985b3d424b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3359602d85e6df165e7ada1d72b83e85d7482bcd1ef051cab25730c9b0123619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3359602d85e6df165e7ada1d72b83e85d7482bcd1ef051cab25730c9b0123619->enter($__internal_3359602d85e6df165e7ada1d72b83e85d7482bcd1ef051cab25730c9b0123619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f1a2eed250a5a0e64b997c0796ffe43facc85f67fb9d6e5adf4db985b3d424b0->leave($__internal_f1a2eed250a5a0e64b997c0796ffe43facc85f67fb9d6e5adf4db985b3d424b0_prof);

        
        $__internal_3359602d85e6df165e7ada1d72b83e85d7482bcd1ef051cab25730c9b0123619->leave($__internal_3359602d85e6df165e7ada1d72b83e85d7482bcd1ef051cab25730c9b0123619_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
