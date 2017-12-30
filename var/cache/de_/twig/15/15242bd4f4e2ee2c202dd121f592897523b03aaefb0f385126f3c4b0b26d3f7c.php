<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_33cefba101fff7546595d26c0ac4676f45dc880d6a66d788dead53c57684fee3 extends Twig_Template
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
        $__internal_469eb83d23ec9fb97f58df8955bd4f6b22f2c409830ac882d7fed93eaf9d9993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469eb83d23ec9fb97f58df8955bd4f6b22f2c409830ac882d7fed93eaf9d9993->enter($__internal_469eb83d23ec9fb97f58df8955bd4f6b22f2c409830ac882d7fed93eaf9d9993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_60b8b82b847217fa8f14ef7fbfdb55d67851bc9f47b33e206a25b557880088aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b8b82b847217fa8f14ef7fbfdb55d67851bc9f47b33e206a25b557880088aa->enter($__internal_60b8b82b847217fa8f14ef7fbfdb55d67851bc9f47b33e206a25b557880088aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_469eb83d23ec9fb97f58df8955bd4f6b22f2c409830ac882d7fed93eaf9d9993->leave($__internal_469eb83d23ec9fb97f58df8955bd4f6b22f2c409830ac882d7fed93eaf9d9993_prof);

        
        $__internal_60b8b82b847217fa8f14ef7fbfdb55d67851bc9f47b33e206a25b557880088aa->leave($__internal_60b8b82b847217fa8f14ef7fbfdb55d67851bc9f47b33e206a25b557880088aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
