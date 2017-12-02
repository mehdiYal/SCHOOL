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
        $__internal_2913d36ba29877ca16af9a652cd65891a22eea306fbfdc5be0fcdb41a86290ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2913d36ba29877ca16af9a652cd65891a22eea306fbfdc5be0fcdb41a86290ed->enter($__internal_2913d36ba29877ca16af9a652cd65891a22eea306fbfdc5be0fcdb41a86290ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_ae88a47e1ab77789194408f9dbeff0074736e7287fe5f4961b232fd283cef645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae88a47e1ab77789194408f9dbeff0074736e7287fe5f4961b232fd283cef645->enter($__internal_ae88a47e1ab77789194408f9dbeff0074736e7287fe5f4961b232fd283cef645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2913d36ba29877ca16af9a652cd65891a22eea306fbfdc5be0fcdb41a86290ed->leave($__internal_2913d36ba29877ca16af9a652cd65891a22eea306fbfdc5be0fcdb41a86290ed_prof);

        
        $__internal_ae88a47e1ab77789194408f9dbeff0074736e7287fe5f4961b232fd283cef645->leave($__internal_ae88a47e1ab77789194408f9dbeff0074736e7287fe5f4961b232fd283cef645_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_947d8dcee5235562103d28169a1309b6dbb51bef4307b6117cd3a011daf6bacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947d8dcee5235562103d28169a1309b6dbb51bef4307b6117cd3a011daf6bacd->enter($__internal_947d8dcee5235562103d28169a1309b6dbb51bef4307b6117cd3a011daf6bacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2365c8a2dfa8c98c12deacb6149fadf4a31fdbd86e452d8ca05624abb136bf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2365c8a2dfa8c98c12deacb6149fadf4a31fdbd86e452d8ca05624abb136bf6e->enter($__internal_2365c8a2dfa8c98c12deacb6149fadf4a31fdbd86e452d8ca05624abb136bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2365c8a2dfa8c98c12deacb6149fadf4a31fdbd86e452d8ca05624abb136bf6e->leave($__internal_2365c8a2dfa8c98c12deacb6149fadf4a31fdbd86e452d8ca05624abb136bf6e_prof);

        
        $__internal_947d8dcee5235562103d28169a1309b6dbb51bef4307b6117cd3a011daf6bacd->leave($__internal_947d8dcee5235562103d28169a1309b6dbb51bef4307b6117cd3a011daf6bacd_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57b1985ec31ec5f90b9c90c45ab76edcf0c8695ba2d0fad9e355e97e5528e2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b1985ec31ec5f90b9c90c45ab76edcf0c8695ba2d0fad9e355e97e5528e2e1->enter($__internal_57b1985ec31ec5f90b9c90c45ab76edcf0c8695ba2d0fad9e355e97e5528e2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6682966c93cc3dc0f3e6511a436f540d1e4f47cf609ae34d00043a03bc2dcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6682966c93cc3dc0f3e6511a436f540d1e4f47cf609ae34d00043a03bc2dcb2->enter($__internal_d6682966c93cc3dc0f3e6511a436f540d1e4f47cf609ae34d00043a03bc2dcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_d6682966c93cc3dc0f3e6511a436f540d1e4f47cf609ae34d00043a03bc2dcb2->leave($__internal_d6682966c93cc3dc0f3e6511a436f540d1e4f47cf609ae34d00043a03bc2dcb2_prof);

        
        $__internal_57b1985ec31ec5f90b9c90c45ab76edcf0c8695ba2d0fad9e355e97e5528e2e1->leave($__internal_57b1985ec31ec5f90b9c90c45ab76edcf0c8695ba2d0fad9e355e97e5528e2e1_prof);

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
