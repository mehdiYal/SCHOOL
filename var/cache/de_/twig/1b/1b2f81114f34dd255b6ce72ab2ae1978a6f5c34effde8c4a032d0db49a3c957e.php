<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_90a53f93cc53550a4546f3ac913192a5e6db1fec9234c4526031928f9e7da2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_0969486c0a1529632ab2cf84dc63ee222b02e27674bc13851afd3c2b763a42c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0969486c0a1529632ab2cf84dc63ee222b02e27674bc13851afd3c2b763a42c9->enter($__internal_0969486c0a1529632ab2cf84dc63ee222b02e27674bc13851afd3c2b763a42c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_d866e3c4b3ea39efd75c765aa58c7c3fd94e9242476a757e4da9414256cf2654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d866e3c4b3ea39efd75c765aa58c7c3fd94e9242476a757e4da9414256cf2654->enter($__internal_d866e3c4b3ea39efd75c765aa58c7c3fd94e9242476a757e4da9414256cf2654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0969486c0a1529632ab2cf84dc63ee222b02e27674bc13851afd3c2b763a42c9->leave($__internal_0969486c0a1529632ab2cf84dc63ee222b02e27674bc13851afd3c2b763a42c9_prof);

        
        $__internal_d866e3c4b3ea39efd75c765aa58c7c3fd94e9242476a757e4da9414256cf2654->leave($__internal_d866e3c4b3ea39efd75c765aa58c7c3fd94e9242476a757e4da9414256cf2654_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6680a3ebc3bb5020762ba3e8d5471cc1ef056c3dae2a8d358f87ebb8e4dda98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6680a3ebc3bb5020762ba3e8d5471cc1ef056c3dae2a8d358f87ebb8e4dda98b->enter($__internal_6680a3ebc3bb5020762ba3e8d5471cc1ef056c3dae2a8d358f87ebb8e4dda98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fbbb4c2cc35c39f2a674f0a2c7cdfb1ed685fcf576419655b80f0abec17a3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbbb4c2cc35c39f2a674f0a2c7cdfb1ed685fcf576419655b80f0abec17a3fc->enter($__internal_3fbbb4c2cc35c39f2a674f0a2c7cdfb1ed685fcf576419655b80f0abec17a3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fbbb4c2cc35c39f2a674f0a2c7cdfb1ed685fcf576419655b80f0abec17a3fc->leave($__internal_3fbbb4c2cc35c39f2a674f0a2c7cdfb1ed685fcf576419655b80f0abec17a3fc_prof);

        
        $__internal_6680a3ebc3bb5020762ba3e8d5471cc1ef056c3dae2a8d358f87ebb8e4dda98b->leave($__internal_6680a3ebc3bb5020762ba3e8d5471cc1ef056c3dae2a8d358f87ebb8e4dda98b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9a3714a5ae71ec77b39ea3e5d153d683cc12353d17ae00c8f03581a3ff89383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a3714a5ae71ec77b39ea3e5d153d683cc12353d17ae00c8f03581a3ff89383->enter($__internal_f9a3714a5ae71ec77b39ea3e5d153d683cc12353d17ae00c8f03581a3ff89383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_980c0c5e6b7d991b1cf9c7377822d7e1474651d909907a9ebf608171ce9b33c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980c0c5e6b7d991b1cf9c7377822d7e1474651d909907a9ebf608171ce9b33c4->enter($__internal_980c0c5e6b7d991b1cf9c7377822d7e1474651d909907a9ebf608171ce9b33c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_980c0c5e6b7d991b1cf9c7377822d7e1474651d909907a9ebf608171ce9b33c4->leave($__internal_980c0c5e6b7d991b1cf9c7377822d7e1474651d909907a9ebf608171ce9b33c4_prof);

        
        $__internal_f9a3714a5ae71ec77b39ea3e5d153d683cc12353d17ae00c8f03581a3ff89383->leave($__internal_f9a3714a5ae71ec77b39ea3e5d153d683cc12353d17ae00c8f03581a3ff89383_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
