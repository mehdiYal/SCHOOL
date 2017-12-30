<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_068879f94625f4f7aea4c170e5d41ecad02775b480bee5973bcc0f73f63aa8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_28f96f6c5bf4b5bc22a9d5198420e0a86770cc23787d7cf25afc5c62fcef9dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f96f6c5bf4b5bc22a9d5198420e0a86770cc23787d7cf25afc5c62fcef9dbf->enter($__internal_28f96f6c5bf4b5bc22a9d5198420e0a86770cc23787d7cf25afc5c62fcef9dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2a933ac54345b2e4edbc81a761a83739348f850cd3f7a16a8dce7eb153e14355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a933ac54345b2e4edbc81a761a83739348f850cd3f7a16a8dce7eb153e14355->enter($__internal_2a933ac54345b2e4edbc81a761a83739348f850cd3f7a16a8dce7eb153e14355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f96f6c5bf4b5bc22a9d5198420e0a86770cc23787d7cf25afc5c62fcef9dbf->leave($__internal_28f96f6c5bf4b5bc22a9d5198420e0a86770cc23787d7cf25afc5c62fcef9dbf_prof);

        
        $__internal_2a933ac54345b2e4edbc81a761a83739348f850cd3f7a16a8dce7eb153e14355->leave($__internal_2a933ac54345b2e4edbc81a761a83739348f850cd3f7a16a8dce7eb153e14355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_259ec62dcdc8cbcb57ab079026f13f05542b76493e759d843258f3c02199a1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259ec62dcdc8cbcb57ab079026f13f05542b76493e759d843258f3c02199a1a7->enter($__internal_259ec62dcdc8cbcb57ab079026f13f05542b76493e759d843258f3c02199a1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf9788aa281a0f883a6a539ff3c697791d96157d98a467e6bf1eff601bcb442a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9788aa281a0f883a6a539ff3c697791d96157d98a467e6bf1eff601bcb442a->enter($__internal_bf9788aa281a0f883a6a539ff3c697791d96157d98a467e6bf1eff601bcb442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bf9788aa281a0f883a6a539ff3c697791d96157d98a467e6bf1eff601bcb442a->leave($__internal_bf9788aa281a0f883a6a539ff3c697791d96157d98a467e6bf1eff601bcb442a_prof);

        
        $__internal_259ec62dcdc8cbcb57ab079026f13f05542b76493e759d843258f3c02199a1a7->leave($__internal_259ec62dcdc8cbcb57ab079026f13f05542b76493e759d843258f3c02199a1a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dae65b06ded60b3588e7a0e56ca550b21da71c30c95707729ea3e2b8c601c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dae65b06ded60b3588e7a0e56ca550b21da71c30c95707729ea3e2b8c601c27->enter($__internal_9dae65b06ded60b3588e7a0e56ca550b21da71c30c95707729ea3e2b8c601c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f8ff86d05725d1b89722d417fc871a2ea346fdf73a21cdb6b04ca58e3bd73a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8ff86d05725d1b89722d417fc871a2ea346fdf73a21cdb6b04ca58e3bd73a8->enter($__internal_9f8ff86d05725d1b89722d417fc871a2ea346fdf73a21cdb6b04ca58e3bd73a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9f8ff86d05725d1b89722d417fc871a2ea346fdf73a21cdb6b04ca58e3bd73a8->leave($__internal_9f8ff86d05725d1b89722d417fc871a2ea346fdf73a21cdb6b04ca58e3bd73a8_prof);

        
        $__internal_9dae65b06ded60b3588e7a0e56ca550b21da71c30c95707729ea3e2b8c601c27->leave($__internal_9dae65b06ded60b3588e7a0e56ca550b21da71c30c95707729ea3e2b8c601c27_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e985e57b6c1392cd591b5b6bf688b3bedaf7faa1559ce2824689b00003075453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e985e57b6c1392cd591b5b6bf688b3bedaf7faa1559ce2824689b00003075453->enter($__internal_e985e57b6c1392cd591b5b6bf688b3bedaf7faa1559ce2824689b00003075453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86a4d277864f469a8d7f9aa74425cbf61015e88c0d79ff3a4a38612bd405dbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a4d277864f469a8d7f9aa74425cbf61015e88c0d79ff3a4a38612bd405dbc9->enter($__internal_86a4d277864f469a8d7f9aa74425cbf61015e88c0d79ff3a4a38612bd405dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_86a4d277864f469a8d7f9aa74425cbf61015e88c0d79ff3a4a38612bd405dbc9->leave($__internal_86a4d277864f469a8d7f9aa74425cbf61015e88c0d79ff3a4a38612bd405dbc9_prof);

        
        $__internal_e985e57b6c1392cd591b5b6bf688b3bedaf7faa1559ce2824689b00003075453->leave($__internal_e985e57b6c1392cd591b5b6bf688b3bedaf7faa1559ce2824689b00003075453_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
