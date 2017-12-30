<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_a97c8390981f1a14046b63946328084e834a6f2bf97d7a1ef6bb1701a057a3bf extends Twig_Template
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
        $__internal_847f868553dc71f2a1b61684243993593c908588f47bb4d41cc1232570bdb378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847f868553dc71f2a1b61684243993593c908588f47bb4d41cc1232570bdb378->enter($__internal_847f868553dc71f2a1b61684243993593c908588f47bb4d41cc1232570bdb378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_93acf2a9a9a3c15005ff4448e6c2dfb936d374da3dba2a94454cf808bd114cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93acf2a9a9a3c15005ff4448e6c2dfb936d374da3dba2a94454cf808bd114cb6->enter($__internal_93acf2a9a9a3c15005ff4448e6c2dfb936d374da3dba2a94454cf808bd114cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847f868553dc71f2a1b61684243993593c908588f47bb4d41cc1232570bdb378->leave($__internal_847f868553dc71f2a1b61684243993593c908588f47bb4d41cc1232570bdb378_prof);

        
        $__internal_93acf2a9a9a3c15005ff4448e6c2dfb936d374da3dba2a94454cf808bd114cb6->leave($__internal_93acf2a9a9a3c15005ff4448e6c2dfb936d374da3dba2a94454cf808bd114cb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c097485be995321f1417f9b10d7bd26effa3fbabd7b56d455d7f4962533fb206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c097485be995321f1417f9b10d7bd26effa3fbabd7b56d455d7f4962533fb206->enter($__internal_c097485be995321f1417f9b10d7bd26effa3fbabd7b56d455d7f4962533fb206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a7f4634ce499e171261561017e69553d07472573754c9e2d83c649232e9759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7f4634ce499e171261561017e69553d07472573754c9e2d83c649232e9759a->enter($__internal_1a7f4634ce499e171261561017e69553d07472573754c9e2d83c649232e9759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a7f4634ce499e171261561017e69553d07472573754c9e2d83c649232e9759a->leave($__internal_1a7f4634ce499e171261561017e69553d07472573754c9e2d83c649232e9759a_prof);

        
        $__internal_c097485be995321f1417f9b10d7bd26effa3fbabd7b56d455d7f4962533fb206->leave($__internal_c097485be995321f1417f9b10d7bd26effa3fbabd7b56d455d7f4962533fb206_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bd70ffdd4c9d7aab35f4d3c65fe8b946485c9cba8ab9b9242216fc4c3afd74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd70ffdd4c9d7aab35f4d3c65fe8b946485c9cba8ab9b9242216fc4c3afd74e->enter($__internal_9bd70ffdd4c9d7aab35f4d3c65fe8b946485c9cba8ab9b9242216fc4c3afd74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d9d22e7475934c3817398fd8a81369badfb40194e0e307a00cc38a991b2b7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9d22e7475934c3817398fd8a81369badfb40194e0e307a00cc38a991b2b7db->enter($__internal_3d9d22e7475934c3817398fd8a81369badfb40194e0e307a00cc38a991b2b7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_3d9d22e7475934c3817398fd8a81369badfb40194e0e307a00cc38a991b2b7db->leave($__internal_3d9d22e7475934c3817398fd8a81369badfb40194e0e307a00cc38a991b2b7db_prof);

        
        $__internal_9bd70ffdd4c9d7aab35f4d3c65fe8b946485c9cba8ab9b9242216fc4c3afd74e->leave($__internal_9bd70ffdd4c9d7aab35f4d3c65fe8b946485c9cba8ab9b9242216fc4c3afd74e_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
