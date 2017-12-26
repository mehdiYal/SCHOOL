<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c20ac8eb705bf74a9abfba345aca2bc2e1d27745093c6520970ac76ddc9a2dee extends Twig_Template
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
        $__internal_efd77a9a76b148bfc445b69b0df52274764d4299945b5c6c4f6298553be580e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd77a9a76b148bfc445b69b0df52274764d4299945b5c6c4f6298553be580e8->enter($__internal_efd77a9a76b148bfc445b69b0df52274764d4299945b5c6c4f6298553be580e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a146c975eecb8ffef56511c6e77d1b42fbc8f4b3a7bc52fe12d98ec74acd5297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a146c975eecb8ffef56511c6e77d1b42fbc8f4b3a7bc52fe12d98ec74acd5297->enter($__internal_a146c975eecb8ffef56511c6e77d1b42fbc8f4b3a7bc52fe12d98ec74acd5297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd77a9a76b148bfc445b69b0df52274764d4299945b5c6c4f6298553be580e8->leave($__internal_efd77a9a76b148bfc445b69b0df52274764d4299945b5c6c4f6298553be580e8_prof);

        
        $__internal_a146c975eecb8ffef56511c6e77d1b42fbc8f4b3a7bc52fe12d98ec74acd5297->leave($__internal_a146c975eecb8ffef56511c6e77d1b42fbc8f4b3a7bc52fe12d98ec74acd5297_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6a8940d586d1df539d7dc62e5cb78aad126076fbd7d90023c29c631f26ac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6a8940d586d1df539d7dc62e5cb78aad126076fbd7d90023c29c631f26ac7b->enter($__internal_8c6a8940d586d1df539d7dc62e5cb78aad126076fbd7d90023c29c631f26ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f13d26dd8e2629c42029421dc4a49fe441e5f3571c004736ab8e4eb3f1df7ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13d26dd8e2629c42029421dc4a49fe441e5f3571c004736ab8e4eb3f1df7ed4->enter($__internal_f13d26dd8e2629c42029421dc4a49fe441e5f3571c004736ab8e4eb3f1df7ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f13d26dd8e2629c42029421dc4a49fe441e5f3571c004736ab8e4eb3f1df7ed4->leave($__internal_f13d26dd8e2629c42029421dc4a49fe441e5f3571c004736ab8e4eb3f1df7ed4_prof);

        
        $__internal_8c6a8940d586d1df539d7dc62e5cb78aad126076fbd7d90023c29c631f26ac7b->leave($__internal_8c6a8940d586d1df539d7dc62e5cb78aad126076fbd7d90023c29c631f26ac7b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53adc31a87f5d0ff55f49afe3ecc210261ae52afe3999b7f88e3395498dc05af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53adc31a87f5d0ff55f49afe3ecc210261ae52afe3999b7f88e3395498dc05af->enter($__internal_53adc31a87f5d0ff55f49afe3ecc210261ae52afe3999b7f88e3395498dc05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_588b7277bfd10e876d008d2e0ad4aa1c1a66e31480bfc903f0dc2c3affeb9053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b7277bfd10e876d008d2e0ad4aa1c1a66e31480bfc903f0dc2c3affeb9053->enter($__internal_588b7277bfd10e876d008d2e0ad4aa1c1a66e31480bfc903f0dc2c3affeb9053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_588b7277bfd10e876d008d2e0ad4aa1c1a66e31480bfc903f0dc2c3affeb9053->leave($__internal_588b7277bfd10e876d008d2e0ad4aa1c1a66e31480bfc903f0dc2c3affeb9053_prof);

        
        $__internal_53adc31a87f5d0ff55f49afe3ecc210261ae52afe3999b7f88e3395498dc05af->leave($__internal_53adc31a87f5d0ff55f49afe3ecc210261ae52afe3999b7f88e3395498dc05af_prof);

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
