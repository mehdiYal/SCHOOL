<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_16ab616c072e9661b80b019e24d224b5792bf8eeec471c6b38b6f51a3a1ea899 extends Twig_Template
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
        $__internal_dbb11a59c896c2f0ffd159244969f87a1c65fe30860ac9b8ab8e29a8267ed8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb11a59c896c2f0ffd159244969f87a1c65fe30860ac9b8ab8e29a8267ed8e9->enter($__internal_dbb11a59c896c2f0ffd159244969f87a1c65fe30860ac9b8ab8e29a8267ed8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_e1877806c1f8518342eca1cd5abce081087ca167b1eb0a6648678077be6ef013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1877806c1f8518342eca1cd5abce081087ca167b1eb0a6648678077be6ef013->enter($__internal_e1877806c1f8518342eca1cd5abce081087ca167b1eb0a6648678077be6ef013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb11a59c896c2f0ffd159244969f87a1c65fe30860ac9b8ab8e29a8267ed8e9->leave($__internal_dbb11a59c896c2f0ffd159244969f87a1c65fe30860ac9b8ab8e29a8267ed8e9_prof);

        
        $__internal_e1877806c1f8518342eca1cd5abce081087ca167b1eb0a6648678077be6ef013->leave($__internal_e1877806c1f8518342eca1cd5abce081087ca167b1eb0a6648678077be6ef013_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_fdcec8a94047afeff280abc88019a4a2e44f55c527962ea62fb413ac1bdc3c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcec8a94047afeff280abc88019a4a2e44f55c527962ea62fb413ac1bdc3c20->enter($__internal_fdcec8a94047afeff280abc88019a4a2e44f55c527962ea62fb413ac1bdc3c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_d5e46dae2c2cab7d09f97dfc71e8a929c17e5464f0d29da92cade9bf763bb67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e46dae2c2cab7d09f97dfc71e8a929c17e5464f0d29da92cade9bf763bb67c->enter($__internal_d5e46dae2c2cab7d09f97dfc71e8a929c17e5464f0d29da92cade9bf763bb67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_d5e46dae2c2cab7d09f97dfc71e8a929c17e5464f0d29da92cade9bf763bb67c->leave($__internal_d5e46dae2c2cab7d09f97dfc71e8a929c17e5464f0d29da92cade9bf763bb67c_prof);

        
        $__internal_fdcec8a94047afeff280abc88019a4a2e44f55c527962ea62fb413ac1bdc3c20->leave($__internal_fdcec8a94047afeff280abc88019a4a2e44f55c527962ea62fb413ac1bdc3c20_prof);

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
", "FOSMessageBundle:Message:sent.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/sent.html.twig");
    }
}
