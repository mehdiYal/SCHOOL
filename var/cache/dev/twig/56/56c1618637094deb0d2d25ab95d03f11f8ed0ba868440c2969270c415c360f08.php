<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_55240e86548a40df0b086808646e2486f90e2d18cdaa0ee27d24b14cbd5a484c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:search.html.twig", 1);
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
        $__internal_bc998e37fb04436d81153ffebe2d0882b2a870c9274b01998d461ec0b2d9d2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc998e37fb04436d81153ffebe2d0882b2a870c9274b01998d461ec0b2d9d2de->enter($__internal_bc998e37fb04436d81153ffebe2d0882b2a870c9274b01998d461ec0b2d9d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $__internal_f9b8624030b28395820e7364dddf5150375e7996701d59f6f82084607bf9c5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b8624030b28395820e7364dddf5150375e7996701d59f6f82084607bf9c5f9->enter($__internal_f9b8624030b28395820e7364dddf5150375e7996701d59f6f82084607bf9c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc998e37fb04436d81153ffebe2d0882b2a870c9274b01998d461ec0b2d9d2de->leave($__internal_bc998e37fb04436d81153ffebe2d0882b2a870c9274b01998d461ec0b2d9d2de_prof);

        
        $__internal_f9b8624030b28395820e7364dddf5150375e7996701d59f6f82084607bf9c5f9->leave($__internal_f9b8624030b28395820e7364dddf5150375e7996701d59f6f82084607bf9c5f9_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_9bb0262603bf1ca3f6cfb40238884240c87aae0c8f1ba98a1bc9eb4bc42db3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb0262603bf1ca3f6cfb40238884240c87aae0c8f1ba98a1bc9eb4bc42db3f5->enter($__internal_9bb0262603bf1ca3f6cfb40238884240c87aae0c8f1ba98a1bc9eb4bc42db3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_a2661bdb1ba9e7d27be2b9fb9749cd602541a93648aa8368271981bc96d52a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2661bdb1ba9e7d27be2b9fb9749cd602541a93648aa8368271981bc96d52a57->enter($__internal_a2661bdb1ba9e7d27be2b9fb9749cd602541a93648aa8368271981bc96d52a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_a2661bdb1ba9e7d27be2b9fb9749cd602541a93648aa8368271981bc96d52a57->leave($__internal_a2661bdb1ba9e7d27be2b9fb9749cd602541a93648aa8368271981bc96d52a57_prof);

        
        $__internal_9bb0262603bf1ca3f6cfb40238884240c87aae0c8f1ba98a1bc9eb4bc42db3f5->leave($__internal_9bb0262603bf1ca3f6cfb40238884240c87aae0c8f1ba98a1bc9eb4bc42db3f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  63 => 11,  59 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}search{% endtrans %}</h2>

<p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}
    threads_found
{% endtranschoice %}</p>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:search.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/search.html.twig");
    }
}
