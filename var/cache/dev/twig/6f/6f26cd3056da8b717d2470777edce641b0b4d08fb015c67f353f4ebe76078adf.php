<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_6eaf4f611685dd5e3410ea14f7d132be40a76aa9ee39cb3f8f4d75488f529c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
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
        $__internal_8b7e26c589cae4e123fe7cf2f7a81044097ef69014c9b62c3904c267b029e730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7e26c589cae4e123fe7cf2f7a81044097ef69014c9b62c3904c267b029e730->enter($__internal_8b7e26c589cae4e123fe7cf2f7a81044097ef69014c9b62c3904c267b029e730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_9a7aef02d4b70e29289b9d9b837fd53f34e81e07c8682433336b702150519236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7aef02d4b70e29289b9d9b837fd53f34e81e07c8682433336b702150519236->enter($__internal_9a7aef02d4b70e29289b9d9b837fd53f34e81e07c8682433336b702150519236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7e26c589cae4e123fe7cf2f7a81044097ef69014c9b62c3904c267b029e730->leave($__internal_8b7e26c589cae4e123fe7cf2f7a81044097ef69014c9b62c3904c267b029e730_prof);

        
        $__internal_9a7aef02d4b70e29289b9d9b837fd53f34e81e07c8682433336b702150519236->leave($__internal_9a7aef02d4b70e29289b9d9b837fd53f34e81e07c8682433336b702150519236_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_63c2153a7c1b5ee5d8e9bc3f915454f15cd6bf4bae7b99008a7a008127eb65bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c2153a7c1b5ee5d8e9bc3f915454f15cd6bf4bae7b99008a7a008127eb65bf->enter($__internal_63c2153a7c1b5ee5d8e9bc3f915454f15cd6bf4bae7b99008a7a008127eb65bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_400d6015b8610488382530d52856569a9d99e537edd0b5a7aaae707a8a70602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400d6015b8610488382530d52856569a9d99e537edd0b5a7aaae707a8a70602a->enter($__internal_400d6015b8610488382530d52856569a9d99e537edd0b5a7aaae707a8a70602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_400d6015b8610488382530d52856569a9d99e537edd0b5a7aaae707a8a70602a->leave($__internal_400d6015b8610488382530d52856569a9d99e537edd0b5a7aaae707a8a70602a_prof);

        
        $__internal_63c2153a7c1b5ee5d8e9bc3f915454f15cd6bf4bae7b99008a7a008127eb65bf->leave($__internal_63c2153a7c1b5ee5d8e9bc3f915454f15cd6bf4bae7b99008a7a008127eb65bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
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

<h2>{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:sent.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/sent.html.twig");
    }
}
