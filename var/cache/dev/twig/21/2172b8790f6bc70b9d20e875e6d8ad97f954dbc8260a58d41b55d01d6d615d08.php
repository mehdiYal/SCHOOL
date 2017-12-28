<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_829025c14e97cb1b20ea978a9217f698ec3f915c10483a8c3d92d5a2c1b278e5 extends Twig_Template
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
        $__internal_2b43058a9cf8ba498e1c377eeb6edd366a67464fb915626771ded61992f3718d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b43058a9cf8ba498e1c377eeb6edd366a67464fb915626771ded61992f3718d->enter($__internal_2b43058a9cf8ba498e1c377eeb6edd366a67464fb915626771ded61992f3718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e7732c32fa288a95e1c1da839d9ede44f22ff0aeef76dacc6f71e9f1945273de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7732c32fa288a95e1c1da839d9ede44f22ff0aeef76dacc6f71e9f1945273de->enter($__internal_e7732c32fa288a95e1c1da839d9ede44f22ff0aeef76dacc6f71e9f1945273de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b43058a9cf8ba498e1c377eeb6edd366a67464fb915626771ded61992f3718d->leave($__internal_2b43058a9cf8ba498e1c377eeb6edd366a67464fb915626771ded61992f3718d_prof);

        
        $__internal_e7732c32fa288a95e1c1da839d9ede44f22ff0aeef76dacc6f71e9f1945273de->leave($__internal_e7732c32fa288a95e1c1da839d9ede44f22ff0aeef76dacc6f71e9f1945273de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceb2b27d8f9c387264cd7c758131fe7caedda79d5a16f895ff0b8a8dbc26a776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb2b27d8f9c387264cd7c758131fe7caedda79d5a16f895ff0b8a8dbc26a776->enter($__internal_ceb2b27d8f9c387264cd7c758131fe7caedda79d5a16f895ff0b8a8dbc26a776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3062e581a813526742f4643952399a911fb69f9017fa5f1cbb78d40f4dcf4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3062e581a813526742f4643952399a911fb69f9017fa5f1cbb78d40f4dcf4e8->enter($__internal_d3062e581a813526742f4643952399a911fb69f9017fa5f1cbb78d40f4dcf4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3062e581a813526742f4643952399a911fb69f9017fa5f1cbb78d40f4dcf4e8->leave($__internal_d3062e581a813526742f4643952399a911fb69f9017fa5f1cbb78d40f4dcf4e8_prof);

        
        $__internal_ceb2b27d8f9c387264cd7c758131fe7caedda79d5a16f895ff0b8a8dbc26a776->leave($__internal_ceb2b27d8f9c387264cd7c758131fe7caedda79d5a16f895ff0b8a8dbc26a776_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f356a22ef5021f7da1c461ee9291c20043578e5cf484ce17439e6d16d517b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f356a22ef5021f7da1c461ee9291c20043578e5cf484ce17439e6d16d517b70->enter($__internal_9f356a22ef5021f7da1c461ee9291c20043578e5cf484ce17439e6d16d517b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45b926eeefd6608bd65049798f0667576daadb565e106c2ea85723a8499813f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b926eeefd6608bd65049798f0667576daadb565e106c2ea85723a8499813f9->enter($__internal_45b926eeefd6608bd65049798f0667576daadb565e106c2ea85723a8499813f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_45b926eeefd6608bd65049798f0667576daadb565e106c2ea85723a8499813f9->leave($__internal_45b926eeefd6608bd65049798f0667576daadb565e106c2ea85723a8499813f9_prof);

        
        $__internal_9f356a22ef5021f7da1c461ee9291c20043578e5cf484ce17439e6d16d517b70->leave($__internal_9f356a22ef5021f7da1c461ee9291c20043578e5cf484ce17439e6d16d517b70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4b8b1824c56729169c036bcecad70ef4f9264d6e5ba92aaf4e89716cccd4d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b8b1824c56729169c036bcecad70ef4f9264d6e5ba92aaf4e89716cccd4d22->enter($__internal_d4b8b1824c56729169c036bcecad70ef4f9264d6e5ba92aaf4e89716cccd4d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89ba9b1719be47927dbd3294e7bd8292d7d17a72ac4173a9ef34af3f97d59190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ba9b1719be47927dbd3294e7bd8292d7d17a72ac4173a9ef34af3f97d59190->enter($__internal_89ba9b1719be47927dbd3294e7bd8292d7d17a72ac4173a9ef34af3f97d59190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_89ba9b1719be47927dbd3294e7bd8292d7d17a72ac4173a9ef34af3f97d59190->leave($__internal_89ba9b1719be47927dbd3294e7bd8292d7d17a72ac4173a9ef34af3f97d59190_prof);

        
        $__internal_d4b8b1824c56729169c036bcecad70ef4f9264d6e5ba92aaf4e89716cccd4d22->leave($__internal_d4b8b1824c56729169c036bcecad70ef4f9264d6e5ba92aaf4e89716cccd4d22_prof);

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
