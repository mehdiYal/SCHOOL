<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_3e6b989d49b30f5a61e1db7f9287ccca3c72c0085646a194ddb439ee495ca6d0 extends Twig_Template
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
        $__internal_8d4c3c715682ab2d78a49049fa4a99ee1baccc6606766737421ff67538936dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4c3c715682ab2d78a49049fa4a99ee1baccc6606766737421ff67538936dee->enter($__internal_8d4c3c715682ab2d78a49049fa4a99ee1baccc6606766737421ff67538936dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_62817e631c157ed2cdd7f87fb177a546cf2075c1d165442eab5c1110f1b1f44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62817e631c157ed2cdd7f87fb177a546cf2075c1d165442eab5c1110f1b1f44b->enter($__internal_62817e631c157ed2cdd7f87fb177a546cf2075c1d165442eab5c1110f1b1f44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter(($context["block_attrs"] ?? $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_8d4c3c715682ab2d78a49049fa4a99ee1baccc6606766737421ff67538936dee->leave($__internal_8d4c3c715682ab2d78a49049fa4a99ee1baccc6606766737421ff67538936dee_prof);

        
        $__internal_62817e631c157ed2cdd7f87fb177a546cf2075c1d165442eab5c1110f1b1f44b->leave($__internal_62817e631c157ed2cdd7f87fb177a546cf2075c1d165442eab5c1110f1b1f44b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
