<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6e7fb93bff51e6baa11d62ccea3b68e24eec4e6aebfc95977c815413b8122190 extends Twig_Template
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
        $__internal_81aaf28d2ee231ad2b847ee70c5aa104783db1fb0fe47f2e91a825d2f6698b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81aaf28d2ee231ad2b847ee70c5aa104783db1fb0fe47f2e91a825d2f6698b32->enter($__internal_81aaf28d2ee231ad2b847ee70c5aa104783db1fb0fe47f2e91a825d2f6698b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_04a4b28f91eb48719441f2c20ff5cf8654fedbb065c5da5ff6f38288f0694659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a4b28f91eb48719441f2c20ff5cf8654fedbb065c5da5ff6f38288f0694659->enter($__internal_04a4b28f91eb48719441f2c20ff5cf8654fedbb065c5da5ff6f38288f0694659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81aaf28d2ee231ad2b847ee70c5aa104783db1fb0fe47f2e91a825d2f6698b32->leave($__internal_81aaf28d2ee231ad2b847ee70c5aa104783db1fb0fe47f2e91a825d2f6698b32_prof);

        
        $__internal_04a4b28f91eb48719441f2c20ff5cf8654fedbb065c5da5ff6f38288f0694659->leave($__internal_04a4b28f91eb48719441f2c20ff5cf8654fedbb065c5da5ff6f38288f0694659_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
