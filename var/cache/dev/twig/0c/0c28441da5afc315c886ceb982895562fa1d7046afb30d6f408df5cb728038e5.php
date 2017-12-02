<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2fc68b444575203d13be345155eb50e837ece93389e95d8a09d5c0d050ebf028 extends Twig_Template
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
        $__internal_bf65229b651cb6fb68b14648e7ca48f66932e9142555635a0eeae94013c9ff70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf65229b651cb6fb68b14648e7ca48f66932e9142555635a0eeae94013c9ff70->enter($__internal_bf65229b651cb6fb68b14648e7ca48f66932e9142555635a0eeae94013c9ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6c64e6ee26ad82e5a12aa350d7f15515b3f4d31224af3120552e97b87c309489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c64e6ee26ad82e5a12aa350d7f15515b3f4d31224af3120552e97b87c309489->enter($__internal_6c64e6ee26ad82e5a12aa350d7f15515b3f4d31224af3120552e97b87c309489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf65229b651cb6fb68b14648e7ca48f66932e9142555635a0eeae94013c9ff70->leave($__internal_bf65229b651cb6fb68b14648e7ca48f66932e9142555635a0eeae94013c9ff70_prof);

        
        $__internal_6c64e6ee26ad82e5a12aa350d7f15515b3f4d31224af3120552e97b87c309489->leave($__internal_6c64e6ee26ad82e5a12aa350d7f15515b3f4d31224af3120552e97b87c309489_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c6a174593747e513828837a84c58e90e05f71146155a775839dca9be6dc90a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6a174593747e513828837a84c58e90e05f71146155a775839dca9be6dc90a7->enter($__internal_2c6a174593747e513828837a84c58e90e05f71146155a775839dca9be6dc90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17f617ec915fcb0c0962d188824be6c417f3a0ec491e2ed475e179b57ea5acd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f617ec915fcb0c0962d188824be6c417f3a0ec491e2ed475e179b57ea5acd4->enter($__internal_17f617ec915fcb0c0962d188824be6c417f3a0ec491e2ed475e179b57ea5acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_17f617ec915fcb0c0962d188824be6c417f3a0ec491e2ed475e179b57ea5acd4->leave($__internal_17f617ec915fcb0c0962d188824be6c417f3a0ec491e2ed475e179b57ea5acd4_prof);

        
        $__internal_2c6a174593747e513828837a84c58e90e05f71146155a775839dca9be6dc90a7->leave($__internal_2c6a174593747e513828837a84c58e90e05f71146155a775839dca9be6dc90a7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_05833afd669928cbe15fd5b273ceeb9c025d3a2c3a92334a30603bd033a1cc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05833afd669928cbe15fd5b273ceeb9c025d3a2c3a92334a30603bd033a1cc45->enter($__internal_05833afd669928cbe15fd5b273ceeb9c025d3a2c3a92334a30603bd033a1cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28e17d4dca000bb11f59c1d3b187ec748b04591ace47834337b5be72459d11fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e17d4dca000bb11f59c1d3b187ec748b04591ace47834337b5be72459d11fb->enter($__internal_28e17d4dca000bb11f59c1d3b187ec748b04591ace47834337b5be72459d11fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28e17d4dca000bb11f59c1d3b187ec748b04591ace47834337b5be72459d11fb->leave($__internal_28e17d4dca000bb11f59c1d3b187ec748b04591ace47834337b5be72459d11fb_prof);

        
        $__internal_05833afd669928cbe15fd5b273ceeb9c025d3a2c3a92334a30603bd033a1cc45->leave($__internal_05833afd669928cbe15fd5b273ceeb9c025d3a2c3a92334a30603bd033a1cc45_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
