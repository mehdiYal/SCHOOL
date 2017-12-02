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
        $__internal_50b077178d0a54c0afc46f8d3d35f62fc26f7e235f60413cb950e96a6b469628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b077178d0a54c0afc46f8d3d35f62fc26f7e235f60413cb950e96a6b469628->enter($__internal_50b077178d0a54c0afc46f8d3d35f62fc26f7e235f60413cb950e96a6b469628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f93d0908eb693441afbcaf8f397b3bac17f9f7f08f9e6e53e6fa99c2e6eb836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f93d0908eb693441afbcaf8f397b3bac17f9f7f08f9e6e53e6fa99c2e6eb836->enter($__internal_1f93d0908eb693441afbcaf8f397b3bac17f9f7f08f9e6e53e6fa99c2e6eb836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b077178d0a54c0afc46f8d3d35f62fc26f7e235f60413cb950e96a6b469628->leave($__internal_50b077178d0a54c0afc46f8d3d35f62fc26f7e235f60413cb950e96a6b469628_prof);

        
        $__internal_1f93d0908eb693441afbcaf8f397b3bac17f9f7f08f9e6e53e6fa99c2e6eb836->leave($__internal_1f93d0908eb693441afbcaf8f397b3bac17f9f7f08f9e6e53e6fa99c2e6eb836_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91dc67df2bba2a241e5f0418a021b9e115d36d8d560078424c712ecfcdd97dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dc67df2bba2a241e5f0418a021b9e115d36d8d560078424c712ecfcdd97dcc->enter($__internal_91dc67df2bba2a241e5f0418a021b9e115d36d8d560078424c712ecfcdd97dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0cde9f0f92f0f215e852358bf33f48f2fb647eb35e90e814fdda1577882b149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cde9f0f92f0f215e852358bf33f48f2fb647eb35e90e814fdda1577882b149->enter($__internal_e0cde9f0f92f0f215e852358bf33f48f2fb647eb35e90e814fdda1577882b149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e0cde9f0f92f0f215e852358bf33f48f2fb647eb35e90e814fdda1577882b149->leave($__internal_e0cde9f0f92f0f215e852358bf33f48f2fb647eb35e90e814fdda1577882b149_prof);

        
        $__internal_91dc67df2bba2a241e5f0418a021b9e115d36d8d560078424c712ecfcdd97dcc->leave($__internal_91dc67df2bba2a241e5f0418a021b9e115d36d8d560078424c712ecfcdd97dcc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d565d38e1d290df0c44ad9b78930a64ef5458b3a455b628e3cab4c58f37b564f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d565d38e1d290df0c44ad9b78930a64ef5458b3a455b628e3cab4c58f37b564f->enter($__internal_d565d38e1d290df0c44ad9b78930a64ef5458b3a455b628e3cab4c58f37b564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba728629b123eb088cbebb488cadd07870f30d587e6315d6245ee39c14088816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba728629b123eb088cbebb488cadd07870f30d587e6315d6245ee39c14088816->enter($__internal_ba728629b123eb088cbebb488cadd07870f30d587e6315d6245ee39c14088816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ba728629b123eb088cbebb488cadd07870f30d587e6315d6245ee39c14088816->leave($__internal_ba728629b123eb088cbebb488cadd07870f30d587e6315d6245ee39c14088816_prof);

        
        $__internal_d565d38e1d290df0c44ad9b78930a64ef5458b3a455b628e3cab4c58f37b564f->leave($__internal_d565d38e1d290df0c44ad9b78930a64ef5458b3a455b628e3cab4c58f37b564f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_082d76a39ce873acefbb1f50bb5f61d35622ad920545dd7194db45e89cfea970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082d76a39ce873acefbb1f50bb5f61d35622ad920545dd7194db45e89cfea970->enter($__internal_082d76a39ce873acefbb1f50bb5f61d35622ad920545dd7194db45e89cfea970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f66b22b00620bd4fd67b0976e45083cff72fb3b7dd052c7d196456430721b89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66b22b00620bd4fd67b0976e45083cff72fb3b7dd052c7d196456430721b89c->enter($__internal_f66b22b00620bd4fd67b0976e45083cff72fb3b7dd052c7d196456430721b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f66b22b00620bd4fd67b0976e45083cff72fb3b7dd052c7d196456430721b89c->leave($__internal_f66b22b00620bd4fd67b0976e45083cff72fb3b7dd052c7d196456430721b89c_prof);

        
        $__internal_082d76a39ce873acefbb1f50bb5f61d35622ad920545dd7194db45e89cfea970->leave($__internal_082d76a39ce873acefbb1f50bb5f61d35622ad920545dd7194db45e89cfea970_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
