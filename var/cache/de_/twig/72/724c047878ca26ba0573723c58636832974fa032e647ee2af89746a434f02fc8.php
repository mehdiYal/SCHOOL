<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7db23306e476456e8c3112e1b4f49bfa1507ce171804d44ba2e13034c54d62bc extends Twig_Template
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
        $__internal_6b7baaa2aaef81d2b30ca741348efa30c8646819d3d9ffbd059af451064d9130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7baaa2aaef81d2b30ca741348efa30c8646819d3d9ffbd059af451064d9130->enter($__internal_6b7baaa2aaef81d2b30ca741348efa30c8646819d3d9ffbd059af451064d9130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5b4c6426095174b9680ebba90349727a3d4126c5e8f7ff0a1a04a9c68b18f2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4c6426095174b9680ebba90349727a3d4126c5e8f7ff0a1a04a9c68b18f2d9->enter($__internal_5b4c6426095174b9680ebba90349727a3d4126c5e8f7ff0a1a04a9c68b18f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6b7baaa2aaef81d2b30ca741348efa30c8646819d3d9ffbd059af451064d9130->leave($__internal_6b7baaa2aaef81d2b30ca741348efa30c8646819d3d9ffbd059af451064d9130_prof);

        
        $__internal_5b4c6426095174b9680ebba90349727a3d4126c5e8f7ff0a1a04a9c68b18f2d9->leave($__internal_5b4c6426095174b9680ebba90349727a3d4126c5e8f7ff0a1a04a9c68b18f2d9_prof);

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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
