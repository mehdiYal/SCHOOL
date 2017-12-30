<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3c8393e0a263c3cfdc881385a929bf58881486a62e4ab076d46f0174f1b71038 extends Twig_Template
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
        $__internal_b37a261475c314eb2c6181968648d11df72c1b05ff31a2d93fdad8beb9820aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37a261475c314eb2c6181968648d11df72c1b05ff31a2d93fdad8beb9820aa2->enter($__internal_b37a261475c314eb2c6181968648d11df72c1b05ff31a2d93fdad8beb9820aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7349d3022d56fd6166d5494c01b4120c4fdc2d70710f669a4e758cbfa5d82f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7349d3022d56fd6166d5494c01b4120c4fdc2d70710f669a4e758cbfa5d82f01->enter($__internal_7349d3022d56fd6166d5494c01b4120c4fdc2d70710f669a4e758cbfa5d82f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37a261475c314eb2c6181968648d11df72c1b05ff31a2d93fdad8beb9820aa2->leave($__internal_b37a261475c314eb2c6181968648d11df72c1b05ff31a2d93fdad8beb9820aa2_prof);

        
        $__internal_7349d3022d56fd6166d5494c01b4120c4fdc2d70710f669a4e758cbfa5d82f01->leave($__internal_7349d3022d56fd6166d5494c01b4120c4fdc2d70710f669a4e758cbfa5d82f01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4152a3e48fb6b4ba3a64f6160f19288a282c72c29953a6a66e4acd775cb03850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4152a3e48fb6b4ba3a64f6160f19288a282c72c29953a6a66e4acd775cb03850->enter($__internal_4152a3e48fb6b4ba3a64f6160f19288a282c72c29953a6a66e4acd775cb03850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2acaebdd1a01f3b89c2eb5c0205af9b48a2cd4fb6d2ab0e5a197c92162066078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acaebdd1a01f3b89c2eb5c0205af9b48a2cd4fb6d2ab0e5a197c92162066078->enter($__internal_2acaebdd1a01f3b89c2eb5c0205af9b48a2cd4fb6d2ab0e5a197c92162066078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2acaebdd1a01f3b89c2eb5c0205af9b48a2cd4fb6d2ab0e5a197c92162066078->leave($__internal_2acaebdd1a01f3b89c2eb5c0205af9b48a2cd4fb6d2ab0e5a197c92162066078_prof);

        
        $__internal_4152a3e48fb6b4ba3a64f6160f19288a282c72c29953a6a66e4acd775cb03850->leave($__internal_4152a3e48fb6b4ba3a64f6160f19288a282c72c29953a6a66e4acd775cb03850_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b61500b4946702623d283a023a87734db5e38c6d9abc0d9a6fb6e122a5e79a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61500b4946702623d283a023a87734db5e38c6d9abc0d9a6fb6e122a5e79a5d->enter($__internal_b61500b4946702623d283a023a87734db5e38c6d9abc0d9a6fb6e122a5e79a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_453cd84926ee42129c1fc52a8f10e21d02685e603424c2a1b34beed1ff24ec9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453cd84926ee42129c1fc52a8f10e21d02685e603424c2a1b34beed1ff24ec9d->enter($__internal_453cd84926ee42129c1fc52a8f10e21d02685e603424c2a1b34beed1ff24ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_453cd84926ee42129c1fc52a8f10e21d02685e603424c2a1b34beed1ff24ec9d->leave($__internal_453cd84926ee42129c1fc52a8f10e21d02685e603424c2a1b34beed1ff24ec9d_prof);

        
        $__internal_b61500b4946702623d283a023a87734db5e38c6d9abc0d9a6fb6e122a5e79a5d->leave($__internal_b61500b4946702623d283a023a87734db5e38c6d9abc0d9a6fb6e122a5e79a5d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3aa933313e72d3dd277d9b664535a4bf9a68498363904b04551d9f66bcfd610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3aa933313e72d3dd277d9b664535a4bf9a68498363904b04551d9f66bcfd610->enter($__internal_e3aa933313e72d3dd277d9b664535a4bf9a68498363904b04551d9f66bcfd610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba8fd84959f333e21503a04b19405297a762fd90afad5e66c46780857673016b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8fd84959f333e21503a04b19405297a762fd90afad5e66c46780857673016b->enter($__internal_ba8fd84959f333e21503a04b19405297a762fd90afad5e66c46780857673016b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ba8fd84959f333e21503a04b19405297a762fd90afad5e66c46780857673016b->leave($__internal_ba8fd84959f333e21503a04b19405297a762fd90afad5e66c46780857673016b_prof);

        
        $__internal_e3aa933313e72d3dd277d9b664535a4bf9a68498363904b04551d9f66bcfd610->leave($__internal_e3aa933313e72d3dd277d9b664535a4bf9a68498363904b04551d9f66bcfd610_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
