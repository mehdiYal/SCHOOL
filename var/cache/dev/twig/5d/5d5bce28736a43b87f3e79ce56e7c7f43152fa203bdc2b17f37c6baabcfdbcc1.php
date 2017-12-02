<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3425f4f0f6d86161d75d5629198e0a31e20203a2b195dad2fe3d742b8cc175c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce94e09d01c3ed656d5ed0f2e9baed4073ff9fb8f43bf775ed4cc158a05c0f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce94e09d01c3ed656d5ed0f2e9baed4073ff9fb8f43bf775ed4cc158a05c0f99->enter($__internal_ce94e09d01c3ed656d5ed0f2e9baed4073ff9fb8f43bf775ed4cc158a05c0f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a1610e75af471c5f47256f611e7d10a28b0b851d168688382114d95b00bfdd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1610e75af471c5f47256f611e7d10a28b0b851d168688382114d95b00bfdd85->enter($__internal_a1610e75af471c5f47256f611e7d10a28b0b851d168688382114d95b00bfdd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce94e09d01c3ed656d5ed0f2e9baed4073ff9fb8f43bf775ed4cc158a05c0f99->leave($__internal_ce94e09d01c3ed656d5ed0f2e9baed4073ff9fb8f43bf775ed4cc158a05c0f99_prof);

        
        $__internal_a1610e75af471c5f47256f611e7d10a28b0b851d168688382114d95b00bfdd85->leave($__internal_a1610e75af471c5f47256f611e7d10a28b0b851d168688382114d95b00bfdd85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_655e1b76c3ea145c1282794cce5b0d7805d33249401af8591708dc899d78600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655e1b76c3ea145c1282794cce5b0d7805d33249401af8591708dc899d78600e->enter($__internal_655e1b76c3ea145c1282794cce5b0d7805d33249401af8591708dc899d78600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0adc7873b6d15bab5ff4923af7d0ba337dd974ec093568a9893db50108b32c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adc7873b6d15bab5ff4923af7d0ba337dd974ec093568a9893db50108b32c3d->enter($__internal_0adc7873b6d15bab5ff4923af7d0ba337dd974ec093568a9893db50108b32c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0adc7873b6d15bab5ff4923af7d0ba337dd974ec093568a9893db50108b32c3d->leave($__internal_0adc7873b6d15bab5ff4923af7d0ba337dd974ec093568a9893db50108b32c3d_prof);

        
        $__internal_655e1b76c3ea145c1282794cce5b0d7805d33249401af8591708dc899d78600e->leave($__internal_655e1b76c3ea145c1282794cce5b0d7805d33249401af8591708dc899d78600e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ec4e3a5f859bb146b0d8a9bb51beba0bb2917a11e09954e46d5aaf42769d67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec4e3a5f859bb146b0d8a9bb51beba0bb2917a11e09954e46d5aaf42769d67e->enter($__internal_6ec4e3a5f859bb146b0d8a9bb51beba0bb2917a11e09954e46d5aaf42769d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2eb0bad9689ef2b42990d16a66c1e2b54e09e7965df8d2629f8b7beb9aa021fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb0bad9689ef2b42990d16a66c1e2b54e09e7965df8d2629f8b7beb9aa021fd->enter($__internal_2eb0bad9689ef2b42990d16a66c1e2b54e09e7965df8d2629f8b7beb9aa021fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_2eb0bad9689ef2b42990d16a66c1e2b54e09e7965df8d2629f8b7beb9aa021fd->leave($__internal_2eb0bad9689ef2b42990d16a66c1e2b54e09e7965df8d2629f8b7beb9aa021fd_prof);

        
        $__internal_6ec4e3a5f859bb146b0d8a9bb51beba0bb2917a11e09954e46d5aaf42769d67e->leave($__internal_6ec4e3a5f859bb146b0d8a9bb51beba0bb2917a11e09954e46d5aaf42769d67e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  88 => 14,  85 => 13,  79 => 12,  70 => 9,  65 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
            {% block fos_user_content %}
            {% endblock fos_user_content %}
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
