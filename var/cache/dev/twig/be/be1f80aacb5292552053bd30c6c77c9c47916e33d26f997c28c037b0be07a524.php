<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3273aaa5fba3709efbc3bbbfa179535c3b704ff344e6ad59d9c75ae149616eed extends Twig_Template
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
        $__internal_7c496532e0ccd7ffbb49b32882de2e93c489f48d3f5e9bd47f1025330c00f15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c496532e0ccd7ffbb49b32882de2e93c489f48d3f5e9bd47f1025330c00f15d->enter($__internal_7c496532e0ccd7ffbb49b32882de2e93c489f48d3f5e9bd47f1025330c00f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_77c8edecc72adbd990264264574db55ca66362e927bef33f03587a21c110a48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c8edecc72adbd990264264574db55ca66362e927bef33f03587a21c110a48f->enter($__internal_77c8edecc72adbd990264264574db55ca66362e927bef33f03587a21c110a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c496532e0ccd7ffbb49b32882de2e93c489f48d3f5e9bd47f1025330c00f15d->leave($__internal_7c496532e0ccd7ffbb49b32882de2e93c489f48d3f5e9bd47f1025330c00f15d_prof);

        
        $__internal_77c8edecc72adbd990264264574db55ca66362e927bef33f03587a21c110a48f->leave($__internal_77c8edecc72adbd990264264574db55ca66362e927bef33f03587a21c110a48f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6355029d296c4ba1a03f8e7d8ab96f5613661881e6d42f0e630b59f358653b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6355029d296c4ba1a03f8e7d8ab96f5613661881e6d42f0e630b59f358653b->enter($__internal_cb6355029d296c4ba1a03f8e7d8ab96f5613661881e6d42f0e630b59f358653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a85ff8d5fd9fab60675d8ad8b66e2c170c977a30be44e3362dee833aa389d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a85ff8d5fd9fab60675d8ad8b66e2c170c977a30be44e3362dee833aa389d59->enter($__internal_6a85ff8d5fd9fab60675d8ad8b66e2c170c977a30be44e3362dee833aa389d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_6a85ff8d5fd9fab60675d8ad8b66e2c170c977a30be44e3362dee833aa389d59->leave($__internal_6a85ff8d5fd9fab60675d8ad8b66e2c170c977a30be44e3362dee833aa389d59_prof);

        
        $__internal_cb6355029d296c4ba1a03f8e7d8ab96f5613661881e6d42f0e630b59f358653b->leave($__internal_cb6355029d296c4ba1a03f8e7d8ab96f5613661881e6d42f0e630b59f358653b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_043a4f30e0fecd3a3c2f8d35c0cb8b9943302dbb3e4b38c11c92e5dc5d3dd30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043a4f30e0fecd3a3c2f8d35c0cb8b9943302dbb3e4b38c11c92e5dc5d3dd30e->enter($__internal_043a4f30e0fecd3a3c2f8d35c0cb8b9943302dbb3e4b38c11c92e5dc5d3dd30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab7405bdf5ab7f111626e9121363cd6dea40f10c8df6dac88ebf68d8c4e47c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7405bdf5ab7f111626e9121363cd6dea40f10c8df6dac88ebf68d8c4e47c90->enter($__internal_ab7405bdf5ab7f111626e9121363cd6dea40f10c8df6dac88ebf68d8c4e47c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_ab7405bdf5ab7f111626e9121363cd6dea40f10c8df6dac88ebf68d8c4e47c90->leave($__internal_ab7405bdf5ab7f111626e9121363cd6dea40f10c8df6dac88ebf68d8c4e47c90_prof);

        
        $__internal_043a4f30e0fecd3a3c2f8d35c0cb8b9943302dbb3e4b38c11c92e5dc5d3dd30e->leave($__internal_043a4f30e0fecd3a3c2f8d35c0cb8b9943302dbb3e4b38c11c92e5dc5d3dd30e_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
