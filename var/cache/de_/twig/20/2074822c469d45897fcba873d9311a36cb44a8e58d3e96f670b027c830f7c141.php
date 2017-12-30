<?php

/* default/index.html.twig */
class __TwigTemplate_c86b617341ffc84d36c675e449fa7947dbf0c73bd39760d0fdc5e2ef6192c2f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a3a2010d19e94bcfa3a44a7e3f1785a3c9f3bf52c3c126b18ff3cc10338f9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3a2010d19e94bcfa3a44a7e3f1785a3c9f3bf52c3c126b18ff3cc10338f9f8->enter($__internal_0a3a2010d19e94bcfa3a44a7e3f1785a3c9f3bf52c3c126b18ff3cc10338f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_51f29d389690ec7ff7880f74e3545976ca2625bff7c59330ede8daebae5cff34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f29d389690ec7ff7880f74e3545976ca2625bff7c59330ede8daebae5cff34->enter($__internal_51f29d389690ec7ff7880f74e3545976ca2625bff7c59330ede8daebae5cff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a3a2010d19e94bcfa3a44a7e3f1785a3c9f3bf52c3c126b18ff3cc10338f9f8->leave($__internal_0a3a2010d19e94bcfa3a44a7e3f1785a3c9f3bf52c3c126b18ff3cc10338f9f8_prof);

        
        $__internal_51f29d389690ec7ff7880f74e3545976ca2625bff7c59330ede8daebae5cff34->leave($__internal_51f29d389690ec7ff7880f74e3545976ca2625bff7c59330ede8daebae5cff34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c3736cb604646945d0234370e15ba75931386fec21cb47f0a92de63c3ca6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c3736cb604646945d0234370e15ba75931386fec21cb47f0a92de63c3ca6fb->enter($__internal_b8c3736cb604646945d0234370e15ba75931386fec21cb47f0a92de63c3ca6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c57a12dc0fb77224596773333ea5b21487b6a7f12d567cd981a73c475f1ab471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57a12dc0fb77224596773333ea5b21487b6a7f12d567cd981a73c475f1ab471->enter($__internal_c57a12dc0fb77224596773333ea5b21487b6a7f12d567cd981a73c475f1ab471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_c57a12dc0fb77224596773333ea5b21487b6a7f12d567cd981a73c475f1ab471->leave($__internal_c57a12dc0fb77224596773333ea5b21487b6a7f12d567cd981a73c475f1ab471_prof);

        
        $__internal_b8c3736cb604646945d0234370e15ba75931386fec21cb47f0a92de63c3ca6fb->leave($__internal_b8c3736cb604646945d0234370e15ba75931386fec21cb47f0a92de63c3ca6fb_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\default\\index.html.twig");
    }
}
