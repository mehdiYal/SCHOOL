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
        $__internal_166f6e6a4d86a5436bf883175e2ddfad50c08adc39640731a010d71d6853e059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166f6e6a4d86a5436bf883175e2ddfad50c08adc39640731a010d71d6853e059->enter($__internal_166f6e6a4d86a5436bf883175e2ddfad50c08adc39640731a010d71d6853e059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_64258613d7d5f4998fa4429785115a5c3ee6c8b87d7d2254fe54b8e289344fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64258613d7d5f4998fa4429785115a5c3ee6c8b87d7d2254fe54b8e289344fa9->enter($__internal_64258613d7d5f4998fa4429785115a5c3ee6c8b87d7d2254fe54b8e289344fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166f6e6a4d86a5436bf883175e2ddfad50c08adc39640731a010d71d6853e059->leave($__internal_166f6e6a4d86a5436bf883175e2ddfad50c08adc39640731a010d71d6853e059_prof);

        
        $__internal_64258613d7d5f4998fa4429785115a5c3ee6c8b87d7d2254fe54b8e289344fa9->leave($__internal_64258613d7d5f4998fa4429785115a5c3ee6c8b87d7d2254fe54b8e289344fa9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e827e8e9709225b3042d0858f99a85ec3fb9033c89abde7f57a6b3c360ce3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e827e8e9709225b3042d0858f99a85ec3fb9033c89abde7f57a6b3c360ce3c1->enter($__internal_1e827e8e9709225b3042d0858f99a85ec3fb9033c89abde7f57a6b3c360ce3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12598ed2b7538c57d5d59a9559fc2962a86ce0e8a22d30bb6818442cbf832cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12598ed2b7538c57d5d59a9559fc2962a86ce0e8a22d30bb6818442cbf832cbd->enter($__internal_12598ed2b7538c57d5d59a9559fc2962a86ce0e8a22d30bb6818442cbf832cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_12598ed2b7538c57d5d59a9559fc2962a86ce0e8a22d30bb6818442cbf832cbd->leave($__internal_12598ed2b7538c57d5d59a9559fc2962a86ce0e8a22d30bb6818442cbf832cbd_prof);

        
        $__internal_1e827e8e9709225b3042d0858f99a85ec3fb9033c89abde7f57a6b3c360ce3c1->leave($__internal_1e827e8e9709225b3042d0858f99a85ec3fb9033c89abde7f57a6b3c360ce3c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19867dc46735dfe819ae7305959b41b47c47fc97f114aa0642bfc267fddb1640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19867dc46735dfe819ae7305959b41b47c47fc97f114aa0642bfc267fddb1640->enter($__internal_19867dc46735dfe819ae7305959b41b47c47fc97f114aa0642bfc267fddb1640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c48424fa43c28d64c5585ead77d65b3552ad67b765db4e149ca0bd5c19fba72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48424fa43c28d64c5585ead77d65b3552ad67b765db4e149ca0bd5c19fba72d->enter($__internal_c48424fa43c28d64c5585ead77d65b3552ad67b765db4e149ca0bd5c19fba72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c48424fa43c28d64c5585ead77d65b3552ad67b765db4e149ca0bd5c19fba72d->leave($__internal_c48424fa43c28d64c5585ead77d65b3552ad67b765db4e149ca0bd5c19fba72d_prof);

        
        $__internal_19867dc46735dfe819ae7305959b41b47c47fc97f114aa0642bfc267fddb1640->leave($__internal_19867dc46735dfe819ae7305959b41b47c47fc97f114aa0642bfc267fddb1640_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d1ec8d7f40e99009ce97680d1cf09f762fa70de4954f633a7dfdaea6f9272c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1ec8d7f40e99009ce97680d1cf09f762fa70de4954f633a7dfdaea6f9272c1->enter($__internal_0d1ec8d7f40e99009ce97680d1cf09f762fa70de4954f633a7dfdaea6f9272c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1a662ad684ad4ab3cfd8b374a4dd6686b12682900bd6383fd72a34f2d3e2a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a662ad684ad4ab3cfd8b374a4dd6686b12682900bd6383fd72a34f2d3e2a45->enter($__internal_c1a662ad684ad4ab3cfd8b374a4dd6686b12682900bd6383fd72a34f2d3e2a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c1a662ad684ad4ab3cfd8b374a4dd6686b12682900bd6383fd72a34f2d3e2a45->leave($__internal_c1a662ad684ad4ab3cfd8b374a4dd6686b12682900bd6383fd72a34f2d3e2a45_prof);

        
        $__internal_0d1ec8d7f40e99009ce97680d1cf09f762fa70de4954f633a7dfdaea6f9272c1->leave($__internal_0d1ec8d7f40e99009ce97680d1cf09f762fa70de4954f633a7dfdaea6f9272c1_prof);

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
