<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9eff74b4e2e2a34dd06a34c9c4e6554b4965b3b3e4d31345e383b13dae960800 extends Twig_Template
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
        $__internal_f39952f8999f0306d4910371bcc35dd6741a43ba1c42e4b5c44df4bd4b15429f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39952f8999f0306d4910371bcc35dd6741a43ba1c42e4b5c44df4bd4b15429f->enter($__internal_f39952f8999f0306d4910371bcc35dd6741a43ba1c42e4b5c44df4bd4b15429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_54732fe1abb395e2a66e52224e1009970efc96f847940610a27959bf9dbdd3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54732fe1abb395e2a66e52224e1009970efc96f847940610a27959bf9dbdd3d2->enter($__internal_54732fe1abb395e2a66e52224e1009970efc96f847940610a27959bf9dbdd3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39952f8999f0306d4910371bcc35dd6741a43ba1c42e4b5c44df4bd4b15429f->leave($__internal_f39952f8999f0306d4910371bcc35dd6741a43ba1c42e4b5c44df4bd4b15429f_prof);

        
        $__internal_54732fe1abb395e2a66e52224e1009970efc96f847940610a27959bf9dbdd3d2->leave($__internal_54732fe1abb395e2a66e52224e1009970efc96f847940610a27959bf9dbdd3d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e83f00a94dd01092a9c49a4ce2f9dbee94e919059603d128cbcf20cbbb7b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e83f00a94dd01092a9c49a4ce2f9dbee94e919059603d128cbcf20cbbb7b5c->enter($__internal_06e83f00a94dd01092a9c49a4ce2f9dbee94e919059603d128cbcf20cbbb7b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b5c5f37d77bb9da8c4b02c0d23fe9810c7ed4c288838d64d2341f87d6641155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5c5f37d77bb9da8c4b02c0d23fe9810c7ed4c288838d64d2341f87d6641155->enter($__internal_6b5c5f37d77bb9da8c4b02c0d23fe9810c7ed4c288838d64d2341f87d6641155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b5c5f37d77bb9da8c4b02c0d23fe9810c7ed4c288838d64d2341f87d6641155->leave($__internal_6b5c5f37d77bb9da8c4b02c0d23fe9810c7ed4c288838d64d2341f87d6641155_prof);

        
        $__internal_06e83f00a94dd01092a9c49a4ce2f9dbee94e919059603d128cbcf20cbbb7b5c->leave($__internal_06e83f00a94dd01092a9c49a4ce2f9dbee94e919059603d128cbcf20cbbb7b5c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d8d9ff7c19dca6388d9b53ee213bfe84e51df4803f05a8c034dc276a4b423f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8d9ff7c19dca6388d9b53ee213bfe84e51df4803f05a8c034dc276a4b423f1->enter($__internal_4d8d9ff7c19dca6388d9b53ee213bfe84e51df4803f05a8c034dc276a4b423f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e316fe88cf4339945c3d51ecddf90e9829496feba8d4e67da886a14931330704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e316fe88cf4339945c3d51ecddf90e9829496feba8d4e67da886a14931330704->enter($__internal_e316fe88cf4339945c3d51ecddf90e9829496feba8d4e67da886a14931330704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e316fe88cf4339945c3d51ecddf90e9829496feba8d4e67da886a14931330704->leave($__internal_e316fe88cf4339945c3d51ecddf90e9829496feba8d4e67da886a14931330704_prof);

        
        $__internal_4d8d9ff7c19dca6388d9b53ee213bfe84e51df4803f05a8c034dc276a4b423f1->leave($__internal_4d8d9ff7c19dca6388d9b53ee213bfe84e51df4803f05a8c034dc276a4b423f1_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
