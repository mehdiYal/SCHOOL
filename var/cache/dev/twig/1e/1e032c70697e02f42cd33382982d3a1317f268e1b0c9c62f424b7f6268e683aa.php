<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b5ebb27c52895277e7ee38c38435c4a4aa772fddbbe6af7332aa55d4ff73da1c extends Twig_Template
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
        $__internal_21420edd892325e261edaffc3d14dd2fb5150a9cf440a6277df94492917eb6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21420edd892325e261edaffc3d14dd2fb5150a9cf440a6277df94492917eb6cf->enter($__internal_21420edd892325e261edaffc3d14dd2fb5150a9cf440a6277df94492917eb6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_19f86c3e1af8f3b6066d53655256b7a54ee42869f81658591c9058b8ddf57ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f86c3e1af8f3b6066d53655256b7a54ee42869f81658591c9058b8ddf57ace->enter($__internal_19f86c3e1af8f3b6066d53655256b7a54ee42869f81658591c9058b8ddf57ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_21420edd892325e261edaffc3d14dd2fb5150a9cf440a6277df94492917eb6cf->leave($__internal_21420edd892325e261edaffc3d14dd2fb5150a9cf440a6277df94492917eb6cf_prof);

        
        $__internal_19f86c3e1af8f3b6066d53655256b7a54ee42869f81658591c9058b8ddf57ace->leave($__internal_19f86c3e1af8f3b6066d53655256b7a54ee42869f81658591c9058b8ddf57ace_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
