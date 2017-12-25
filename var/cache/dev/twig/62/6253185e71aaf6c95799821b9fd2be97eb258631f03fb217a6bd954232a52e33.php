<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f3c3d0fc5a33d5655144df3f8dc1784fad9668c4041b2f8a82dc4df82e3dac2a extends Twig_Template
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
        $__internal_6d5c5085c3691b93d1cf073f2a3af7850ea2e9bfe1b57391ef87d2cd14916fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5c5085c3691b93d1cf073f2a3af7850ea2e9bfe1b57391ef87d2cd14916fde->enter($__internal_6d5c5085c3691b93d1cf073f2a3af7850ea2e9bfe1b57391ef87d2cd14916fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e1e00988e8fab77a6277252195cb27b22ab3733fb3ff553aba34751ef12e07ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e00988e8fab77a6277252195cb27b22ab3733fb3ff553aba34751ef12e07ad->enter($__internal_e1e00988e8fab77a6277252195cb27b22ab3733fb3ff553aba34751ef12e07ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6d5c5085c3691b93d1cf073f2a3af7850ea2e9bfe1b57391ef87d2cd14916fde->leave($__internal_6d5c5085c3691b93d1cf073f2a3af7850ea2e9bfe1b57391ef87d2cd14916fde_prof);

        
        $__internal_e1e00988e8fab77a6277252195cb27b22ab3733fb3ff553aba34751ef12e07ad->leave($__internal_e1e00988e8fab77a6277252195cb27b22ab3733fb3ff553aba34751ef12e07ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
