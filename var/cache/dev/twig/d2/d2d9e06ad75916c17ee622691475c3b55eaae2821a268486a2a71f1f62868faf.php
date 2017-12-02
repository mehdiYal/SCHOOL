<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
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
        $__internal_4e136ea85bd93f85e89ce38243df466816db73862b46baca407d30326b7254e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e136ea85bd93f85e89ce38243df466816db73862b46baca407d30326b7254e0->enter($__internal_4e136ea85bd93f85e89ce38243df466816db73862b46baca407d30326b7254e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e2394230614e93efcb635f92d921db77e9e42e8bb94bf144675713b5bbe454c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2394230614e93efcb635f92d921db77e9e42e8bb94bf144675713b5bbe454c2->enter($__internal_e2394230614e93efcb635f92d921db77e9e42e8bb94bf144675713b5bbe454c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e136ea85bd93f85e89ce38243df466816db73862b46baca407d30326b7254e0->leave($__internal_4e136ea85bd93f85e89ce38243df466816db73862b46baca407d30326b7254e0_prof);

        
        $__internal_e2394230614e93efcb635f92d921db77e9e42e8bb94bf144675713b5bbe454c2->leave($__internal_e2394230614e93efcb635f92d921db77e9e42e8bb94bf144675713b5bbe454c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ec605006c8070f7367a071f4e54a3f91073353aa098c2be51b1a6c178bdf1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec605006c8070f7367a071f4e54a3f91073353aa098c2be51b1a6c178bdf1d1->enter($__internal_7ec605006c8070f7367a071f4e54a3f91073353aa098c2be51b1a6c178bdf1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e0cd2765ed75e5f58747127a7e51e2d4dc53848a4829a6535379fa6b339eec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0cd2765ed75e5f58747127a7e51e2d4dc53848a4829a6535379fa6b339eec1->enter($__internal_2e0cd2765ed75e5f58747127a7e51e2d4dc53848a4829a6535379fa6b339eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e0cd2765ed75e5f58747127a7e51e2d4dc53848a4829a6535379fa6b339eec1->leave($__internal_2e0cd2765ed75e5f58747127a7e51e2d4dc53848a4829a6535379fa6b339eec1_prof);

        
        $__internal_7ec605006c8070f7367a071f4e54a3f91073353aa098c2be51b1a6c178bdf1d1->leave($__internal_7ec605006c8070f7367a071f4e54a3f91073353aa098c2be51b1a6c178bdf1d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7f076d7bc3dae583bd28a0f388fc9d2ff0c3cea2a92e5eae946bee4d9b5c266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f076d7bc3dae583bd28a0f388fc9d2ff0c3cea2a92e5eae946bee4d9b5c266->enter($__internal_b7f076d7bc3dae583bd28a0f388fc9d2ff0c3cea2a92e5eae946bee4d9b5c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51e4ac21bab28df5765bb506388f24d9826711d0f901ab29eeff9b6b2171838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e4ac21bab28df5765bb506388f24d9826711d0f901ab29eeff9b6b2171838e->enter($__internal_51e4ac21bab28df5765bb506388f24d9826711d0f901ab29eeff9b6b2171838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51e4ac21bab28df5765bb506388f24d9826711d0f901ab29eeff9b6b2171838e->leave($__internal_51e4ac21bab28df5765bb506388f24d9826711d0f901ab29eeff9b6b2171838e_prof);

        
        $__internal_b7f076d7bc3dae583bd28a0f388fc9d2ff0c3cea2a92e5eae946bee4d9b5c266->leave($__internal_b7f076d7bc3dae583bd28a0f388fc9d2ff0c3cea2a92e5eae946bee4d9b5c266_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51d1952e64921dc080f2c7ab3e3d546b0b6479faf5309aa551143449e10e0965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d1952e64921dc080f2c7ab3e3d546b0b6479faf5309aa551143449e10e0965->enter($__internal_51d1952e64921dc080f2c7ab3e3d546b0b6479faf5309aa551143449e10e0965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_269bd65e42c432f3b87e139b7fed17860a02fff45952ddfe607e1874c1d8262b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269bd65e42c432f3b87e139b7fed17860a02fff45952ddfe607e1874c1d8262b->enter($__internal_269bd65e42c432f3b87e139b7fed17860a02fff45952ddfe607e1874c1d8262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_269bd65e42c432f3b87e139b7fed17860a02fff45952ddfe607e1874c1d8262b->leave($__internal_269bd65e42c432f3b87e139b7fed17860a02fff45952ddfe607e1874c1d8262b_prof);

        
        $__internal_51d1952e64921dc080f2c7ab3e3d546b0b6479faf5309aa551143449e10e0965->leave($__internal_51d1952e64921dc080f2c7ab3e3d546b0b6479faf5309aa551143449e10e0965_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
