<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2ee71989c44e33e8df670dc9861ee03e787f20152bbd39a8232a820d89be225d extends Twig_Template
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
        $__internal_2ff9be9d1be6fd9e1d07ec5f5268fad449872866a2a2e132bdf834f52f35efc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff9be9d1be6fd9e1d07ec5f5268fad449872866a2a2e132bdf834f52f35efc2->enter($__internal_2ff9be9d1be6fd9e1d07ec5f5268fad449872866a2a2e132bdf834f52f35efc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_60cf5ec37da2a60fae76cde17450bb69246241afb89d141c0f1fa52fa9614a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cf5ec37da2a60fae76cde17450bb69246241afb89d141c0f1fa52fa9614a18->enter($__internal_60cf5ec37da2a60fae76cde17450bb69246241afb89d141c0f1fa52fa9614a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff9be9d1be6fd9e1d07ec5f5268fad449872866a2a2e132bdf834f52f35efc2->leave($__internal_2ff9be9d1be6fd9e1d07ec5f5268fad449872866a2a2e132bdf834f52f35efc2_prof);

        
        $__internal_60cf5ec37da2a60fae76cde17450bb69246241afb89d141c0f1fa52fa9614a18->leave($__internal_60cf5ec37da2a60fae76cde17450bb69246241afb89d141c0f1fa52fa9614a18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_135d9ace29990a27111273304dfdc9762f700753fe270c9765b22e522a2babcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135d9ace29990a27111273304dfdc9762f700753fe270c9765b22e522a2babcb->enter($__internal_135d9ace29990a27111273304dfdc9762f700753fe270c9765b22e522a2babcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f50f76edcbd1564f2f80d01a18cecf2a081e35a9169d29d39d9f1301e9e2221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f50f76edcbd1564f2f80d01a18cecf2a081e35a9169d29d39d9f1301e9e2221->enter($__internal_2f50f76edcbd1564f2f80d01a18cecf2a081e35a9169d29d39d9f1301e9e2221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f50f76edcbd1564f2f80d01a18cecf2a081e35a9169d29d39d9f1301e9e2221->leave($__internal_2f50f76edcbd1564f2f80d01a18cecf2a081e35a9169d29d39d9f1301e9e2221_prof);

        
        $__internal_135d9ace29990a27111273304dfdc9762f700753fe270c9765b22e522a2babcb->leave($__internal_135d9ace29990a27111273304dfdc9762f700753fe270c9765b22e522a2babcb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1799d5c7426b6906e30fb3519570d71b9ab20f6f76846e54327b4e614d47dcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1799d5c7426b6906e30fb3519570d71b9ab20f6f76846e54327b4e614d47dcec->enter($__internal_1799d5c7426b6906e30fb3519570d71b9ab20f6f76846e54327b4e614d47dcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f185a92777d2c81032cf9565a786816d73c84c4b65d36189d0fecbb58010d989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f185a92777d2c81032cf9565a786816d73c84c4b65d36189d0fecbb58010d989->enter($__internal_f185a92777d2c81032cf9565a786816d73c84c4b65d36189d0fecbb58010d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_f185a92777d2c81032cf9565a786816d73c84c4b65d36189d0fecbb58010d989->leave($__internal_f185a92777d2c81032cf9565a786816d73c84c4b65d36189d0fecbb58010d989_prof);

        
        $__internal_1799d5c7426b6906e30fb3519570d71b9ab20f6f76846e54327b4e614d47dcec->leave($__internal_1799d5c7426b6906e30fb3519570d71b9ab20f6f76846e54327b4e614d47dcec_prof);

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
