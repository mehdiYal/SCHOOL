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
        $__internal_20e48fa139200c57868d380e6c18228e1efa4a7a5ee2b6795e3679c732d0a827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e48fa139200c57868d380e6c18228e1efa4a7a5ee2b6795e3679c732d0a827->enter($__internal_20e48fa139200c57868d380e6c18228e1efa4a7a5ee2b6795e3679c732d0a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b2e53b2f2bec8b21b140dbcb3a682b685cd8b30a927c1f6a2a27c9b9a8fe0936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e53b2f2bec8b21b140dbcb3a682b685cd8b30a927c1f6a2a27c9b9a8fe0936->enter($__internal_b2e53b2f2bec8b21b140dbcb3a682b685cd8b30a927c1f6a2a27c9b9a8fe0936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e48fa139200c57868d380e6c18228e1efa4a7a5ee2b6795e3679c732d0a827->leave($__internal_20e48fa139200c57868d380e6c18228e1efa4a7a5ee2b6795e3679c732d0a827_prof);

        
        $__internal_b2e53b2f2bec8b21b140dbcb3a682b685cd8b30a927c1f6a2a27c9b9a8fe0936->leave($__internal_b2e53b2f2bec8b21b140dbcb3a682b685cd8b30a927c1f6a2a27c9b9a8fe0936_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4128b0a6961b0c34eef99b44c5029bd96d7569b60e34da9dd0b1e2fedf3a159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4128b0a6961b0c34eef99b44c5029bd96d7569b60e34da9dd0b1e2fedf3a159->enter($__internal_c4128b0a6961b0c34eef99b44c5029bd96d7569b60e34da9dd0b1e2fedf3a159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3d2c9f8b44abcc2cbba8d2483df4df6c83f54f027e7e5d93a05d9a76427d9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d2c9f8b44abcc2cbba8d2483df4df6c83f54f027e7e5d93a05d9a76427d9e1->enter($__internal_d3d2c9f8b44abcc2cbba8d2483df4df6c83f54f027e7e5d93a05d9a76427d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3d2c9f8b44abcc2cbba8d2483df4df6c83f54f027e7e5d93a05d9a76427d9e1->leave($__internal_d3d2c9f8b44abcc2cbba8d2483df4df6c83f54f027e7e5d93a05d9a76427d9e1_prof);

        
        $__internal_c4128b0a6961b0c34eef99b44c5029bd96d7569b60e34da9dd0b1e2fedf3a159->leave($__internal_c4128b0a6961b0c34eef99b44c5029bd96d7569b60e34da9dd0b1e2fedf3a159_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2626afc30a63353255741e9c07a82922c6442a689c17a9287ee556f3823f915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2626afc30a63353255741e9c07a82922c6442a689c17a9287ee556f3823f915->enter($__internal_b2626afc30a63353255741e9c07a82922c6442a689c17a9287ee556f3823f915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4cfd114e6af37a555eaa9adfad90860dc3eb61278591629f54753959c237f5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfd114e6af37a555eaa9adfad90860dc3eb61278591629f54753959c237f5f0->enter($__internal_4cfd114e6af37a555eaa9adfad90860dc3eb61278591629f54753959c237f5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4cfd114e6af37a555eaa9adfad90860dc3eb61278591629f54753959c237f5f0->leave($__internal_4cfd114e6af37a555eaa9adfad90860dc3eb61278591629f54753959c237f5f0_prof);

        
        $__internal_b2626afc30a63353255741e9c07a82922c6442a689c17a9287ee556f3823f915->leave($__internal_b2626afc30a63353255741e9c07a82922c6442a689c17a9287ee556f3823f915_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bd0111e5456828208d7c9bd51e54a01e9469d16690a7c7c803cb29a4d537881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd0111e5456828208d7c9bd51e54a01e9469d16690a7c7c803cb29a4d537881->enter($__internal_3bd0111e5456828208d7c9bd51e54a01e9469d16690a7c7c803cb29a4d537881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9435ae3e13f4d57f97d90d4e7ca708d6271b4943e2af97dfb88f71af005c56c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9435ae3e13f4d57f97d90d4e7ca708d6271b4943e2af97dfb88f71af005c56c2->enter($__internal_9435ae3e13f4d57f97d90d4e7ca708d6271b4943e2af97dfb88f71af005c56c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9435ae3e13f4d57f97d90d4e7ca708d6271b4943e2af97dfb88f71af005c56c2->leave($__internal_9435ae3e13f4d57f97d90d4e7ca708d6271b4943e2af97dfb88f71af005c56c2_prof);

        
        $__internal_3bd0111e5456828208d7c9bd51e54a01e9469d16690a7c7c803cb29a4d537881->leave($__internal_3bd0111e5456828208d7c9bd51e54a01e9469d16690a7c7c803cb29a4d537881_prof);

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
