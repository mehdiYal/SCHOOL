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
        $__internal_eecc20834267221392e7a6ebb12028ba52945938cedd215c0fa5cc9509fd154d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecc20834267221392e7a6ebb12028ba52945938cedd215c0fa5cc9509fd154d->enter($__internal_eecc20834267221392e7a6ebb12028ba52945938cedd215c0fa5cc9509fd154d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_52badd5f518c127c297380dc1cd1bedfec4be65a0601f1185ca314b303d41250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52badd5f518c127c297380dc1cd1bedfec4be65a0601f1185ca314b303d41250->enter($__internal_52badd5f518c127c297380dc1cd1bedfec4be65a0601f1185ca314b303d41250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecc20834267221392e7a6ebb12028ba52945938cedd215c0fa5cc9509fd154d->leave($__internal_eecc20834267221392e7a6ebb12028ba52945938cedd215c0fa5cc9509fd154d_prof);

        
        $__internal_52badd5f518c127c297380dc1cd1bedfec4be65a0601f1185ca314b303d41250->leave($__internal_52badd5f518c127c297380dc1cd1bedfec4be65a0601f1185ca314b303d41250_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e21cc422fab93b6e6ec5d9840abb3d69c2afea6074ebfc4d1d80a9723315a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e21cc422fab93b6e6ec5d9840abb3d69c2afea6074ebfc4d1d80a9723315a0->enter($__internal_42e21cc422fab93b6e6ec5d9840abb3d69c2afea6074ebfc4d1d80a9723315a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5b0c25a18332001b7d8791b8d8f637616eb0928547e66d5871ed4a2fb8b27f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b0c25a18332001b7d8791b8d8f637616eb0928547e66d5871ed4a2fb8b27f7->enter($__internal_c5b0c25a18332001b7d8791b8d8f637616eb0928547e66d5871ed4a2fb8b27f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5b0c25a18332001b7d8791b8d8f637616eb0928547e66d5871ed4a2fb8b27f7->leave($__internal_c5b0c25a18332001b7d8791b8d8f637616eb0928547e66d5871ed4a2fb8b27f7_prof);

        
        $__internal_42e21cc422fab93b6e6ec5d9840abb3d69c2afea6074ebfc4d1d80a9723315a0->leave($__internal_42e21cc422fab93b6e6ec5d9840abb3d69c2afea6074ebfc4d1d80a9723315a0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2929f9b8dbd1d4ff505d2e67f11eefb90243425e63bc06eb4294817f5a3c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2929f9b8dbd1d4ff505d2e67f11eefb90243425e63bc06eb4294817f5a3c847->enter($__internal_a2929f9b8dbd1d4ff505d2e67f11eefb90243425e63bc06eb4294817f5a3c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdedb2a5bc6ad45d83ccfc75027f4cb68a0c90b0ce4d3722a7e049c9c64c8144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdedb2a5bc6ad45d83ccfc75027f4cb68a0c90b0ce4d3722a7e049c9c64c8144->enter($__internal_fdedb2a5bc6ad45d83ccfc75027f4cb68a0c90b0ce4d3722a7e049c9c64c8144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_fdedb2a5bc6ad45d83ccfc75027f4cb68a0c90b0ce4d3722a7e049c9c64c8144->leave($__internal_fdedb2a5bc6ad45d83ccfc75027f4cb68a0c90b0ce4d3722a7e049c9c64c8144_prof);

        
        $__internal_a2929f9b8dbd1d4ff505d2e67f11eefb90243425e63bc06eb4294817f5a3c847->leave($__internal_a2929f9b8dbd1d4ff505d2e67f11eefb90243425e63bc06eb4294817f5a3c847_prof);

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
