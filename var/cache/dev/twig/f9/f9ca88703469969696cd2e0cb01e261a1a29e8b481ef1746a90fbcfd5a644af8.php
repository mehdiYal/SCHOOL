<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_369c260710f23d51567722960dcac5e2c704e7ac77fd7155cc655453944f8bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
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
        $__internal_1feab087b69bdbb9285f371de3dee5afd9a7d7bc92280261fb4b7d2fab756bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feab087b69bdbb9285f371de3dee5afd9a7d7bc92280261fb4b7d2fab756bac->enter($__internal_1feab087b69bdbb9285f371de3dee5afd9a7d7bc92280261fb4b7d2fab756bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_a80ef965d1ada8347b1ad35ce7d1623f8942c388bdb8f2c58dce4eb9a9d9be5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80ef965d1ada8347b1ad35ce7d1623f8942c388bdb8f2c58dce4eb9a9d9be5b->enter($__internal_a80ef965d1ada8347b1ad35ce7d1623f8942c388bdb8f2c58dce4eb9a9d9be5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1feab087b69bdbb9285f371de3dee5afd9a7d7bc92280261fb4b7d2fab756bac->leave($__internal_1feab087b69bdbb9285f371de3dee5afd9a7d7bc92280261fb4b7d2fab756bac_prof);

        
        $__internal_a80ef965d1ada8347b1ad35ce7d1623f8942c388bdb8f2c58dce4eb9a9d9be5b->leave($__internal_a80ef965d1ada8347b1ad35ce7d1623f8942c388bdb8f2c58dce4eb9a9d9be5b_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_1866c371491a4fb42535baea66104bc5b6c8d330bf39c5679f74dfce4a832cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1866c371491a4fb42535baea66104bc5b6c8d330bf39c5679f74dfce4a832cdd->enter($__internal_1866c371491a4fb42535baea66104bc5b6c8d330bf39c5679f74dfce4a832cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_cc49f41baa7fe883a4449216055d5148aa58cc403a80323465adc299431aecbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc49f41baa7fe883a4449216055d5148aa58cc403a80323465adc299431aecbe->enter($__internal_cc49f41baa7fe883a4449216055d5148aa58cc403a80323465adc299431aecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</h2>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>

";
        // line 9
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 9)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 10
        echo "
";
        
        $__internal_cc49f41baa7fe883a4449216055d5148aa58cc403a80323465adc299431aecbe->leave($__internal_cc49f41baa7fe883a4449216055d5148aa58cc403a80323465adc299431aecbe_prof);

        
        $__internal_1866c371491a4fb42535baea66104bc5b6c8d330bf39c5679f74dfce4a832cdd->leave($__internal_1866c371491a4fb42535baea66104bc5b6c8d330bf39c5679f74dfce4a832cdd_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  64 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</h2>

<a href=\"{{ url('fos_message_thread_new' )}}\">{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</a>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:inbox.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/inbox.html.twig");
    }
}
