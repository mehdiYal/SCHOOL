<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_7d90958719c19490f75d22d4b24d8c03d9a834c02ddc8b2cd1cbdfdca49d3741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
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
        $__internal_a145bdac02ebd634ec74a6dfed4babf2d7f0cb7bea4d193838cef90f65e26154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a145bdac02ebd634ec74a6dfed4babf2d7f0cb7bea4d193838cef90f65e26154->enter($__internal_a145bdac02ebd634ec74a6dfed4babf2d7f0cb7bea4d193838cef90f65e26154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $__internal_aff3044b946e26248586eeccd814726b0b6cd069f661567a33564b7eb5cd2756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff3044b946e26248586eeccd814726b0b6cd069f661567a33564b7eb5cd2756->enter($__internal_aff3044b946e26248586eeccd814726b0b6cd069f661567a33564b7eb5cd2756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a145bdac02ebd634ec74a6dfed4babf2d7f0cb7bea4d193838cef90f65e26154->leave($__internal_a145bdac02ebd634ec74a6dfed4babf2d7f0cb7bea4d193838cef90f65e26154_prof);

        
        $__internal_aff3044b946e26248586eeccd814726b0b6cd069f661567a33564b7eb5cd2756->leave($__internal_aff3044b946e26248586eeccd814726b0b6cd069f661567a33564b7eb5cd2756_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_91e071a0175f7134f67b57b7929cf6b9f4dfd0f3baa1141ed89676cc650bafe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e071a0175f7134f67b57b7929cf6b9f4dfd0f3baa1141ed89676cc650bafe4->enter($__internal_91e071a0175f7134f67b57b7929cf6b9f4dfd0f3baa1141ed89676cc650bafe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_da59744d429ff2f10166f0838efc5dbf774ab19422ca39e1244ac3773c477ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da59744d429ff2f10166f0838efc5dbf774ab19422ca39e1244ac3773c477ef7->enter($__internal_da59744d429ff2f10166f0838efc5dbf774ab19422ca39e1244ac3773c477ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_da59744d429ff2f10166f0838efc5dbf774ab19422ca39e1244ac3773c477ef7->leave($__internal_da59744d429ff2f10166f0838efc5dbf774ab19422ca39e1244ac3773c477ef7_prof);

        
        $__internal_91e071a0175f7134f67b57b7929cf6b9f4dfd0f3baa1141ed89676cc650bafe4->leave($__internal_91e071a0175f7134f67b57b7929cf6b9f4dfd0f3baa1141ed89676cc650bafe4_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:deleted.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/deleted.html.twig");
    }
}
