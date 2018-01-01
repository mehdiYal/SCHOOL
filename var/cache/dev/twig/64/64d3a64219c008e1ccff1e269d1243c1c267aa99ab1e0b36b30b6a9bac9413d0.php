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
        $__internal_53f9199d888a2c0e74c342eb39da9d6be48de63f46600ea104dc4b936cee8e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f9199d888a2c0e74c342eb39da9d6be48de63f46600ea104dc4b936cee8e3d->enter($__internal_53f9199d888a2c0e74c342eb39da9d6be48de63f46600ea104dc4b936cee8e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fe05c33c70511887bc7824bfddd091055b3d66c6aeb009275b7af810c682336d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe05c33c70511887bc7824bfddd091055b3d66c6aeb009275b7af810c682336d->enter($__internal_fe05c33c70511887bc7824bfddd091055b3d66c6aeb009275b7af810c682336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f9199d888a2c0e74c342eb39da9d6be48de63f46600ea104dc4b936cee8e3d->leave($__internal_53f9199d888a2c0e74c342eb39da9d6be48de63f46600ea104dc4b936cee8e3d_prof);

        
        $__internal_fe05c33c70511887bc7824bfddd091055b3d66c6aeb009275b7af810c682336d->leave($__internal_fe05c33c70511887bc7824bfddd091055b3d66c6aeb009275b7af810c682336d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_349d01b3d33ae60b5819c7a42692da802400767da828d3a5c21da6d3af840a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349d01b3d33ae60b5819c7a42692da802400767da828d3a5c21da6d3af840a5f->enter($__internal_349d01b3d33ae60b5819c7a42692da802400767da828d3a5c21da6d3af840a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5205624d4a6922ea695b0fe46f3379b6241f07c9d63540247301f488f4cf43dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5205624d4a6922ea695b0fe46f3379b6241f07c9d63540247301f488f4cf43dd->enter($__internal_5205624d4a6922ea695b0fe46f3379b6241f07c9d63540247301f488f4cf43dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5205624d4a6922ea695b0fe46f3379b6241f07c9d63540247301f488f4cf43dd->leave($__internal_5205624d4a6922ea695b0fe46f3379b6241f07c9d63540247301f488f4cf43dd_prof);

        
        $__internal_349d01b3d33ae60b5819c7a42692da802400767da828d3a5c21da6d3af840a5f->leave($__internal_349d01b3d33ae60b5819c7a42692da802400767da828d3a5c21da6d3af840a5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3210e213ed41b5e137c334aaa026776fc8d738656ad0ee00ee727824203de1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3210e213ed41b5e137c334aaa026776fc8d738656ad0ee00ee727824203de1b9->enter($__internal_3210e213ed41b5e137c334aaa026776fc8d738656ad0ee00ee727824203de1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f45a1a73ff889317f7c5108882b139729a22dc218745eb9861a8a96b517c14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f45a1a73ff889317f7c5108882b139729a22dc218745eb9861a8a96b517c14d->enter($__internal_3f45a1a73ff889317f7c5108882b139729a22dc218745eb9861a8a96b517c14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f45a1a73ff889317f7c5108882b139729a22dc218745eb9861a8a96b517c14d->leave($__internal_3f45a1a73ff889317f7c5108882b139729a22dc218745eb9861a8a96b517c14d_prof);

        
        $__internal_3210e213ed41b5e137c334aaa026776fc8d738656ad0ee00ee727824203de1b9->leave($__internal_3210e213ed41b5e137c334aaa026776fc8d738656ad0ee00ee727824203de1b9_prof);

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
