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
        $__internal_36b96774979589c640860d6879a8d16655469f804b317bc02b2e6bf062915b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b96774979589c640860d6879a8d16655469f804b317bc02b2e6bf062915b3c->enter($__internal_36b96774979589c640860d6879a8d16655469f804b317bc02b2e6bf062915b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_eb0ef44d70b8f304d4061dc2123480e249217d1fc977cf609f194e8506b0a97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0ef44d70b8f304d4061dc2123480e249217d1fc977cf609f194e8506b0a97d->enter($__internal_eb0ef44d70b8f304d4061dc2123480e249217d1fc977cf609f194e8506b0a97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b96774979589c640860d6879a8d16655469f804b317bc02b2e6bf062915b3c->leave($__internal_36b96774979589c640860d6879a8d16655469f804b317bc02b2e6bf062915b3c_prof);

        
        $__internal_eb0ef44d70b8f304d4061dc2123480e249217d1fc977cf609f194e8506b0a97d->leave($__internal_eb0ef44d70b8f304d4061dc2123480e249217d1fc977cf609f194e8506b0a97d_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_ca96791964e9e25a10f689c724009c744d4d6878f77fe6deef5ddbdbb5d8ad54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca96791964e9e25a10f689c724009c744d4d6878f77fe6deef5ddbdbb5d8ad54->enter($__internal_ca96791964e9e25a10f689c724009c744d4d6878f77fe6deef5ddbdbb5d8ad54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_3cba724781eae4910ca52935344d3cd11fe30c8e7e5c263ad29c6d993b201b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cba724781eae4910ca52935344d3cd11fe30c8e7e5c263ad29c6d993b201b73->enter($__internal_3cba724781eae4910ca52935344d3cd11fe30c8e7e5c263ad29c6d993b201b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_3cba724781eae4910ca52935344d3cd11fe30c8e7e5c263ad29c6d993b201b73->leave($__internal_3cba724781eae4910ca52935344d3cd11fe30c8e7e5c263ad29c6d993b201b73_prof);

        
        $__internal_ca96791964e9e25a10f689c724009c744d4d6878f77fe6deef5ddbdbb5d8ad54->leave($__internal_ca96791964e9e25a10f689c724009c744d4d6878f77fe6deef5ddbdbb5d8ad54_prof);

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
