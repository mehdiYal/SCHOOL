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
        $__internal_22252ce474acb7c6881a96db224149d4646a14dfe818463e15e69058a134843a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22252ce474acb7c6881a96db224149d4646a14dfe818463e15e69058a134843a->enter($__internal_22252ce474acb7c6881a96db224149d4646a14dfe818463e15e69058a134843a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ef907a4867fe6ce5f82429408b3f083dbc411ffca668aaabc30b0039afe8e53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef907a4867fe6ce5f82429408b3f083dbc411ffca668aaabc30b0039afe8e53e->enter($__internal_ef907a4867fe6ce5f82429408b3f083dbc411ffca668aaabc30b0039afe8e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22252ce474acb7c6881a96db224149d4646a14dfe818463e15e69058a134843a->leave($__internal_22252ce474acb7c6881a96db224149d4646a14dfe818463e15e69058a134843a_prof);

        
        $__internal_ef907a4867fe6ce5f82429408b3f083dbc411ffca668aaabc30b0039afe8e53e->leave($__internal_ef907a4867fe6ce5f82429408b3f083dbc411ffca668aaabc30b0039afe8e53e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00bfb3da82e73f30051471c37530fd9b1246dd26f3353f8ffa94cf7ff34b3ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bfb3da82e73f30051471c37530fd9b1246dd26f3353f8ffa94cf7ff34b3ce8->enter($__internal_00bfb3da82e73f30051471c37530fd9b1246dd26f3353f8ffa94cf7ff34b3ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91903bfbe978dd60b3d76ccff61f004540932a438e6fd5f840a38f45758daf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91903bfbe978dd60b3d76ccff61f004540932a438e6fd5f840a38f45758daf34->enter($__internal_91903bfbe978dd60b3d76ccff61f004540932a438e6fd5f840a38f45758daf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91903bfbe978dd60b3d76ccff61f004540932a438e6fd5f840a38f45758daf34->leave($__internal_91903bfbe978dd60b3d76ccff61f004540932a438e6fd5f840a38f45758daf34_prof);

        
        $__internal_00bfb3da82e73f30051471c37530fd9b1246dd26f3353f8ffa94cf7ff34b3ce8->leave($__internal_00bfb3da82e73f30051471c37530fd9b1246dd26f3353f8ffa94cf7ff34b3ce8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fad340c52e2780d17040aced857aef13959e7264299fdf0984baf7e9e9e5d32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad340c52e2780d17040aced857aef13959e7264299fdf0984baf7e9e9e5d32d->enter($__internal_fad340c52e2780d17040aced857aef13959e7264299fdf0984baf7e9e9e5d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bce78eb2ef23b815e9797b73240a617cdc19c1127cff6842bf64de14f211231a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce78eb2ef23b815e9797b73240a617cdc19c1127cff6842bf64de14f211231a->enter($__internal_bce78eb2ef23b815e9797b73240a617cdc19c1127cff6842bf64de14f211231a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bce78eb2ef23b815e9797b73240a617cdc19c1127cff6842bf64de14f211231a->leave($__internal_bce78eb2ef23b815e9797b73240a617cdc19c1127cff6842bf64de14f211231a_prof);

        
        $__internal_fad340c52e2780d17040aced857aef13959e7264299fdf0984baf7e9e9e5d32d->leave($__internal_fad340c52e2780d17040aced857aef13959e7264299fdf0984baf7e9e9e5d32d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebb401be7749757056dd533b292e9e17125076c68ce5d636030043e6196d278b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb401be7749757056dd533b292e9e17125076c68ce5d636030043e6196d278b->enter($__internal_ebb401be7749757056dd533b292e9e17125076c68ce5d636030043e6196d278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d33e6574e2fa69b0c09d050c828ec01d048850302c8048506f0535be3c101725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33e6574e2fa69b0c09d050c828ec01d048850302c8048506f0535be3c101725->enter($__internal_d33e6574e2fa69b0c09d050c828ec01d048850302c8048506f0535be3c101725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d33e6574e2fa69b0c09d050c828ec01d048850302c8048506f0535be3c101725->leave($__internal_d33e6574e2fa69b0c09d050c828ec01d048850302c8048506f0535be3c101725_prof);

        
        $__internal_ebb401be7749757056dd533b292e9e17125076c68ce5d636030043e6196d278b->leave($__internal_ebb401be7749757056dd533b292e9e17125076c68ce5d636030043e6196d278b_prof);

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
