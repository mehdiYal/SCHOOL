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
        $__internal_767e27a7b454895685d1941d517ab09f7a815a762fec4200daa74f70ffae98d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767e27a7b454895685d1941d517ab09f7a815a762fec4200daa74f70ffae98d7->enter($__internal_767e27a7b454895685d1941d517ab09f7a815a762fec4200daa74f70ffae98d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_09a0d0143a9eef444597498be3716cfa70397d5d47d7caa594d0cc243d4310e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a0d0143a9eef444597498be3716cfa70397d5d47d7caa594d0cc243d4310e9->enter($__internal_09a0d0143a9eef444597498be3716cfa70397d5d47d7caa594d0cc243d4310e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767e27a7b454895685d1941d517ab09f7a815a762fec4200daa74f70ffae98d7->leave($__internal_767e27a7b454895685d1941d517ab09f7a815a762fec4200daa74f70ffae98d7_prof);

        
        $__internal_09a0d0143a9eef444597498be3716cfa70397d5d47d7caa594d0cc243d4310e9->leave($__internal_09a0d0143a9eef444597498be3716cfa70397d5d47d7caa594d0cc243d4310e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb2937f6b612f96495409309065b74da502504524ad1d2baa5c2a60d80b4593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb2937f6b612f96495409309065b74da502504524ad1d2baa5c2a60d80b4593->enter($__internal_4fb2937f6b612f96495409309065b74da502504524ad1d2baa5c2a60d80b4593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_160d494f28da4c7fc4de9644bdf0e63cd048cb9221b20cb3048d81fbda51bdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160d494f28da4c7fc4de9644bdf0e63cd048cb9221b20cb3048d81fbda51bdfd->enter($__internal_160d494f28da4c7fc4de9644bdf0e63cd048cb9221b20cb3048d81fbda51bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_160d494f28da4c7fc4de9644bdf0e63cd048cb9221b20cb3048d81fbda51bdfd->leave($__internal_160d494f28da4c7fc4de9644bdf0e63cd048cb9221b20cb3048d81fbda51bdfd_prof);

        
        $__internal_4fb2937f6b612f96495409309065b74da502504524ad1d2baa5c2a60d80b4593->leave($__internal_4fb2937f6b612f96495409309065b74da502504524ad1d2baa5c2a60d80b4593_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc57e64d280e80db78a6a173f26080fb426762ea841593eb997f2d62fbc8b616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc57e64d280e80db78a6a173f26080fb426762ea841593eb997f2d62fbc8b616->enter($__internal_cc57e64d280e80db78a6a173f26080fb426762ea841593eb997f2d62fbc8b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4607e66b239852e8e02d0e19c2eabf46af45775d2e860de0b995c665936bd448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4607e66b239852e8e02d0e19c2eabf46af45775d2e860de0b995c665936bd448->enter($__internal_4607e66b239852e8e02d0e19c2eabf46af45775d2e860de0b995c665936bd448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_4607e66b239852e8e02d0e19c2eabf46af45775d2e860de0b995c665936bd448->leave($__internal_4607e66b239852e8e02d0e19c2eabf46af45775d2e860de0b995c665936bd448_prof);

        
        $__internal_cc57e64d280e80db78a6a173f26080fb426762ea841593eb997f2d62fbc8b616->leave($__internal_cc57e64d280e80db78a6a173f26080fb426762ea841593eb997f2d62fbc8b616_prof);

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
