<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6c32ec0425395ce79e4b643c687777d80a87a2625d34e2f15aa2fc60f4970970 extends Twig_Template
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
        $__internal_51e95fbe4a1a9f837a8f2c23ee8898360892b003ac766dc462068d058967ee77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e95fbe4a1a9f837a8f2c23ee8898360892b003ac766dc462068d058967ee77->enter($__internal_51e95fbe4a1a9f837a8f2c23ee8898360892b003ac766dc462068d058967ee77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_dbb35ba857c3dc8597074f43038512b8db86874b6515c00148b5c1401de28f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb35ba857c3dc8597074f43038512b8db86874b6515c00148b5c1401de28f5c->enter($__internal_dbb35ba857c3dc8597074f43038512b8db86874b6515c00148b5c1401de28f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_51e95fbe4a1a9f837a8f2c23ee8898360892b003ac766dc462068d058967ee77->leave($__internal_51e95fbe4a1a9f837a8f2c23ee8898360892b003ac766dc462068d058967ee77_prof);

        
        $__internal_dbb35ba857c3dc8597074f43038512b8db86874b6515c00148b5c1401de28f5c->leave($__internal_dbb35ba857c3dc8597074f43038512b8db86874b6515c00148b5c1401de28f5c_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
