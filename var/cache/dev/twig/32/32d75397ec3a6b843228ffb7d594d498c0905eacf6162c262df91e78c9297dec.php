<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
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
        $__internal_edc92d63949cc4608b670ab44f1a4db734d9f9dc8caa13620ec6f093173f19a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc92d63949cc4608b670ab44f1a4db734d9f9dc8caa13620ec6f093173f19a0->enter($__internal_edc92d63949cc4608b670ab44f1a4db734d9f9dc8caa13620ec6f093173f19a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_db83fb4a919eb6d4cebb4d47a44d7626f468619b5eef2437c82a9d9db77233d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db83fb4a919eb6d4cebb4d47a44d7626f468619b5eef2437c82a9d9db77233d9->enter($__internal_db83fb4a919eb6d4cebb4d47a44d7626f468619b5eef2437c82a9d9db77233d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edc92d63949cc4608b670ab44f1a4db734d9f9dc8caa13620ec6f093173f19a0->leave($__internal_edc92d63949cc4608b670ab44f1a4db734d9f9dc8caa13620ec6f093173f19a0_prof);

        
        $__internal_db83fb4a919eb6d4cebb4d47a44d7626f468619b5eef2437c82a9d9db77233d9->leave($__internal_db83fb4a919eb6d4cebb4d47a44d7626f468619b5eef2437c82a9d9db77233d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab2d718527ecbf52215f168caba98ba5e07e2e719583aedd253245cee268cbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2d718527ecbf52215f168caba98ba5e07e2e719583aedd253245cee268cbec->enter($__internal_ab2d718527ecbf52215f168caba98ba5e07e2e719583aedd253245cee268cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c52cdc087987218d0b56c94ef2b0833285365f746d53a0362ec27091f1c99f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52cdc087987218d0b56c94ef2b0833285365f746d53a0362ec27091f1c99f32->enter($__internal_c52cdc087987218d0b56c94ef2b0833285365f746d53a0362ec27091f1c99f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c52cdc087987218d0b56c94ef2b0833285365f746d53a0362ec27091f1c99f32->leave($__internal_c52cdc087987218d0b56c94ef2b0833285365f746d53a0362ec27091f1c99f32_prof);

        
        $__internal_ab2d718527ecbf52215f168caba98ba5e07e2e719583aedd253245cee268cbec->leave($__internal_ab2d718527ecbf52215f168caba98ba5e07e2e719583aedd253245cee268cbec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d679ac73eeb6b1ce467f76d3a2150522b9cdaa27359119a44bd0899bb4ba65b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d679ac73eeb6b1ce467f76d3a2150522b9cdaa27359119a44bd0899bb4ba65b3->enter($__internal_d679ac73eeb6b1ce467f76d3a2150522b9cdaa27359119a44bd0899bb4ba65b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c7605e7f27152d5a148e0462b3a14efb055c3f22b364ac9f8c9f8c30c76c620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7605e7f27152d5a148e0462b3a14efb055c3f22b364ac9f8c9f8c30c76c620->enter($__internal_7c7605e7f27152d5a148e0462b3a14efb055c3f22b364ac9f8c9f8c30c76c620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c7605e7f27152d5a148e0462b3a14efb055c3f22b364ac9f8c9f8c30c76c620->leave($__internal_7c7605e7f27152d5a148e0462b3a14efb055c3f22b364ac9f8c9f8c30c76c620_prof);

        
        $__internal_d679ac73eeb6b1ce467f76d3a2150522b9cdaa27359119a44bd0899bb4ba65b3->leave($__internal_d679ac73eeb6b1ce467f76d3a2150522b9cdaa27359119a44bd0899bb4ba65b3_prof);

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
