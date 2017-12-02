<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_01052bda832ae79d2d6f7b5e2e26b7bd6f065ec3e6d71e8c649fd9bde8cc2850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01052bda832ae79d2d6f7b5e2e26b7bd6f065ec3e6d71e8c649fd9bde8cc2850->enter($__internal_01052bda832ae79d2d6f7b5e2e26b7bd6f065ec3e6d71e8c649fd9bde8cc2850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d2978f7f35c707d1a036527cc5ca0370500c4324ca164ab90322ab876d1e1328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2978f7f35c707d1a036527cc5ca0370500c4324ca164ab90322ab876d1e1328->enter($__internal_d2978f7f35c707d1a036527cc5ca0370500c4324ca164ab90322ab876d1e1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01052bda832ae79d2d6f7b5e2e26b7bd6f065ec3e6d71e8c649fd9bde8cc2850->leave($__internal_01052bda832ae79d2d6f7b5e2e26b7bd6f065ec3e6d71e8c649fd9bde8cc2850_prof);

        
        $__internal_d2978f7f35c707d1a036527cc5ca0370500c4324ca164ab90322ab876d1e1328->leave($__internal_d2978f7f35c707d1a036527cc5ca0370500c4324ca164ab90322ab876d1e1328_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df2a17d28766204073fb0886015dc94b7b70745372795528d43183ece58edeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2a17d28766204073fb0886015dc94b7b70745372795528d43183ece58edeca->enter($__internal_df2a17d28766204073fb0886015dc94b7b70745372795528d43183ece58edeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67f4224372d15a0d4a407caad61a4a791390c8a781a8b295a4c849e843fa6ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f4224372d15a0d4a407caad61a4a791390c8a781a8b295a4c849e843fa6ebd->enter($__internal_67f4224372d15a0d4a407caad61a4a791390c8a781a8b295a4c849e843fa6ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67f4224372d15a0d4a407caad61a4a791390c8a781a8b295a4c849e843fa6ebd->leave($__internal_67f4224372d15a0d4a407caad61a4a791390c8a781a8b295a4c849e843fa6ebd_prof);

        
        $__internal_df2a17d28766204073fb0886015dc94b7b70745372795528d43183ece58edeca->leave($__internal_df2a17d28766204073fb0886015dc94b7b70745372795528d43183ece58edeca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a80a9a2260ce08554aa2a7b53190b3705bda1ce0028d954cae2aca9b08a0eccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80a9a2260ce08554aa2a7b53190b3705bda1ce0028d954cae2aca9b08a0eccf->enter($__internal_a80a9a2260ce08554aa2a7b53190b3705bda1ce0028d954cae2aca9b08a0eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ca03601dbc3286748ac49b1d2c89a1a10816305ea39d000eaee2bbbbb3a3c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca03601dbc3286748ac49b1d2c89a1a10816305ea39d000eaee2bbbbb3a3c6f->enter($__internal_2ca03601dbc3286748ac49b1d2c89a1a10816305ea39d000eaee2bbbbb3a3c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ca03601dbc3286748ac49b1d2c89a1a10816305ea39d000eaee2bbbbb3a3c6f->leave($__internal_2ca03601dbc3286748ac49b1d2c89a1a10816305ea39d000eaee2bbbbb3a3c6f_prof);

        
        $__internal_a80a9a2260ce08554aa2a7b53190b3705bda1ce0028d954cae2aca9b08a0eccf->leave($__internal_a80a9a2260ce08554aa2a7b53190b3705bda1ce0028d954cae2aca9b08a0eccf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a55b2f3dfdf0c524d1c2fef29820800670008ff131b7d6e72e05389063989a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a55b2f3dfdf0c524d1c2fef29820800670008ff131b7d6e72e05389063989a6->enter($__internal_7a55b2f3dfdf0c524d1c2fef29820800670008ff131b7d6e72e05389063989a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94d80db72dc3b1d634620bbba5a1ade0f2ad21042531d15a70c9d62b595f9e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d80db72dc3b1d634620bbba5a1ade0f2ad21042531d15a70c9d62b595f9e15->enter($__internal_94d80db72dc3b1d634620bbba5a1ade0f2ad21042531d15a70c9d62b595f9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94d80db72dc3b1d634620bbba5a1ade0f2ad21042531d15a70c9d62b595f9e15->leave($__internal_94d80db72dc3b1d634620bbba5a1ade0f2ad21042531d15a70c9d62b595f9e15_prof);

        
        $__internal_7a55b2f3dfdf0c524d1c2fef29820800670008ff131b7d6e72e05389063989a6->leave($__internal_7a55b2f3dfdf0c524d1c2fef29820800670008ff131b7d6e72e05389063989a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
