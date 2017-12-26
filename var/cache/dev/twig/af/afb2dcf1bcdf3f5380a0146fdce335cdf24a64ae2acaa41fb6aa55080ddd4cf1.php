<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5e18891d1aa3c128a8dcd16101c3cf00e5da1b35aa7a68ac2d6b6aa7a507921b extends Twig_Template
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
        $__internal_dc47796d318e79b7292e4911949f02d5f53a28460315f65d50d603e325530566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc47796d318e79b7292e4911949f02d5f53a28460315f65d50d603e325530566->enter($__internal_dc47796d318e79b7292e4911949f02d5f53a28460315f65d50d603e325530566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d93b8a938249194b6ca56b1f0b42fba41bfc448bd2b5ab822a036aec614da4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93b8a938249194b6ca56b1f0b42fba41bfc448bd2b5ab822a036aec614da4bc->enter($__internal_d93b8a938249194b6ca56b1f0b42fba41bfc448bd2b5ab822a036aec614da4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc47796d318e79b7292e4911949f02d5f53a28460315f65d50d603e325530566->leave($__internal_dc47796d318e79b7292e4911949f02d5f53a28460315f65d50d603e325530566_prof);

        
        $__internal_d93b8a938249194b6ca56b1f0b42fba41bfc448bd2b5ab822a036aec614da4bc->leave($__internal_d93b8a938249194b6ca56b1f0b42fba41bfc448bd2b5ab822a036aec614da4bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1556fd4e53f4d110a2f8249d4501c45706fdcd58c9d4625543438a411b57ff0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1556fd4e53f4d110a2f8249d4501c45706fdcd58c9d4625543438a411b57ff0b->enter($__internal_1556fd4e53f4d110a2f8249d4501c45706fdcd58c9d4625543438a411b57ff0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fc15cbb2be3de8b40e3df0222955c72dc0f3a712358cc0d626f1cf6b1a6b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc15cbb2be3de8b40e3df0222955c72dc0f3a712358cc0d626f1cf6b1a6b3d6->enter($__internal_4fc15cbb2be3de8b40e3df0222955c72dc0f3a712358cc0d626f1cf6b1a6b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4fc15cbb2be3de8b40e3df0222955c72dc0f3a712358cc0d626f1cf6b1a6b3d6->leave($__internal_4fc15cbb2be3de8b40e3df0222955c72dc0f3a712358cc0d626f1cf6b1a6b3d6_prof);

        
        $__internal_1556fd4e53f4d110a2f8249d4501c45706fdcd58c9d4625543438a411b57ff0b->leave($__internal_1556fd4e53f4d110a2f8249d4501c45706fdcd58c9d4625543438a411b57ff0b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f53f57f9ea7e97b08fec7a4891da6ebc002b8492cd7b0d087887b5de21a95b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f53f57f9ea7e97b08fec7a4891da6ebc002b8492cd7b0d087887b5de21a95b5->enter($__internal_4f53f57f9ea7e97b08fec7a4891da6ebc002b8492cd7b0d087887b5de21a95b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78c77cd131736b3ecdf0a8225be7b7b40e0a966be028419784ca29638e7027ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c77cd131736b3ecdf0a8225be7b7b40e0a966be028419784ca29638e7027ce->enter($__internal_78c77cd131736b3ecdf0a8225be7b7b40e0a966be028419784ca29638e7027ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_78c77cd131736b3ecdf0a8225be7b7b40e0a966be028419784ca29638e7027ce->leave($__internal_78c77cd131736b3ecdf0a8225be7b7b40e0a966be028419784ca29638e7027ce_prof);

        
        $__internal_4f53f57f9ea7e97b08fec7a4891da6ebc002b8492cd7b0d087887b5de21a95b5->leave($__internal_4f53f57f9ea7e97b08fec7a4891da6ebc002b8492cd7b0d087887b5de21a95b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c0e1aa517469aad37c4b416c97d935caadc749a337cdd888b9e5a50612bdfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0e1aa517469aad37c4b416c97d935caadc749a337cdd888b9e5a50612bdfad->enter($__internal_2c0e1aa517469aad37c4b416c97d935caadc749a337cdd888b9e5a50612bdfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d4c6f88ba75b7c70905d1faa970c1f011e3630698d2beb5a78c7da17686b698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4c6f88ba75b7c70905d1faa970c1f011e3630698d2beb5a78c7da17686b698->enter($__internal_9d4c6f88ba75b7c70905d1faa970c1f011e3630698d2beb5a78c7da17686b698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9d4c6f88ba75b7c70905d1faa970c1f011e3630698d2beb5a78c7da17686b698->leave($__internal_9d4c6f88ba75b7c70905d1faa970c1f011e3630698d2beb5a78c7da17686b698_prof);

        
        $__internal_2c0e1aa517469aad37c4b416c97d935caadc749a337cdd888b9e5a50612bdfad->leave($__internal_2c0e1aa517469aad37c4b416c97d935caadc749a337cdd888b9e5a50612bdfad_prof);

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
