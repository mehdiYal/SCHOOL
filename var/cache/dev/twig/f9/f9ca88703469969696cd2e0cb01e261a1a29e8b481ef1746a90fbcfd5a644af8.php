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
        $__internal_46def0ccc66c5ad27fa68fe7df5f3f29b20ded0568444dd0c745cec68e5e3f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46def0ccc66c5ad27fa68fe7df5f3f29b20ded0568444dd0c745cec68e5e3f51->enter($__internal_46def0ccc66c5ad27fa68fe7df5f3f29b20ded0568444dd0c745cec68e5e3f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_bf8f4c408d79806d0983ab55fe34ce7fa969428b560a415c8de7daf19c16f610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8f4c408d79806d0983ab55fe34ce7fa969428b560a415c8de7daf19c16f610->enter($__internal_bf8f4c408d79806d0983ab55fe34ce7fa969428b560a415c8de7daf19c16f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46def0ccc66c5ad27fa68fe7df5f3f29b20ded0568444dd0c745cec68e5e3f51->leave($__internal_46def0ccc66c5ad27fa68fe7df5f3f29b20ded0568444dd0c745cec68e5e3f51_prof);

        
        $__internal_bf8f4c408d79806d0983ab55fe34ce7fa969428b560a415c8de7daf19c16f610->leave($__internal_bf8f4c408d79806d0983ab55fe34ce7fa969428b560a415c8de7daf19c16f610_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_d529cdce6cf14f70b0ec5744b3f751a525e792d421a70adb90834c92596fbbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d529cdce6cf14f70b0ec5744b3f751a525e792d421a70adb90834c92596fbbcd->enter($__internal_d529cdce6cf14f70b0ec5744b3f751a525e792d421a70adb90834c92596fbbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_2abb0f7a335650120522aa4b59ebe7fdbd05d693622608fd600aa0581af238c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abb0f7a335650120522aa4b59ebe7fdbd05d693622608fd600aa0581af238c3->enter($__internal_2abb0f7a335650120522aa4b59ebe7fdbd05d693622608fd600aa0581af238c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_2abb0f7a335650120522aa4b59ebe7fdbd05d693622608fd600aa0581af238c3->leave($__internal_2abb0f7a335650120522aa4b59ebe7fdbd05d693622608fd600aa0581af238c3_prof);

        
        $__internal_d529cdce6cf14f70b0ec5744b3f751a525e792d421a70adb90834c92596fbbcd->leave($__internal_d529cdce6cf14f70b0ec5744b3f751a525e792d421a70adb90834c92596fbbcd_prof);

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
