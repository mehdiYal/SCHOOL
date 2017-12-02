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
        $__internal_c8234e725ff1d5f79b2e91346769fd9a22d3146d3c93fda501885180b3d09f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8234e725ff1d5f79b2e91346769fd9a22d3146d3c93fda501885180b3d09f56->enter($__internal_c8234e725ff1d5f79b2e91346769fd9a22d3146d3c93fda501885180b3d09f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5569a7ff767c033d6a2c17e8cd2c7a73a295f7e12886ae75212b5e4d52790e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5569a7ff767c033d6a2c17e8cd2c7a73a295f7e12886ae75212b5e4d52790e98->enter($__internal_5569a7ff767c033d6a2c17e8cd2c7a73a295f7e12886ae75212b5e4d52790e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8234e725ff1d5f79b2e91346769fd9a22d3146d3c93fda501885180b3d09f56->leave($__internal_c8234e725ff1d5f79b2e91346769fd9a22d3146d3c93fda501885180b3d09f56_prof);

        
        $__internal_5569a7ff767c033d6a2c17e8cd2c7a73a295f7e12886ae75212b5e4d52790e98->leave($__internal_5569a7ff767c033d6a2c17e8cd2c7a73a295f7e12886ae75212b5e4d52790e98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2a269d3b8ef9ee8850a800110bad1f7dc949187fecffa8b9779e95bb8ce0491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a269d3b8ef9ee8850a800110bad1f7dc949187fecffa8b9779e95bb8ce0491->enter($__internal_e2a269d3b8ef9ee8850a800110bad1f7dc949187fecffa8b9779e95bb8ce0491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9235adb43169da9095289eae376f09aa44666c3a8c8d0e342f549f913257506a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9235adb43169da9095289eae376f09aa44666c3a8c8d0e342f549f913257506a->enter($__internal_9235adb43169da9095289eae376f09aa44666c3a8c8d0e342f549f913257506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9235adb43169da9095289eae376f09aa44666c3a8c8d0e342f549f913257506a->leave($__internal_9235adb43169da9095289eae376f09aa44666c3a8c8d0e342f549f913257506a_prof);

        
        $__internal_e2a269d3b8ef9ee8850a800110bad1f7dc949187fecffa8b9779e95bb8ce0491->leave($__internal_e2a269d3b8ef9ee8850a800110bad1f7dc949187fecffa8b9779e95bb8ce0491_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_803de8a1fd0f0fb494fd66d36984880edbc52e0aa16aaef310da633dbdff0367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803de8a1fd0f0fb494fd66d36984880edbc52e0aa16aaef310da633dbdff0367->enter($__internal_803de8a1fd0f0fb494fd66d36984880edbc52e0aa16aaef310da633dbdff0367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b95c6c3871bf7c053da76294982ea0a2e8d67ab82be86d770c2f24c4de22d166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95c6c3871bf7c053da76294982ea0a2e8d67ab82be86d770c2f24c4de22d166->enter($__internal_b95c6c3871bf7c053da76294982ea0a2e8d67ab82be86d770c2f24c4de22d166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b95c6c3871bf7c053da76294982ea0a2e8d67ab82be86d770c2f24c4de22d166->leave($__internal_b95c6c3871bf7c053da76294982ea0a2e8d67ab82be86d770c2f24c4de22d166_prof);

        
        $__internal_803de8a1fd0f0fb494fd66d36984880edbc52e0aa16aaef310da633dbdff0367->leave($__internal_803de8a1fd0f0fb494fd66d36984880edbc52e0aa16aaef310da633dbdff0367_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6856af4ca17f04516f5460d1dd5ed1cf3595d3dc00239e579d78da1a671a5beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6856af4ca17f04516f5460d1dd5ed1cf3595d3dc00239e579d78da1a671a5beb->enter($__internal_6856af4ca17f04516f5460d1dd5ed1cf3595d3dc00239e579d78da1a671a5beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d067eafed90cafece9ccd2a9e84dcab92e0148e7afa73b0dbc17f1f1d4f1960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d067eafed90cafece9ccd2a9e84dcab92e0148e7afa73b0dbc17f1f1d4f1960->enter($__internal_1d067eafed90cafece9ccd2a9e84dcab92e0148e7afa73b0dbc17f1f1d4f1960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1d067eafed90cafece9ccd2a9e84dcab92e0148e7afa73b0dbc17f1f1d4f1960->leave($__internal_1d067eafed90cafece9ccd2a9e84dcab92e0148e7afa73b0dbc17f1f1d4f1960_prof);

        
        $__internal_6856af4ca17f04516f5460d1dd5ed1cf3595d3dc00239e579d78da1a671a5beb->leave($__internal_6856af4ca17f04516f5460d1dd5ed1cf3595d3dc00239e579d78da1a671a5beb_prof);

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
