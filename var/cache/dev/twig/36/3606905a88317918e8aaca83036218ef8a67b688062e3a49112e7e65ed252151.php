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
        $__internal_11c16d4311a362b7ad2d42e625345ee84135f09a1dab316b76382a181453ffe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c16d4311a362b7ad2d42e625345ee84135f09a1dab316b76382a181453ffe3->enter($__internal_11c16d4311a362b7ad2d42e625345ee84135f09a1dab316b76382a181453ffe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d039271217552a90a6e85dc9142d687c2475e3eb83cf80c73035a00c14c3dc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d039271217552a90a6e85dc9142d687c2475e3eb83cf80c73035a00c14c3dc1d->enter($__internal_d039271217552a90a6e85dc9142d687c2475e3eb83cf80c73035a00c14c3dc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c16d4311a362b7ad2d42e625345ee84135f09a1dab316b76382a181453ffe3->leave($__internal_11c16d4311a362b7ad2d42e625345ee84135f09a1dab316b76382a181453ffe3_prof);

        
        $__internal_d039271217552a90a6e85dc9142d687c2475e3eb83cf80c73035a00c14c3dc1d->leave($__internal_d039271217552a90a6e85dc9142d687c2475e3eb83cf80c73035a00c14c3dc1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e948db354a2f97a9d1ad5333a3f1fda037915781d61e29a6a97aef830cc30540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e948db354a2f97a9d1ad5333a3f1fda037915781d61e29a6a97aef830cc30540->enter($__internal_e948db354a2f97a9d1ad5333a3f1fda037915781d61e29a6a97aef830cc30540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48f6918ca3c72a00c279c6f51c8a9fbd851eb69a1ea72a3ab1ebab5406ff4f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f6918ca3c72a00c279c6f51c8a9fbd851eb69a1ea72a3ab1ebab5406ff4f89->enter($__internal_48f6918ca3c72a00c279c6f51c8a9fbd851eb69a1ea72a3ab1ebab5406ff4f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48f6918ca3c72a00c279c6f51c8a9fbd851eb69a1ea72a3ab1ebab5406ff4f89->leave($__internal_48f6918ca3c72a00c279c6f51c8a9fbd851eb69a1ea72a3ab1ebab5406ff4f89_prof);

        
        $__internal_e948db354a2f97a9d1ad5333a3f1fda037915781d61e29a6a97aef830cc30540->leave($__internal_e948db354a2f97a9d1ad5333a3f1fda037915781d61e29a6a97aef830cc30540_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39fdaefedc41faef9e09a35c95cfb9365016da0098e39bb9960037ff20a043ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fdaefedc41faef9e09a35c95cfb9365016da0098e39bb9960037ff20a043ab->enter($__internal_39fdaefedc41faef9e09a35c95cfb9365016da0098e39bb9960037ff20a043ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e3da2646f8aec9015f2f1f8e43a754fabf17a3c258e6805323a4c240e30a2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3da2646f8aec9015f2f1f8e43a754fabf17a3c258e6805323a4c240e30a2b0->enter($__internal_7e3da2646f8aec9015f2f1f8e43a754fabf17a3c258e6805323a4c240e30a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7e3da2646f8aec9015f2f1f8e43a754fabf17a3c258e6805323a4c240e30a2b0->leave($__internal_7e3da2646f8aec9015f2f1f8e43a754fabf17a3c258e6805323a4c240e30a2b0_prof);

        
        $__internal_39fdaefedc41faef9e09a35c95cfb9365016da0098e39bb9960037ff20a043ab->leave($__internal_39fdaefedc41faef9e09a35c95cfb9365016da0098e39bb9960037ff20a043ab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4c808f280905dcaecf875f9368a95e51c2c882f1cdeb3524994902f970cc0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c808f280905dcaecf875f9368a95e51c2c882f1cdeb3524994902f970cc0af->enter($__internal_d4c808f280905dcaecf875f9368a95e51c2c882f1cdeb3524994902f970cc0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4991260253bcac4fab718f1d07c103c0a73d85523e1b8e19196f9e384531f5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4991260253bcac4fab718f1d07c103c0a73d85523e1b8e19196f9e384531f5f3->enter($__internal_4991260253bcac4fab718f1d07c103c0a73d85523e1b8e19196f9e384531f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4991260253bcac4fab718f1d07c103c0a73d85523e1b8e19196f9e384531f5f3->leave($__internal_4991260253bcac4fab718f1d07c103c0a73d85523e1b8e19196f9e384531f5f3_prof);

        
        $__internal_d4c808f280905dcaecf875f9368a95e51c2c882f1cdeb3524994902f970cc0af->leave($__internal_d4c808f280905dcaecf875f9368a95e51c2c882f1cdeb3524994902f970cc0af_prof);

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
