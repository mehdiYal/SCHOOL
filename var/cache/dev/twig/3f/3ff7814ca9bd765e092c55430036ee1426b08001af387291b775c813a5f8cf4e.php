<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2737ae4ca8ab0b632fb1fea27043503e5c31b3a6b4894c8f53dac3b88b282023 extends Twig_Template
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
        $__internal_5ca4dd95f4749bc3898ee7ea9dd175a9e5c82a1f83025eebdf839301a9fbd474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca4dd95f4749bc3898ee7ea9dd175a9e5c82a1f83025eebdf839301a9fbd474->enter($__internal_5ca4dd95f4749bc3898ee7ea9dd175a9e5c82a1f83025eebdf839301a9fbd474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_156219ad8a498afc79c2911051f36986f612e50a021c87f23412118142d7ddf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156219ad8a498afc79c2911051f36986f612e50a021c87f23412118142d7ddf1->enter($__internal_156219ad8a498afc79c2911051f36986f612e50a021c87f23412118142d7ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5ca4dd95f4749bc3898ee7ea9dd175a9e5c82a1f83025eebdf839301a9fbd474->leave($__internal_5ca4dd95f4749bc3898ee7ea9dd175a9e5c82a1f83025eebdf839301a9fbd474_prof);

        
        $__internal_156219ad8a498afc79c2911051f36986f612e50a021c87f23412118142d7ddf1->leave($__internal_156219ad8a498afc79c2911051f36986f612e50a021c87f23412118142d7ddf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
