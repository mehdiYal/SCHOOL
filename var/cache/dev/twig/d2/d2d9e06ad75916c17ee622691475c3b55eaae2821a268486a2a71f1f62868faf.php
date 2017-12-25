<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50ea67d55dced3980592c1572bc2132c358eb49690258d0539852eaa9d720dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ea67d55dced3980592c1572bc2132c358eb49690258d0539852eaa9d720dbe->enter($__internal_50ea67d55dced3980592c1572bc2132c358eb49690258d0539852eaa9d720dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_760780de8c5bbd4f360dc9a1dad624cafb32b11e69bde4f0f6b3378c18248a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760780de8c5bbd4f360dc9a1dad624cafb32b11e69bde4f0f6b3378c18248a77->enter($__internal_760780de8c5bbd4f360dc9a1dad624cafb32b11e69bde4f0f6b3378c18248a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ea67d55dced3980592c1572bc2132c358eb49690258d0539852eaa9d720dbe->leave($__internal_50ea67d55dced3980592c1572bc2132c358eb49690258d0539852eaa9d720dbe_prof);

        
        $__internal_760780de8c5bbd4f360dc9a1dad624cafb32b11e69bde4f0f6b3378c18248a77->leave($__internal_760780de8c5bbd4f360dc9a1dad624cafb32b11e69bde4f0f6b3378c18248a77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8706a47c80acb2f5cb3138777dd9d82d246536a24c534317079dd509900628bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8706a47c80acb2f5cb3138777dd9d82d246536a24c534317079dd509900628bf->enter($__internal_8706a47c80acb2f5cb3138777dd9d82d246536a24c534317079dd509900628bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df670ff5eac0615f9eec7f5820848a84c55cd935c71821fb82c0e07dfe6545c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df670ff5eac0615f9eec7f5820848a84c55cd935c71821fb82c0e07dfe6545c6->enter($__internal_df670ff5eac0615f9eec7f5820848a84c55cd935c71821fb82c0e07dfe6545c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df670ff5eac0615f9eec7f5820848a84c55cd935c71821fb82c0e07dfe6545c6->leave($__internal_df670ff5eac0615f9eec7f5820848a84c55cd935c71821fb82c0e07dfe6545c6_prof);

        
        $__internal_8706a47c80acb2f5cb3138777dd9d82d246536a24c534317079dd509900628bf->leave($__internal_8706a47c80acb2f5cb3138777dd9d82d246536a24c534317079dd509900628bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1008f568abb33e9fb3209ed97f9067917e76db26b7b3071fa84fdf12437c61de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1008f568abb33e9fb3209ed97f9067917e76db26b7b3071fa84fdf12437c61de->enter($__internal_1008f568abb33e9fb3209ed97f9067917e76db26b7b3071fa84fdf12437c61de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_267e47c2f1803e8d7a222cff942e901dd8dbde8b52ffbf93e5a6c91e1c4f0755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267e47c2f1803e8d7a222cff942e901dd8dbde8b52ffbf93e5a6c91e1c4f0755->enter($__internal_267e47c2f1803e8d7a222cff942e901dd8dbde8b52ffbf93e5a6c91e1c4f0755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_267e47c2f1803e8d7a222cff942e901dd8dbde8b52ffbf93e5a6c91e1c4f0755->leave($__internal_267e47c2f1803e8d7a222cff942e901dd8dbde8b52ffbf93e5a6c91e1c4f0755_prof);

        
        $__internal_1008f568abb33e9fb3209ed97f9067917e76db26b7b3071fa84fdf12437c61de->leave($__internal_1008f568abb33e9fb3209ed97f9067917e76db26b7b3071fa84fdf12437c61de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ec4c38f1d64093d4a953981a2276e86ee0b8138729ec7a98f9ae09ebae2dc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec4c38f1d64093d4a953981a2276e86ee0b8138729ec7a98f9ae09ebae2dc16->enter($__internal_4ec4c38f1d64093d4a953981a2276e86ee0b8138729ec7a98f9ae09ebae2dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_510ed4b2f803836a146079a6d1d5c26f8c41d4a824c6de0127dd352d5e3804ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510ed4b2f803836a146079a6d1d5c26f8c41d4a824c6de0127dd352d5e3804ca->enter($__internal_510ed4b2f803836a146079a6d1d5c26f8c41d4a824c6de0127dd352d5e3804ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_510ed4b2f803836a146079a6d1d5c26f8c41d4a824c6de0127dd352d5e3804ca->leave($__internal_510ed4b2f803836a146079a6d1d5c26f8c41d4a824c6de0127dd352d5e3804ca_prof);

        
        $__internal_4ec4c38f1d64093d4a953981a2276e86ee0b8138729ec7a98f9ae09ebae2dc16->leave($__internal_4ec4c38f1d64093d4a953981a2276e86ee0b8138729ec7a98f9ae09ebae2dc16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
