<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_7f156645349fc29217948729dee062519394da9541359e286d32276a91bcc67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_010bb46ae6191ccdcc63795025419fc5e8441c6e4a71cc6b8112f7e8d4a4a0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010bb46ae6191ccdcc63795025419fc5e8441c6e4a71cc6b8112f7e8d4a4a0a0->enter($__internal_010bb46ae6191ccdcc63795025419fc5e8441c6e4a71cc6b8112f7e8d4a4a0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c50360714d503c77a6d1178d2e0be3d1f8b75c05cbffda57025eb17404167c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50360714d503c77a6d1178d2e0be3d1f8b75c05cbffda57025eb17404167c9c->enter($__internal_c50360714d503c77a6d1178d2e0be3d1f8b75c05cbffda57025eb17404167c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010bb46ae6191ccdcc63795025419fc5e8441c6e4a71cc6b8112f7e8d4a4a0a0->leave($__internal_010bb46ae6191ccdcc63795025419fc5e8441c6e4a71cc6b8112f7e8d4a4a0a0_prof);

        
        $__internal_c50360714d503c77a6d1178d2e0be3d1f8b75c05cbffda57025eb17404167c9c->leave($__internal_c50360714d503c77a6d1178d2e0be3d1f8b75c05cbffda57025eb17404167c9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0dfa3a391b7ed285943878d1afc90ae77c462d65af1debe27488d0134bef368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dfa3a391b7ed285943878d1afc90ae77c462d65af1debe27488d0134bef368->enter($__internal_a0dfa3a391b7ed285943878d1afc90ae77c462d65af1debe27488d0134bef368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e97f9448c04aefeca57263f3a8764e1dcddc36743937a2cc49da6bd5906e270c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97f9448c04aefeca57263f3a8764e1dcddc36743937a2cc49da6bd5906e270c->enter($__internal_e97f9448c04aefeca57263f3a8764e1dcddc36743937a2cc49da6bd5906e270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e97f9448c04aefeca57263f3a8764e1dcddc36743937a2cc49da6bd5906e270c->leave($__internal_e97f9448c04aefeca57263f3a8764e1dcddc36743937a2cc49da6bd5906e270c_prof);

        
        $__internal_a0dfa3a391b7ed285943878d1afc90ae77c462d65af1debe27488d0134bef368->leave($__internal_a0dfa3a391b7ed285943878d1afc90ae77c462d65af1debe27488d0134bef368_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c76e5be3c59638e37d11bacaa4949e3316ef843bbd8e4c74bb07db9d1c32f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c76e5be3c59638e37d11bacaa4949e3316ef843bbd8e4c74bb07db9d1c32f5f->enter($__internal_2c76e5be3c59638e37d11bacaa4949e3316ef843bbd8e4c74bb07db9d1c32f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3bcb7d63cdde636aab017296be974482cb4103211959e2c0d76240a7c55e89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bcb7d63cdde636aab017296be974482cb4103211959e2c0d76240a7c55e89b->enter($__internal_d3bcb7d63cdde636aab017296be974482cb4103211959e2c0d76240a7c55e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d3bcb7d63cdde636aab017296be974482cb4103211959e2c0d76240a7c55e89b->leave($__internal_d3bcb7d63cdde636aab017296be974482cb4103211959e2c0d76240a7c55e89b_prof);

        
        $__internal_2c76e5be3c59638e37d11bacaa4949e3316ef843bbd8e4c74bb07db9d1c32f5f->leave($__internal_2c76e5be3c59638e37d11bacaa4949e3316ef843bbd8e4c74bb07db9d1c32f5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
