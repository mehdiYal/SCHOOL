<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_66f5eda94eb3a271fe2fbadcade0a4715a2d68716f0ea5f498f41abcac944039 extends Twig_Template
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
        $__internal_ddcfa863a301171efaf0f32f30a145572b78b9d2cdaaef03ee4028fca0573b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcfa863a301171efaf0f32f30a145572b78b9d2cdaaef03ee4028fca0573b68->enter($__internal_ddcfa863a301171efaf0f32f30a145572b78b9d2cdaaef03ee4028fca0573b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_02bf9e1e6135c2ad8b6dfa552c231818b09186c312e3b7bee1ec8eff4eb161cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bf9e1e6135c2ad8b6dfa552c231818b09186c312e3b7bee1ec8eff4eb161cb->enter($__internal_02bf9e1e6135c2ad8b6dfa552c231818b09186c312e3b7bee1ec8eff4eb161cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddcfa863a301171efaf0f32f30a145572b78b9d2cdaaef03ee4028fca0573b68->leave($__internal_ddcfa863a301171efaf0f32f30a145572b78b9d2cdaaef03ee4028fca0573b68_prof);

        
        $__internal_02bf9e1e6135c2ad8b6dfa552c231818b09186c312e3b7bee1ec8eff4eb161cb->leave($__internal_02bf9e1e6135c2ad8b6dfa552c231818b09186c312e3b7bee1ec8eff4eb161cb_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_5c5ca2e28595d6f4d385bc9a7e4234265cda5c561cc09a6d50f72a384746e5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5ca2e28595d6f4d385bc9a7e4234265cda5c561cc09a6d50f72a384746e5f2->enter($__internal_5c5ca2e28595d6f4d385bc9a7e4234265cda5c561cc09a6d50f72a384746e5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_f1c336dec164b6c780138190b82466203cf898eae6b8592b0d81b8be4ad99084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c336dec164b6c780138190b82466203cf898eae6b8592b0d81b8be4ad99084->enter($__internal_f1c336dec164b6c780138190b82466203cf898eae6b8592b0d81b8be4ad99084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_f1c336dec164b6c780138190b82466203cf898eae6b8592b0d81b8be4ad99084->leave($__internal_f1c336dec164b6c780138190b82466203cf898eae6b8592b0d81b8be4ad99084_prof);

        
        $__internal_5c5ca2e28595d6f4d385bc9a7e4234265cda5c561cc09a6d50f72a384746e5f2->leave($__internal_5c5ca2e28595d6f4d385bc9a7e4234265cda5c561cc09a6d50f72a384746e5f2_prof);

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
", "FOSMessageBundle:Message:inbox.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/inbox.html.twig");
    }
}
