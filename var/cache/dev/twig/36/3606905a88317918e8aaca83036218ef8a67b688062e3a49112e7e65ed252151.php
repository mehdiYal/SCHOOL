<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f8eb624d5e7472ce5d21548fc055244232e55a4c633c4e4de9327abf33b5a919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8eb624d5e7472ce5d21548fc055244232e55a4c633c4e4de9327abf33b5a919->enter($__internal_f8eb624d5e7472ce5d21548fc055244232e55a4c633c4e4de9327abf33b5a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e7ced85474c30686602e1b435b27c81fb17d7e5ae7b64830b52d0cf1d367333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ced85474c30686602e1b435b27c81fb17d7e5ae7b64830b52d0cf1d367333a->enter($__internal_e7ced85474c30686602e1b435b27c81fb17d7e5ae7b64830b52d0cf1d367333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8eb624d5e7472ce5d21548fc055244232e55a4c633c4e4de9327abf33b5a919->leave($__internal_f8eb624d5e7472ce5d21548fc055244232e55a4c633c4e4de9327abf33b5a919_prof);

        
        $__internal_e7ced85474c30686602e1b435b27c81fb17d7e5ae7b64830b52d0cf1d367333a->leave($__internal_e7ced85474c30686602e1b435b27c81fb17d7e5ae7b64830b52d0cf1d367333a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d38a03738888648ad44ec3d712747c20133f82c68c1888631905b33cdb35b195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38a03738888648ad44ec3d712747c20133f82c68c1888631905b33cdb35b195->enter($__internal_d38a03738888648ad44ec3d712747c20133f82c68c1888631905b33cdb35b195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7dc3de4c23649c1d592c44bb20850f1a18aad4e5435336f8fc39527792a10252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc3de4c23649c1d592c44bb20850f1a18aad4e5435336f8fc39527792a10252->enter($__internal_7dc3de4c23649c1d592c44bb20850f1a18aad4e5435336f8fc39527792a10252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7dc3de4c23649c1d592c44bb20850f1a18aad4e5435336f8fc39527792a10252->leave($__internal_7dc3de4c23649c1d592c44bb20850f1a18aad4e5435336f8fc39527792a10252_prof);

        
        $__internal_d38a03738888648ad44ec3d712747c20133f82c68c1888631905b33cdb35b195->leave($__internal_d38a03738888648ad44ec3d712747c20133f82c68c1888631905b33cdb35b195_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bacb470cbbdd6117388b1fd02b32d3f1afc7a34b602be1e8abd755f504798122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacb470cbbdd6117388b1fd02b32d3f1afc7a34b602be1e8abd755f504798122->enter($__internal_bacb470cbbdd6117388b1fd02b32d3f1afc7a34b602be1e8abd755f504798122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c78d5b9787cd0995c3547ae45c534d3860baf9fa38acd735577bb0d26265e901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d5b9787cd0995c3547ae45c534d3860baf9fa38acd735577bb0d26265e901->enter($__internal_c78d5b9787cd0995c3547ae45c534d3860baf9fa38acd735577bb0d26265e901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c78d5b9787cd0995c3547ae45c534d3860baf9fa38acd735577bb0d26265e901->leave($__internal_c78d5b9787cd0995c3547ae45c534d3860baf9fa38acd735577bb0d26265e901_prof);

        
        $__internal_bacb470cbbdd6117388b1fd02b32d3f1afc7a34b602be1e8abd755f504798122->leave($__internal_bacb470cbbdd6117388b1fd02b32d3f1afc7a34b602be1e8abd755f504798122_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de99ea667a7793884dffa545e0ac76e7b035395946e6a17dd71e1e7272f1e1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de99ea667a7793884dffa545e0ac76e7b035395946e6a17dd71e1e7272f1e1ae->enter($__internal_de99ea667a7793884dffa545e0ac76e7b035395946e6a17dd71e1e7272f1e1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80373df95dac1c1b466471c4b0d2963f397daa8f32d46e42d3eb8c4bb394b810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80373df95dac1c1b466471c4b0d2963f397daa8f32d46e42d3eb8c4bb394b810->enter($__internal_80373df95dac1c1b466471c4b0d2963f397daa8f32d46e42d3eb8c4bb394b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_80373df95dac1c1b466471c4b0d2963f397daa8f32d46e42d3eb8c4bb394b810->leave($__internal_80373df95dac1c1b466471c4b0d2963f397daa8f32d46e42d3eb8c4bb394b810_prof);

        
        $__internal_de99ea667a7793884dffa545e0ac76e7b035395946e6a17dd71e1e7272f1e1ae->leave($__internal_de99ea667a7793884dffa545e0ac76e7b035395946e6a17dd71e1e7272f1e1ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
