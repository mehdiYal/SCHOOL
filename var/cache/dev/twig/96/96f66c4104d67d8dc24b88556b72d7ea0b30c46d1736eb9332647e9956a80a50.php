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
        $__internal_fa2d0aee801ff4048f89fb801b522770d8f1195b5153aab32498b7ac360d1065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2d0aee801ff4048f89fb801b522770d8f1195b5153aab32498b7ac360d1065->enter($__internal_fa2d0aee801ff4048f89fb801b522770d8f1195b5153aab32498b7ac360d1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $__internal_cfb166a4105d5cb356ecdf1ed8c28adc96f867595eb7b1ff66315ce89e0eb83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb166a4105d5cb356ecdf1ed8c28adc96f867595eb7b1ff66315ce89e0eb83e->enter($__internal_cfb166a4105d5cb356ecdf1ed8c28adc96f867595eb7b1ff66315ce89e0eb83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa2d0aee801ff4048f89fb801b522770d8f1195b5153aab32498b7ac360d1065->leave($__internal_fa2d0aee801ff4048f89fb801b522770d8f1195b5153aab32498b7ac360d1065_prof);

        
        $__internal_cfb166a4105d5cb356ecdf1ed8c28adc96f867595eb7b1ff66315ce89e0eb83e->leave($__internal_cfb166a4105d5cb356ecdf1ed8c28adc96f867595eb7b1ff66315ce89e0eb83e_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_e9d63fb0f8fa850a902736fe4880f2cb83d02afd2d1904397e6b80141d16b40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d63fb0f8fa850a902736fe4880f2cb83d02afd2d1904397e6b80141d16b40e->enter($__internal_e9d63fb0f8fa850a902736fe4880f2cb83d02afd2d1904397e6b80141d16b40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_ce4b973a3ed7cd383cda1e9f129810804889b59a844d1980ea74556eeb3b12fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4b973a3ed7cd383cda1e9f129810804889b59a844d1980ea74556eeb3b12fe->enter($__internal_ce4b973a3ed7cd383cda1e9f129810804889b59a844d1980ea74556eeb3b12fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_ce4b973a3ed7cd383cda1e9f129810804889b59a844d1980ea74556eeb3b12fe->leave($__internal_ce4b973a3ed7cd383cda1e9f129810804889b59a844d1980ea74556eeb3b12fe_prof);

        
        $__internal_e9d63fb0f8fa850a902736fe4880f2cb83d02afd2d1904397e6b80141d16b40e->leave($__internal_e9d63fb0f8fa850a902736fe4880f2cb83d02afd2d1904397e6b80141d16b40e_prof);

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
