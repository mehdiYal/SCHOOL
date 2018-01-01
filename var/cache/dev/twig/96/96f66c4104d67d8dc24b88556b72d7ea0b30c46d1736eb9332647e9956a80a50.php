<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_19d7cfdfd902d31e563b4f3677ab98c4b2006a9a2a5df4fd6f1091890c52b003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf45a852f5de321eb6a7185daf6f1f068dca2864308fc96f42b10aacfc9d1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf45a852f5de321eb6a7185daf6f1f068dca2864308fc96f42b10aacfc9d1f9->enter($__internal_faf45a852f5de321eb6a7185daf6f1f068dca2864308fc96f42b10aacfc9d1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $__internal_6e41bc4aebfe48424c88eb58319a3882c5401d1f3ea60848f8b2df3d1a853e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e41bc4aebfe48424c88eb58319a3882c5401d1f3ea60848f8b2df3d1a853e3d->enter($__internal_6e41bc4aebfe48424c88eb58319a3882c5401d1f3ea60848f8b2df3d1a853e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf45a852f5de321eb6a7185daf6f1f068dca2864308fc96f42b10aacfc9d1f9->leave($__internal_faf45a852f5de321eb6a7185daf6f1f068dca2864308fc96f42b10aacfc9d1f9_prof);

        
        $__internal_6e41bc4aebfe48424c88eb58319a3882c5401d1f3ea60848f8b2df3d1a853e3d->leave($__internal_6e41bc4aebfe48424c88eb58319a3882c5401d1f3ea60848f8b2df3d1a853e3d_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_c4e76ffccc122058a2eaf66c393d7d0b65c329c57daab2a71dc08a2eb584a0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e76ffccc122058a2eaf66c393d7d0b65c329c57daab2a71dc08a2eb584a0b4->enter($__internal_c4e76ffccc122058a2eaf66c393d7d0b65c329c57daab2a71dc08a2eb584a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_1cf53b116db7440301a118abe602e2b0e777f724174791ce8595ef789d15659a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf53b116db7440301a118abe602e2b0e777f724174791ce8595ef789d15659a->enter($__internal_1cf53b116db7440301a118abe602e2b0e777f724174791ce8595ef789d15659a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>

<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_1cf53b116db7440301a118abe602e2b0e777f724174791ce8595ef789d15659a->leave($__internal_1cf53b116db7440301a118abe602e2b0e777f724174791ce8595ef789d15659a_prof);

        
        $__internal_c4e76ffccc122058a2eaf66c393d7d0b65c329c57daab2a71dc08a2eb584a0b4->leave($__internal_c4e76ffccc122058a2eaf66c393d7d0b65c329c57daab2a71dc08a2eb584a0b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>

<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:newThread.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/newThread.html.twig");
    }
}
