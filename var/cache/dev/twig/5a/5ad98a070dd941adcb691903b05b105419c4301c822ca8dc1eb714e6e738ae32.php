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
        $__internal_282dd581c467be74e2da5087af797d228592f719427ee035d4a2c1213bdfb406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282dd581c467be74e2da5087af797d228592f719427ee035d4a2c1213bdfb406->enter($__internal_282dd581c467be74e2da5087af797d228592f719427ee035d4a2c1213bdfb406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_4601b583517947f115d11e3665fb0dd999871d80246ae4b2599026812b553413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4601b583517947f115d11e3665fb0dd999871d80246ae4b2599026812b553413->enter($__internal_4601b583517947f115d11e3665fb0dd999871d80246ae4b2599026812b553413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282dd581c467be74e2da5087af797d228592f719427ee035d4a2c1213bdfb406->leave($__internal_282dd581c467be74e2da5087af797d228592f719427ee035d4a2c1213bdfb406_prof);

        
        $__internal_4601b583517947f115d11e3665fb0dd999871d80246ae4b2599026812b553413->leave($__internal_4601b583517947f115d11e3665fb0dd999871d80246ae4b2599026812b553413_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04e8d8904fb5c9bbe7cae39e1e5567f889caec342ed3de4a5dd8cd0184390431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e8d8904fb5c9bbe7cae39e1e5567f889caec342ed3de4a5dd8cd0184390431->enter($__internal_04e8d8904fb5c9bbe7cae39e1e5567f889caec342ed3de4a5dd8cd0184390431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0223ac812262c74c47a5f4f1483f7ae162b4267d060be64e063790046fae4a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0223ac812262c74c47a5f4f1483f7ae162b4267d060be64e063790046fae4a31->enter($__internal_0223ac812262c74c47a5f4f1483f7ae162b4267d060be64e063790046fae4a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0223ac812262c74c47a5f4f1483f7ae162b4267d060be64e063790046fae4a31->leave($__internal_0223ac812262c74c47a5f4f1483f7ae162b4267d060be64e063790046fae4a31_prof);

        
        $__internal_04e8d8904fb5c9bbe7cae39e1e5567f889caec342ed3de4a5dd8cd0184390431->leave($__internal_04e8d8904fb5c9bbe7cae39e1e5567f889caec342ed3de4a5dd8cd0184390431_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07daca002ef537e38173ef824ba95612da24f2df4ad605ad40d91f8c9427bac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07daca002ef537e38173ef824ba95612da24f2df4ad605ad40d91f8c9427bac5->enter($__internal_07daca002ef537e38173ef824ba95612da24f2df4ad605ad40d91f8c9427bac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6251b8256cde9b4afa7be01d1b8a733e1b520332310b9f0b1ae6c2337411eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6251b8256cde9b4afa7be01d1b8a733e1b520332310b9f0b1ae6c2337411eb4->enter($__internal_d6251b8256cde9b4afa7be01d1b8a733e1b520332310b9f0b1ae6c2337411eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_d6251b8256cde9b4afa7be01d1b8a733e1b520332310b9f0b1ae6c2337411eb4->leave($__internal_d6251b8256cde9b4afa7be01d1b8a733e1b520332310b9f0b1ae6c2337411eb4_prof);

        
        $__internal_07daca002ef537e38173ef824ba95612da24f2df4ad605ad40d91f8c9427bac5->leave($__internal_07daca002ef537e38173ef824ba95612da24f2df4ad605ad40d91f8c9427bac5_prof);

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
