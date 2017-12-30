<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6da40b69ef3e8127699aeec6a9ef3fe29c45ff44dcedf6e961be438ab8f3dfa2 extends Twig_Template
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
        $__internal_665d6e97d19b0549e8b13f2c0de804cbffb4a43eac17d94c2da6b546b50a0990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d6e97d19b0549e8b13f2c0de804cbffb4a43eac17d94c2da6b546b50a0990->enter($__internal_665d6e97d19b0549e8b13f2c0de804cbffb4a43eac17d94c2da6b546b50a0990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cbfa1d921cf5206e62bf52f495542b009b76d69a9ffb14c1a7a2b12d67e46d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfa1d921cf5206e62bf52f495542b009b76d69a9ffb14c1a7a2b12d67e46d30->enter($__internal_cbfa1d921cf5206e62bf52f495542b009b76d69a9ffb14c1a7a2b12d67e46d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_665d6e97d19b0549e8b13f2c0de804cbffb4a43eac17d94c2da6b546b50a0990->leave($__internal_665d6e97d19b0549e8b13f2c0de804cbffb4a43eac17d94c2da6b546b50a0990_prof);

        
        $__internal_cbfa1d921cf5206e62bf52f495542b009b76d69a9ffb14c1a7a2b12d67e46d30->leave($__internal_cbfa1d921cf5206e62bf52f495542b009b76d69a9ffb14c1a7a2b12d67e46d30_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
