<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_01fcf8439629a320e7b6094992bb61645e58e75e93f0b6cf94c79292856b8bcb extends Twig_Template
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
        $__internal_352d92d8a63c56efbb555fe0fdeb58fc3d3029d7b72b5ec1ecd0c3e26a33e096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352d92d8a63c56efbb555fe0fdeb58fc3d3029d7b72b5ec1ecd0c3e26a33e096->enter($__internal_352d92d8a63c56efbb555fe0fdeb58fc3d3029d7b72b5ec1ecd0c3e26a33e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_745ed412d43eb9ee4be06607f2bf215908be092bdb1232e04b02890fa00c9995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745ed412d43eb9ee4be06607f2bf215908be092bdb1232e04b02890fa00c9995->enter($__internal_745ed412d43eb9ee4be06607f2bf215908be092bdb1232e04b02890fa00c9995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_352d92d8a63c56efbb555fe0fdeb58fc3d3029d7b72b5ec1ecd0c3e26a33e096->leave($__internal_352d92d8a63c56efbb555fe0fdeb58fc3d3029d7b72b5ec1ecd0c3e26a33e096_prof);

        
        $__internal_745ed412d43eb9ee4be06607f2bf215908be092bdb1232e04b02890fa00c9995->leave($__internal_745ed412d43eb9ee4be06607f2bf215908be092bdb1232e04b02890fa00c9995_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
