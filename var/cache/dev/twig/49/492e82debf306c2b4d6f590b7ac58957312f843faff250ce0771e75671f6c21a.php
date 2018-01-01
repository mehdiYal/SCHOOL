<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_515189b458167aaeedd54ae6d72fa4b2eba43df7b2abc2c97fb5b0075dd31559 extends Twig_Template
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
        $__internal_60204b11b9673dc03f6fcbfc2c5909d869f53f53fed0d6823ebaefbf4d99c5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60204b11b9673dc03f6fcbfc2c5909d869f53f53fed0d6823ebaefbf4d99c5e5->enter($__internal_60204b11b9673dc03f6fcbfc2c5909d869f53f53fed0d6823ebaefbf4d99c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_17088966a1dfb21cf49c371538da4e5ca53e62f014298230d8eb148a4362cd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17088966a1dfb21cf49c371538da4e5ca53e62f014298230d8eb148a4362cd8f->enter($__internal_17088966a1dfb21cf49c371538da4e5ca53e62f014298230d8eb148a4362cd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60204b11b9673dc03f6fcbfc2c5909d869f53f53fed0d6823ebaefbf4d99c5e5->leave($__internal_60204b11b9673dc03f6fcbfc2c5909d869f53f53fed0d6823ebaefbf4d99c5e5_prof);

        
        $__internal_17088966a1dfb21cf49c371538da4e5ca53e62f014298230d8eb148a4362cd8f->leave($__internal_17088966a1dfb21cf49c371538da4e5ca53e62f014298230d8eb148a4362cd8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_395f051ef63dddc24e1b179c6e0e2edd0c6ff2cb6924f8d7c5f346ce77db7c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395f051ef63dddc24e1b179c6e0e2edd0c6ff2cb6924f8d7c5f346ce77db7c39->enter($__internal_395f051ef63dddc24e1b179c6e0e2edd0c6ff2cb6924f8d7c5f346ce77db7c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3985c5f41c947ad903c25586128f0edcd6e6a7d28a23e1529598cdcbc1f1a1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3985c5f41c947ad903c25586128f0edcd6e6a7d28a23e1529598cdcbc1f1a1b5->enter($__internal_3985c5f41c947ad903c25586128f0edcd6e6a7d28a23e1529598cdcbc1f1a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3985c5f41c947ad903c25586128f0edcd6e6a7d28a23e1529598cdcbc1f1a1b5->leave($__internal_3985c5f41c947ad903c25586128f0edcd6e6a7d28a23e1529598cdcbc1f1a1b5_prof);

        
        $__internal_395f051ef63dddc24e1b179c6e0e2edd0c6ff2cb6924f8d7c5f346ce77db7c39->leave($__internal_395f051ef63dddc24e1b179c6e0e2edd0c6ff2cb6924f8d7c5f346ce77db7c39_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_526399145095915a5cf8e44f48f6b5f471513c26fddce65e76a98e61c9995c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526399145095915a5cf8e44f48f6b5f471513c26fddce65e76a98e61c9995c20->enter($__internal_526399145095915a5cf8e44f48f6b5f471513c26fddce65e76a98e61c9995c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6402da36ab85d848a063a5c6441d117cece3e914ea555522feffd2ab1b0e87cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6402da36ab85d848a063a5c6441d117cece3e914ea555522feffd2ab1b0e87cf->enter($__internal_6402da36ab85d848a063a5c6441d117cece3e914ea555522feffd2ab1b0e87cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6402da36ab85d848a063a5c6441d117cece3e914ea555522feffd2ab1b0e87cf->leave($__internal_6402da36ab85d848a063a5c6441d117cece3e914ea555522feffd2ab1b0e87cf_prof);

        
        $__internal_526399145095915a5cf8e44f48f6b5f471513c26fddce65e76a98e61c9995c20->leave($__internal_526399145095915a5cf8e44f48f6b5f471513c26fddce65e76a98e61c9995c20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68d47a73ad06c4457e0381c3fe23d28b5de9684ae8f5ad162b7a95cf7da78643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d47a73ad06c4457e0381c3fe23d28b5de9684ae8f5ad162b7a95cf7da78643->enter($__internal_68d47a73ad06c4457e0381c3fe23d28b5de9684ae8f5ad162b7a95cf7da78643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0a8a6a56a3d0325f50212c71b5c65da7eadb353c62e2e2fa19dc900ba464cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a8a6a56a3d0325f50212c71b5c65da7eadb353c62e2e2fa19dc900ba464cf0->enter($__internal_e0a8a6a56a3d0325f50212c71b5c65da7eadb353c62e2e2fa19dc900ba464cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e0a8a6a56a3d0325f50212c71b5c65da7eadb353c62e2e2fa19dc900ba464cf0->leave($__internal_e0a8a6a56a3d0325f50212c71b5c65da7eadb353c62e2e2fa19dc900ba464cf0_prof);

        
        $__internal_68d47a73ad06c4457e0381c3fe23d28b5de9684ae8f5ad162b7a95cf7da78643->leave($__internal_68d47a73ad06c4457e0381c3fe23d28b5de9684ae8f5ad162b7a95cf7da78643_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
