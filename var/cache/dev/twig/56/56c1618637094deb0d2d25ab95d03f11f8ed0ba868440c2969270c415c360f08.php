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
        $__internal_72df7cea43af337febf075833e50b05ac3ced9fdd55a37e10382c72c0e713ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72df7cea43af337febf075833e50b05ac3ced9fdd55a37e10382c72c0e713ee2->enter($__internal_72df7cea43af337febf075833e50b05ac3ced9fdd55a37e10382c72c0e713ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $__internal_38418d0abc40f6c56d37c0f76130358907c6f3909d755577034f2bdfa2adf2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38418d0abc40f6c56d37c0f76130358907c6f3909d755577034f2bdfa2adf2fe->enter($__internal_38418d0abc40f6c56d37c0f76130358907c6f3909d755577034f2bdfa2adf2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72df7cea43af337febf075833e50b05ac3ced9fdd55a37e10382c72c0e713ee2->leave($__internal_72df7cea43af337febf075833e50b05ac3ced9fdd55a37e10382c72c0e713ee2_prof);

        
        $__internal_38418d0abc40f6c56d37c0f76130358907c6f3909d755577034f2bdfa2adf2fe->leave($__internal_38418d0abc40f6c56d37c0f76130358907c6f3909d755577034f2bdfa2adf2fe_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_8b8274ddf03d1a322665555383278e52f6fd20b0551675036b0c45ec7ea32886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8274ddf03d1a322665555383278e52f6fd20b0551675036b0c45ec7ea32886->enter($__internal_8b8274ddf03d1a322665555383278e52f6fd20b0551675036b0c45ec7ea32886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_23ad4d1a9b38882d1ac12db372c7caf26274b1581711f59bc06ec517e324b316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ad4d1a9b38882d1ac12db372c7caf26274b1581711f59bc06ec517e324b316->enter($__internal_23ad4d1a9b38882d1ac12db372c7caf26274b1581711f59bc06ec517e324b316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_23ad4d1a9b38882d1ac12db372c7caf26274b1581711f59bc06ec517e324b316->leave($__internal_23ad4d1a9b38882d1ac12db372c7caf26274b1581711f59bc06ec517e324b316_prof);

        
        $__internal_8b8274ddf03d1a322665555383278e52f6fd20b0551675036b0c45ec7ea32886->leave($__internal_8b8274ddf03d1a322665555383278e52f6fd20b0551675036b0c45ec7ea32886_prof);

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
