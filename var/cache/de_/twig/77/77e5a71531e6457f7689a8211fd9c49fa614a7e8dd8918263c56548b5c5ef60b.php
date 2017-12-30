<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_d3d4499c7a26077c45e6df8923e20e3afb2e32589028070ae3c297a4236b1d1c extends Twig_Template
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
        $__internal_a681cbe7061596131ca1e88a8bdf09e2e629b9e9e07d6ff72b95e6d6fb6d5dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a681cbe7061596131ca1e88a8bdf09e2e629b9e9e07d6ff72b95e6d6fb6d5dcf->enter($__internal_a681cbe7061596131ca1e88a8bdf09e2e629b9e9e07d6ff72b95e6d6fb6d5dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $__internal_b3e108237cca88ba33bc4c228473f964898a9e0433720d35b84fd7e4f9f53545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e108237cca88ba33bc4c228473f964898a9e0433720d35b84fd7e4f9f53545->enter($__internal_b3e108237cca88ba33bc4c228473f964898a9e0433720d35b84fd7e4f9f53545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a681cbe7061596131ca1e88a8bdf09e2e629b9e9e07d6ff72b95e6d6fb6d5dcf->leave($__internal_a681cbe7061596131ca1e88a8bdf09e2e629b9e9e07d6ff72b95e6d6fb6d5dcf_prof);

        
        $__internal_b3e108237cca88ba33bc4c228473f964898a9e0433720d35b84fd7e4f9f53545->leave($__internal_b3e108237cca88ba33bc4c228473f964898a9e0433720d35b84fd7e4f9f53545_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_abd3bf9389a47615355794f3c049b9865e0276068d1775630e3eaf2f891aaa10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd3bf9389a47615355794f3c049b9865e0276068d1775630e3eaf2f891aaa10->enter($__internal_abd3bf9389a47615355794f3c049b9865e0276068d1775630e3eaf2f891aaa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_56e3aec6bcb10a6026038f042974d409b15fa31dc6bdc50f9dd73b80670adaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e3aec6bcb10a6026038f042974d409b15fa31dc6bdc50f9dd73b80670adaa2->enter($__internal_56e3aec6bcb10a6026038f042974d409b15fa31dc6bdc50f9dd73b80670adaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_56e3aec6bcb10a6026038f042974d409b15fa31dc6bdc50f9dd73b80670adaa2->leave($__internal_56e3aec6bcb10a6026038f042974d409b15fa31dc6bdc50f9dd73b80670adaa2_prof);

        
        $__internal_abd3bf9389a47615355794f3c049b9865e0276068d1775630e3eaf2f891aaa10->leave($__internal_abd3bf9389a47615355794f3c049b9865e0276068d1775630e3eaf2f891aaa10_prof);

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
", "FOSMessageBundle:Message:newThread.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/newThread.html.twig");
    }
}
