<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_02359a8f86e61a40a03a3e14d5524feea97b5cef5e939126986cd5881a7c48fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a1bd04cf430599a145f246ff24f6506f0c5c488b7598c08a5eafe3bc4ee2ac33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1bd04cf430599a145f246ff24f6506f0c5c488b7598c08a5eafe3bc4ee2ac33->enter($__internal_a1bd04cf430599a145f246ff24f6506f0c5c488b7598c08a5eafe3bc4ee2ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1665e3bafadccda9b3bc2bb78c5ddcbbba74572e93c7d7c068367ea5839f6ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1665e3bafadccda9b3bc2bb78c5ddcbbba74572e93c7d7c068367ea5839f6ad5->enter($__internal_1665e3bafadccda9b3bc2bb78c5ddcbbba74572e93c7d7c068367ea5839f6ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bd04cf430599a145f246ff24f6506f0c5c488b7598c08a5eafe3bc4ee2ac33->leave($__internal_a1bd04cf430599a145f246ff24f6506f0c5c488b7598c08a5eafe3bc4ee2ac33_prof);

        
        $__internal_1665e3bafadccda9b3bc2bb78c5ddcbbba74572e93c7d7c068367ea5839f6ad5->leave($__internal_1665e3bafadccda9b3bc2bb78c5ddcbbba74572e93c7d7c068367ea5839f6ad5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c54ae2ba8567b7242ec7942267dcd5e9dd0d9ecd86360b46b35cf44ec9923c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c54ae2ba8567b7242ec7942267dcd5e9dd0d9ecd86360b46b35cf44ec9923c6->enter($__internal_4c54ae2ba8567b7242ec7942267dcd5e9dd0d9ecd86360b46b35cf44ec9923c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d460dac6524d3ae79dddf76cb37854b2722f1a3b92541fe2735567b6cedf998b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d460dac6524d3ae79dddf76cb37854b2722f1a3b92541fe2735567b6cedf998b->enter($__internal_d460dac6524d3ae79dddf76cb37854b2722f1a3b92541fe2735567b6cedf998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d460dac6524d3ae79dddf76cb37854b2722f1a3b92541fe2735567b6cedf998b->leave($__internal_d460dac6524d3ae79dddf76cb37854b2722f1a3b92541fe2735567b6cedf998b_prof);

        
        $__internal_4c54ae2ba8567b7242ec7942267dcd5e9dd0d9ecd86360b46b35cf44ec9923c6->leave($__internal_4c54ae2ba8567b7242ec7942267dcd5e9dd0d9ecd86360b46b35cf44ec9923c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02ea3304717307a0acbaa3da29674b328d626b2bb5f59a8a74351f478659f426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ea3304717307a0acbaa3da29674b328d626b2bb5f59a8a74351f478659f426->enter($__internal_02ea3304717307a0acbaa3da29674b328d626b2bb5f59a8a74351f478659f426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60f04e7955ab465ea10b7443c2605f556eb6ebb9f3d54cf368294e267887de37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f04e7955ab465ea10b7443c2605f556eb6ebb9f3d54cf368294e267887de37->enter($__internal_60f04e7955ab465ea10b7443c2605f556eb6ebb9f3d54cf368294e267887de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60f04e7955ab465ea10b7443c2605f556eb6ebb9f3d54cf368294e267887de37->leave($__internal_60f04e7955ab465ea10b7443c2605f556eb6ebb9f3d54cf368294e267887de37_prof);

        
        $__internal_02ea3304717307a0acbaa3da29674b328d626b2bb5f59a8a74351f478659f426->leave($__internal_02ea3304717307a0acbaa3da29674b328d626b2bb5f59a8a74351f478659f426_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_711aa19aac531d2e232505ed762034f37240257e3581641b95eba372dff2dbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711aa19aac531d2e232505ed762034f37240257e3581641b95eba372dff2dbf8->enter($__internal_711aa19aac531d2e232505ed762034f37240257e3581641b95eba372dff2dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c762d0088ac112d8436452935e55ccd690cae56c9087b6f8626e638e96f8596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c762d0088ac112d8436452935e55ccd690cae56c9087b6f8626e638e96f8596->enter($__internal_8c762d0088ac112d8436452935e55ccd690cae56c9087b6f8626e638e96f8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c762d0088ac112d8436452935e55ccd690cae56c9087b6f8626e638e96f8596->leave($__internal_8c762d0088ac112d8436452935e55ccd690cae56c9087b6f8626e638e96f8596_prof);

        
        $__internal_711aa19aac531d2e232505ed762034f37240257e3581641b95eba372dff2dbf8->leave($__internal_711aa19aac531d2e232505ed762034f37240257e3581641b95eba372dff2dbf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
