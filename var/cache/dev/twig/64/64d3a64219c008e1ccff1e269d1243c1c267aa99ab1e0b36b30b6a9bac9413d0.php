<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b18724a7bd66a80f3762ada95efcb4c101b820c2264f0e821e8e1a728249daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a032d5c9ded51101258a1eda3a8600e62b9d7387d0b9344d32bfd70ced4a5a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a032d5c9ded51101258a1eda3a8600e62b9d7387d0b9344d32bfd70ced4a5a80->enter($__internal_a032d5c9ded51101258a1eda3a8600e62b9d7387d0b9344d32bfd70ced4a5a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0108d803aee7c8098cb86005a5bd838144a93f4dfe77f37da1f85f9dbf72320a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0108d803aee7c8098cb86005a5bd838144a93f4dfe77f37da1f85f9dbf72320a->enter($__internal_0108d803aee7c8098cb86005a5bd838144a93f4dfe77f37da1f85f9dbf72320a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a032d5c9ded51101258a1eda3a8600e62b9d7387d0b9344d32bfd70ced4a5a80->leave($__internal_a032d5c9ded51101258a1eda3a8600e62b9d7387d0b9344d32bfd70ced4a5a80_prof);

        
        $__internal_0108d803aee7c8098cb86005a5bd838144a93f4dfe77f37da1f85f9dbf72320a->leave($__internal_0108d803aee7c8098cb86005a5bd838144a93f4dfe77f37da1f85f9dbf72320a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b749ae02539b81b27aa13de059c848868a8321dc2d722177dbb49efcd4ee1e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b749ae02539b81b27aa13de059c848868a8321dc2d722177dbb49efcd4ee1e6c->enter($__internal_b749ae02539b81b27aa13de059c848868a8321dc2d722177dbb49efcd4ee1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea30db9b66f499491b3d554f21910e119b139aba57811031a5aeebd35cf1a57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea30db9b66f499491b3d554f21910e119b139aba57811031a5aeebd35cf1a57c->enter($__internal_ea30db9b66f499491b3d554f21910e119b139aba57811031a5aeebd35cf1a57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea30db9b66f499491b3d554f21910e119b139aba57811031a5aeebd35cf1a57c->leave($__internal_ea30db9b66f499491b3d554f21910e119b139aba57811031a5aeebd35cf1a57c_prof);

        
        $__internal_b749ae02539b81b27aa13de059c848868a8321dc2d722177dbb49efcd4ee1e6c->leave($__internal_b749ae02539b81b27aa13de059c848868a8321dc2d722177dbb49efcd4ee1e6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6ab6ec9e7e95f5973a77e6b97da1200f688ed781ace5a15a9d91c13a7f427a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6ab6ec9e7e95f5973a77e6b97da1200f688ed781ace5a15a9d91c13a7f427a->enter($__internal_1a6ab6ec9e7e95f5973a77e6b97da1200f688ed781ace5a15a9d91c13a7f427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e111b4b91da0c652d01905ebb663c9332b8c18a90e27a39499b7c58ddc3ea8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111b4b91da0c652d01905ebb663c9332b8c18a90e27a39499b7c58ddc3ea8c6->enter($__internal_e111b4b91da0c652d01905ebb663c9332b8c18a90e27a39499b7c58ddc3ea8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e111b4b91da0c652d01905ebb663c9332b8c18a90e27a39499b7c58ddc3ea8c6->leave($__internal_e111b4b91da0c652d01905ebb663c9332b8c18a90e27a39499b7c58ddc3ea8c6_prof);

        
        $__internal_1a6ab6ec9e7e95f5973a77e6b97da1200f688ed781ace5a15a9d91c13a7f427a->leave($__internal_1a6ab6ec9e7e95f5973a77e6b97da1200f688ed781ace5a15a9d91c13a7f427a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
