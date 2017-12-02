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
        $__internal_7137dc80fdfac10e7e8152d7e52b715d270eb0d48957df593bc3643cf81e449f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7137dc80fdfac10e7e8152d7e52b715d270eb0d48957df593bc3643cf81e449f->enter($__internal_7137dc80fdfac10e7e8152d7e52b715d270eb0d48957df593bc3643cf81e449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_cfad2a282c057fecf8ed2fe8686a7bdf5edf229c85e4ac55b470feba9542b9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfad2a282c057fecf8ed2fe8686a7bdf5edf229c85e4ac55b470feba9542b9a1->enter($__internal_cfad2a282c057fecf8ed2fe8686a7bdf5edf229c85e4ac55b470feba9542b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7137dc80fdfac10e7e8152d7e52b715d270eb0d48957df593bc3643cf81e449f->leave($__internal_7137dc80fdfac10e7e8152d7e52b715d270eb0d48957df593bc3643cf81e449f_prof);

        
        $__internal_cfad2a282c057fecf8ed2fe8686a7bdf5edf229c85e4ac55b470feba9542b9a1->leave($__internal_cfad2a282c057fecf8ed2fe8686a7bdf5edf229c85e4ac55b470feba9542b9a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d54bf79c4653b5eb84f4f6b3c5c6ae46e6c8b4f153e0d372132dbc5c8e3b369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d54bf79c4653b5eb84f4f6b3c5c6ae46e6c8b4f153e0d372132dbc5c8e3b369->enter($__internal_1d54bf79c4653b5eb84f4f6b3c5c6ae46e6c8b4f153e0d372132dbc5c8e3b369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_465cdf5ef3f784aadc5686fd22940a9282fb7148c24d015e125c291c663202fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465cdf5ef3f784aadc5686fd22940a9282fb7148c24d015e125c291c663202fa->enter($__internal_465cdf5ef3f784aadc5686fd22940a9282fb7148c24d015e125c291c663202fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_465cdf5ef3f784aadc5686fd22940a9282fb7148c24d015e125c291c663202fa->leave($__internal_465cdf5ef3f784aadc5686fd22940a9282fb7148c24d015e125c291c663202fa_prof);

        
        $__internal_1d54bf79c4653b5eb84f4f6b3c5c6ae46e6c8b4f153e0d372132dbc5c8e3b369->leave($__internal_1d54bf79c4653b5eb84f4f6b3c5c6ae46e6c8b4f153e0d372132dbc5c8e3b369_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c04e294395a00af01ddc668bd642fb79a4b610feca6a46bf5457d73dd93251e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04e294395a00af01ddc668bd642fb79a4b610feca6a46bf5457d73dd93251e4->enter($__internal_c04e294395a00af01ddc668bd642fb79a4b610feca6a46bf5457d73dd93251e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6b01b46c76554e4942ad9bca1bbebd9978c37b97f1b40919e3e28b92f42f666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b01b46c76554e4942ad9bca1bbebd9978c37b97f1b40919e3e28b92f42f666->enter($__internal_b6b01b46c76554e4942ad9bca1bbebd9978c37b97f1b40919e3e28b92f42f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_b6b01b46c76554e4942ad9bca1bbebd9978c37b97f1b40919e3e28b92f42f666->leave($__internal_b6b01b46c76554e4942ad9bca1bbebd9978c37b97f1b40919e3e28b92f42f666_prof);

        
        $__internal_c04e294395a00af01ddc668bd642fb79a4b610feca6a46bf5457d73dd93251e4->leave($__internal_c04e294395a00af01ddc668bd642fb79a4b610feca6a46bf5457d73dd93251e4_prof);

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
