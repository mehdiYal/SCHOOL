<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6eecad18024299b35cad6cc6e11d98d6520580045a931185faece6a104404067 extends Twig_Template
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
        $__internal_26b41a51d381521b48d5ac49a1c03586070217334a85affede4388b818b91022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b41a51d381521b48d5ac49a1c03586070217334a85affede4388b818b91022->enter($__internal_26b41a51d381521b48d5ac49a1c03586070217334a85affede4388b818b91022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d97338d93cb5e05f3789f0953010cdaf353365832ba49638e0b6449f661e05a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97338d93cb5e05f3789f0953010cdaf353365832ba49638e0b6449f661e05a0->enter($__internal_d97338d93cb5e05f3789f0953010cdaf353365832ba49638e0b6449f661e05a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b41a51d381521b48d5ac49a1c03586070217334a85affede4388b818b91022->leave($__internal_26b41a51d381521b48d5ac49a1c03586070217334a85affede4388b818b91022_prof);

        
        $__internal_d97338d93cb5e05f3789f0953010cdaf353365832ba49638e0b6449f661e05a0->leave($__internal_d97338d93cb5e05f3789f0953010cdaf353365832ba49638e0b6449f661e05a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_875a31cdd8668b7381be431b27a33f5ac02d1f1482280afa5540a0d7b2f570cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875a31cdd8668b7381be431b27a33f5ac02d1f1482280afa5540a0d7b2f570cb->enter($__internal_875a31cdd8668b7381be431b27a33f5ac02d1f1482280afa5540a0d7b2f570cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58b7b75a8535153bcc4381f47bf23b98a50d4437411d0deee5d0e85e192f3623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b7b75a8535153bcc4381f47bf23b98a50d4437411d0deee5d0e85e192f3623->enter($__internal_58b7b75a8535153bcc4381f47bf23b98a50d4437411d0deee5d0e85e192f3623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_58b7b75a8535153bcc4381f47bf23b98a50d4437411d0deee5d0e85e192f3623->leave($__internal_58b7b75a8535153bcc4381f47bf23b98a50d4437411d0deee5d0e85e192f3623_prof);

        
        $__internal_875a31cdd8668b7381be431b27a33f5ac02d1f1482280afa5540a0d7b2f570cb->leave($__internal_875a31cdd8668b7381be431b27a33f5ac02d1f1482280afa5540a0d7b2f570cb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec70d60a1682cdf8ef161b75e90cae02ead56d749334868638a661d4b27bfeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec70d60a1682cdf8ef161b75e90cae02ead56d749334868638a661d4b27bfeec->enter($__internal_ec70d60a1682cdf8ef161b75e90cae02ead56d749334868638a661d4b27bfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0596da2d9dd44fe4bf891459d89466de40de78b1063e721b0b333725e2b86da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0596da2d9dd44fe4bf891459d89466de40de78b1063e721b0b333725e2b86da5->enter($__internal_0596da2d9dd44fe4bf891459d89466de40de78b1063e721b0b333725e2b86da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_0596da2d9dd44fe4bf891459d89466de40de78b1063e721b0b333725e2b86da5->leave($__internal_0596da2d9dd44fe4bf891459d89466de40de78b1063e721b0b333725e2b86da5_prof);

        
        $__internal_ec70d60a1682cdf8ef161b75e90cae02ead56d749334868638a661d4b27bfeec->leave($__internal_ec70d60a1682cdf8ef161b75e90cae02ead56d749334868638a661d4b27bfeec_prof);

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
