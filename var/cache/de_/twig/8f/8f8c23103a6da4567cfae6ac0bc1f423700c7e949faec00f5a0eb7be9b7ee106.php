<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4753959b3c7cb88f600cf33541806020cf2a1430e52f73063e034363491f0346 extends Twig_Template
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
        $__internal_ea541fb6d190691b1d07d87f7de0dc68baf8f55c79954cf0cae2e7e94b9b690d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea541fb6d190691b1d07d87f7de0dc68baf8f55c79954cf0cae2e7e94b9b690d->enter($__internal_ea541fb6d190691b1d07d87f7de0dc68baf8f55c79954cf0cae2e7e94b9b690d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_8d60c90312d12132fb9651e2154536e0189037a8d8258ec38495c7e579d62e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d60c90312d12132fb9651e2154536e0189037a8d8258ec38495c7e579d62e59->enter($__internal_8d60c90312d12132fb9651e2154536e0189037a8d8258ec38495c7e579d62e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea541fb6d190691b1d07d87f7de0dc68baf8f55c79954cf0cae2e7e94b9b690d->leave($__internal_ea541fb6d190691b1d07d87f7de0dc68baf8f55c79954cf0cae2e7e94b9b690d_prof);

        
        $__internal_8d60c90312d12132fb9651e2154536e0189037a8d8258ec38495c7e579d62e59->leave($__internal_8d60c90312d12132fb9651e2154536e0189037a8d8258ec38495c7e579d62e59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b9d607d16d7bae251599d398af027a97d2544c1ab5f6d21d309a44b700a7891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9d607d16d7bae251599d398af027a97d2544c1ab5f6d21d309a44b700a7891->enter($__internal_7b9d607d16d7bae251599d398af027a97d2544c1ab5f6d21d309a44b700a7891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40cf4d374a2b5918699594d11a085a8cb21ef177a1ae00d44ff7c307d9167d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cf4d374a2b5918699594d11a085a8cb21ef177a1ae00d44ff7c307d9167d54->enter($__internal_40cf4d374a2b5918699594d11a085a8cb21ef177a1ae00d44ff7c307d9167d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_40cf4d374a2b5918699594d11a085a8cb21ef177a1ae00d44ff7c307d9167d54->leave($__internal_40cf4d374a2b5918699594d11a085a8cb21ef177a1ae00d44ff7c307d9167d54_prof);

        
        $__internal_7b9d607d16d7bae251599d398af027a97d2544c1ab5f6d21d309a44b700a7891->leave($__internal_7b9d607d16d7bae251599d398af027a97d2544c1ab5f6d21d309a44b700a7891_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7df2bea4eda7f6e1bbf9b8499ab4cd9143292bcdcb5fa962b318c06cdf6c8d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df2bea4eda7f6e1bbf9b8499ab4cd9143292bcdcb5fa962b318c06cdf6c8d17->enter($__internal_7df2bea4eda7f6e1bbf9b8499ab4cd9143292bcdcb5fa962b318c06cdf6c8d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_404b580c0362a7e06067a28ba3b0da2c86567293ceda28760ac37c2c40911fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404b580c0362a7e06067a28ba3b0da2c86567293ceda28760ac37c2c40911fad->enter($__internal_404b580c0362a7e06067a28ba3b0da2c86567293ceda28760ac37c2c40911fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_404b580c0362a7e06067a28ba3b0da2c86567293ceda28760ac37c2c40911fad->leave($__internal_404b580c0362a7e06067a28ba3b0da2c86567293ceda28760ac37c2c40911fad_prof);

        
        $__internal_7df2bea4eda7f6e1bbf9b8499ab4cd9143292bcdcb5fa962b318c06cdf6c8d17->leave($__internal_7df2bea4eda7f6e1bbf9b8499ab4cd9143292bcdcb5fa962b318c06cdf6c8d17_prof);

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
