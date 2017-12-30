<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_432ee592ee8043d7b842c11098ae0783609de18951b8885ad04cf5cc4992fffd extends Twig_Template
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
        $__internal_740ec066ce75f769562d671cd9aed37eb65a3f925784fb11bfcdd8b2bbea6225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740ec066ce75f769562d671cd9aed37eb65a3f925784fb11bfcdd8b2bbea6225->enter($__internal_740ec066ce75f769562d671cd9aed37eb65a3f925784fb11bfcdd8b2bbea6225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $__internal_3995abe6a00c71770e5e0cd6ff81f586a32d22d88cdcb2591edf37966696d16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3995abe6a00c71770e5e0cd6ff81f586a32d22d88cdcb2591edf37966696d16c->enter($__internal_3995abe6a00c71770e5e0cd6ff81f586a32d22d88cdcb2591edf37966696d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740ec066ce75f769562d671cd9aed37eb65a3f925784fb11bfcdd8b2bbea6225->leave($__internal_740ec066ce75f769562d671cd9aed37eb65a3f925784fb11bfcdd8b2bbea6225_prof);

        
        $__internal_3995abe6a00c71770e5e0cd6ff81f586a32d22d88cdcb2591edf37966696d16c->leave($__internal_3995abe6a00c71770e5e0cd6ff81f586a32d22d88cdcb2591edf37966696d16c_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_e6f9f5d12109391477db13d098ed2365c3b076d7572568c0dab0dd0e5c3720d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f9f5d12109391477db13d098ed2365c3b076d7572568c0dab0dd0e5c3720d7->enter($__internal_e6f9f5d12109391477db13d098ed2365c3b076d7572568c0dab0dd0e5c3720d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_8a244c5cb29a4999ec8de45295444b6e6b22d1e0f1f77cb36995987d50b12318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a244c5cb29a4999ec8de45295444b6e6b22d1e0f1f77cb36995987d50b12318->enter($__internal_8a244c5cb29a4999ec8de45295444b6e6b22d1e0f1f77cb36995987d50b12318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_8a244c5cb29a4999ec8de45295444b6e6b22d1e0f1f77cb36995987d50b12318->leave($__internal_8a244c5cb29a4999ec8de45295444b6e6b22d1e0f1f77cb36995987d50b12318_prof);

        
        $__internal_e6f9f5d12109391477db13d098ed2365c3b076d7572568c0dab0dd0e5c3720d7->leave($__internal_e6f9f5d12109391477db13d098ed2365c3b076d7572568c0dab0dd0e5c3720d7_prof);

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
", "FOSMessageBundle:Message:search.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/search.html.twig");
    }
}
