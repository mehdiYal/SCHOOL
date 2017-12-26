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
        $__internal_c37266b71cd5df93df22b6b7e9469739807c0f2da0ab2533b46ef21fdbdc27d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37266b71cd5df93df22b6b7e9469739807c0f2da0ab2533b46ef21fdbdc27d4->enter($__internal_c37266b71cd5df93df22b6b7e9469739807c0f2da0ab2533b46ef21fdbdc27d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_22e0937358cda2e1cd5649befd4931a2fdfd4073faa9f11642364e8258e2e9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e0937358cda2e1cd5649befd4931a2fdfd4073faa9f11642364e8258e2e9ab->enter($__internal_22e0937358cda2e1cd5649befd4931a2fdfd4073faa9f11642364e8258e2e9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37266b71cd5df93df22b6b7e9469739807c0f2da0ab2533b46ef21fdbdc27d4->leave($__internal_c37266b71cd5df93df22b6b7e9469739807c0f2da0ab2533b46ef21fdbdc27d4_prof);

        
        $__internal_22e0937358cda2e1cd5649befd4931a2fdfd4073faa9f11642364e8258e2e9ab->leave($__internal_22e0937358cda2e1cd5649befd4931a2fdfd4073faa9f11642364e8258e2e9ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a3a5672411b316664bb28ea8a399e255647245eba52a61a3eaf56682bf28ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a3a5672411b316664bb28ea8a399e255647245eba52a61a3eaf56682bf28ff->enter($__internal_28a3a5672411b316664bb28ea8a399e255647245eba52a61a3eaf56682bf28ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7123568894197c47f8f30f2dc8365f10cdc54280ce1f4d79c45abb2d3c8c5896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7123568894197c47f8f30f2dc8365f10cdc54280ce1f4d79c45abb2d3c8c5896->enter($__internal_7123568894197c47f8f30f2dc8365f10cdc54280ce1f4d79c45abb2d3c8c5896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7123568894197c47f8f30f2dc8365f10cdc54280ce1f4d79c45abb2d3c8c5896->leave($__internal_7123568894197c47f8f30f2dc8365f10cdc54280ce1f4d79c45abb2d3c8c5896_prof);

        
        $__internal_28a3a5672411b316664bb28ea8a399e255647245eba52a61a3eaf56682bf28ff->leave($__internal_28a3a5672411b316664bb28ea8a399e255647245eba52a61a3eaf56682bf28ff_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a1c558159c1e0e7581b65ff30c0d4b9ac42fb003d0fbbd26b390baf8afa1f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1c558159c1e0e7581b65ff30c0d4b9ac42fb003d0fbbd26b390baf8afa1f6c->enter($__internal_4a1c558159c1e0e7581b65ff30c0d4b9ac42fb003d0fbbd26b390baf8afa1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19a96527a530a06b42bafcbd70621e683b8b4d75337f1d1be721211eb524d740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a96527a530a06b42bafcbd70621e683b8b4d75337f1d1be721211eb524d740->enter($__internal_19a96527a530a06b42bafcbd70621e683b8b4d75337f1d1be721211eb524d740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_19a96527a530a06b42bafcbd70621e683b8b4d75337f1d1be721211eb524d740->leave($__internal_19a96527a530a06b42bafcbd70621e683b8b4d75337f1d1be721211eb524d740_prof);

        
        $__internal_4a1c558159c1e0e7581b65ff30c0d4b9ac42fb003d0fbbd26b390baf8afa1f6c->leave($__internal_4a1c558159c1e0e7581b65ff30c0d4b9ac42fb003d0fbbd26b390baf8afa1f6c_prof);

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
