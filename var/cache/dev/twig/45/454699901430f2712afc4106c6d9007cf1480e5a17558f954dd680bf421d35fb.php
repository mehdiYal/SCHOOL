<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
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
        $__internal_035ee7d54a52af9dc5551f19c323d7e6500b9af2c549d7c80b81b008e366f661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035ee7d54a52af9dc5551f19c323d7e6500b9af2c549d7c80b81b008e366f661->enter($__internal_035ee7d54a52af9dc5551f19c323d7e6500b9af2c549d7c80b81b008e366f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_04908ea95c07e7fb2f49b8cd35def8315d757a8b14daf0008fa97d8690b48b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04908ea95c07e7fb2f49b8cd35def8315d757a8b14daf0008fa97d8690b48b47->enter($__internal_04908ea95c07e7fb2f49b8cd35def8315d757a8b14daf0008fa97d8690b48b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_035ee7d54a52af9dc5551f19c323d7e6500b9af2c549d7c80b81b008e366f661->leave($__internal_035ee7d54a52af9dc5551f19c323d7e6500b9af2c549d7c80b81b008e366f661_prof);

        
        $__internal_04908ea95c07e7fb2f49b8cd35def8315d757a8b14daf0008fa97d8690b48b47->leave($__internal_04908ea95c07e7fb2f49b8cd35def8315d757a8b14daf0008fa97d8690b48b47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28b54be8edfb9770f2b18a3ee646403e6b3ccb2d981f8f9d7a118bc894aa2500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b54be8edfb9770f2b18a3ee646403e6b3ccb2d981f8f9d7a118bc894aa2500->enter($__internal_28b54be8edfb9770f2b18a3ee646403e6b3ccb2d981f8f9d7a118bc894aa2500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3178d6ab1aa8c340c5e13179fb9126e62753b73851ff83a321c90646595b406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3178d6ab1aa8c340c5e13179fb9126e62753b73851ff83a321c90646595b406->enter($__internal_d3178d6ab1aa8c340c5e13179fb9126e62753b73851ff83a321c90646595b406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3178d6ab1aa8c340c5e13179fb9126e62753b73851ff83a321c90646595b406->leave($__internal_d3178d6ab1aa8c340c5e13179fb9126e62753b73851ff83a321c90646595b406_prof);

        
        $__internal_28b54be8edfb9770f2b18a3ee646403e6b3ccb2d981f8f9d7a118bc894aa2500->leave($__internal_28b54be8edfb9770f2b18a3ee646403e6b3ccb2d981f8f9d7a118bc894aa2500_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1f44e0c5bd8c86f08ed805ecd125b49966121ce23d32b975f050ce6394b3587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f44e0c5bd8c86f08ed805ecd125b49966121ce23d32b975f050ce6394b3587->enter($__internal_a1f44e0c5bd8c86f08ed805ecd125b49966121ce23d32b975f050ce6394b3587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7bfb9146b2abac97f64c42d082d2b19a4625b12b20d5e861d8b526f45123a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bfb9146b2abac97f64c42d082d2b19a4625b12b20d5e861d8b526f45123a5d->enter($__internal_b7bfb9146b2abac97f64c42d082d2b19a4625b12b20d5e861d8b526f45123a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b7bfb9146b2abac97f64c42d082d2b19a4625b12b20d5e861d8b526f45123a5d->leave($__internal_b7bfb9146b2abac97f64c42d082d2b19a4625b12b20d5e861d8b526f45123a5d_prof);

        
        $__internal_a1f44e0c5bd8c86f08ed805ecd125b49966121ce23d32b975f050ce6394b3587->leave($__internal_a1f44e0c5bd8c86f08ed805ecd125b49966121ce23d32b975f050ce6394b3587_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5fc146c02347335bf9835661a93d47c9b95ca12e6dab4e45d0638744801821f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5fc146c02347335bf9835661a93d47c9b95ca12e6dab4e45d0638744801821f->enter($__internal_c5fc146c02347335bf9835661a93d47c9b95ca12e6dab4e45d0638744801821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6034532154ccc895c540472c147c5cb264d26ad0e9bf3f000114d3a62a682085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6034532154ccc895c540472c147c5cb264d26ad0e9bf3f000114d3a62a682085->enter($__internal_6034532154ccc895c540472c147c5cb264d26ad0e9bf3f000114d3a62a682085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6034532154ccc895c540472c147c5cb264d26ad0e9bf3f000114d3a62a682085->leave($__internal_6034532154ccc895c540472c147c5cb264d26ad0e9bf3f000114d3a62a682085_prof);

        
        $__internal_c5fc146c02347335bf9835661a93d47c9b95ca12e6dab4e45d0638744801821f->leave($__internal_c5fc146c02347335bf9835661a93d47c9b95ca12e6dab4e45d0638744801821f_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
