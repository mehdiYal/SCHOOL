<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5187bd2f47a43d0d4dcf4cd93268fc6fe9f9d736381a53361a7996b360a7bbd1 extends Twig_Template
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
        $__internal_a5fdc7d501a9c3ae5bc583560977285e116e55060c488c7b6feba73a983a0af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fdc7d501a9c3ae5bc583560977285e116e55060c488c7b6feba73a983a0af8->enter($__internal_a5fdc7d501a9c3ae5bc583560977285e116e55060c488c7b6feba73a983a0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_353bb3b2c44420be1cc39a1b249122f8bf6488bbbf0e40613475750a85b17a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353bb3b2c44420be1cc39a1b249122f8bf6488bbbf0e40613475750a85b17a9a->enter($__internal_353bb3b2c44420be1cc39a1b249122f8bf6488bbbf0e40613475750a85b17a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5fdc7d501a9c3ae5bc583560977285e116e55060c488c7b6feba73a983a0af8->leave($__internal_a5fdc7d501a9c3ae5bc583560977285e116e55060c488c7b6feba73a983a0af8_prof);

        
        $__internal_353bb3b2c44420be1cc39a1b249122f8bf6488bbbf0e40613475750a85b17a9a->leave($__internal_353bb3b2c44420be1cc39a1b249122f8bf6488bbbf0e40613475750a85b17a9a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e426ccab671ef9311ff76e5171b0cdef36fe951d25379b093a5540134f09ef14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e426ccab671ef9311ff76e5171b0cdef36fe951d25379b093a5540134f09ef14->enter($__internal_e426ccab671ef9311ff76e5171b0cdef36fe951d25379b093a5540134f09ef14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3250fc2dd204f7ca9177ae0aa8200d019ef958d06c409c8968ed216f41650ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3250fc2dd204f7ca9177ae0aa8200d019ef958d06c409c8968ed216f41650ff->enter($__internal_f3250fc2dd204f7ca9177ae0aa8200d019ef958d06c409c8968ed216f41650ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3250fc2dd204f7ca9177ae0aa8200d019ef958d06c409c8968ed216f41650ff->leave($__internal_f3250fc2dd204f7ca9177ae0aa8200d019ef958d06c409c8968ed216f41650ff_prof);

        
        $__internal_e426ccab671ef9311ff76e5171b0cdef36fe951d25379b093a5540134f09ef14->leave($__internal_e426ccab671ef9311ff76e5171b0cdef36fe951d25379b093a5540134f09ef14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed6c1003b8cff524d56e2fbe5004d04d7b971a4aa042bbd57a8735031fd910c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6c1003b8cff524d56e2fbe5004d04d7b971a4aa042bbd57a8735031fd910c5->enter($__internal_ed6c1003b8cff524d56e2fbe5004d04d7b971a4aa042bbd57a8735031fd910c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36fdf293666f1a7ee63e7a5b16da3fe3bca55ac01eef1914faa4b87abde59703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fdf293666f1a7ee63e7a5b16da3fe3bca55ac01eef1914faa4b87abde59703->enter($__internal_36fdf293666f1a7ee63e7a5b16da3fe3bca55ac01eef1914faa4b87abde59703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36fdf293666f1a7ee63e7a5b16da3fe3bca55ac01eef1914faa4b87abde59703->leave($__internal_36fdf293666f1a7ee63e7a5b16da3fe3bca55ac01eef1914faa4b87abde59703_prof);

        
        $__internal_ed6c1003b8cff524d56e2fbe5004d04d7b971a4aa042bbd57a8735031fd910c5->leave($__internal_ed6c1003b8cff524d56e2fbe5004d04d7b971a4aa042bbd57a8735031fd910c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b77d78c195e76e0a3f498c1d970c08d51c4f427c7bcb60fb260e452a8f5b74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b77d78c195e76e0a3f498c1d970c08d51c4f427c7bcb60fb260e452a8f5b74f->enter($__internal_6b77d78c195e76e0a3f498c1d970c08d51c4f427c7bcb60fb260e452a8f5b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b88a5c47b95e8b212d07329892a67e541cc5ac846913859137c70f606789c2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88a5c47b95e8b212d07329892a67e541cc5ac846913859137c70f606789c2f5->enter($__internal_b88a5c47b95e8b212d07329892a67e541cc5ac846913859137c70f606789c2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b88a5c47b95e8b212d07329892a67e541cc5ac846913859137c70f606789c2f5->leave($__internal_b88a5c47b95e8b212d07329892a67e541cc5ac846913859137c70f606789c2f5_prof);

        
        $__internal_6b77d78c195e76e0a3f498c1d970c08d51c4f427c7bcb60fb260e452a8f5b74f->leave($__internal_6b77d78c195e76e0a3f498c1d970c08d51c4f427c7bcb60fb260e452a8f5b74f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
